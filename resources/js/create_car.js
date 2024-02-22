const mainUrl = 'http://testing-car-site.great-site.net';

$(document).ready(function() {
    populateBrands();
    populateServiceKinds();
    populateColors();
    populateDriversAndOwners();

    setTimeout(function() {
        let flash = document.getElementById('message-flash');
        if (flash === undefined || flash === null) {
            return;
        }
        flash.style.display = 'none';
    }, 3000);
});

function populateBrands() {
    const brands = ["Toyota", "Honda", "Ford", "Chevrolet", "Volkswagen"];
    loadArrayElements("brand", brands);
}

function populateServiceKinds() {
    const serviceKinds = ["Servicio público", "Servicio particular"];
    loadArrayElements("kind", serviceKinds);
}

function populateColors() {
    colores = ["Amarillo", "Ámbar", "Azul", "Blanco", "Café", "Celeste", "Cian", "Dorado", "Gris", "Magenta", "Marrón", "Naranja", "Negro", "Plateado", "Rojo", "Rosa", "Turquesa", "Verde", "Violeta"];
    loadArrayElements("color", colores);
}

function populateDriversAndOwners() {
    $.ajax({
        url: mainUrl + '/contact/all',
        type: 'GET',
        contentType: 'application/json',
        success: function(data) {
            if (data.status !== 'success') {
                alert('No se ha podido obtener datos de contactos (Conductores y Propietarios)');
                return;
            }

            const drivers = data.contacts.filter(function(contact) {
                return contact.type === 'Conductor';
            });
            const owners = data.contacts.filter(function(contact) {
                return contact.type === 'Propietario';
            });

            loadObjectElements("owner_id", owners, 'id', 'displayName');
            loadObjectElements("driver_id", drivers, 'id', 'displayName');
        },
        error: function(xhr, status, error) {
            alert('No se ha podido obtener datos de contactos (Conductores y Propietarios)');
            console.log(error);
        }
    });
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
    const selectElement = document.getElementById(elementId);
    for (const value of data) {
        const option = document.createElement("option");
        option.text = value[displayField];
        option.value = value[valueField];
        selectElement.add(option);
    }
}