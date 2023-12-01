
<div class="content">
        <div class="box-left">
            <div class="row mb">
                
                <div class="box-title">ĐƠN HÀNG CỦA BẠN</div>
                <div class="row box-content ">
                    <table>
                        <tr>
                           <th>MÃ ĐƠN HÀNG</th>
                           <th>NGÀY ĐẶT</th>
                           <th>SỐ LƯỢNG ĐẶT HÀNG</th>
                           <th>TỔNG GIÁ TRỊ ĐƠN HÀNG(vnd)</th>
                           <th>TÌNH TRẠNG</th>
                        </tr>
                        <?php
                            if(is_array($listbill)){
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $countsp =loadall_cart_count($bill['id']);
                                    $ttdh = get_ttdh($bill['bill_status']);
                                   echo '  <tr>
                                                <td>SS-'.$bill['id'].'</td>
                                                <td>'.$bill['ngaydathang'].'</td>
                                                <td>'.$countsp.'</td>
                                                <td>'.$bill['total'].'000</td>
                                                <td>'.$ttdh.'</td>
                                        </tr>';
                                }
                            };
                           
                        ?>
                      
                    </table>
                 
                </div>
            </div>
          
         
        </div>

        
        <div class="box-right">
            <?php
                include "./view/boxright.php";
            ?>

        </div>
</div>