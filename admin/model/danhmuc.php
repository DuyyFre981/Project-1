<?php 
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO danhmuc(name) values( '$tenloai')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc where id=".$id;
                    pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "SELECT * from danhmuc order by id desc";
                $listdm = pdo_query($sql);
        return $listdm;
    }
    function update_danhmuc($tenloai,$id){
            $sql = "UPDATE  danhmuc set name ='$tenloai' where id =".$id;
            pdo_execute($sql);
    }

    function load_once_danhmuc($id){
        $sql = "SELECT * from danhmuc where id =".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
?>