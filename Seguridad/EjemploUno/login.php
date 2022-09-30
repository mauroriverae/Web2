<?php
    function renderForm() {
       echo '
       <h2>Login</h2>
       <form  method="post">
        <input type="text" name="email" placeholder ="ingrese su email">
        <input type="password" name="password"  placeholder ="ingrese su contraseña">
        <button>Login</button>
       </form>
       ';
    }

    //session open
    session_start();

    // reviso si esta logg ! else muestro login
    if(isset($_SESSION['logueado']) && $_SESSION['logueado'] ==true){
        echo "Bienvenido  " . $_SESSION['username'];
    } else {
        renderForm();
    }
    

    if(!empty($_POST['email'])&& !empty($_POST['password'])){
        $userEmail= $_POST['email'];
        $userPassword = $_POST['password'];

        $db = new PDO('mysql:host=localhost;'.'dbname=hashing;charset=utf8','root','');
        $query= $db->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute([$userEmail]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        
        if($user && password_verify($userPassword, $user->password)){
            $_SESSION['logueado']= true;
            $_SESSION['username'] = $userEmail;
            echo "acceso exitoso";
        } else {
            echo "acceso denegado";
        }
    }
    