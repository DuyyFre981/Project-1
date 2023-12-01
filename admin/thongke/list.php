
  
        <div class="row">
            <div class="row">
                <h1>DANH SÁCH THỐNG KÊ</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb">
                    <div class="row frmdsdonhang">
                        <table style="width: 100%;">
                            <tr>
                                <th>STT</th>
                               <th>LOẠI HÀNG</th>
                                <th>SÓ LƯỢNG</th>
                                <th>GIÁ THẤP NHẤT</th>
                                <th>GIÁ CAO NHẤT</th>
                                <th>GIÁ TRUNG BÌNH</th>
                            </tr>
                          <?php 
                            foreach ($listthongke as $thongke) {
                               extract($thongke);
                               echo '  <tr>
                               <td>'.$madm.'</td>
                               <td>'.$tendm.'</td>
                               <td>'.$countsp.'</td>
                               <td>'.$minprice.'</td>
                               <td>'.$maxprice.'</td>
                               <td>'.$avgprice.'</td>
                              </tr>  '; 
                            }
                          ?> 
                           
                           
                        </table>
                    </div>
                </div>

                <div class="row mb">
                  
                    <a href="index.php?act=bieudo"><input type="button" value=" XEM BIỂU ĐỒ"></a>
                </div>
            </div>
        </div>
