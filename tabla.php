<? php
        echo "<table style 'border: solid 1px black;'> =";
        echo "<tr><th>Id</th><th>mascota</th>cliente</th><th>Servicio</th><th>Edad</th><th>";

        
        class TableRows extends RecursiveIteratorIterator{
                
        function __construct($it){
                parent::__construct($it, self::LEAVES_ONLY);
                }
        function current(){

                return "<td style=´width:150px;border:1px solid black;´>".parent::current()."</td>";
                   }
        function beginchildren (){
                echo "<tr>";
        }                   
        function endchildren(){
                echo "</tr>"."\n";
        }
        }
        $servername="localhost";
        $username="root";
        $password=""
        $dbname="gatos"

        try{
                $conn=new PDO("mysql:host=$servername;dbname=dbname",$username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT mascota,cliente, Servicio, Edad FROM registro");
                $stmt->execute();
                $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach(new TableRows(new RecursiveIteratorIterator($stmt->FetchAll()))as $k=>$v){
                        echo$v;
                }
          }catch(PDOException $e){
                echo "Error:".$e->getMessage();
          }
        $conn->(PDOException $e){
                echo "Error":" $e->getMessage();
        }
       $conn 


        }
        <