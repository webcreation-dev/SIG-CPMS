
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
                <li class="breadcrumb-item"><a href="javascript:void(0);">Liste des utilisateurs</a></li>
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
                {{-- <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal" data-bs-target="#DataModal">Ajouter un utilisateur</button>
                    </div>
                </div> --}}

              <div class="card">
                <div class="card-body">
                  <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td></td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Data Modal Start-->
      {{-- <div class="modal fade" id="DataModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">AJOUTER UN NOUVEAU COLIS</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="{{route('package.store')}}" method="POST" >
                @csrf

                <input type="hidden" name="user_id">
                <input type="hidden" value="0" name="by_user">

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
                    <label class="form-label">Adresse</label>
                    <input name="address" required class="form-control" type="text" placeholder="Adresse de livraison">
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
      </div> --}}
      <!-- Data Modal end-->

      <!-- theme body end-->
    </div>

    @include("layouts.admin.footer")



    <script>
        // Attendez que le document soit chargé
        document.addEventListener('DOMContentLoaded', function() {

            var addButtons = document.querySelectorAll('[data-bs-target="#DataModal"]');

            // Bouclez sur chaque bouton d'édition
            addButtons.forEach(function(button) {
                // Ajoutez un écouteur d'événements pour le clic
                button.addEventListener('click', function() {

                    var userId = button.getAttribute('data-user-id');
                    document.querySelector('input[name="user_id"]').value = userId;
                });
            });

        });
    </script>


  </body>
</html>
