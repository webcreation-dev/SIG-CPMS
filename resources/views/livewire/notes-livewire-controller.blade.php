<div class="themebody-wrap">
    <!-- breadcrumb start-->
      <div class="codex-breadcrumb">
        <div class="breadcrumb-contain">
          <div class="left-breadcrumb">
            <ul class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="index.html">
                  <h1>Gestion des notes</h1></a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0);">{{$classroom->name}}</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0);">{{$ue->name}}</a></li>
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
            <div class="card">
              <div class="card-body">
                <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal" data-bs-target="#DataModal"> Enregistrer les notes <i class="fa fa-cloud-download"></i></button>

                <form action="{{route('notes.store')}}" method="POST">
                    @csrf

                    <input type="hidden" name="classroom_id" value="{{$classroom->id}}" >
                    <input type="hidden" name="ue_id" value="{{$ue->id}}" >
                    <input type="hidden" name="type" value="{{$type}}" >

                <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                  <thead>
                    <tr>
                      <th>Etudiant</th>
                      <th>Inter 1</th>
                      <th>Inter 2</th>
                      <th>MOY INTER</th>
                      <th>Devoir 1</th>
                      <th>Devoir 2</th>
                      <th>MOY DEV</th>
                      <th>Examen</th>
                      <th>MOY/ECUE</th>
                    </tr>
                  </thead>
                  <tbody>


                        @foreach ($notes as $note)
                            <tr>
                                <td>Tiger Nixon
                                    <input name="student_id[]" value={{$note->student_id}}  class="form-control" type="hidden" placeholder="student">
                                </td>

                                <td><input name="i1_points[]" @if(($note->i1_points == 0.1) || ($note->i1_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->i1_points ?? 0.1}} min="0.0" step="0.1" class="form-control" type="number" placeholder="I1"></td>
                                <td><input name="i2_points[]" @if(($note->i2_points == 0.1) || ($note->i2_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->i2_points ?? 0.1}}  class="form-control" min="0.0" step="0.1" type="number" placeholder="I2"></td>
                                <td>14</td>
                                <td><input name="d1_points[]" @if(($note->d1_points == 0.1) || ($note->d1_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->d1_points ?? 0.1}} min="0.0" step="0.1" class="form-control" type="number" placeholder="D1"></td>
                                <td><input name="d2_points[]" @if(($note->d2_points == 0.1) || ($note->d2_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->d2_points ?? 0.1}} min="0.0" step="0.1" class="form-control" type="number" placeholder="D2"></td>
                                <td>15</td>
                                <td><input name="e_points[]" @if(($note->e_points == 0.1) || ($note->e_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->e_points ?? 0.1}}  min="0.0" step="0.1" class="form-control" type="number" placeholder="Exam"></td>
                                <td>15</td>
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
