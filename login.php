
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="layout/assets/css/stylelogin.css">
</head>
<form action="" method="POST">
<div class="kotak">
        <div class="kepala">
            <h2>LOGIN</h2>
        </div>
        <div class="form">
            <table>
                <tr>
                    <th>UserID</th>
                    <td>
                        <img class="id" src="layout/assets/images/id.png" width="16px" >
                        <input type="text" name="user" placeholder="UserID">
                    </td>
                </tr>

                <tr>
                    <th>Password</th>
                    <td>
                        <img class="pass" src="layout/assets/images/pass.png" width="16px" >
                        <input type="password" name="pass" placeholder="Password"></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>

<?php
require_once "app/admin.php";
$admin = new admin();
   if (isset($_POST['login'])) {
      $admin->login($_POST['user'],$_POST['pass']);
    }
 ?>