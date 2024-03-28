<div class="themebody-wrap">
    <!-- breadcrumb start-->
      <div class="codex-breadcrumb">
        <div class="breadcrumb-contain">
          <div class="left-breadcrumb">
            <ul class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="index.html">
                  <h1>Gestion des notes</h1></a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0);">{{$student->classroom->name}}</a></li>
                @php
                    $firstname = explode(' ', $student->firstname);
                @endphp
              <li class="breadcrumb-item active"><a href="javascript:void(0);">{{$student->lastname}} {{$firstname[0]}}</a></li>
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
            <div class="card" style="width: 1200px;">
              <div class="card-body">

                <form action="{{route('notes.by.student')}}" method="POST">
                    @csrf
                    <button class="btn btn-md btn-primary mb-15 float-end">Enregistrer les notes <i class="fa fa-cloud-download"></i></button>

                    <input type="hidden" name="student_id" value="{{$student->id}}" >

                <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                  <thead>
                    <tr>
                      <th>UE/ECUE</th>
                      <th>Inter 1</th>
                      <th>Inter 2</th>
                      <th>MOY INTER</th>
                      <th>Devoir 1</th>
                      <th>Devoir 2</th>
                      <th>MOY DEV</th>
                      <th>Examen</th>
                      <th>MOY ECUE</th>
                      <th>Rattrap.</th>
                      <th>Freq</th>
                    </tr>
                  </thead>
                  <tbody>


                        @foreach ($notes as $index => $note)
                            <tr>

                                <td> <strong>{{$note->elementTeachingUnit?->name}} {{$note->teachingUnit?->name}}</strong>


                                    @if ($note->teachingUnit)
                                        <input name="ues[]" value={{$note->teaching_unit_id}}   class="form-control" type="hidden">
                                        <input name="types[]" value="ue"  class="form-control" type="hidden">
                                    @else
                                        <input name="ues[]" value={{$note->element_teaching_unit_id}}  class="form-control" type="hidden">
                                        <input name="types[]" value="ecue"  class="form-control" type="hidden">
                                    @endif
                                </td>
                                <td>
                                    <input name="i1_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'i1_points[]', 'i2_points[]')"

                                    @if($note->i1_points != null) style="color:black; border: solid 0.5px green;" @else style="color:black;" @endif
                                    value="{{$note->i1_points}}" step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="I1">
                                </td>
                                <td><input name="i2_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'i2_points[]', 'd1_points[]')"  @if($note->i2_points != null) style="color:black; border: solid 0.5px green;" @else style="color:black;" @endif value="{{$note->i2_points}}"" step=".25" min="0" max="20" class="form-control" type="number" placeholder="I2"></td>
                                <td class="moyenne" >
                                    <input step="0.001" min="0" max="20" class="form-control input-number" type="number">
                                </td>

                                <td style="display: none;">
                                    <input name="moy_inter[]" step="0.001" class="form-control" type="number">
                                </td>

                                <td><input name="d1_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'd1_points[]', 'd2_points[]')"@if($note->d1_points != null) style="color:black; border: solid 0.5px green;" @else style="color:black;" @endif value="{{$note->d1_points }}" step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="D1"></td>
                                <td><input name="d2_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'd2_points[]', 'e_points[]')" @if($note->d2_points != null) style="color:black; border: solid 0.5px green;" @else style="color:black;" @endif value="{{$note->d2_points}}" step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="D2"></td>
                                <td class="moyenned"></td>
                                <td style="display: none;">
                                    <input name="moy_dev[]" step="0.001" class="form-control" type="number">
                                </td>

                                <td><input name="e_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'e_points[]', 'i1_points[]')" @if($note->e_points != null) style="color:black; border: solid 0.5px green;" @else style="color:black;" @endif value="{{$note->e_points }}"  step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="Examen"></td>
                                <td class="moy_ecu"></td>
                                <td style="display: none;">
                                    <input name="moy_ecu[]" step="0.001" class="form-control" type="number">
                                </td>

                                <td><input name="moy_catch_up[]" oninput="moveToNextInput(event, {{$index}}, 'moy_catch_up[]', 'freq_catch_up[]')" @if($note->moy_catch_up != null) style="color:black; border: solid 0.5px green;" @else style="color:black;" @endif value="{{$note->moy_catch_up }}"  step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="Rattrapage"></td>
                                <td><input name="freq_catch_up[]" oninput="moveToNextInput(event, {{$index}}, 'freq_catch_up[]', 'moy_catch_up[]')" @if($note->freq_catch_up != null) style="color:black; border: solid 0.5px green;" @else style="color:black;" @endif value="{{$note->freq_catch_up }}"  step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="Frequence"></td>

                            </tr>
                        @endforeach


                  </tbody>
                </table>
                <br>

                <button class="btn btn-md btn-primary mb-15 float-end" type="submit">Enregistrer les notes <i class="fa fa-cloud-download"></i></button>
            </form>

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
            <h5 class="modal-title">Add Your Data Detail</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Name">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Position">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Office">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Age">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Start date">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Salary">
              </div><a class="btn btn-success btn-md" href="javascript:void(0)">Submit Data           </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Data Modal end-->

    <!-- theme body end-->
  </div>

<script src="{{asset('notations.js')}}" ></script>
