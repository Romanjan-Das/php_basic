<?php
$cookie_name = "eci_user";
if(isset($_COOKIE[$cookie_name])){
    header('Location: ' . "new.pdf");
}
else{
    header('Location: ' . "temp_reg.php");
}
?>
