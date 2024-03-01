
<!DOCTYPE html>
<html lang="en">
    @include("layouts.admin.head")
    <body>
        <div class="codex-loader">
          <div class="linespinner"></div>
        </div>
      <!--  End-->
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

            <div class="theme-body codex-calendar">
                <div class="container-fluid">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">AJOUTER LES UE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                          </div>
                          <div class="modal-body">

                          <form action="{{ route('teaching_units.update', ['teaching_unit' => 1]) }}" method="POST" id="ue-form">
                              @method('PUT')
                              @csrf

                              <input type="hidden" name="classroom_id" value="{{$classroomId}}" >
                              <input type="hidden" name="type" value="ue" >

                              <div class="row">
                                  <div class="form-group col-md-12">
                                      <label class="form-label">Choisir les UE</label>
                                      <select class="form-control basic-select" name="ues[]" multiple="multiple" style="width: 100%;">

                                        @foreach ($ues as $ue)
                                            <option @if($ue->classroom_id == $classroomId) selected @endif  value="{{ $ue->id }}">{{ $ue->name }}</option>
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
            </div>
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


                // Sélectionnez tous les boutons d'édition
                var ueButtons = document.querySelectorAll('[data-bs-target="#UEModal"]');

                // Bouclez sur chaque bouton d'édition
                ueButtons.forEach(function(button) {
                    // Ajoutez un écouteur d'événements pour le clic
                    button.addEventListener('click', function() {

                        var classroomId = button.getAttribute('classroom-id')
                        document.querySelector('input[name="classroom_id"]').value = classroomId;

                    });
                });

            });
        </script>

        @livewireScripts()
    </body>
</html>

