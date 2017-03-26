<?php
include_once 'db.php';
if($_POST['type'] == 'login'){
    $_POST['id_obl'] ? $id_obl = $_POST['id_obl'] : exit();
    $_POST['id_raion'] ? $id_raion = $_POST['id_raion'] : exit();
    $_POST['id_uchzav'] ? $id_uchzav = $_POST['id_uchzav'] : exit();
    $_POST['password'] ? $password = $_POST['password'] : exit();

    $query = "select id, password from uch_zav where id_obl = $id_obl and id_raion = $id_raion and id_uch_zav = $id_uchzav";
    db_connect();
    $res = pg_query($query);
    if(pg_num_rows($res) > 0){
        $item = pg_fetch_array($res);
        if($password == $item['password']){
            echo json_encode(['type'=>'ok']);
        }else{
            echo json_encode(['type'=>'error']);
        }
    }else{
        echo json_encode(['type'=>'error']);
    }

}