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
                                <td>{{$note->student->lastname}} {{$note->student->firstname}}
                                    <input name="student_id[]" value={{$note->student_id}}  class="form-control" type="hidden" placeholder="student">
                                </td>

                                <td><input name="i1_points[]" oninput="updateAverage(this)"  @if(($note->i1_points == 0.1) || ($note->i1_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->i1_points}} step="0.5" min="0" max="20" class="form-control" type="number" placeholder="I1"></td>
                                <td><input name="i2_points[]" oninput="updateAverage(this)"  @if(($note->i2_points == 0.1) || ($note->i2_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->i2_points}} step="0.5" min="0" max="20" class="form-control" type="number" placeholder="I2"></td>
                                <td class="moyenne" >
                                    <input step="0.5" min="0" max="20" class="form-control" type="number">
                                </td>

                                <td style="display: none;">
                                    <input name="moy_inter[]" step="0.1" min="0" max="20" class="form-control" type="number">
                                </td>

                                <td><input name="d1_points[]" oninput="updateAverage(this)" @if(($note->d1_points == 0.1) || ($note->d1_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->d1_points }} step="0.5" min="0" max="20" class="form-control" type="number" placeholder="D1"></td>
                                <td><input name="d2_points[]" oninput="updateAverage(this)" @if(($note->d2_points == 0.1) || ($note->d2_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->d2_points}} step="0.5" min="0" max="20" class="form-control" type="number" placeholder="D2"></td>
                                <td class="moyenned"></td>
                                <td style="display: none;">
                                    <input name="moy_dev[]" step="0.1" min="0" max="20" class="form-control" type="number">
                                </td>

                                <td><input name="e_points[]" oninput="updateAverage(this)" @if(($note->e_points == 0.1) || ($note->e_points != null) ) style="color:black; border: solid 0.5px green;" @endif value={{$note->e_points }}  step="0.5" min="0" max="20" class="form-control" type="number" placeholder="Exam"></td>
                                <td class="moy_ecu"></td>
                                <td >
                                    <input name="moy_ecu[]" step="0.1" min="0" max="20" class="form-control" type="number">
                                </td>
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

<script>

        function updateAverage(input) {
            // Assuming the structure of your table, you can use DOM traversal to find related elements
            var row = input.closest('tr');
            var i1Input = row.querySelector('[name="i1_points[]"]');
            var i2Input = row.querySelector('[name="i2_points[]"]');
            var moyenneCell = row.querySelector('.moyenne');

            var d1Input = row.querySelector('[name="d1_points[]"]');
            var d2Input = row.querySelector('[name="d2_points[]"]');
            var moyenneDCell = row.querySelector('.moyenned');

            var eInput = row.querySelector('[name="e_points[]"]');
            var moyenneECU = row.querySelector('.moy_ecu');

            var moyInter = row.querySelector('[name="moy_inter[]"]');
            var moyDev = row.querySelector('[name="moy_dev[]"]');
            var moyEcu = row.querySelector('[name="moy_ecu[]"]');

            // Get values from input fields
            var i1 = parseFloat(i1Input.value) || 0;
            var i2 = parseFloat(i2Input.value) || 0;

            var d1 = parseFloat(d1Input.value) || 0;
            var d2 = parseFloat(d2Input.value) || 0;

            var e = parseFloat(eInput.value) || 0;

            // Calculate average
            var average = (i1 + i2) * 0.2;

            var averaged = (d1 + d2) * 0.3;

            var moy = (e * 0.5) + average + averaged;


            // Update the moyenne cell
            moyenneCell.textContent = average.toFixed(2); // Display average with 2 decimal places
            moyenneDCell.textContent = averaged.toFixed(2); // Display average with 2 decimal places

            moyenneECU.textContent = moy.toFixed(2); // Display average with 2 decimal places

            moyInter.value = average.toFixed(2);
            moyDev.value = averaged.toFixed(2);
            moyEcu.value = moy.toFixed(2);
        }

    document.addEventListener('DOMContentLoaded', function() {
        var allInputs = document.querySelectorAll('[name="i1_points[]"], [name="i2_points[]"]');
        allInputs.forEach(function(input) {
            updateAverage(input);
        });
    });
</script>
