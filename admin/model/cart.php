<?php
    function viewcart(){
        global $img_path;
        $tong = 0;
                    $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh = $img_path.$cart[2];
                            $ttien = $cart[3]*$cart[4];
                            $tong += $ttien;
                            $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type ="button" value="Xóa" ></a>';
                           echo ' <tr>
                                        <td> <img src="'.$hinh.'" height ="80px" alt=""></td>
                                        <td>'.$cart[1].'</td> 
                                        <td>'.$cart[3].'</td>
                                        <td>'.$cart[4].'</td>
                                        <td>'.$ttien.'</td>
                                        <td>'.$xoasp.'</td>
                                    </tr>';
                            $i=$i+1;
                        }

                            echo '<tr>
                            <td colspan = "4">Tổng đơn hàng</td>
                            <td>'.$tong.'<td>
                        
                            </tr>'; 
    }
    function tongdonhang(){
        $tong = 0;
        foreach($_SESSION['mycart'] as $cart){
            $ttien = $cart[3]*$cart[4];
            $tong += $ttien;
        
        }
        return $tong;
    }
    function insert_bill($iduser,$name,$email,$address,$phone,$pttt,$ngaydathang,$tongdonhang){
        $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_adress,bill_phone,bill_pttt,total,ngaydathang)
         values('$iduser','$name','$email','$address','$phone','$pttt','$tongdonhang','$ngaydathang')";
     return  pdo_execute_return_lastInsertID($sql); 
    }
    function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
        $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill)
         values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
       return pdo_execute($sql);
    }
    function loadonce_bill($id){
        $sql = "SELECT * from bill where id =".$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }
    function loadall_bill($kyw='',$iduser){
        $sql = "SELECT * from bill where 1";

      if($iduser>0) $sql.= " AND iduser =".$iduser;
      if($kyw!="") $sql.= " AND id like '%".$kyw."%'";
        $sql.= " order by id desc";
        $billlist = pdo_query($sql);
        return $billlist;
    }
    function loadall_cart_count($idbill){
        $sql = "SELECT * from cart where idbill =".$idbill;
        $bill = pdo_query($sql);
        return sizeof($bill);
    }
    function get_ttdh($s){
        switch($s){
            case '0': 
                $tt = 'Đơn hàng mới';
                break;
                case '1': 
                    $tt = 'Đang xử lý';
                    break;
                case '2': 
                    $tt = 'Đang giao hàng';
                    break;
                    case '3': 
                        $tt = 'Đã hoàn tất';
                        break;
                default:
                $tt = 'Đơn hàng mới';
        }
        return $tt;
    }
    
function loadall_thongke(){
    $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm ";
    $sql.= " group by danhmuc.id order by danhmuc.id ";
    
    $listthongke = pdo_query($sql);
    return $listthongke;
}

?>