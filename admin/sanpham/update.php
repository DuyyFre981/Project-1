<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }

    $hinhpath = "../upload/".$img;
    if(is_file($hinhpath)){
        $hinhsp = "<img src ='".$hinhpath."' height = '80'>"; 
    }else {
        $hinhsp = "no photo";
    }
?>

<div class="row add"> 
           <div class="row formtitle">
            <h1>CẬP NHẬT SẢN PHẨM</h1>
           </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                  
                   <div class="row mb">
                   <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                            <?php 
                                foreach ($listdm as $danhmuc ) {
                                 echo ' <option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                                }
                            ?>
                   
                        </select>
                    Tên sản phẩm <br> <input type="text" name="tensp" value="<?=$name?>">
                   </div>
                   <div class="row mb">
                    Giá sản phẩm <br> <input type="text" name="giasp"  value="<?=$price?>">
                   </div>
                    <div class="row mb">
                    Hình ảnh <br> <input type="file" name="hinhsp"> 
                    <?=$hinhsp?>
                   </div>
                   <div class="row mb">
                    Mô tả <br> <textarea name="motasp" id="" cols="30" rows="10"> <?=$des?></textarea>
                   </div>
                   <div class="row">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                   </div>
                   <?php 
                    if (isset($thongbao)&&($thongbao!=null)){
                        echo $thongbao;
                    }
                   ?>
                </form>
            </div>
        </div>