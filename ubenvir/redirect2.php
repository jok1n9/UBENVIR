<?php
//check if the get variable exists
session_start();

if (isset($_GET['id'])) {
    go_to_question($_GET['id']);
}

function go_to_question($res)
{
    $_SESSION['id'] = $res;
    //echo $_SESSION['quest_id'];
    header("location: product.php");
}
