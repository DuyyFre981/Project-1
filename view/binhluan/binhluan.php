<?php 
        session_start();
        $idsp = $_REQUEST['idpro'];
        $iduser =$_SESSION['user']['id'];
        include "../../admin/model/pdo.php";
        include "../../admin/model/binhluan.php";
        $dsbl = loadall_binhluan($idsp);
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<div class="row mb binhluan">
                    <div class="box-title">BÌNH LUẬN</div>
                    <div class="box-content-2 danhmuc">
                      <table border="0">

                                
                      <?php
                              
                                foreach ($dsbl as $bl) {
                                    $user =  loaduser_bl($iduser);
                                    
                                    extract($bl);
                                    echo '<tr><td> '.$comment.'</td>';
                                    echo '<td> '.$user['user'].'</td>';
                               
                                    echo '<td> '.$ngaybl.   '</td></tr>';
                                }
                            ?>

                      </table>
                          
                    
                    </div>
                    <div class="box-footer searchbox">
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                        <input type="hidden" name="idsp" value="<?=$idsp?>">
                        <input type="hidden" name="iduser" value="<?=$_SESSION['user']['id']?>">
                        <input class="mb" type="text" name="comment">
                        <input type="submit" name="guibinhluan" value="Gởi bình luận">
                        </form>
                    </div>

        <?php
                if(isset($_POST['guibinhluan'])&&$_POST['guibinhluan']){
                    $comment = $_POST['comment'];
                    $iduser =$_SESSION['user']['id'];
                    $idpro = $_POST['idsp'];
                    $ngaybl = date("h:i:sa Y-m-d");
                    insert_binhluan($comment,$iduser,$idpro,$ngaybl);
                    header("Location: ".$_SERVER['HTTP_REFERER']);
                } 
        ?>
</div>
</body>
</html>