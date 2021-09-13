<?php
   // print_r($_POST)
    if ((empty($_POST['e_name'])) && (empty($_POST['e_age'])) && (empty($_POST['e_gender'])) && (empty($_POST['e_phone_no'])) && (empty($_POST['e_comp_name'])) && (empty($_POST['e_dep_name'])) && (empty($_POST['e_mail_id'])) && (empty($_POST['e_add'])) && (empty($_POST['e_blood_grp'])) && (empty($_POST['e_user_id'])) && (empty($_POST['e_pass'])) ){
        echo "***************Please Fill The Fields*****************";
    }
    elseif (empty($_POST['e_name'])){
        echo "*****************Pleaase Fill The Employee Name***********************";
    }
    elseif (empty($_POST['e_age'])) {
        echo "***************Please Fill The Employee Age*************************";
    }
    elseif (empty($_POST['e_gender'])) {
        echo "****************Please File The Employye Gender****************";
    }
    elseif (empty($_POST['e_comp_name'])) {
        echo "****************Please File The Employye Company Name****************";
    }
    elseif (empty($_POST['e_dep_name'])) {
        echo "****************Please File The Employye Department****************";
    }
    elseif (empty($_POST['e_phone_no'])) {
        echo "****************Please File The Employye Mobile Number****************";
    }
    elseif (empty($_POST['e_mail_id'])) {
        echo "****************Please File The Employye Mail Id****************";
    }
    elseif (empty($_POST['e_add'])) {
        echo "****************Please File The Employye Address****************";
    }
    elseif (empty($_POST['e_blood_grp'])) {
        echo "****************Please File The Employye Blood Group****************";
    }
    elseif (empty($_POST['e_user_id'])) {
        echo "****************Please Create your User Login Id****************";
    }
    elseif (empty($_POST['e_pass'])) {
        echo "****************Please Create Your Pasword Login****************";
    }
    else {
        include('db_config.php');
        if ($con->connect_error) {
            die('connection failed'.$con->connect_error);
        }
        else{
           // echo "****************Connection Successfully****************";

           
           $ename=$_POST['e_name'];
           $eage=$_POST['e_age'];
           $egender=$_POST['e_gender'];
           $ecomp=$_POST['e_comp_name'];
           $edept=$_POST['e_dep_name'];
           $emobile=$_POST['e_phone_no'];
           $emailid=$_POST['e_mail_id'];
           $eadd=$_POST['e_add'];
           $ebloodgrp=$_POST['e_blood_grp'];
           $euserid=$_POST['e_user_id'];
           $epass=$_POST['e_pass'];
           

            $sql="INSERT INTO `emp_donar`(`e_name`, `e_age`, `e_gender`, `e_comp_name`, `e_dep_name`, `e_phone_no`, `e_mail_id`, `e_add`, `e_blood_grp`, `e_user_id`, `e_pass`) VALUES ('$ename','$eage','$egender','$ecomp','$edept','$emobile','$emailid','$eadd','$ebloodgrp','$euserid','$epass')";
            if ($con->query($sql)==true) {
                echo "****************** Inserted Successfully*************************";
            }
            else{
                echo "Error".$sql."";
            }
        }
    }

?>