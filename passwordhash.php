<?php
$password="abc";
$password= password_hash($password,PASSWORD_BCRYPT);
echo "$password";

?>