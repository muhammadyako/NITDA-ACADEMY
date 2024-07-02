<?php
// page "ajax.php"
// check $_POST data -> see if there is a call for "counter"
if (isset($_POST["call"]) && $_POST["call"] == "counter" && isset($_POST["user_id"]) && isset($_POST["page_id"])) {
    // if there is, retrieve user_id & page_id
    // filter $_POST data before using it into database
    // ex. user only Alphanumeric chars and . _ -
    $user_id = preg_replace("/[^A-Za-z0-9_.-]/", "", $_POST["user_id"]);
    $page_id = preg_replace("/[^A-Za-z0-9_.-]/", "", $_POST["page_id"]);
    // create an appropriate SQL query to UPDATE the counter for the HTML page with the user ID = $user_id page ID = $page_id
    $sql = "UPDATE.... WHERE ....";
    // run the query, update the counter
    // if all ok
    echo "1";
    exit;
}
// if something goes wrong
echo "0";
exit;
?>