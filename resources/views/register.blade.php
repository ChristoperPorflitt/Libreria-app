<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="wrapper">
        <div class="form-box register">
            <form method="POST" action="{{ route('validationRegister')}}">
                @csrf
                <h2>Registrate</h2>
                <div class="input-box">
                    <input id="name" name="name" type="text">
                    <label>Nombre de usuario</label>
                    <i class='bx bxs-user'></i>
                    <div id="nameError" class="errorsMessage"></div>
                </div>
                <div class="input-box">
                    <input id="email" name="email" type="text">
                    <label>Correo electrónico</label>
                    <i class='bx bxs-envelope'></i>
                    <div id="emailError" class="errorsMessage"></div>
                </div>
                <div class="input-box">
                    <input id="password" name="password" type="password">
                    <label>Contraseña</label>
                    <i class='bx bxs-lock-alt'></i>
                    <div id="passwordError" class="errorsMessage"></div>
                </div>
                <div class="input-box">
                    <input id="rePassword" name="rePassword" type="password">
                    <label>Repetir contraseña</label>
                    <i class='bx bxs-lock-alt'></i>
                    <div id="rePasswordError" class="errorsMessage"></div>
                </div>
                <div class="logreg-link">
                    <p>¿Ya tienes cuenta? <a href="/login">Inicia sesión</a></p>
                </div>
                <button type="submit" class="btn">Registrarse</button>
            </form> 
        </div>
        <div class="info-text register">
            <h2>Sign up!</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum libero placeat asperiores, quisquam sapiente consequatur aut eius unde cumque nostrum nihil perspiciatis laboriosam a fugiat quia at vero error. Cumque.</p>
        </div>
    </div>
    <script src="{{ asset('js/forms/validationFormRegister.js') }}"></script>
</body>
</html>