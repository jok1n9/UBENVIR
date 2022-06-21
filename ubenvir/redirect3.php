<?php
//check if the get variable exists
session_start();
session_destroy();
header("location:index.php");