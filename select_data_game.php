<?php
include 'conn.php';

$id = $_POST['id'];

$queryResult = $connect->query("SELECT * FROM datagame WHERE id='" . $id . "'");
$result = array();

if($queryResult){
    while($fetchData = $queryResult->fetch_assoc()){
        $result[] = $fetchData;
    }
    if($result==[]){
        echo json_encode(
            array(
                'status' => 'Success',
                'message' => 'Data game kosong dengan id = '.$id.'',
                'data' => $result,
            )
        );
    }else{
        echo json_encode(
            array(
                'status' => 'Success',
                'message' => 'Berhasil ambil data game dengan id = '.$id.'',
                'data' => $result,
            )
        );
    }
}
else{
    echo json_encode(
        array(
            'status' => 'Failed',
            'message' => 'Gagal ambil data game dengan id = '.$id.'',
            'error' => $connect->error,
        )
    );
}
?>