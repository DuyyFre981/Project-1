

<div class="row mb">
                    <div class="box-title">Tài khoản </div>
                    <div class="box-content formtaikhoan">
                        <?php
                         if(isset($_SESSION['user'])){
                            extract($_SESSION['user'])
                        ?>

                                <div class="row mb">
                                    Xin chào,
                                   <b><?=$user?></b> 
                                </div>
                                <div class="row">
                                    
                                   
                                    <li>
                                        <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                    </li>
                                    <?php
                                        if($rule==1){

                                        
                                    ?>
                                    <li>
                                        <a href="admin/index.php">Đăng nhập admin</a>
                                    </li>
                                    <?php } ?>
                                    <li>
                                        <a href="index.php?act=thoat">Thoát</a>
                                    </li>
                                </div>
                        <?php 
                        }else{
                        ?>
                                <form action="index.php?act=dangnhap" method="post">
                                Tên đăng nhập <br>
                                <input type="text" name="user" id=""> <br>
                                Mật khẩu <br>
                                <input type="password"  name="pass" id=""> <br>
                                <input type="submit" name="dangnhap" value="Đăng nhập" style="background-color:green;color:white;text-align:center; " id="btn-login"> <br> 
                                 <input type="checkbox"> Ghi nhớ tài khoản
                            </form>
                            <li>
                               <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                            </li>
                            <li>
                                <a href="index.php?act=dangky">Đăng kí mới</a>
                            </li> 

                        <?php
                           }
                        ?>
                       
                    </div>
                </div>
                <div class="row mb">
                    <div class="box-title">Danh Mục</div>
                    <div class="box-content-2 danhmuc">
                        <ul>
                            <?php
                                foreach ($dsdm as $ds) {
                                    extract($ds);
                                    $linkds = 'index.php?act=sanpham&&iddm='.$id;
                                    echo '<li>
                                    <a href="'.$linkds.'">'.$name.'</a>
                                    </li>';
                                }
                            ?>
                            <!-- <li><a href="">Tiểu thuyết</a></li> -->
                          
                        </ul>
                    </div>
                    <div class="box-footer searchbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input class="mb" type="text" name="kyw">
                            <input type="submit" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row ">
                    <div class="box-title">Top sản phẩm</div>
                    <div class="row box-content">
                        <?php 
                            foreach ($list10 as $sptop) {
                                extract($sptop);
                                $linkct = 'index.php?act=sanphamct&id='.$id;
                                $hinhanh = $img_path.$img;
                                echo '<div class="row mb bestseller">
                                <img src="'.$hinhanh.'" alt="">
                                <a href="'.$linkct.'">'.$name.'</a>
                            </div>';
                            }
                        ?>
                        
                        
                    </div>
                </div>