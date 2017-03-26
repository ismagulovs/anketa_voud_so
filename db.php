<?php
function db_connect() //подключение к базе
{
    $conn_string = "host=localhost port=5432 dbname=anketa_voud_so_2017 user=postgres password=pg75520715";
    $connection = pg_connect($conn_string);
    if(!$connection){
        return 'error';
    }
    return $connection;
}

function db_result_to_array($result)//перебор в массив
{
    $res_array = array();
    $count = 0;
    while($row = pg_fetch_array($result)){
        $res_array[$count] = $row;
        $count++;
    }
    return $res_array;
}
function get_obl()//вывод областей
{
    db_connect();
    $query = "select id, name_rus, name_kaz from tbl_obl order by id";
    $result = pg_query($query);
    $result = db_result_to_array($result);
    return $result;
}

function get_raion()//вывод областей
{
    db_connect();
    $query = "select id_raion, name_rus, name_kaz from tbl_raion where id_obl = 1 order by id_obl";
    $result = pg_query($query);
    $result = db_result_to_array($result);
    return $result;
}

