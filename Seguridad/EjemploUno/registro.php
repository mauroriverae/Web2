<?php
       function renderForm() {
        echo '
        <h2>Registro</h2>
        <form  method="post">
            <input name= "email" type="email" placeholder ="ingrese su email">
            <input  name= "password" type="password"  placeholder ="ingrese su contraseña">
            <button>Crear cuenta</button>
        </form>
        ';
     }
 

    renderForm();

    if(!empty($_POST['email'])&& !empty($_POST['password'])){
        $userEmail= $_POST['email'];
        $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT); 
        
        $db = new PDO('mysql:host=localhost;'.'dbname=hashing;charset=utf8','root','');
        $query= $db->prepare('INSERT INTO users(email, password)VALUES(?, ?)');
        $query->execute([$userEmail, $userPassword]);
      
    }
