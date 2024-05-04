
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

        <livewire:classroom-livewire-controller />

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

                    // var classroomType = button.getAttribute('data-classroom-type');
                    var classroomTotalStudents = button.getAttribute('data-classroom-total-students');
                    var classroomTotalTeachingUnits = button.getAttribute('data-classroom-total-teaching-units');
                    var classroomId = button.getAttribute('data-classroom-id');
                    var classroomYear = button.getAttribute('data-classroom-year');

                    // Mettez à jour l'attribut action du formulaire avec l'identifiant du classe
                    var editForm = document.getElementById('edit-classroom-form');
                    var actionUrl = "{{ route('classrooms.update', ['classroom' => '__CLASSROOM_ID__']) }}";
                    actionUrl = actionUrl.replace('__CLASSROOM_ID__', classroomId);
                    editForm.setAttribute('action', actionUrl);

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    // document.querySelector('input[name="edit_name"]').value = classroomName;
                    document.querySelector('input[name="edit_total_students"]').value = classroomTotalStudents;
                    document.querySelector('input[name="edit_total_teaching_units"]').value = classroomTotalTeachingUnits;
                    document.querySelector('input[name="edit_year"]').value = classroomYear;

                });
            });

            var deleteLinks = document.querySelectorAll('.delete-link');

            deleteLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    var classroomId = link.getAttribute('data-id');

                    Swal.fire({
                        title: 'Êtes-vous sûr ?',
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
                    var viewclassroomType = button.getAttribute('view-classroom-type');
                    var viewclassroomTotalStudents = button.getAttribute('view-classroom-total-students');
                    var viewclassroomTotalTeachingUnits = button.getAttribute('view-classroom-total-teaching-units');
                    var viewclassroomYear = button.getAttribute('view-classroom-year');

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="view_type"]').value = viewclassroomType;
                    document.querySelector('input[name="view_total_students"]').value = viewclassroomTotalStudents;
                    document.querySelector('input[name="view_total_teaching_units"]').value = viewclassroomTotalTeachingUnits;
                    document.querySelector('input[name="view_year"]').value = viewclassroomYear;
                });
            });


            // Sélectionnez tous les boutons d'édition
            // var ueButtons = document.querySelectorAll('[data-bs-target="#UEModal"]');

            // Bouclez sur chaque bouton d'édition
            // ueButtons.forEach(function(button) {
            //     // Ajoutez un écouteur d'événements pour le clic
            //     button.addEventListener('click', function() {

            //         var classroomId = button.getAttribute('classroom-id')
            //         document.querySelector('input[name="classroom_id"]').value = classroomId;

            //     });
            // });

        });
    </script>

    @livewireScripts()
</body>
</html>
