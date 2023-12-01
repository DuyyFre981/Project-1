<?php 
    function insert_sanpham($tensp,$giasp,$hinhsp,$motasp,$iddm){
        $sql = "INSERT INTO sanpham(name,price,img,des,iddm) values('$tensp','$giasp','$hinhsp','$motasp','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "DELETE FROM sanpham where id=".$id;
                    pdo_execute($sql);
    }
    function loadall_sanpham_home(){
        $sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT 12;";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_sanpham_top10(){
        $sql = "SELECT * from sanpham where 1 order by view desc limit 0,9";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_sanpham($kyw,$iddm){
        $sql = "SELECT * from sanpham where 1";
        if($kyw !=""){
            $sql.= " and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql .= " and iddm ='".$iddm."'"; 
        }
        $sql.= " order by id desc";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function update_sanpham($id,$iddm,$tensanpham,$giasanpham,$motasanpham,$filename){
          if($filename!="")  $sql = "UPDATE  sanpham set iddm = '$iddm' ,name ='$tensanpham', price = '$giasanpham',img = '$filename', des = '$motasanpham' where id =".$id;
          else  $sql = "UPDATE  sanpham set iddm = '$iddm' ,name ='$tensanpham', price = '$giasanpham', des = '$motasanpham' where id =".$id;
            pdo_execute($sql); 
    }

    function load_once_sanpham($id){
        $sql = "SELECT * from sanpham where id =".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function load_sanpham_cungloai($id,$iddm){
        $sql = 'SELECT * from sanpham where iddm ='.$iddm.' and id <>'.$id.' ';
        $spcungloai = pdo_query($sql);
        return $spcungloai;
    }

    function load_ten_dm($iddm){
        if($iddm>0){
            $sql = "SELECT * from danhmuc where id =".$iddm;
             $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        } else{
            $iddm ="";
        }
    }
?>