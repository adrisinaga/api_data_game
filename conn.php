<?php

$connect = new mysqli("localhost","root","","datagame");

if($connect){
    // echo "Connection Succes";
}else{
    echo "Connection Failed";
    exit();
}
?>