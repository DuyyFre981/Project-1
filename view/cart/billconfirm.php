
<div class="content">
        <div class="box-left">
            <div class="row mb">
                
                <div class="box-title">CÁM ƠN</div>
                <div class="row box-content " style="text-align: center;">
                Cám ơn quý khách! 
                </div>
            </div>
            <?php 
                if(isset($bill)&&(is_array($bill))){
                    extract($bill);
                }
            ?>
            <div class="row mb">
                
                <div class="box-title">MÃ ĐƠN HÀNG</div>
                <div class="row box-content " style="text-align: center;">
                <h1>SS-<?=$bill['id']?></h1>
                <ul style="text-align: left;margin-left:35%;">
                <li>Ngày đặt hàng: <?=$bill['ngaydathang']?></li>
                <li>Tổng đơn hàng: <?=$bill['total']?></li>
                <li>Phương thức thanh toán: <?php
                    if($bill['bill_pttt']==1){
                        echo 'Thanh toán trực tiếp';
                    } else if($bill['bill_pttt']==2){
                        echo 'Chuyển khoản';
                    } else{
                        echo 'Thanh toán online';
                    }
                ?></li>
                </ul>
                </div>
            </div>

            <div class="row mb">
                
                <div class="box-title">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row box-content billform" style="width:100%;">
                    <table>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><?=$bill['bill_name']?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?=$bill['bill_adress']?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?=$bill['bill_email']?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><?=$bill['bill_phone']?></td>
                        </tr>
                    </table>
                
                </div>

            </div>
            <button>
          <a style="text-decoration: none;" href="index.php?act=mybill">XÁC NHẬN ĐƠN HÀNG</a></button>
        </div>

        
        <div class="box-right">
            <?php
                include "./view/boxright.php";
            ?>

        </div>
</div>