<?php
       function renderForm() {
        echo '
        <h2>Registro</h2>
        <form  method="post">
            <input name= "email"  placeholder ="ingrese su email">
            <input  name= "password" type="password"  placeholder ="ingrese su contraseña">
            <select name="select">
                <option value="adm">adm</option>
                <option value="invited">invited</option>
            </select>
            <button>Crear cuenta</button>
        </form>
        ';
     }
 

    renderForm();

    if(!empty($_POST['email'])&& !empty($_POST['password'])){
        $userEmail= $_POST['email'];
        $userLevel = $_POST['select'];
        $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT); 
        
        $db = new PDO('mysql:host=localhost;'.'dbname=hashing;charset=utf8','root','');
        $query= $db->prepare('INSERT INTO users(email, level, password)VALUES(?, ?, ?)');
        $query->execute([$userEmail, $userLevel, $userPassword]);
      
    }
