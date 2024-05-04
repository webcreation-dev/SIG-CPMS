<div class="themebody-wrap" wire:ignore.self>
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
                      <th>Année</th>
                      <th>Etudiants</th>
                      {{-- <th>UE</th> --}}
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($classrooms as $key => $classroom)
                          <tr>
                            @php
                                    $year = date('Y', strtotime($classroom->year)); // Extraire l'année de la date
                                    $nextYear = $year + 1; // Ajouter une année supplémentaire
                              @endphp
                              <td>
                                  <img width="50" height="50" src="{{asset('assets/images/classroom.png')}}" alt="">
                              </td>
                              <td>
                                {{-- {{$classroom->type}} --}}
                                {{App\Models\Classroom::TYPES[$classroom->type] }} - {{$year}}
                            </td>
                              <td>{{$classroom->total_teaching_units}}</td>
                              <td>{{$classroom->total_students}}</td>

                              <td>{{$year . '-' . $nextYear}}</td>

                              <td>
                                <a href="{{route('students.index', ['classroom_id' => $classroom->id ])}}" title="Voir les etudiants">
                                    <span class="badge badge-info"><i class="fa fa-user"></i> Voir les etudiants</span>
                                </a>
                              </td>
                              {{-- <td> --}}

                                {{-- <a  href="{{route('classrooms.create',['classroomId' => $classroom->id])}}" target="_blank" title="Ajouter les UE" >
                                    <span class="badge badge-warning"><i class="fa fa-plus"></i>  </span>
                                </a> --}}
                                {{-- <a href="{{route('teaching_units.index', ['classroom_id' => $classroom->id ])}}" title="Voir les UE">
                                    <span class="badge badge-warning"><i class="ti-eye"></i> Voir les UE</span>
                                </a>
                              </td> --}}



                              <td>

                                  <a href="#" title="Voir une classe" data-bs-toggle="modal" data-bs-target="#ViewModal"
                                      view-classroom-type="{{$classroom->type}}"
                                      view-classroom-total-students="{{$classroom->total_students}}"
                                      view-classroom-total-teaching-units="{{$classroom->total_teaching_units}}"
                                        view-classroom-year="{{$classroom->year}}"
                                      >

                                      <span class="badge badge-info"></i> <i class="ti-eye"></i> </span>
                                  </a>
                                  <a href="#" title="Modifier une classe" data-bs-toggle="modal" data-bs-target="#EditModal"
                                      {{-- data-classroom-type="{{$classroom->type}}" --}}
                                      data-classroom-total-students="{{$classroom->total_students}}"
                                      data-classroom-total-teaching-units="{{$classroom->total_teaching_units}}"
                                      data-classroom-year="{{$classroom->year}}"
                                      data-classroom-id="{{$classroom->id}}">
                                      <span class="badge badge-warning"></i> <i class="ti-pencil"></i> </span>
                                  </a>
                                  <a href="{{ route('classrooms.destroy', $classroom->id) }}"
                                  title="Supprimer une classe"
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
    {{-- <div class="modal fade" id="UEModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">AJOUTER LES UE</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
          </div>
          <div class="modal-body">

          <form action="{{ route('teaching_units.update', ['teaching_unit' => 1]) }}" method="POST" id="ue-form">
              @method('PUT')
              @csrf

              <input type="hidden" name="classroom_id" >

              <div class="row">
                  <div class="form-group col-md-12">
                      <label class="form-label">Choisir les UE</label>
                      <select class="form-control basic-select" name="states[]" multiple="multiple" style="width: 100%;">

                        @if($ues)
                            @foreach ($ues as $ue)
                                <option selected @if($ue->classroomId == $classroomId) selected @endif  value="{{ $ue->id }}">{{ $ue->name }}</option>
                            @endforeach
                        @endif

                      </select>
                  </div>
              </div>

              <button type="submit" class="btn btn-success btn-md">ENREGISTRER</button>

            </form>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Data Modal end-->


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
                <label class="form-label">Classe</label>
                <select class="form-control basic-select" name="type" style="width: 100%;">
                    <option value="prepa1">Classe Prépa 1</option>
                    <option value="prepa2">Classe Prépa 2</option>
                </select>
            </div>
              <div class="form-group">
                  <label class="form-label">Total des etudiants</label>
                  <input name="total_students" required class="form-control" type="number" placeholder="Total des étudiants">
              </div>
              <div class="form-group">
                  <label class="form-label">Total des filières</label>
                  <input name="total_teaching_units" required class="form-control" type="number" placeholder="Total des filières">
              </div>
              <div class="form-group">
                <label class="form-label">Année académique</label>
                <input name="year" required class="form-control" type="date" required value="2023">
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
                  <label class="form-label">Total des etudiants</label>
                  <input name="edit_total_students" required class="form-control" type="number" placeholder="Poids du classe">
              </div>
              <div class="form-group">
                  <label class="form-label">Total des filières</label>
                  <input name="edit_total_teaching_units" required class="form-control" type="number" placeholder="Prix du classe">
              </div>

                <div class="form-group col-md-6">
                    <label class="form-label">Année académique</label>
                    <input name="edit_year" required class="form-control" type="date" required value="2023">
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
                    <input disabled name="view_type" class="form-control" type="text" placeholder="Classe">
                </div>
                <div class="form-group">
                    <label class="form-label">Total des etudiants</label>
                    <input disabled name="view_total_students" class="form-control" type="number" placeholder="Poids du classe">
                </div>
                <div class="form-group">
                    <label class="form-label">Total des filières</label>
                    <input disabled name="view_total_teaching_units" class="form-control" type="number" placeholder="Prix du classe">
                </div>

                <div class="form-group">
                    <label class="form-label">Année de académique</label>
                    <input disabled name="view_year" required class="form-control" type="date" required value="2023">
                </div>

            </div>
        </div>
        </div>
    </div>

</div>



