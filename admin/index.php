<?php 
require('inc/essentials.php');
require('inc/db_config.php');
    session_start();
    if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true){
      redirect('dashboard.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php');?>
</head>

<style>
    div.login-form{
        position:absolute;
        top:50%;
        left:50%;        
        transform:translate(-50%,-50%)
        
    }
</style>
<body class="bg-light text-center rounded bg-white overflow-none">
    <div class="login-form text-center rounded overflow-hidden bg-white shadow">
        <form method="post">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                     <input name="admin_name" type="text" required class="form-control shadow-none text-center" placeholder="Admin Name">            
                </div>

                <div class="mb-4">
                    <input name="admin_pass" type="password" required class="form-control shadow-none text-center" placeholder ="Password">            
                </div>
                <button name="login" type ="submit" class="btn btn-outline-dark shadow-none">Login</button>
            </div>
        </form>
    </div>

    <?php
        if(isset($_POST['login'])){
            $frm_data = filteration($_POST);
            
            // write sql query
            $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
            $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

            $res = select($query,$values,"ss");
            if($res -> num_rows == 1){
                $row = mysqli_fetch_assoc($res);               
                $_SESSION['adminLogin'] = true;
                $_SESSION['loginId'] = $row['sr_no'];
                redirect('dashboard.php');
            }else{
               alert('error','Login Failed - Invalid credentials!');
            }
        }
    
    
    
    ?>


<?php require('inc/scripts.php');?>
</body>
</html>