<?php 
session_start();
include "./admin/model/cart.php" ;
include "./admin/model/taikhoan.php";
include "./admin/model/pdo.php";
include "./admin/model/sanpham.php";
include "./admin/model/danhmuc.php";
include "./view/header.php";

include "./global.php";
if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$dsdm = loadall_danhmuc();
$listspnew = loadall_sanpham_home();
$list10 = loadall_sanpham_top10();


    if(isset($_GET['act'])&&(($_GET['act'])!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                } else{
                    $kyw = "";
                }
                if(isset($_GET['iddm'])&&$_GET['iddm']>0){
                    $iddm = $_GET['iddm'];
                   
                } else{
                    $iddm=0;
                }
                $dssp = loadall_sanpham($kyw,$iddm);
                $namedm = load_ten_dm($iddm);
                include "./view/sanpham.php";
                break;

            case 'sanphamct':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                } else{
                    $kyw ="";
                }
                if(isset($_GET['idsp'])&&$_GET['idsp']>0){
                    $id = $_GET['idsp'];
                    $onesp = load_once_sanpham($id);
                    extract($onesp);
                    $spcungloai =load_sanpham_cungloai($id,$iddm);
                    
                    
                    include "./view/sanphamct.php";
                } else{
                    include "./view/home.php";
                }
                break;
                
            case 'gioithieu':
                include "./view/gioithieu.php";
                break;
            
            case 'lienhe':
                include "./view/lienhe.php";
                break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao = 'Đã đăng kí thành công!';
                }
                include './view/taikhoan/dangky.php';
                break;
            case 'dangnhap':
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $checkuser = check_user($user,$pass);
                        if(is_array($checkuser)){{
                            $_SESSION['user'] = $checkuser;
                            header('Location: index.php');
                            
                        }} else{
                          echo  $thongbao = '<h1 style="color:red;">Tài khoản không tồn tại, vui lòng kiểm tra hoặc đăng kí!</h1>';
                        }
                       
                    }
                    
            break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $adress = $_POST['adress'];
                    $phone = $_POST['phone'];
                   $id = $_POST['id'];
                   update_taikhoan($id,$email,$user,$pass,$adress,$phone);
                   $_SESSION['user'] = check_user($user,$pass);
                  header('Location: index.php?act=edit_taikhoan');
                  $thongbao = 'Cập nhật thành công!';
                }
                include './view/taikhoan/edittaikhoan.php';
            break;
            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email = $_POST['email'];
                   $checkemail = check_email($email);
                   if(is_array($checkemail)){
                        $thongbao = 'Mật khẩu của bạn là '.$checkemail['pass'];
                   } else{
                     $thongbao = 'Email không tồn tại, kiểm tra lại!';
                   }
             
                }
                include './view/taikhoan/quenmatkhau.php';
                break;
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;

            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $thanhtien = $soluong*$price;
                    $spadd = [$id,$name,$img,$price,$soluong,$thanhtien];
                    array_push($_SESSION['mycart'],$spadd);
                
                    
                }

                include './view/cart/viewcart.php'; 
                break;
            case 'delcart':
                if(isset($_GET['idcart'])){
                       array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart'] = [];
                }
                header('Location: index.php?act=viewcart');
                 break;
            case 'viewcart':
                include './view/cart/viewcart.php';
                break;   
            case 'bill':
                include './view/cart/bill.php';
                break; 
                case 'billconfirm':
                    // tạo bill
                    if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                        if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                        else $iduser = 0;
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $adress = $_POST['adress'];
                        $phone = $_POST['phone'];
                        $pttt = $_POST['pttt'];
                        $ngaydathang = date('h:i:a d/m/Y');
                        $tongdonhang = tongdonhang();
                        // tạo bill
                        $idbill = insert_bill($iduser,$name,$email,$adress,$phone,$pttt,$ngaydathang,$tongdonhang);
                        // insert into cart: $session mycart
                        foreach($_SESSION['mycart'] as $cart){
                            insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                            
                        }
                        // Xóa session cart
                        $_SESSION['cart']=[];
                    }
                    
                    $bill = loadonce_bill($idbill);
                    include './view/cart/billconfirm.php';
                    break;     
                    case 'mybill':
                      $listbill =  loadall_bill("",$_SESSION['user']['id']);
                        include './view/cart/mybill.php';
                        break;   
            default:
               include "./view/home.php";
                break;
        }
    } else{
        include "./view/home.php";
    }

    include "./view/footer.php";
?>