<div class="row add"> 
           <div class="row formtitle">
            <h1>THÊM MỚI SẢN PHẨM</h1>
           </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                   <div class="row mb">
                  Danh mục <br> 
                  <select name="iddm" id="">
                    <?php 
                        foreach ($listdm as $danhmuc ) {
                            extract($danhmuc);
                            echo ' <option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                   
                  </select>
                   </div>
                   <div class="row mb">
                    Tên sản phẩm <br> <input type="text" name="tensp">
                   </div>
                   <div class="row mb">
                    Giá sản phẩm <br> <input type="text" name="giasp">
                   </div>
                    <div class="row mb">
                    Hình ảnh <br> <input type="file" name="hinhsp">
                   </div>
                   <div class="row mb">
                    Mô tả <br> <textarea name="motasp" id="" cols="30" rows="10"></textarea>
                   </div>
                   <div class="row">
                    <input type="submit" name="themmoi" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                   </div>
                   <?php 
                    if (isset($thongbao)&&($thongbao!=null)){
                        echo $thongbao;
                    }
                   ?>
                </form>
            </div>
        </div>