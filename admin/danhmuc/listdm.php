
  
        <div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb">
                    <div class="row frmdsloai">
                        <table style="width: 100%;">
                            <tr>
                                <th></th>
                               <th>MÃ LOẠI</th>
                                <th>TÊN LOẠI</th>
                                <th>EDIT</th>
                            </tr>
                            <?php 
                                foreach($listdm as $danhmuc){
                                    extract($danhmuc);
                                    $suadm = 'index.php?act=suadm&id='.$id;
                                    $xoadm = 'index.php?act=xoadm&id='.$id;
                                    echo '<tr>
                                    <td><input type="checkbox"></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>
                                        <a href="'.$suadm.'" ><button>Sửa</button></a>
                                        <a href="'.$xoadm.'" ><button>Xóa</button></a>
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
