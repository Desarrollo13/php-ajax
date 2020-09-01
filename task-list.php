<?php
include('database.php');
$query = "SELECT * from task";
$result = mysqli_query($connection, $query);
if(!$result){
    die('Query Failed'.mysqli_error_list($connection));
}
$json=array();
while($row= mysqli_fetch_array($result)){
    /* cargo un array json con ojetos json */
    $json[]=array(
        'name' => $row['name'],
        'description'=>$row['description'],
        'id'=>$row['id']
    );

}
/* lo codifico o lo casteo */
  $jsonstring= json_encode($json);
  echo $jsonstring;




?>