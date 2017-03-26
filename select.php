<?php
    include_once 'db.php';
    if($_POST['type']==0){
        $query = "select id, name_rus, name_kaz from tbl_obl";
        db_connect();
        $regs = pg_query($query);
        if ($regs) {
            $num = pg_num_rows($regs);
            $i = 0;
            while ($i < $num) {
                $obl[$i] = pg_fetch_array($regs);
                $i++;
            }
            $result = array('obl'=>$obl);
        }else {
            $result = array('type'=>'error');
        }

    }else if($_POST['type']==1){
        $id_obl = $_POST['id_obl'];
        $query = "select id_raion as id, name_rus, name_kaz from tbl_raion where id_obl  = $id_obl  order by id_obl";
        db_connect();
        $regs = pg_query($query);
        if ($regs) {
            $num = pg_num_rows($regs);
            $i = 0;
            while ($i < $num) {
                $raion[$i] = pg_fetch_array($regs);
                $i++;
            }
            $result = array('raion'=>$raion);
        }else {
            $result = array('type'=>'error');
        }
    }else if($_POST['type']==2){
        $id_obl = $_POST['id_obl'];
        $id_raion = $_POST['id_raion'];
        $query = "select id_uch_zav as id, name_kaz, name_rus from uch_zav where id_obl = $id_obl and id_raion = $id_raion order by id_uch_zav";
        db_connect();
        $regs = pg_query($query);
        if ($regs) {
            $num = pg_num_rows($regs);
            $i = 0;
            while ($i < $num) {
                $uchZav[$i] = pg_fetch_array($regs);
                $i++;
            }
            $result = array('uchZav'=>$uchZav);
        }else {
            $result = array('type'=>'error');
        }
    }
echo json_encode($result);