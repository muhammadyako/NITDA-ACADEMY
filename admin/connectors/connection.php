<?php

$link = mysqli_connect ("localhost", "root", "", "proma");
if($link === false){
die ("ERROR: Could not connect.". mysqli_connect_error ());
date_default_timezone_set('UTC');

/*You might not need this */
//ini_set('SMTP', "smtp.hadejiaict.com.ng"); // Overide The Default Php.ini settings for sending mail


//This is the address that will appear coming from ( Sender )
//define('EMAIL', 'ismaakeel@gmail.com');

/*Define the root url where the script will be found such as http://website.com or http://website.com/Folder/ */
//DEFINE('WEBSITE_URL', 'http://localhost');
}