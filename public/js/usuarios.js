document.addEventListener("DOMContentLoaded", function () {
    const checkbox = document.getElementById('inline1');
    const inputPass = document.getElementById('password');
    const label = document.querySelector('label[for="inline1"]');

    checkbox.addEventListener('change', function () {
        inputPass.disabled = !this.checked;
        inputPass.placeholder = "Ingrese nueva contraseña";
        label.textContent = "Desmarcar para cancelar";

        if (!this.checked) {
            inputPass.value = "";
            inputPass.placeholder = ""
            label.textContent = "Cambiar contraseña";
            
        }else{
      
        }
    });
});
