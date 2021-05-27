<?php
include 'conn.php';

$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$icon = $_POST['icon'];
$play =$_POST['play'];
$tag1 = $_POST['tag1'];
$tag2 = $_POST['tag2'];
$tag3 = $_POST['tag3'];
$tag4 =$_POST['tag4'];
$tag5 =$_POST['tag5'];
$run =$_POST['run'];
$like =$_POST['like'];
$comn =$_POST['comn'];
$report = $_POST['report'];
$statusgame =$_POST['statusgame'];
$published = $_POST['published'];

$connect->query("UPDATE datagame 
                SET title='".$title."', 
                    `desc`='".$desc."', 
                    icon='".$icon."',
                    play='".$play."',
                    tag1='".$tag1."',
                    tag2='".$tag2."',
                    tag3='".$tag3."',
                    tag4='".$tag4."',
                    tag5='".$tag5."',
                    run='".$run."',
                    `like`='".$like."',
                    comn='".$comn."',
                    report='".$report."',
                    statusgame='".$statusgame."'
                    
                WHERE id='".$id."'   ");

if ($connect) {
    echo json_encode(
        array(
            'status' => 'Success',
            'message' => 'Berhasil edit data game dengan ID = '.$id.'',
            'statusCode' => '200',
        )
    );
} else {
    echo json_encode(
        array(
            'status' => 'Failed',
            'message' => 'Gagal edit data game dengan ID = '.$id.'',
            'statusCode' => '400',
            'error' => $connect->error,
        )
    );
}
?>