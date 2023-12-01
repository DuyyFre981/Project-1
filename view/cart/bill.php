

<div class="content">
    <div class="box-left">
            <form action="index.php?act=billconfirm" method="post">
            <div class="row mb">
                
                <div class="box-title">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row box-content">
                    
                       <table class="bill" border="0">
                        <?php
                            if(isset($_SESSION['user'])){
                                $name = $_SESSION['user']['user'];
                                $adress = $_SESSION['user']['adress'];
                                $email = $_SESSION['user']['email'];
                                $phone = $_SESSION['user']['phone'];
                            } else{
                                $name = ""; 
                                $adress ="";
                                $email ="";
                                $phone ="";
                            }
                        ?>
                       <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?=$name?>"></td>
                       </tr>
                       <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="adress" value="<?=$adress?>"></td>
                       </tr>
                       <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                       </tr>
                       <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="phone" value="<?=$phone?>"></td>
                       </tr>
                       </table>
                </div>
            </div>
            <div class="row mb">
                
                <div class="box-title">Phương thức thanh toán</div>
                <div class="row  pttt">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt" checked>   Trả tiền khi nhận hàng</td>
                            <td><input type="radio"  value='2' name="pttt" >    Chuyển khoản ngân hàng</td>
                            <td><input type="radio" value="3" name="pttt" >   Thanh toán online</td>
                        </tr>
                    </table>
                       
  
                </div>
            </div>
            <div class="row mb">
                
                <div class="box-title">Chi tiết đơn hàng</div>
                <div class="row cart">
                        <table class="row">
                        <tr>
                            <th>Hình</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            
                        </tr>
                        <?php 
                          global $img_path;
                          $tong = 0;
                                      $i = 0;
                                          foreach ($_SESSION['mycart'] as $cart) {
                                              $hinh = $img_path.$cart[2];
                                              $ttien = $cart[3]*$cart[4];
                                              $tong += $ttien;
                                              echo ' <tr>
                                              <td> <img src="'.$hinh.'" height ="80px" alt=""></td>
                                              <td>'.$cart[1].'</td> 
                                              <td>'.$cart[3].'</td>
                                              <td>'.$cart[4].'</td>
                                              <td>'.$ttien.'</td> </tr>';
                                              $i=$i+1;
                                            }
                                            echo '<tr>
                                            <td colspan = "4">Tổng đơn hàng</td>
                                            <td><b>'.$tong.'<b></td>
                                        
                                            </tr>'; 
                          ?>
                        </table>
                       
  
                </div>
            </div>
            <div class="row">
                 <a href="index.php?act=viewcart"><button>TRỞ LẠI GIỎ HÀNG</button></a>
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div>
            </form>
    </div>

            <div class="box-right">
                <?php
                    include "./view/boxright.php";
                ?>

            </div>
</div>