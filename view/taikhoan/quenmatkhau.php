<div class="content">
        <div class="box-left">
            <div class="row mb">
              
                <div class="box-title">Quên mật khẩu</div>
                <div class="box-content frmdangky ">
                 <form action="index.php?act=quenmk"  method="post">
                    Email: <br>  <input type="email" name="email"> <br>
                   
                 <input type="submit" value="GỞI" name="guiemail">  
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