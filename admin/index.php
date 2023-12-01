<?php 
   include "./model/pdo.php";
   include "./model/danhmuc.php";
   include "./model/sanpham.php";
   include "./model/taikhoan.php";
   include "./model/binhluan.php";
   include "./model/cart.php";
    include "header.php";


    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            // controller danh mục
            case 'adddm':
               if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = 'thêm thành công';
               }
                include "danhmuc/add.php";
            break;
            case 'listdm':
               $listdm = loadall_danhmuc();
                include "./danhmuc/listdm.php";
                break;

            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdm = loadall_danhmuc();
                include "./danhmuc/listdm.php";
                break;

            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                   $dm= load_once_danhmuc($_GET['id']);
                }
              
                include "./danhmuc/update.php";
            break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($tenloai,$id);
                    $thongbao = 'Cập nhật thành công';
                   }
                $sql = "SELECT * from danhmuc order by id";
                $listdm = pdo_query($sql);
                include "./danhmuc/listdm.php";
                break;


                    // controller sản phẩm
                    case 'addsp':
                        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                         $iddm = $_POST['iddm'];
                         $tensanpham = $_POST['tensp'];
                         $giasanpham = $_POST['giasp'];
                         $motasanpham = $_POST['motasp'];
                         $filename = $_FILES['hinhsp']['name'];
                        
                         $target_dir = "../upload/";
                         $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
                         move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file);
                         insert_sanpham($tensanpham,$giasanpham,$filename,$motasanpham,$iddm);
                         $thongbao = 'thêm thành công';
                        }
                        $listdm = loadall_danhmuc();
                         include "sanpham/add.php";
                     break;
                     case 'listsp':
                        if(isset($_POST['listok'])&&($_POST['listok'])){
                            $kyw = $_POST['kyw'];
                            $iddm = $_POST['iddm'];
                        } else {
                            $kyw = "";
                            $iddm = 0;
                        }
                        $listdm = loadall_danhmuc();
                        $listsp = loadall_sanpham($kyw,$iddm);
                         include "./sanpham/listsp.php";
                         break;
         
                     case 'xoasp':
                         if(isset($_GET['id'])&&($_GET['id']>0)){
                             delete_sanpham($_GET['id']);
                         };
                         $listdm = loadall_danhmuc();
                            $listsp = loadall_sanpham("",0);
                         include "./sanpham/listsp.php";
                         break;
         
                     case 'suasp':
                         if(isset($_GET['id'])&&($_GET['id']>0)){
                            $sanpham= load_once_sanpham($_GET['id']);
                         }
                         
                        $listdm = loadall_danhmuc();
                         include "./sanpham/update.php";
                     break;
                     case 'updatesp':
                         if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $id = $_POST['id'];
                            $iddm = $_POST['iddm'];
                            $tensanpham = $_POST['tensp'];
                            $giasanpham = $_POST['giasp'];
                            $motasanpham = $_POST['motasp'];
                            $filename = $_FILES['hinhsp']['name'];
                           
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
                            move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file);
                             update_sanpham($id,$iddm,$tensanpham,$giasanpham,$motasanpham,$filename);
                             $thongbao = 'Cập nhật thành công';
                            }
                            $listsp = loadall_sanpham("",0);
                            $listdm = loadall_danhmuc();
                         include "./sanpham/listsp.php";
                         break;
            

                         case 'dskh':
                           $listtk = loadall_taikhoan();
                           include "./taikhoan/list.php";
                            break;
                        case 'dsbl':
                            $listbl = loadall_binhluan(0);
                            include "./binhluan/list.php";
                            break;
                        case 'xoabl': 
                            if(isset($_GET['id'])&&($_GET['id']>0)){
                                delete_binhluan($_GET['id']);
                               
                            };
                            $listbl = loadall_binhluan(0);
                            include "./binhluan/list.php";
                            break;
                            case 'qldonhang': 
                                if(isset($_POST['kyw'])&&($_POST['kyw']!=="")){
                                    $kyw = $_POST['kyw'];
                                } else{
                                    $kyw = "";
                                }
                                $listbill = loadall_bill($kyw,0);
                                include "./donhang/listdonhang.php";
                                break;
                           case 'thongke':
                            $listthongke = loadall_thongke();
                                include "./thongke/list.php";
                            break;
                            case 'bieudo':
                                $listthongke = loadall_thongke();
                                include "./thongke/bieudo.php";
                                break;
       
            default :
                include "home.php";
            break;

           
            
        }   
    }else {
        include "home.php";
    }
   
    include "footer.php"; 
?>
