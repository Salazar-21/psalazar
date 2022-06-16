<?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $basededatos ="gato";

        $conexion = mysqli_connect($host, $username, $password, $basededatos);


        if($conexion->connect_errno > 0){
    die('Error: No es posible establecer la conexión: [' . $link->connect_error . ']');
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, nombre, raza, edad, cliente, bio FROM registroo");
  $stmt->execute();
}

$id=$conexion -> real_escape_string($_POST['id']);
$extraerdato = $conexion->query("SELECT * FROM registroo where id=$id");
$fetch = mysqli_fetch_array($extraerdato);
$id = $fetch['id'];
$nombre = $fetch['nombre'];
$raza = $fetch['raza'];
$edad = $fetch['edad'];
$cliente = $fetch['cliente'];
$bio = $fetch['bio'];
$imagen = $fetch['imagen'];

  ?>

<center> <div class="personaje">
  <div class="nombre">nombre: <?php echo $nombre = $fetch['nombre']; ?><br></div> <br>
  <div class="nombre" >raza: <?php echo $raza = $fetch['raza']; ?><br></div><br>
  <div class="nombre">edad: <?php echo $edad = $fetch['edad']; ?><br></div><br>
  <div class="nombre">cliente: <?php echo $cliente = $fetch['cliente']; ?><br></div><br>
  <div class="nombre">Bio: <?php echo $bio = $fetch['bio']; ?></div><br>
    <div class="foto"  ><img width="500" src="data:image/jpeg;base64,<?php echo  base64_encode($fetch['imagen']); ?>"></div>
<body background="fondo.png">
</div> </center>

<!--hecho por milagros-->