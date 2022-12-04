const all_viajes = document.querySelectorAll(".viaje");

all_viajes.forEach(viaje => {
    let btn_EditReset = viaje.querySelector("#edit-reset");
    let all_inputs = viaje.querySelectorAll(".in");
    let btn_submit = viaje.querySelector('#submit');

    let destino_Og = all_inputs[0].value;
    let origen_Og = all_inputs[1].value;
    let fecha_Og = all_inputs[2].value;
    let hora_Og = all_inputs[3].value;
    let camion_Og = all_inputs[4].value;
    let costo_Og = all_inputs[5].value;

    btn_EditReset.addEventListener('click', () => {
        if (btn_EditReset.value == 'Editar') {
            all_inputs.forEach(curr => {
                curr.disabled = false;
            });
            btn_EditReset.value = 'Cancelar'
            btn_submit.disabled = false;
        } else {
            all_inputs.forEach(curr => {
                curr.disabled = true;
            });
            btn_EditReset.value = 'Editar'
            btn_submit.disabled = true;
            
            all_inputs[0].value = destino_Og;
            all_inputs[1].value = origen_Og;
            all_inputs[2].value = fecha_Og;
            all_inputs[3].value = hora_Og;
            all_inputs[4].value = camion_Og;
            all_inputs[5].value = costo_Og;
        }
    });
});