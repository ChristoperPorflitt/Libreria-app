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
        <div class="form-box login">
            <form action="{{ route('register')}}">
                <h2>Inicia sesión</h2>
                <div class="input-box">
                    <input type="text" required>
                    <label>Nombre de usuario</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" required>
                    <label>Contraseña</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="logreg-link">
                    <p>¿No tienes cuenta? <a href="/register">Registrate</a></p>
                </div>
                <button type="submit" class="btn">Iniciar sesión</button>
            </form> 
        </div>
        <div class="info-text login">
            <h2>Welcome back!</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum libero placeat asperiores, quisquam sapiente consequatur aut eius unde cumque nostrum nihil perspiciatis laboriosam a fugiat quia at vero error. Cumque.</p>
        </div>
    </div>

        
</body>
</html>