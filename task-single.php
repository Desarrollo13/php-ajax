<?php
include('database.php');
$id=$_POST['id'];
$query="SELECT * FROM task WHERE id=$id";
$result= mysqli_query($connection,$query);
if(!$result){
    die('Query Failed.');
}

$json=array();
/* vamos a transformar en json los datos obtenidos convierto el primer dato en una fila $row */
while($row = mysqli_fetch_array($result)){
    $json[]=array(
        'name' => $row['name'],
        'description' => $row['description'],
        'id' => $row['id']
    );

}
$jsonstring=  json_encode($json[0]);
echo $jsonstring;

?>