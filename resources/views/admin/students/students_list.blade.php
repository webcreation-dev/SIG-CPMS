
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
                            @if (isset($classroom))
                                    <strong>{{$classroom->name}}</strong>
                            @else
                                Tableau de bord
                            @endif

                        </h1>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Liste des étudiants</a></li>
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
                        <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal" data-bs-target="#DataModal"><i class="ti-plus mr-5"></i>Ajouter un étudiant</button>
                    </div>
                </div>

              <div class="card">
                <div class="card-body">
                  <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        @if (!isset($classroom_id))
                            <th>Classe</th>
                        @endif
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Date de naissance</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $student)
                            <tr>
                                <td>
                                    <img width="40" height="40" src="{{asset('assets/images/student.png')}}" alt="">
                                </td>
                                @if (!isset($classroom_id))
                                    <th>{{$student->classroom->name}}</th>
                                @endif

                                <td>{{$student->lastname}}</td>
                                <td>{{$student->firstname}}</td>
                                <td>{{$student->sexe}}</td>
                                <td>{{$student->birthday}}</td>

                                <td>
                                    <a href="#" title="Voir l'étudiant" data-bs-toggle="modal" data-bs-target="#ViewModal"
                                        view-student-lastname="{{$student->lastname}}"
                                        view-student-firstname="{{$student->firstname}}"
                                        view-student-sexe="{{$student->sexe}}"
                                        view-student-birthday="{{$student->birthday}}">

                                        <span class="badge badge-info"></i> <i class="ti-eye"></i> </span>
                                    </a>
                                    <a href="#" title="Modifier un etudiant" data-bs-toggle="modal" data-bs-target="#EditModal"
                                        data-student-lastname="{{$student->lastname}}"
                                        data-student-firstname="{{$student->firstname}}"
                                        data-student-sexe="{{$student->sexe}}"
                                        data-student-birthday="{{$student->birthday}}"
                                        data-student-id="{{$student->id}}"
                                        @if(isset($classroom_id)) data-classroom-id="{{$classroom_id}}" @else data-classroom-id="{{$student->classroom->id}}" @endif
                                        >
                                        <span class="badge badge-warning"></i> <i class="ti-pencil"></i> </span>
                                    </a>
                                    <a href="{{ route('students.destroy', $student->id) }}"
                                    title="Supprimer un classe"
                                    class="delete-link"
                                    data-id="{{ $student->id }}">
                                        <span class="badge badge-danger"><i class="ti-trash"></i></span>
                                    </a>

                                    <!-- Ajoutez le formulaire de suppression caché pour chaque élément dans la boucle -->
                                    <form id="delete-form-{{ $student->id }}"
                                        action="{{ route('students.destroy', $student->id) }}"
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
              <h5 class="modal-title">AJOUTER UN NOUVEL ETUDIANT</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{route('students.store')}}" method="POST" >
                @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Nom</label>
                        <input name="lastname" required class="form-control" type="text" placeholder="Nom de l'étudiant">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">Prénom</label>
                        <input name="firstname" required class="form-control" type="text" placeholder="Prénom de l'étudiant">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Sexe</label>
                    <input name="sexe" required class="form-control" type="text" placeholder="Sexe de l'étudiant">
                </div>
                <div class="form-group">
                    <label class="form-label">Date de naissance</label>
                    <input name="birthday" required class="form-control" type="date" required value="2023-03-13">
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label">Classe</label>
                        <select class="form-control basic-select" name="classroom_id" style="width: 100%;">
                            @foreach (App\Models\Classroom::list() as $item)
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
              <h5 class="modal-title">MODIFIER UN ETUDIANT</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{ route('students.update', ['student' => '__STUDENT_ID__']) }}" method="POST" id="edit-student-form">
                @method('PUT')
                @csrf

                <input type="hidden" name="edit_classroom_id">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Nom</label>
                        <input name="edit_lastname" required class="form-control" type="text" placeholder="Nom de l'étudiant">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">Prénom</label>
                        <input name="edit_firstname" required class="form-control" type="text" placeholder="Prénom de l'étudiant">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Sexe</label>
                    <input name="edit_sexe" required class="form-control" type="text" placeholder="Sexe de l'étudiant">
                </div>
                <div class="form-group">
                    <label class="form-label">Date de naissance</label>
                    <input name="edit_birthday" required class="form-control" type="date" required value="2023-03-13">
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
                <h5 class="modal-title">IFORMATIONS DE L'ETUDIANT</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Nom</label>
                            <input disabled name="view_lastname" required class="form-control" type="text" placeholder="Nom de l'étudiant">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Prénom</label>
                            <input disabled name="view_firstname" required class="form-control" type="text" placeholder="Prénom de l'étudiant">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Sexe</label>
                        <input disabled name="view_sexe" required class="form-control" type="text" placeholder="Nom de l'étudiant">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date de naissance</label>
                        <input disabled name="view_birthday" required class="form-control" type="date" required value="2023-03-13">
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
                    var studentLastname = button.getAttribute('data-student-lastname');
                    var studentFistname = button.getAttribute('data-student-firstname');
                    var studentSexe = button.getAttribute('data-student-sexe');
                    var studentBirthday = button.getAttribute('data-student-birthday');
                    var studentId = button.getAttribute('data-student-id');
                    var studentClassroomId = button.getAttribute('data-classroom-id');

                    // Mettez à jour l'attribut action du formulaire avec l'identifiant du classe
                    var editForm = document.getElementById('edit-student-form');
                    var actionUrl = "{{ route('students.update', ['student' => '__STUDENT_ID__']) }}";
                    actionUrl = actionUrl.replace('__STUDENT_ID__', studentId);
                    editForm.setAttribute('action', actionUrl);

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="edit_lastname"]').value = studentLastname;
                    document.querySelector('input[name="edit_firstname"]').value = studentFistname;
                    document.querySelector('input[name="edit_sexe"]').value = studentSexe;
                    document.querySelector('input[name="edit_birthday"]').value = studentBirthday;
                    document.querySelector('input[name="edit_classroom_id"]').value = studentClassroomId;

                });
            });

            var deleteLinks = document.querySelectorAll('.delete-link');

            deleteLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    var studentId = link.getAttribute('data-id');

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
                            document.getElementById('delete-form-' + studentId).submit();
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
                    var viewstudentlastName = button.getAttribute('view-student-lastname');
                    var viewstudentFistname = button.getAttribute('view-student-firstname');
                    var viewstudentSexe = button.getAttribute('view-student-sexe');
                    var viewstudentBirthday = button.getAttribute('view-student-birthday');

                    // Remplissez les champs du formulaire dans le modal avec ces données
                    document.querySelector('input[name="view_lastname"]').value = viewstudentlastName;
                    document.querySelector('input[name="view_firstname"]').value = viewstudentFistname;
                    document.querySelector('input[name="view_sexe"]').value = viewstudentSexe;
                    document.querySelector('input[name="view_birthday"]').value = viewstudentBirthday;
                });
            });

        });
    </script>
</body>
</html>