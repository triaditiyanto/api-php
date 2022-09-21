<?php
    include "conn.php";

    $sql = "SELECT * FROM goods";
    $query = mysqli_query($conn, $sql);

    while($ret = mysqli_fetch_array($query)){
        
        $item[] = array(
            'id_goods' => $ret["id_goods"],
            'name_goods' => $ret["name_goods"],
            'type_goods' => $ret["type_goods"],
            'status' => $ret["status"],
        );
    }

    $response = array(
        'massage' => 'Got it !',
        'return' => $item
    );

    echo json_encode($response);
?>
