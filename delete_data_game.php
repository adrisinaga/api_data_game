<?php
include 'conn.php';
$id = $_POST['id'];

$connect->query("DELETE FROM datagame WHERE id='".$id."'");
if ($connect) {
    echo json_encode(
        array(
            'status' => 'Success',
            'message' => 'Berhasil hapus data game dengan ID = '.$id.'',
            'statusCode' => '200',
        )
    );
} else {
    echo json_encode(
        array(
            'status' => 'Failed',
            'message' => 'Gagal hapus data game dengan ID = '.$id.'',
            'statusCode' => '400',
            'error' => $connect->error,
        )
    );
}
?>