<div class="row">
    <div class="row frmtitle">
        <h1 style="text-align: center;">DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=qldonhang" method="post">
        <input type="text" name="kyw" value="" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listbill" value="Tìm">
    </form>
</div>

<div class="row frmcontent" >
    <div class="row mb frmdsdonhang" >
        <table>
            <tr>
                <th></th>
                <th>MÃ ĐƠN</th>
                <th>KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG ĐƠN HÀNG</th>
       
               
            </tr>
            <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $kh = $bill['bill_name'].'<br>'.$bill['bill_email'].'<br>'.$bill['bill_adress'].'<br>'.$bill['bill_phone'];
                    $countdh = loadall_cart_count($bill['id']);
                    $tt = get_ttdh($bill['bill_status']);
                    echo ' <tr>
                    <td><input type="checkbox"></td>
                    <td>SS-'.$bill['id'].'</td>
                    <td>'.$kh.'</td>
                    <td>'.$countdh.'</td>
                    <td><b>'.$bill['total'].'.000d</b></td>
                    
                    <td>'.$tt.'</td>
                    <td>'.$bill['ngaydathang'].'</td>
                </tr>';
                }
             ?>
          
        </table>
    </div>

</div>