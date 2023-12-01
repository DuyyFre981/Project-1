<div class="content">
        <div class="box-left">
            <div class="row mb">
                <?php
                        extract($onesp);
                ?>
                <div class="box-title"><?=$name?></div>
                <div class="box-content spct">
                    <?php 
                    
                        $img = $img_path.$img;
                        echo '<img class="" src ="'.$img.'"><br>';
                        echo '<p>'.$des.'</p>
                        <div class="row btnaddtocart">
                            <form action="index.php?act=addtocart" method= post>
                                    <input type="hidden" name="id" value= "'.$id.'">
                                    <input type="hidden" name="name" value= "'.$name.'">
                                    <input type="hidden" name="img" value= "'.$img.'">
                                    <input type="hidden" name="price" value= "'.$price.'">
                                    <input type="submit" name="addtocart" value= "Thêm vào giỏ hàng">
                            </form>
                     </div>
                        ';
                        

                    ?>

                </div>
            </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script>
                    $(document).ready(function(){

                        $("#binhluan").load("view/binhluan/binhluan.php", {idpro: <?=$id?>});
                    });
                
         </script>
            <div class="row" id="binhluan">
              
            </div>

            <div class="row mb">
                <div class="box-title">SẢN PHẨM CÙNG LOẠI</div>
                <div class="box-content">
                    <?php 
                        foreach ($spcungloai as $spcl) {
                            extract($spcl);
                            echo '<li><a>'.$name.'</a></li>';
                        }
                    ?>

                </div>
            </div>
        </div>

        
        <div class="box-right">
            <?php
                include "./view/boxright.php";
            ?>

        </div>
</div>