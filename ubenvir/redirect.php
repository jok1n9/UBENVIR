<?php
//check if the get variable exists
session_start();

if (isset($_GET['companhia'])) {
    go_to_question($_GET['companhia']);
}

function go_to_question($res)
{
    $_SESSION['companhia'] = $res;
    //echo $_SESSION['quest_id'];
    header("location: store.php");
}
