<div class="content">
        <div class="box-left">
            <div class="row mb">
              
                <div class="box-title">Đăng kí thành viên</div>
                <div class="box-content frmdangky ">
                 <form action="index.php?act=dangky"  method="post">
                    Email: <br>  <input type="email" name="email"> <br>
                    Tài khoản: <br> <input type="text"name='user'> <br>
                    Mật khẩu <br> <input type="password"  name="pass"> <br>
                        <input type="submit" value="Đăng kí" name="dangky">  
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