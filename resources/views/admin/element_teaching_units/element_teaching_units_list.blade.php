
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
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <h1>
                            @if (isset($teaching_unit))
                                    <strong>{{$teaching_unit->name}}</strong>
                            @else
                                Tableau de bord
                            @endif

                        </h1>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Liste des ECUE</a></li>
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
                        <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal" data-bs-target="#DataModal"><i class="ti-plus mr-5"></i>Ajouter un ECUE</button>
                    </div>
                </div>

              <div class="card">
                <div class="card-body">
                  <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        @if (!isset($teaching_unit_id))
                            <th>UE</th>
                        @endif
                        <th>Nom</th>
                        <th>Credit</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($element_teaching_units as $key => $element_teaching_unit)
                            <tr>
                                <td>
                                    <img width="30" height="30" src="{{asset('assets/images/pages/product/box' . (($key % 3) + 1) . '.png')}}" alt="">
                                </td>
                                @if (!isset($teaching_unit_id))
                                    <th>{{$element_teaching_unit->teachingUnit->name}}</th>
                                @endif

                                <td>{{$element_teaching_unit->name}}</td>
                                <td>{{$element_teaching_unit->credit}}</td>

                                <td>
                                    <a href="#" title="Voir l'ECUE" data-bs-toggle="modal" data-bs-target="#ViewModal"
                                        view-element-teaching-units-name="{{$element_teaching_unit->name}}"
                                        view-element-teaching-units-credit="{{$element_teaching_unit->credit}}">

                                        <span class="badge badge-info"></i> <i class="ti-eye"></i> </span>
                                    </a>
                                    <a href="#" title="Modifier ECUE" data-bs-toggle="modal" data-bs-target="#EditModal"
                                        data-element-teaching-units-name="{{$element_teaching_unit->name}}"
                                        data-element-teaching-units-credit="{{$element_teaching_unit->credit}}"
                                        data-element-teaching-units-id="{{$element_teaching_unit->id}}"
                                        @if(isset($teaching_unit_id)) data-teaching_unit-id="{{$teaching_unit_id}}" @else data-teaching_unit-id="{{$element_teaching_unit->teachingUnit->id}}" @endif
                                        >
                                        <span class="badge badge-warning"></i> <i class="ti-pencil"></i> </span>
                                    </a>
                                    <a href="{{ route('element_teaching_units.destroy', $element_teaching_unit->id) }}"
                                    title="Supprimer un classe"
                                    class="delete-link"
                                    data-id="{{ $element_teaching_unit->id }}">
                                        <span class="badge badge-danger"><i class="ti-trash"></i></span>
                                    </a>

                                    <!-- Ajoutez le formulaire de suppression caché pour chaque élément dans la boucle -->
                                    <form id="delete-form-{{ $element_teaching_unit->id }}"
                                        action="{{ route('element_teaching_units.destroy', $element_teaching_unit->id) }}"
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
              <h5 class="modal-title">AJOUTER UN NOUVEL ECUE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{route('element_teaching_units.store')}}" method="POST" >
                @csrf

                <div class="form-group">
                    <label class="form-label">Nom UE</label>
                    <input name="name" required class="form-control" type="text" placeholder="Nom UE">
                </div>
                <div class="form-group">
                    <label class="form-label">Credit UE</label>
                    <input name="credit" required class="form-control" type="number" placeholder="Credit UE">
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label">Classe</label>
                        <select class="form-control basic-select" name="teaching_unit_id" style="width: 100%;">
                            @foreach (App\Models\TeachingUnit::list() as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
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
              <h5 class="modal-title">MODIFIER UN ECUE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{ route('element_teaching_units.update', ['element_teaching_unit' => '__ELEMENT_TEACHING_UNIT_ID__']) }}" method="POST" id="edit-element-teaching-units-form">
                @method('PUT')
                @csrf

                <input type="hidden" name="edit_teaching_unit_id">

                <div class="form-group">
                    <label class="form-label">Nom UE</label>
                    <input name="edit_name" required class="form-control" type="text" placeholder="Nom UE">
                </div>
                <div class="form-group">
                    <label class="form-label">Crédit</label>
                    <input name="edit_credit" required class="form-control" type="number" placeholder="Crédit UE">
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
                <h5 class="modal-title">IFORMATIONS DE L'ECUE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label class="form-label">Nom</label>
                        <input disabled name="view_name" class="form-control" type="text" placeholder="Nom UE">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Credit</label>
                        <input disabled name="view_credit" class="form-control" type="number" placeholder="Credit UE">
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
                    var elementTeachingUnitName = button.getAttribute('data-element-teaching-units-name');
                    var elementTeachingUnitCredit = button.getAttribute('data-element-teaching-units-credit');
                    var elementTeachingUnitId = button.getAttribute('data-element-teaching-units-id');
                    var teachingUnitId = button.getAttribute('data-teaching_unit-id');

                    // Mettez à jour l'attribut action du formulaire avec l'identifiant du classe
                    var editForm = document.getElementById('edit-element-teaching-units-form');
                    var actionUrl = "{{ route('element_teaching_units.update', ['element_teaching_unit' => '__ELEMENT_TEACHING_UNIT_ID__']) }}";
                    actionUrl = actionUrl.replace('__ELEMENT_TEACHING_UNIT_ID__', elementTeachingUnitId);
                    editForm.setAttribute('action', actionUrl);

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="edit_name"]').value = elementTeachingUnitName;
                    document.querySelector('input[name="edit_credit"]').value = elementTeachingUnitCredit;
                    document.querySelector('input[name="edit_teaching_unit_id"]').value = teachingUnitId;

                });
            });

            var deleteLinks = document.querySelectorAll('.delete-link');

            deleteLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    var elementTeachingUnitId = link.getAttribute('data-id');

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
                            document.getElementById('delete-form-' + elementTeachingUnitId).submit();
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
                    var viewTeachingUnitName = button.getAttribute('view-element-teaching-units-name');
                    var viewTeachingUnitCredit = button.getAttribute('view-element-teaching-units-credit');

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="view_name"]').value = viewTeachingUnitName;
                    document.querySelector('input[name="view_credit"]').value = viewTeachingUnitCredit;
                });
            });

        });
    </script>
</body>
</html>
