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
                moyenneDCell.textContent = averaged.toFixed(3); // Update the moyenne cell
                moyDev.value = averaged.toFixed(3);

                if(eValue != '') {
                    var moy = (e * 0.5) + (((d1 + d2) * 0.5)/2);
                    moyenneECU.textContent = moy.toFixed(3);
                    moyEcu.value = moy.toFixed(3);
                }

            }

            moyenneCell.textContent = '';
            moyenneECU.textContent = '';
        } else {
            var average = ((i1 + i2) * 0.2) / 2;
            moyenneCell.textContent = average.toFixed(3); // Update the moyenne cell
            moyInter.value = average.toFixed(3);
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
                    moyenneECU.textContent = moy.toFixed(3);
                    moyEcu.value = moy.toFixed(3);
                }
            }else {
                var averaged = ((d1 + d2) * 0.3)/2;
                if(eValue != '' && d1Value != '' && d2Value != '' && i1Value != '' && i2Value != '') {
                    var moy = (e * 0.5) + (((i1 + i2) * 0.2) / 2) + (((d1 + d2) * 0.5)/2);
                    moyenneECU.textContent = moy.toFixed(3);
                    moyEcu.value = moy.toFixed(3);
                }
            }

            moyenneDCell.textContent = averaged.toFixed(3); // Update the moyenne cell
            moyDev.value = averaged.toFixed(3);
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
                if(d1Value != '' && d2Value != '') {
                    var moy = (e * 0.5) + (((d1 + d2) * 0.5)/2);
                }else {
                    var moy = e;
                }
            }
            moyenneECU.textContent = moy.toFixed(3);
            moyEcu.value = moy.toFixed(3);
        }

    }

    document.addEventListener('DOMContentLoaded', function() {
        var allInputs = document.querySelectorAll('[name="i1_points[]"], [name="i2_points[]"]');
        allInputs.forEach(function(input) {
            updateAverage(input);
        });
    });
