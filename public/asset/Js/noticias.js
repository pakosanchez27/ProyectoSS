const sliders = [
    {
        clase: ".img-noticia-alertas-1",
        imagenes: [
            "/CGSC/public/asset/img/buscar.jpg",
            "/CGSC/public/asset/img/localizada.jpg"
        ]
    },
    {
        clase: ".img-noticia-alertas-2",
        imagenes: [
            "/CGSC/public/asset/img/localizada.jpg",
            "/CGSC/public/asset/img/buscar.jpg"
        ]
    }
];

// Función para iniciar cada slider
sliders.forEach(slider => {
    let indice = 0;
    const imgElemento = document.querySelector(slider.clase);

    function cambiarImagen() {
        imgElemento.style.opacity = 0; // fade out
        setTimeout(() => {
            indice = (indice + 1) % slider.imagenes.length;
            imgElemento.src = slider.imagenes[indice];
            imgElemento.style.opacity = 1; // fade in
        }, 1000);
    }

    setInterval(cambiarImagen, 5000); // infinito
});