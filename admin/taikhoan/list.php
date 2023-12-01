
  
        <div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb">
                    <div class="row dstk">
                        <table style="width: 100%;">
                            <tr>
                                <th></th>
                               <th>MÃ TÀI KHOẢN</th>
                                <th>TÊN </th>
                                <th>MẬT KHẨU</th>
                                <th>EMAIL</th>
                                <th>ĐỊA CHỈ</th>
                                <th>SỐ ĐIỆN THOẠI</th>
                                <th>VAI TRÒ</th>
                                <th></th>

                            </tr>
                            <?php 
                                foreach($listtk as $taikhoan){
                                    extract($taikhoan);
                                    $suatk = 'index.php?act=suatk&id='.$id;
                                    $xoatk = 'index.php?act=xoatk&id='.$id;
                                    if($rule==1){
                                        $vaitro ="ADMIN";
                                    }else{
                                        $vaitro ="USER";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox"></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$adress.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$vaitro.'</td>

                                    <td>
                                        <a href="'.$suatk.'" ><button>Sửa</button></a>
                                        <a href="'.$xoatk.'" ><button>Xóa</button></a>
                                    </td>
                                </tr>';
                                }
                            ?>
                            
                           
                        </table>
                    </div>
                </div>

                <div class="row mb">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=adddm"><input type="button" value="Thêm danh mục mới"></a>
                </div>
            </div>
        </div>
