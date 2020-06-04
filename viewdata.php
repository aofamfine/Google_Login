<?php 
if(!isset($_GET['data'])){

    echo "<center><h1> No Data </h1><center>";
}
else{
    $data = $_GET['data'];
    $data = json_decode($data);

    echo "Name: ".$data->name."<br>";
    echo "Email: ".$data->email."<br>";
    echo "ID: ".$data->id."<br>";
    echo "locale: ".$data->locale."<br>";
    echo "picture:   <img src='$data->picture' width='120' heigh='120'><br>";
}
?>