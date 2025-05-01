document.addEventListener('DOMContentLoaded', function () {
    // Se obtiene el formulario
    const form = document.querySelector('form');

    // Se obtienen los campos del name
    const name = document.getElementById('name');
    const nameError = document.getElementById('nameError');

    // Expresión regular para validar que el nombre solo tenga caracteres
    const nameRegex = /^[a-zA-Z]+$/;

    const email = document.getElementById('email');
    const emailError = document.getElementById('emailError');

     // Expresión regular para verificar si contiene solo letras (sin espacios, números ni caracteres especiales)
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Se obtienen los campos del password
    const password = document.getElementById('password');
    const passwordError = document.getElementById('passwordError');
    const rePassword = document.getElementById('rePassword');
    const rePasswordError = document.getElementById('rePasswordError'); 

    form.addEventListener('submit', function (e) {
        let isValid = true;

        // Limpia los errores anteriores
        nameError.textContent = '';
        emailError.textContent = '';
        passwordError.textContent = '';
        rePasswordError.textContent = '';

        // Se obtienen los valores
        // trim() elimina los espacios 
        const nameValue = name.value.trim();
        const emailValue = email.value.trim();
        const passwordValue = password.value;
        const rePasswordValue = rePassword.value;

        // VALIDAR NOMBRE
        if (nameValue === '') {
            nameError.textContent = 'Este campo es obligatorio';
            isValid = false;
        }
        else if (nameValue.length < 4) {
            nameError.textContent = 'El nombre debe tener al menos 4 caracteres.';
            isValid = false;
        }
        else if (!nameRegex.test(nameValue)) {
            nameError.textContent = 'El nombre solo puede contener letras (sin espacios, números ni símbolos).';
            isValid = false;
        }

        // VALIDAR EMAIL
        if(emailValue == '') {
            emailError.textContent = 'Este campo es obligatorio';
            isValid = false;
        }
        else if(!emailRegex.test(emailValue)){
            emailError.textContent = 'El correo no tiene un formato válido'
            isValid = false;
        }

        // VALIDAR CONTRASEÑA
        if(passwordValue == ''){
            passwordError.textContent = 'Este campo es obligatorio';
            isValid = false;
        } 
        else if(passwordValue.length < 8){
            passwordError.textContent = 'La contraseña no puede ser menor a 8 caracteres';
            isValid = false;
        }

        // VALIDAR QUE LAS CONTRASEÑAS COINCIDAN
        if(rePasswordValue == '') {
            rePasswordError.textContent = 'Debe reingresar contreña';
            isValid = false;
        }
        else if(rePasswordValue != passwordValue) {
            rePasswordError.textContent = 'Las contraseñas no coindicen'
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault(); // Evita el envío del formulario
        }
    });
});
