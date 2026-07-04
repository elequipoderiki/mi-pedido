<?php

$dbconnection = mysqli_connect("localhost", "root", "", "tpintegrador");
if(mysqli_connect_error()){
    echo "Error connecting database <br>";
}else {
    echo "Connection successfully <br>";
}
?>