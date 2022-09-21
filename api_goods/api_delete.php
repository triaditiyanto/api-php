<?php

    include "conn.php";

    $id = isset($_POST["id_goods"]) ? $_POST["id_goods"] : "" ;

    $sql = "DELETE FROM goods WHERE id_goods='$id' ";

    // echo $sql;
    //echo 'test';

    $query = mysqli_query($conn, $sql);
    
    if($query){
        $massage = "Deleted data";
    }else{
        $massage = "Failed";
    }

    $response = array(
        'status' => 'Good',
        'massage' => $massage 
    );

    echo json_encode($response);


?>