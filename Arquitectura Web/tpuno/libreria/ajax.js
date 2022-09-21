const botones = document.querySelectorAll(".btn-producto");
const spanPrecio = document.querySelector("#price");


async function obtenerPrecio(params) {
    const res = await fetch(`precios.php?producto=${producto}`);
    const precio = await res.text();
    spanPrecio.innerHTML = precio;
}


botones.forEach(boton => {
    boton.addEventListener("click", 
        () => obtenerPrecio(boton.dataset.producto)
    ); 
});