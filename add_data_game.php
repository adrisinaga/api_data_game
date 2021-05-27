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

$querySelectDataId = $connect->query("SELECT * FROM `datagame` WHERE title='" . $title . "'");
$cek = mysqli_num_rows($querySelectDataId);

if ($cek == 0) {
    //Jika user belum pernah input datagame
    $queryInsert = $connect->query("INSERT INTO `datagame`(`title`, `desc`, `icon`, `play`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `run`, `like`, `comn`, `report`, `statusgame`, `published`) 
                                    VALUES ('" . $title . "','" . $desc . "','" . $icon . "','" . $play . "','" . $tag1 . "','" . $tag2 . "','" . $tag3 . "','" . $tag4 . "','" . $tag5 . "','" . $run . "','" . $like . "','" . $comn . "','" . $report . "','" . $statusgame . "'
                                    ,'" . $published . "')");
    if ($queryInsert) {
        echo json_encode(
            array(
                'status' => 'Success',
                'message' => 'Berhasil tambah data game',
                'statusCode' => '200',
            )
        );
    } else {
        echo json_encode(
            array(
                'status' => 'Failed',
                'message' => 'Gagal menambahkan data game, ada yang salah memasukkan tipe data',
                'statusCode' => '400',
                'error' => $connect->error,
            )
        );
    }
} else {
    //Jika user sudah pernah input datagame
    echo json_encode(
        array(
            'status' => 'Failed',
            'message' => 'Data game sudah ada',
            'statusCode' => '400',
            'error' => $connect->error,
        )
    );

    // $queryUpdate = $connect->query("UPDATE `datagame` SET `title`='" . $title . "',`desc`='" . $desc . "' 
    //                                         ,`icon`='" . $icon . "',`play`='" . $play . "',`tag1`='" . $tag1 . "',`tag2`='" . $tag2 . "',`tag3`='" . $tag3 . "',`tag4`='" . $tag4 . "',`tag5`='" . $tag5 . "',`run`='" . $run . "',`like`='" . $like . "',`comn`='" . $comn . "'
    //                                         ,`report`='" . $report . "',`statusgame`='" . $statusgame . "',`published`='" . $published . "'
    //                                 WHERE `id`='" . $id . "'");
    // if ($queryUpdate) {
    //     echo json_encode(
    //         array(
    //             'status' => 'Success',
    //             'message' => 'Berhasil mengubah data game',
    //             'statusCode' => '200',
    //         )
    //     );
    // } else {
    //     echo json_encode(
    //         array(
    //             'status' => 'Failed',
    //             'message' => 'Gagal mengubah data game',
    //             'statusCode' => '400',
    //             'error' => $connect->error,
    //         )
    //     );
    // }
}
