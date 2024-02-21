
<!DOCTYPE html>
<html lang="en">
    @include("layouts.admin.head")
  <body>
      <!-- Loader Start-->
        <div class="codex-loader">
          <div class="linespinner"></div>
        </div>
      <!-- Loader End-->
        @include('layouts.admin.header')

        @include('layouts.admin.sidebar')

    <div class="themebody-wrap">
      <!-- breadcrumb start-->
        <div class="codex-breadcrumb">
          <div class="breadcrumb-contain">
            <div class="left-breadcrumb">
              <ul class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">
                    <h1>Tableau de bord</h1></a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Liste des colis</a></li>
              </ul>
            </div>
            <div class="right-breadcrumb">
              <ul>
                <li>
                  <div class="bread-wrap"><i class="fa fa-clock-o"></i></div><span class="liveTime"></span>
                </li>
                <li>
                  <div class="bread-wrap"><i class="fa fa-calendar"></i></div><span class="getDate"> </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <!-- breadcrumb end-->
      <!-- theme body start-->
      <div class="theme-body codex-chat">
        <div class="custom-container">
          <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal" data-bs-target="#DataModal"><i class="ti-plus mr-5"></i>Ajouter un colis</button>
                    </div>
                </div>

              <div class="card">
                <div class="card-body">
                  <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nom du colis</th>
                        <th>Poids</th>
                        <th>Prix</th>
                        <th>Date de réception</th>
                        <th>Niveau</th>
                        <th>Statut</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $key => $package)
                            <tr>
                                <td>
                                    <img width="30" height="30" src="{{asset('assets/images/pages/product/box' . (($key % 3) + 1) . '.png')}}" alt="">
                                </td>
                                <td>{{$package->name_package}}</td>
                                <td>{{$package->weight}} KG</td>
                                <td>{{$package->price}} CFA</td>
                                <td>{{ Carbon\Carbon::parse($package->date)->format('d F Y') }}</td>
                                <td>

                                    <span class="badge badge-{{ App\Models\Package::LEVEL_BADGE[$package->level->id] }}">{{$package->level->name}} </span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger" type="button">{{$package->status}}</button>
                                </td>
                                <td>
                                    {{-- <button class="btn btn-primary" >confirm dialog</button> --}}

                                    <a href="#" title="Modifier un colis" data-bs-toggle="modal" data-bs-target="#ViewModal"
                                        view-package-name="{{$package->name_package}}"
                                        view-user-name="{{ App\Models\User::getUserName($package->user_id)}}"
                                        view-package-weight="{{$package->weight}}"
                                        view-package-price="{{$package->price}}"
                                        view-package-date="{{$package->date}}"
                                        view-user-id="{{$package->user_id}}"
                                        view-package-id="{{$package->id}}"
                                        view-package-description="{{$package->description}}">
                                        <span class="badge badge-info"></i> <i class="ti-eye"></i> </span>
                                    </a>
                                    <a href="#" title="Modifier un colis" data-bs-toggle="modal" data-bs-target="#EditModal"
                                        data-package-name="{{$package->name_package}}"
                                        edit-user-name="{{ App\Models\User::getUserName($package->user_id)}}"
                                        data-package-weight="{{$package->weight}}"
                                        data-package-price="{{$package->price}}"
                                        data-package-date="{{$package->date}}"
                                        data-user-id="{{$package->user_id}}"
                                        data-package-id="{{$package->id}}"
                                        data-package-description="{{$package->description}}">
                                        <span class="badge badge-warning"></i> <i class="ti-pencil"></i> </span>
                                    </a>
                                    <a href="{{ route('package.destroy', $package->id) }}"
                                    title="Supprimer un colis"
                                    class="delete-link"
                                    data-id="{{ $package->id }}">
                                        <span class="badge badge-danger"><i class="ti-trash"></i></span>
                                    </a>

                                    <!-- Ajoutez le formulaire de suppression caché pour chaque élément dans la boucle -->
                                    <form id="delete-form-{{ $package->id }}"
                                        action="{{ route('package.destroy', $package->id) }}"
                                        method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Data Modal Start-->
      <div class="modal fade" id="DataModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">AJOUTER UN NOUVEAU COLIS</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{route('package.store')}}" method="POST" >
                @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Nom</label>
                      <input name="name_package" required class="form-control" type="text" placeholder="Nom du colis">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">Poids</label>
                        <input name="weight" required class="form-control" type="number" placeholder="Poids du colis">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Prix</label>
                    <input name="price" required class="form-control" type="number" placeholder="Prix du colis">
                </div>
                <div class="form-group">
                    <label class="form-label">Utilisateur</label>
                        <select class="form-control basic-select" required name="user_id" style="width: 100%;" >
                            <option>Choisir un utilsateur...</option>
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->lastname}} {{$user->name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Date de réception</label>
                    <input name="date" class="form-control"  type="date" required value="2023-03-13">
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" required rows="4" cols="5" placeholder="Entrez la description"></textarea>
                </div>

                <button type="submit" class="btn btn-success btn-md">ENREGISTRER</button>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Data Modal end-->

      <!-- Edit Modal Start-->
      <div class="modal fade" id="EditModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">MODIFIER UN COLIS</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{ route('package.update', ['package' => '__PACKAGE_ID__']) }}" method="POST" id="edit-package-form">
                @method('PUT')
                @csrf

                <input type="hidden" name="edit_user_id">
                <input type="hidden" name="edit_package_id">
                <input type="hidden" value="1" name="by_user">

                <div class="form-group">
                    <label class="form-label">Nom de l'expéditeur</label>
                    <input disabled name="edit_user_name" required class="form-control" type="text">
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Nom</label>
                      <input name="edit_name_package" required class="form-control" type="text" placeholder="Nom du colis">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">Poids</label>
                        <input name="edit_weight" required class="form-control" type="number" placeholder="Poids du colis">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Prix</label>
                    <input name="edit_price" required class="form-control" type="number" placeholder="Prix du colis">
                </div>
                <div class="form-group">
                    <label class="form-label">Date de réception</label>
                    <input name="edit_date" required class="form-control" type="date" required value="2023-03-13">
                </div>

                <div class="form-group">
                    <label class="form-label">Niveau de l'expédition</label>
                    <div class="card-body">
                        <div class="form-check custom-chek form-check-inline check-warning">
                        <input class="form-check-input" type="radio" value="1" id="inlineDefaultradio" name="level_id">
                        <span class="badge badge-warning">Action requise </span>
                        </div>
                        <div class="form-check custom-chek form-check-inline check-secondary">
                            <input class="form-check-input" type="radio" value="2" id="inlinesecondaryradio" name="level_id">
                            <span class="badge badge-secondary">En cours </span>
                        </div>
                        <div class="form-check custom-chek form-check-inline check-primary">
                            <input class="form-check-input" type="radio" value="3" id="inlinesuccessradio" name="level_id">
                            <span class="badge badge-primary">Prêt à envoyer</span>
                        </div>
                        <div class="form-check custom-chek form-check-inline check-info mt-10">
                            <input class="form-check-input" type="radio" value="4" id="inlineDefaultradio" name="level_id">
                            <span class="badge badge-info">En transit</span>
                        </div>

                        <div class="form-check custom-chek form-check-inline check-sucess mt-10" style="margin-left: 30px;">

                            <input class="form-check-input" type="radio" value="5" id="inlineinforadio" name="level_id">
                            <span class="badge badge-success">Livré</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea name="edit_description" required class="form-control" rows="4" cols="5" placeholder="Décrivez le contenu"></textarea>
                </div>

                <button type="submit" class="btn btn-success btn-md">MODIFIER</button>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Edit Modal end-->


        <div class="modal fade" id="ViewModal">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">IFORMATIONS DU COLIS</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Nom de l'expéditeur</label>
                        <input disabled name="view_user_name" class="form-control" type="text" placeholder="Nom du colis">
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Nom</label>
                            <input disabled name="view_name_package" class="form-control" type="text" placeholder="Nom du colis">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Poids</label>
                            <input disabled name="view_weight" class="form-control" type="number" placeholder="Poids du colis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Prix</label>
                        <input disabled name="view_price" class="form-control" type="number" placeholder="Prix du colis">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date de réception</label>
                        <input disabled name="view_date" class="form-control" type="date" required value="2023-03-13">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea disabled name="view_description" class="form-control" rows="4" cols="5" placeholder="Entrez la description"></textarea>
                    </div>

                </div>
            </div>
            </div>
        </div>

      <!-- theme body end-->
    </div>
    @include("layouts.admin.footer")


    <script>
        // Attendez que le document soit chargé
        document.addEventListener('DOMContentLoaded', function() {
            // Sélectionnez tous les boutons d'édition
            var editButtons = document.querySelectorAll('[data-bs-target="#EditModal"]');

            // Bouclez sur chaque bouton d'édition
            editButtons.forEach(function(button) {
                // Ajoutez un écouteur d'événements pour le clic
                button.addEventListener('click', function() {
                    // Récupérez les données du produit associées à ce bouton
                    var packageName = button.getAttribute('data-package-name');
                    var packageWeight = button.getAttribute('data-package-weight');
                    var packagePrice = button.getAttribute('data-package-price');
                    var packageDate = button.getAttribute('data-package-date');
                    var packageDescription = button.getAttribute('data-package-description');
                    var packageId = button.getAttribute('data-package-id');
                    var userId = button.getAttribute('data-user-id');
                    var editUserName = button.getAttribute('edit-user-name');

                    // Mettez à jour l'attribut action du formulaire avec l'identifiant du colis
                    var editForm = document.getElementById('edit-package-form');
                    var actionUrl = "{{ route('package.update', ['package' => '__PACKAGE_ID__']) }}";
                    actionUrl = actionUrl.replace('__PACKAGE_ID__', packageId);
                    editForm.setAttribute('action', actionUrl);

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="edit_name_package"]').value = packageName;
                    document.querySelector('input[name="edit_user_name"]').value = editUserName;
                    document.querySelector('input[name="edit_weight"]').value = packageWeight;
                    document.querySelector('input[name="edit_price"]').value = packagePrice;
                    document.querySelector('input[name="edit_date"]').value = packageDate;
                    document.querySelector('input[name="edit_package_id"]').value = packageId;
                    document.querySelector('input[name="edit_user_id"]').value = userId;
                    document.querySelector('textarea[name="edit_description"]').value = packageDescription;
                });
            });

            var deleteLinks = document.querySelectorAll('.delete-link');

            deleteLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    var packageId = link.getAttribute('data-id');

                    Swal.fire({
                        title: 'Êtes-vous sûr?',
                        text: 'Vous ne pourrez pas revenir en arrière!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Oui, supprimer!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Soumettez le formulaire de suppression
                            document.getElementById('delete-form-' + packageId).submit();
                        }
                    });
                });
            });


            var viewButtons = document.querySelectorAll('[data-bs-target="#ViewModal"]');

            // Bouclez sur chaque bouton de visualisation
            viewButtons.forEach(function(button) {
                // Ajoutez un écouteur d'événements pour le clic
                button.addEventListener('click', function() {
                    // Récupérez les données du produit associées à ce bouton
                    var viewPackageName = button.getAttribute('view-package-name');
                    var viewUserName = button.getAttribute('view-user-name');
                    var viewPackageWeight = button.getAttribute('view-package-weight');
                    var viewPackagePrice = button.getAttribute('view-package-price');
                    var viewPackageDate = button.getAttribute('view-package-date');
                    var viewPackageDescription = button.getAttribute('view-package-description');
                    var viewPackageId = button.getAttribute('view-package-id');
                    var viewUserId = button.getAttribute('view-user-id');

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="view_name_package"]').value = viewPackageName;
                    document.querySelector('input[name="view_user_name"]').value = viewUserName;
                    document.querySelector('input[name="view_weight"]').value = viewPackageWeight;
                    document.querySelector('input[name="view_price"]').value = viewPackagePrice;
                    document.querySelector('input[name="view_date"]').value = viewPackageDate;
                    document.querySelector('input[name="view_package_id"]').value = viewPackageId;
                    document.querySelector('input[name="view_user_id"]').value = viewUserId;
                    document.querySelector('textarea[name="view_description"]').value = viewPackageDescription;
                });
            });

        });
    </script>
</body>
</html>
