
  
        <div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <form class="mb" method="post" action="index.php?act=listsp">
                        <input type="text" name="kyw">
                        <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                            <?php 
                                foreach ($listdm as $danhmuc ) {
                                
                                 echo ' <option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                                }
                            ?>
                   
                        </select>
                  <input type="submit" name="listok" value="GO">
                    </form>
            <div class="row productfrm">
                <div class="row mb">
                    <div class="row productfrm">
                    

                        <table style="width: 100%;">
                            <tr>
                                <th></th>
                               <th>MÃ SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>HÌNH</th>
                                <th>GIÁ</th>
                                <th>EDIT</th>
                            </tr>
                            <?php 
                                foreach($listsp as $sanpham){
                                    extract($sanpham);
                                    $suasp = 'index.php?act=suasp&id='.$id;
                                    $xoasp = 'index.php?act=xoasp&id='.$id;
                                    $hinhpath = "../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinhsp = "<img src ='".$hinhpath."' height = '80'>"; 
                                    }else {
                                        $hinhsp = "no photo";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox"></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$hinhsp.'</td>
                                    <td>'.$price.'</td>
                                   
                                    <td>
                                        <a href="'.$suasp.'" ><button>Sửa</button></a>
                                        <a href="'.$xoasp.'" ><button>Xóa</button></a>
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
                    <a href="index.php?act=addsp"><input type="button" value="Thêm sản phẩm mới"></a>
                </div>
            </div>
        </div>
