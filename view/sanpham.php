<div class="content">
        <div class="box-left">
            <div class="row mb">
                
                <div class="box-title">DANH MỤC <strong><?=$namedm?></strong></div>
                <div class="row flex-item box-content">
                <?php
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linkspct = 'index.php?act=sanphamct&&idsp='.$id;
                        $hinh = $img_path.$img;
                        echo '<div class="item">
                        <a href="'.$linkspct.'"><img src="'.$hinh.'" alt=""></a>
                        <div class="info-item">
                        <p>$'.$price.'</p>
                        <a href="'.$linkspct.'">'.$name.'</a>
                        </div>
                        <div class="row btnaddtocart">
                        <form action="index.php?act=addtocart" method= post>
                                <input type="hidden" name="id" value= "'.$id.'">
                                <input type="hidden" name="name" value= "'.$name.'">
                                <input type="hidden" name="img" value= "'.$img.'">
                                <input type="hidden" name="price" value= "'.$price.'">
                                <input type="submit" name="addtocart" value= "Thêm vào giỏ hàng">
                        </form>
                 </div>
                    </div>';
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