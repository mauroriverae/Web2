
<?php 
    if(!empty($_POST)){ // pregunta si no esta vacio para mostrarse, 
        //es decir se muestra todo solo cuando esten los datos cargados
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        echo('Nombre: '.$nombre);
        echo('<br>');
        echo('Apellido: '.$apellido);
        echo('<br>');
        echo('Edad: '.$edad);
        echo('<br>');
    }
?>
<form method="POST" action="indexdos.php">
    <label>Nombre</label><input type="text" name="nombre">
    <label>Apellido</label><input type="text" name="apellido">
    <label>Edad</label><input type="text" name="edad">
    <input type="submit">
</form>
<a href ='indexdos.php'> volver </a>