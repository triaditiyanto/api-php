<?php

    include "conn.php";

    $name_goods = isset($_POST["name_goods"]) ? $_POST["name_goods"] : "" ;
    $type_goods = isset($_POST["type_goods"]) ? $_POST["type_goods"] : "" ;
    $status = isset($_POST["status"]) ? $_POST["status"] : "" ;


    $sql = "INSERT INTO `goods` (`name_goods`, `type_goods`, `status`) VALUES ('".$name_goods."', '".$type_goods."', '".$status."')";

    // echo $sql;
    //echo 'test';

    $query = mysqli_query($conn, $sql);
    
    if($query){
        $massage = "Berhasil disimpan";
    }else{
        $massage = "gagal disimpan";
    }

    $response = array(
        'status' => 'Good',
        'massage' => $massage 
    );

    echo json_encode($response);


?>