<?php
    //print_r($_POST);
    if ((empty($_POST['o_name'])) && (empty($_POST['o_age'])) && (empty($_POST['o_gender'])) && (empty($_POST['o_phone_no'])) && (empty($_POST['o_mail_id'])) && (empty($_POST['o_add'])) && (empty($_POST['o_blod_grp'])) && (empty($_POST['o_user_id'])) && (empty($_POST['o_pass']))) {
        echo "**************Please Fill The Fields******************";
    }
    elseif (empty($_POST['o_name'])) {
        echo "**************Please Fill The Name*************";
    }
    elseif (empty($_POST['o_age'])) {
        echo "****************Please Fill The Age******************";
    }
    elseif (empty($_POST['o_gender'])) {
        echo "*************Please Fill The Gender**************";
    }
    elseif (empty($_POST['o_phone_no'])) {
        echo "************Please Fill The Phone Number**************";
    }
    elseif (empty($_POST['o_mail_id'])) {
        echo "*****************Please Fill The Mail Id**************";

    }
    elseif (empty($_POST['o_blod_grp'])) {
        echo "*****************Please Fill The Blood Group**************";

    }
    elseif (empty($_POST['o_user_id'])) {
        echo "*****************Please Create Your Login Id**************";

    }
    elseif (empty($_POST['o_pass'])) {
        echo "*****************Please Create Your Login Password**************";

    }
    elseif (empty($_POST['o_add'])) {
        echo "*****************Please Fill The Address**************";

    }
    else {
        include('db_config.php');
        if ($con->connect_error) {
            die('connection failed'.$con->connect_error);
        }
        else {
            //echo "**************Connection  Successfully***************";
           
            $oname=$_POST['o_name'];
            $oage=$_POST['o_age'];
            $ogender=$_POST['o_gender'];
            $omobile=$_POST['o_phone_no'];
            $omail=$_POST['o_mail_id'];
            $oadd=$_POST['o_add'];
            $ouserid=$_POST['o_user_id'];
            $opass=$_POST['o_pass'];
            $oblodgrp=$_POST['o_blod_grp'];
            $sql="INSERT INTO `other_donar`(`o_name`, `o_age`, `o_gender`, `o_phone_no`, `o_mail_id`, `o_add`, `o_user_id`, `o_pass`, `o_blood_grp`) VALUES ('$oname','$oage','$ogender','$omobile','$omail','$oadd','$ouserid','$opass','$oblodgrp')";
            if ($con->query($sql)==true) {
                echo "***************Inserted Sucessfully**********************";

            }
            else{
                echo "Error".$sql."";
            }
        }
    }


?>