function mostrar() {
    var contra = document.getElementById('password');
    var ver = document.getElementById('ver');
    var ocultar = document.getElementById('ocultar');
    if (contra.type == "password") {
        contra.type = "text";
        ver.style.display = 'none';
        ocultar.style.display = '';

    } else if (contra.type == "text") {
        contra.type = "password";
        ver.style.display = '';
        ocultar.style.display = 'none';
    }
}



