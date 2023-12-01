<?php
         function insert_taikhoan($email,$user,$pass){
            $sql = "INSERT INTO taikhoan(user,pass,email) values('$user','$pass','$email')";
            pdo_execute($sql);
        }
        function check_user($user,$pass){
            $sql = "SELECT * from taikhoan where user ='".$user."' and pass = '".$pass."'";
            $check = pdo_query_one($sql);
            return $check;
        }

        function update_taikhoan($id,$email,$user,$pass,$adress,$phone){
             $sql = "UPDATE  taikhoan set user ='".$user."',email ='".$email."', pass = '".$pass."', adress = '".$adress."', phone = '".$phone."'  where id =".$id;
              pdo_execute($sql); 
      }
      function check_email($email){
        $sql = "SELECT * from taikhoan where email ='".$email."'";
        $check = pdo_query_one($sql);
        return $check;
    }
    function loadall_taikhoan(){
        $sql = "SELECT * from taikhoan order by id ";
                $listtk = pdo_query($sql);
        return $listtk;
    }
   
?>