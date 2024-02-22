const mainUrl = 'http://testing-car-site.great-site.net';

$(document).ready(function() {
    populateCities();
    populateTypes();

    setTimeout(function() {
        let flash = document.getElementById('message-flash');
        if (flash === undefined || flash === null) {
            return;
        }
        flash.style.display = 'none';
    }, 3000);
});

function populateCities() {
    const cities = ["Arauca", "Armenia", "Barranquilla", "Bogotá", "Bucaramanga", "Cali", "Cartagena", "Cúcuta", "Florencia", "Ibagué", "Inírida", "Leticia", "Manizales", "Medellín", "Mocoa", "Montería", "Neiva", "Pasto", "Pereira", "Popayán", "Puerto Carreño", "Quibdó", "Riohacha", "San Andrés", "San José del Guaviare", "Santa Marta", "Sincelejo", "Tunja", "Valledupar", "Villavicencio", "Yopal"];
    loadArrayElements("city", cities);
}

function populateTypes() {
    const types = ['Conductor', 'Propietario'];
    loadArrayElements('type', types);
}

function loadArrayElements(elementId, data) {
    const selectElement = document.getElementById(elementId);
    for (const value of data) {
        const option = document.createElement("option");
        option.text = value;
        option.value = value;
        selectElement.add(option);
    }
}

function loadObjectElements(elementId, data, valueField, displayField) {
    debugger;
    const selectElement = document.getElementById(elementId);
    for (const value of data) {
        const option = document.createElement("option");
        option.text = value[displayField];
        option.value = value[valueField];
        selectElement.add(option);
    }
}