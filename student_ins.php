<?php
   
   if((empty($_POST['s_name'])) && (empty($_POST['s_reg_no'])) && (empty($_POST['s_gender'])) && (empty($_POST['s_phone_no'])) && (empty($_POST['s_clg_name'])) && (empty($_POST['s_dep_name'])) && (empty($_POST['s_mail_id'])) && (empty($_POST['s_add'])) && (empty($_POST['s_blood_grp'])) && (empty($_POST['s_user_id'])) && (empty($_POST['s_pass'])) ){
       echo "****************Please Fill The Fields***********************";

   }
   elseif (empty($_POST['s_name'])) {
        echo "***************Please Fill The Student Name*************";
   }
   elseif (empty($_POST['s_reg_no'])) {
       echo "******************Please Fill The Student Registration Number**********************";
   }
   elseif (empty($_POST['s_gender'])) {
    echo "******************Please Fill The Gender**********************";
    }
    elseif (empty($_POST['s_dep_name'])) {
    echo "******************Please Fill The Student DepartMent Name**********************";
    }
    elseif (empty($_POST['s_phone_no'])) {
        echo "******************Please Fill The Student Phone Number**********************";
    }
    elseif (empty($_POST['s_clg_name'])) {
        echo "******************Please Fill The Student Collage Name**********************";
    }
    elseif (empty($_POST['s_mail_id'])) {
        echo "******************Please Fill The Student Mail Id **********************";
    }
    elseif (empty($_POST['s_add'])) {
        echo "******************Please Fill The Student Address**********************";
    }
    elseif (empty($_POST['s_blood_grp'])) {
        echo "******************Please Fill The Student Blood Group**********************";
    }
    elseif (empty($_POST['s_user_id'])) {
        echo "******************Please Create The Student  Login User Id**********************";
    }
    elseif (empty($_POST['s_pass'])) {
        echo "******************Please Create The Student Login Password**********************";
    }
    else {
      //  print_r($_POST);
       include('db_config.php');
       if ($con->connect_error) {
           die('connection failed'.$con->connect_error);

       }
       else {
        //   echo "connection successfully";
           $sname=$_POST['s_name'];
           $sreg=$_POST['s_reg_no'];
           $sgender=$_POST['s_gender'];
           $sphone=$_POST['s_phone_no'];
           $sadd=$_POST['s_add'];
           $sblood_grp=$_POST['s_blood_grp'];
           $smail=$_POST['s_mail_id'];
           $suserid=$_POST['s_user_id'];
           $spass=$_POST['s_pass'];
           $sclg=$_POST['s_clg_name'];
           $sdept=$_POST['s_dep_name'];
           $sql="INSERT INTO `stud_donar`(`stud_name`, `stud_reg`, `gender`, `mailid`, `address`, `phone_no`, `user_id`, `pass`, `clg_name`, `dept`, `blood_grp`) VALUES ('$sname','$sreg','$sgender','$smail','$sadd','$sphone','$suserid','$spass','$sclg','$sdept','$sblood_grp')";
           if ($con->query($sql)==true) {
            echo "*********************Inserted SuccessFully********************";
            }
            else{
                echo "Error".$sql."";
            }

        }
    }


?>