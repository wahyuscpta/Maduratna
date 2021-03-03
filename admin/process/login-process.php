<?php

require_once "../../config/conn.php";
require_once "../../config/helper.php";

if (isset($_POST['btn-login'])) {

    $usn_input = mysqli_real_escape_string($conn, $_POST['usn']);
    $pass_input = mysqli_real_escape_string($conn, $_POST['pass']);

    if (!empty($usn_input) && !empty($pass_input)) {

        if(trim($usn_input) && trim($pass_input)){

            $query = "SELECT * FROM tb_admin WHERE username = '$usn_input'";
            $sql_1 = mysqli_query($conn, $query);
            $total = mysqli_num_rows($sql_1);

            if ($total == 1) {

                $sql = mysqli_fetch_assoc($sql_1);
                $usn = $sql['username'];

                if ($pass_input == $sql['password']) {

                    session_start();
                    $_SESSION['username'] = $usn;	
                    
                    alert("Login Success", "../app/view.php");

                } else {
                    alert("Sorry Login Failed", "../index.php");
                }

            } else {
                alert("Sorry, You are not registered", "../index.php");
            }
        }else{
            alert("Sorry, input form should not empty", "../index.php");
        }
    } else {
        alert("Sorry, input form should not empty", "../index.php");
    }

} 

else {
    header("location: ../index.php");
}

?>