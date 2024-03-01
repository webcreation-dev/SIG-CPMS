
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
                <li class="breadcrumb-item"><a href="javascript:void(0);">Liste des classes</a></li>
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
                        <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal" data-bs-target="#DataModal"><i class="ti-plus mr-5"></i>Ajouter une classe</button>
                    </div>
                </div>

              <div class="card">
                <div class="card-body">
                  <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nom de la classe</th>
                        <th>Total des UE</th>
                        <th>Total des etudiants</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($classrooms as $key => $classroom)
                            <tr>
                                <td>
                                    <img width="30" height="30" src="{{asset('assets/images/pages/product/box' . (($key % 3) + 1) . '.png')}}" alt="">
                                </td>
                                <td>{{$classroom->name}}</td>
                                <td>{{$classroom->total_students}}</td>
                                <td>{{$classroom->total_teaching_units}}</td>

                                <td>
                                    <a href="{{route('students.index', ['classroom_id' => $classroom->id ])}}" title="Voir les etudiants">
                                        <span class="badge badge-info"><i class="fa fa-user"></i> </span>
                                    </a>

                                    <a href="#" title="Modifier une classe" data-bs-toggle="modal" data-bs-target="#ViewModal"
                                        view-classroom-name="{{$classroom->name}}"
                                        view-classroom-total-students="{{$classroom->total_students}}"
                                        view-classroom-total-teaching-units="{{$classroom->total_teaching_units}}">

                                        <span class="badge badge-info"></i> <i class="ti-eye"></i> </span>
                                    </a>
                                    <a href="#" title="Modifier un classe" data-bs-toggle="modal" data-bs-target="#EditModal"
                                        data-classroom-name="{{$classroom->name}}"
                                        data-classroom-total-students="{{$classroom->total_students}}"
                                        data-classroom-total-teaching-units="{{$classroom->total_teaching_units}}"
                                        data-classroom-id="{{$classroom->id}}">
                                        <span class="badge badge-warning"></i> <i class="ti-pencil"></i> </span>
                                    </a>
                                    <a href="{{ route('classrooms.destroy', $classroom->id) }}"
                                    title="Supprimer un classe"
                                    class="delete-link"
                                    data-id="{{ $classroom->id }}">
                                        <span class="badge badge-danger"><i class="ti-trash"></i></span>
                                    </a>

                                    <!-- Ajoutez le formulaire de suppression caché pour chaque élément dans la boucle -->
                                    <form id="delete-form-{{ $classroom->id }}"
                                        action="{{ route('classrooms.destroy', $classroom->id) }}"
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
              <h5 class="modal-title">AJOUTER UNE NOUVELLE CLASSE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{route('classrooms.store')}}" method="POST" >
                @csrf

                <div class="form-group">
                    <label class="form-label">Nom de la classe</label>
                    <input name="name" required class="form-control" type="text" placeholder="Nom de la classe">
                </div>
                <div class="form-group">
                    <label class="form-label">Total des etudiants</label>
                    <input name="total_students" required class="form-control" type="number" placeholder="Total des étudiants">
                </div>
                <div class="form-group">
                    <label class="form-label">Total des filières</label>
                    <input name="total_teaching_units" required class="form-control" type="number" placeholder="Total des filières">
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
              <h5 class="modal-title">MODIFIER UNE CLASSE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{ route('classrooms.update', ['classroom' => '__CLASSROOM_ID__']) }}" method="POST" id="edit-classroom-form">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label class="form-label">Nom de la classe</label>
                    <input name="edit_name" required class="form-control" type="text" placeholder="Nom du classe">
                </div>
                <div class="form-group">
                    <label class="form-label">Total des etudiants</label>
                    <input name="edit_total_students" required class="form-control" type="number" placeholder="Poids du classe">
                </div>
                <div class="form-group">
                    <label class="form-label">Total des filières</label>
                    <input name="edit_total_teaching_units" required class="form-control" type="number" placeholder="Prix du classe">
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
                <h5 class="modal-title">IFORMATIONS DE LA CLASSE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label class="form-label">Nom de la classe</label>
                        <input disabled name="view_name" class="form-control" type="text" placeholder="Nom du classe">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Total des etudiants</label>
                        <input disabled name="view_total_students" class="form-control" type="number" placeholder="Poids du classe">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Total des filières</label>
                        <input disabled name="view_total_teaching_units" class="form-control" type="number" placeholder="Prix du classe">
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
                    var classroomName = button.getAttribute('data-classroom-name');
                    var classroomTotalStudents = button.getAttribute('data-classroom-total-students');
                    var classroomTotalTeachingUnits = button.getAttribute('data-classroom-total-teaching-units');
                    var classroomId = button.getAttribute('data-classroom-id');

                    // Mettez à jour l'attribut action du formulaire avec l'identifiant du classe
                    var editForm = document.getElementById('edit-classroom-form');
                    var actionUrl = "{{ route('classrooms.update', ['classroom' => '__CLASSROOM_ID__']) }}";
                    actionUrl = actionUrl.replace('__CLASSROOM_ID__', classroomId);
                    editForm.setAttribute('action', actionUrl);

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="edit_name"]').value = classroomName;
                    document.querySelector('input[name="edit_total_students"]').value = classroomTotalStudents;
                    document.querySelector('input[name="edit_total_teaching_units"]').value = classroomTotalTeachingUnits;

                });
            });

            var deleteLinks = document.querySelectorAll('.delete-link');

            deleteLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    var classroomId = link.getAttribute('data-id');

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
                            document.getElementById('delete-form-' + classroomId).submit();
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
                    var viewclassroomName = button.getAttribute('view-classroom-name');
                    var viewclassroomTotalStudents = button.getAttribute('view-classroom-total-students');
                    var viewclassroomTotalTeachingUnits = button.getAttribute('view-classroom-total-teaching-units');

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="view_name"]').value = viewclassroomName;
                    document.querySelector('input[name="view_total_students"]').value = viewclassroomTotalStudents;
                    document.querySelector('input[name="view_total_teaching_units"]').value = viewclassroomTotalTeachingUnits;
                });
            });

        });
    </script>
</body>
</html>
