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
            <div class="card">
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
                    </tr>
                  </thead>
                  <tbody>


                        @foreach ($notes as $index => $note)
                            <tr>

                                <td> <strong>{{$note->elementTeachingUnit?->name}} {{$note->teachingUnit?->name}}</strong>


                                    @if ($note->teachingUnit)
                                        <input name="ues[]" value={{$note->teaching_unit_id}}  class="form-control" type="hidden">
                                        <input name="types[]" value="ue"  class="form-control" type="hidden">
                                    @else
                                        <input name="ues[]" value={{$note->element_teaching_unit_id}}  class="form-control" type="hidden">
                                        <input name="types[]" value="ecue"  class="form-control" type="hidden">
                                    @endif
                                </td>
                                <td>
                                    <input name="i1_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'i1_points[]', 'i2_points[]')"

                                    @if($note->i1_points != null) style="color:black; border: solid 0.5px green;" @endif
                                    value="{{$note->i1_points}}" step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="I1">
                                </td>
                                <td><input name="i2_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'i2_points[]', 'd1_points[]')"  @if($note->i2_points != null) style="color:black; border: solid 0.5px green;" @endif value="{{$note->i2_points}}"" step=".25" min="0" max="20" class="form-control" type="number" placeholder="I2"></td>
                                <td class="moyenne" >
                                    <input step="0.001" min="0" max="20" class="form-control input-number" type="number">
                                </td>

                                <td style="display: none;">
                                    <input name="moy_inter[]" step="0.001" class="form-control" type="number">
                                </td>

                                <td><input name="d1_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'd1_points[]', 'd2_points[]')"@if($note->d1_points != null) style="color:black; border: solid 0.5px green;" @endif value="{{$note->d1_points }}" step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="D1"></td>
                                <td><input name="d2_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'd2_points[]', 'e_points[]')" @if($note->d2_points != null) style="color:black; border: solid 0.5px green;" @endif value="{{$note->d2_points}}" step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="D2"></td>
                                <td class="moyenned"></td>
                                <td style="display: none;">
                                    <input name="moy_dev[]" step="0.001" class="form-control" type="number">
                                </td>

                                <td><input name="e_points[]" oninput="updateAverage(this); moveToNextInput(event, {{$index}}, 'e_points[]', 'i1_points[]')" @if($note->e_points != null) style="color:black; border: solid 0.5px green;" @endif value="{{$note->e_points }}"  step=".25" min="0" max="20" class="form-control input-number" type="number" placeholder="Exam"></td>
                                <td class="moy_ecu"></td>
                                <td style="display: none;">
                                    <input name="moy_ecu[]" step="0.001" class="form-control" type="number">
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

    function moveToNextInput(event, index, inputName, nextInputName) {

        var inputs = document.querySelectorAll(`input[name="${nextInputName}"]`);

        var current_inputs = document.querySelectorAll(`input[name="${inputName}"]`);


        // if (index < inputs.length - 1) {
            if (current_inputs[index].value.length === 2) {

                if (nextInputName === 'i1_points[]') {
                    inputs[index + 1].focus();
                }else {
                    inputs[index].focus();
                }
            }
        // }

        event.preventDefault();
    }

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


        var i1Value = i1Input.value.trim();
        var i2Value = i2Input.value.trim();

        var d1Value = d1Input.value.trim();
        var d2Value = d2Input.value.trim();

        var eValue = eInput.value.trim();


        // Moy Inter
        if (i1Value === '' || i2Value === '') {

            if (d1Value === '' || d2Value === '') {
                moyenneDCell.textContent = '';
                moyenneECU.textContent = '';
            } else {
                var averaged = ((d1 + d2) * 0.5)/2;
                moyenneDCell.textContent = averaged.toFixed(2); // Update the moyenne cell
                moyDev.value = averaged.toFixed(2);

                if(eValue != '') {
                    var moy = (e * 0.5) + (((d1 + d2) * 0.5)/2);
                    moyenneECU.textContent = moy.toFixed(2);
                    moyEcu.value = moy.toFixed(2);
                }

            }

            moyenneCell.textContent = '';
            moyenneECU.textContent = '';
        } else {
            var average = ((i1 + i2) * 0.2) / 2;
            moyenneCell.textContent = average.toFixed(2); // Update the moyenne cell
            moyInter.value = average.toFixed(2);
        }

        // Moy Devoir
        if (d1Value === '' || d2Value === '') {
            moyenneDCell.textContent = '';
            moyenneECU.textContent = '';
        } else {
            if (i1Value === '' || i2Value === '') {
                var averaged = ((d1 + d2) * 0.5)/2;

                if(eValue != '') {
                    var moy = (e * 0.5) + (((d1 + d2) * 0.5)/2);
                    moyenneECU.textContent = moy.toFixed(2);
                    moyEcu.value = moy.toFixed(2);
                }
            }else {
                var averaged = ((d1 + d2) * 0.3)/2;
                if(eValue != '' && d1Value != '' && d2Value != '' && i1Value != '' && i2Value != '') {
                    var moy = (e * 0.5) + (((i1 + i2) * 0.2) / 2) + (((d1 + d2) * 0.5)/2);
                    moyenneECU.textContent = moy.toFixed(2);
                    moyEcu.value = moy.toFixed(2);
                }
            }

            moyenneDCell.textContent = averaged.toFixed(2); // Update the moyenne cell
            moyDev.value = averaged.toFixed(2);
        }

        // Moy ECU

        if (eValue === '') {

            moyenneECU.textContent = '';

        } else {

            if(i1Value != '' || i2Value != '') {
                if(d1Value != '' && d2Value != '' && i1Value != '' && i2Value != '') {
                    var moy = (e * 0.5) + (((i1 + i2) * 0.2) / 2) + (((d1 + d2) * 0.3)/2);
                }
            }else {
                if(d1Value != '' || d2Value != '') {
                    var moy = (e * 0.5) + (((d1 + d2) * 0.5)/2);
                }
            }
            moyenneECU.textContent = moy.toFixed(2);
            moyEcu.value = moy.toFixed(2);
        }

    }

    document.addEventListener('DOMContentLoaded', function() {
        var allInputs = document.querySelectorAll('[name="i1_points[]"], [name="i2_points[]"]');
        allInputs.forEach(function(input) {
            updateAverage(input);
        });
    });
</script>