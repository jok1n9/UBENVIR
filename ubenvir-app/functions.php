<?php

function check_login($con)
{

	if (isset($_SESSION['user_id'])) {

		$id = $_SESSION['user_id'];
		$query = "select * from users where id = '$id' limit 1";

		$result = mysqli_query($con, $query);
		if ($result && mysqli_num_rows($result) > 0) {

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: index.php");
	die;
}
function check_login_empresas($con)
{

	if (isset($_SESSION['user_id'])) {

		$id = $_SESSION['user_id'];
		$query = "select * from companhia where id = '$id' limit 1";

		$result = mysqli_query($con, $query);
		if ($result && mysqli_num_rows($result) > 0) {

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: index.php");
	die;
}
function xss_countermeasure($string)
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
