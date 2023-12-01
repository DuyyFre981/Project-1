<?php 
     function insert_binhluan($comment,$iduser,$idpro,$ngaybl){
        $sql = "INSERT INTO binhluan(comment,iduser,idpro,ngaybl) values('$comment','$iduser','$idpro','$ngaybl')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idpro){
        if($idpro>0){
            $sql = "SELECT * from binhluan where idpro ='".$idpro."' order by id desc";
        }else{
            $sql = "SELECT * from binhluan where 1";
        }
        $listbl = pdo_query($sql);
        return $listbl;
    }
    function loaduser_bl($iduser){
        $sql = "SELECT * from taikhoan where id =".$iduser;
        $user = pdo_query_one($sql);
        return $user;
    }
    function delete_binhluan($id){
        $sql = "DELETE FROM binhluan where id=".$id;
                    pdo_execute($sql);
    }
?>