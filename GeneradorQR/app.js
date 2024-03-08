
    const formulario = document.getElementById("formulario");

    const contenedorQR = document.getElementById("qrcode");

    const QR = new QRCode(contenedorQR);

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        QR.makeCode(`${formulario.numCuenta.value} \n ${formulario.Nombre.value}`);

    });
