
    const formulario = document.getElementById("formulario");

    const contenedorQR = document.getElementById("qrcode");

    const QR = new QRCode(contenedorQR);

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        QR.makeCode("Conferencia: " + formulario.NombreConferencia.value + " Ponente: " + formulario.NombrePonente.value);

    });
