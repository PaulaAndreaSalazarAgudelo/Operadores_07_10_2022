addEventListener("DOMContentLoaded", async(e) => {
    let peticion = await fetch("api.php");
    let datos = await peticion.text();
    document.querySelector("pre").innerHTML = datos;
})