<?php
if (isset($_POST['submit']))
{
        $nombre = $_POST['nombre'];
        $raza = $_POST['raza'];
        $edad = $_POST['edad'];
        $cliente = $_POST['cliente'];
       
        $host = "localhost";
        $username = "root";
        $password = "";
        $basededatos ="gato";

        $conexion = mysqli_connect($host, $username, $password, $basededatos);
                if (!$conexion) {
                        die("Error de conexion" . mysqli_connect_error());
                        }
        $sql = "INSERT INTO registroo (id, nombre, raza, edad, cliente VALUES ('0','$nombre', '$raza', '$edad', '$cliente')";
        $rs = mysqli_query($conexion, $sql);
        if ($rs) {
                echo "El registro ha sigo anexado";
        }
        mysqli_close($conexion);



        }
 
        ?>
<?php
echo "<table style='border: solid 1px black;'>";

echo "<tr><th>Id</th><th>Nombre</th><th>raza</th><th>edad</th><th>cliente</th></tr>";


class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gato";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, nombre, raza, edad, cliente FROM registroo");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>     
 <body background="fondo.png">   