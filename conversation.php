<?php

include ("conexion.php");

$result2 = $conect->query("SELECT user, message FROM conversation order by iduser asc ");
 while($data = $result2->fetch_array(MYSQLI_ASSOC)){                   
    echo"<p><font color='black'>".$data["user"]." dice: </font><i>".$data["message"]."</i></p>";
}
$conect->close();

?> 