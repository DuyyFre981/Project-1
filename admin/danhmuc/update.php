<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="row add"> 
           <div class="row formtitle">
            <h1>CẬP NHẬT DANH MỤC</h1>
           </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                   <div class="row mb">
                    Mã loại <br>  <input type="text" name="maloai" disabled>
                   </div>
                   <div class="row mb">
                    Tên loại <br> <input type="text" name="tenloai" value="<?php if(isset($name)&&$name!="") {echo $name;};?>">
                   </div>
                   <div class="row">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&$id>0) {echo $id;};?>">
                    <input type="submit" name="capnhat" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                   </div>
                   <?php 
                    if (isset($thongbao)&&($thongbao!=null)){
                        echo $thongbao;
                    }
                   ?>
                </form>
            </div>
        </div>