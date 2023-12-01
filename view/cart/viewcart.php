

<div class="content">
        <div class="box-left">
            <div class="row mb">
                
                <div class="box-title">Giỏ hàng</div>
                <div class="row box-content cart">
                    <table class="row">
                        <tr>
                            <th>Hình</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Thao tác</th>
                        </tr>

                    <?php
                    viewcart();
                    ?>
                     
                    </table>
                   <div class="row">
                    <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC THANH TOÁN"></a> 
                    <input type="button" value="XÓA GIỎ HÀNG">
                   </div>
                </div>
            </div>
        </div>

        
        <div class="box-right">
            <?php
                include "./view/boxright.php";
            ?>

        </div>
</div>