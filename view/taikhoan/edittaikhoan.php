<div class="content">
        <div class="box-left">
            <div class="row mb">
              
                <div class="box-title">Cập nhật tài khoản</div>
                <div class="box-content frmedittk ">
                    <?php
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                        }
                    ?>
                 <form action="index.php?act=edit_taikhoan"  method="post">
                    <div class="row">
                    Email: <br>  <input type="email" name="email" value="<?=$email?>"> <br>
                    </div>
                    <div class="row">
                    Tài khoản: <br> <input type="text"name='user' value="<?=$user?>"> <br>
                    </div>
                   <div class="row">
                   Mật khẩu <br> <input type="password" name="pass" value="<?=$pass?>"> <br>
                   </div>
                    <div class="row">
                    Địa chỉ:  <br> <input type="text" name="adress" value="<?=$adress?>"> <br>
                    </div>
                    <div class="row">
                    Số điện thoại: <br> <input type="text" name="phone" value="<?=$phone?>"> <br>
                    </div>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">  
                        <input type="reset" value="Nhập lại">
                 </form>
        <h2 class="thongbao">
        <?php 
                if(isset($thongbao)&&($thongbao)!=""){
                    echo $thongbao;
                }
        ?>
        </h2>
       
                </div>
             </div>

            
        </div>

        
        <div class="box-right">
            <?php
                include "./view/boxright.php";
            ?>

        </div>
</div>