
        <div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb">
                    <div class="row dstk">
                        <table style="width: 100%;">
                            <tr>
                                <th></th>
                               <th>ID</th>
                                <th>NỘI DUNG</th>
                                <th>IDUSER</th>
                                <th>UserName</th>
                                <th>IDPRO</th>
                                <th>NGÀY BÌNH LUẬN</th>
                                
                                <th></th>

                            </tr>
                            <?php 
                                foreach($listbl as $binhluan){

                                    extract($binhluan);
                                   $user =  loaduser_bl($iduser);
                                    $xoabl = 'index.php?act=xoabl&id='.$id;
                                    echo '<tr>
                                    <td><input type="checkbox"></td>
                                    <td>'.$id.'</td>
                                    <td>'.$comment.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$user['user'].'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$ngaybl.'</td>

                                    <td>
                                        <a href="'.$xoabl.'" ><button>Xóa</button></a>
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
