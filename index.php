<html>
<head>

</head>
<body>

<?php

include "connect.php";

$conn= mysqli_connect('localhost','root','','salon');

$sql = "SELECT * FROM motocykle";

$result=$conn->query($sql);


echo '<table>';
foreach($result as $value){


    echo   "<tr><td>".$value['marka']."</td><td>".$value['model']."</td><td>".$value['pojemnosc']."</td><td>".$value['rok']."</td></tr>";

}


echo '</table>';
?>


</body>
</html>