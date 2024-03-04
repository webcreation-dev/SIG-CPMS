
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
                    <h1>
                        @if (isset($classroom))
                            <strong>{{$classroom->name}}</strong>
                        @else
                            Tableau de bord
                        @endif

                    </h1></a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Liste des UE</a></li>
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
                        <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal" data-bs-target="#DataModal"><i class="ti-plus mr-5"></i>Ajouter UE</button>
                    </div>
                </div>

              <div class="card">
                <div class="card-body">
                  <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        @if (!isset($classroom))
                            <th>Classe</th>
                        @endif
                        <th>Nom</th>
                        <th>Crédit</th>
                        <th>Type</th>
                        <th>Notations / ECUE</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($teaching_units as $key => $teaching_unit)
                            <tr>
                                <td>
                                    <img width="40" height="40" src="{{asset('assets/images/ue.png')}}" alt="">
                                </td>
                                @if (!isset($classroom))
                                <td>
                                    @if ($teaching_unit->classroom_id != null)
                                        {{$teaching_unit->classroom->name}}
                                        @else
                                        <strong>AUCUNE CLASSE</strong>
                                    @endif
                                </td>
                                @endif


                                <td>{{$teaching_unit->name}}</td>
                                <td>{{$teaching_unit->credit}}</td>
                                <td>
                                    @if($teaching_unit->status == 'singular')
                                        <span class="badge badge-success">UE</span>
                                    @else
                                        <span class="badge badge-warning">ECUES</span>
                                    @endif

                                </td>

                                <td>

                                    @if($teaching_unit->status == 'multiple')
                                        <a href="{{route('element_teaching_units.index', ['teaching_unit_id' => $teaching_unit->id ])}}" title="Voir les ECUE">
                                            <span class="badge badge-info"><i class="fa fa-qrcode"></i> Voir les ECUE </span>
                                        </a>
                                    @else
                                        @if ($teaching_unit->classroom_id != null)
                                            <a  href="{{route('notes.create',['classroom_id' => $teaching_unit->classroom_id,'ue_id' => $teaching_unit->id,'type' => 'ue'])}}"
                                                    title="Ajouter les notes" >
                                                <span class="badge badge-warning"><i class="fa fa-pencil"></i> Noter l'UE  </span>
                                            </a>
                                        @else
                                            <strong>INDISPONIBLE</strong>
                                        @endif
                                    @endif


                                </td>

                                <td>


                                    <a href="#" title="Voir l'UE" data-bs-toggle="modal" data-bs-target="#ViewModal"
                                        view-teaching-units-name="{{$teaching_unit->name}}"
                                        view-teaching-units-credit="{{$teaching_unit->credit}}">

                                        <span class="badge badge-info"></i> <i class="ti-eye"></i> </span>
                                    </a>
                                    <a href="#" title="Modifier l'UE" data-bs-toggle="modal" data-bs-target="#EditModal"
                                        data-teaching-units-name="{{$teaching_unit->name}}"
                                        data-teaching-units-credit="{{$teaching_unit->credit}}"
                                        data-teaching-units-id="{{$teaching_unit->id}}">
                                        <span class="badge badge-warning"></i> <i class="ti-pencil"></i> </span>
                                    </a>
                                    <a href="{{ route('teaching_units.destroy', $teaching_unit->id) }}"
                                    title="Supprimer l'UE"
                                    class="delete-link"
                                    data-id="{{ $teaching_unit->id }}">
                                        <span class="badge badge-danger"><i class="ti-trash"></i></span>
                                    </a>

                                    <!-- Ajoutez le formulaire de suppression caché pour chaque élément dans la boucle -->
                                    <form id="delete-form-{{ $teaching_unit->id }}"
                                        action="{{ route('teaching_units.destroy', $teaching_unit->id) }}"
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
              <h5 class="modal-title">AJOUTER UE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{route('teaching_units.store')}}" method="POST" >
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
                        <label class="form-label">Statut</label>
                        <select class="form-control basic-select" name="status" style="width: 100%;">
                                <option value="singular">Unique</option>
                                <option value="multiple">Multiple</option>
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
              <h5 class="modal-title">MODIFIER UE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{ route('teaching_units.update', ['teaching_unit' => '__TEACHING_UNIT_ID__']) }}" method="POST" id="edit-teaching-units-form">
                @method('PUT')
                @csrf

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
                <h5 class="modal-title">INFORMATIONS UE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
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
                    var teachingUnitName = button.getAttribute('data-teaching-units-name');
                    var teachingUnitCredit = button.getAttribute('data-teaching-units-credit');
                    var teachingUnitId = button.getAttribute('data-teaching-units-id');

                    // Mettez à jour l'attribut action du formulaire avec l'identifiant du classe
                    var editForm = document.getElementById('edit-teaching-units-form');
                    var actionUrl = "{{ route('teaching_units.update', ['teaching_unit' => '__TEACHING_UNIT_ID__']) }}";
                    actionUrl = actionUrl.replace('__TEACHING_UNIT_ID__', teachingUnitId);
                    editForm.setAttribute('action', actionUrl);

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="edit_name"]').value = teachingUnitName;
                    document.querySelector('input[name="edit_credit"]').value = teachingUnitCredit;

                });
            });

            var deleteLinks = document.querySelectorAll('.delete-link');

            deleteLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    var teaching_unitId = link.getAttribute('data-id');

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
                            document.getElementById('delete-form-' + teachingUnitId).submit();
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
                    var viewTeachingUnitName = button.getAttribute('view-teaching-units-name');
                    var viewTeachingUnitCredit = button.getAttribute('view-teaching-units-credit');

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="view_name"]').value = viewTeachingUnitName;
                    document.querySelector('input[name="view_credit"]').value = viewTeachingUnitCredit;
                });
            });

        });
    </script>
</body>
</html>
