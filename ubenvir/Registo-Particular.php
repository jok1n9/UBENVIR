<?php
session_start();

include("connection.php");
include("functions.php");

$error_text = "";

if ($_POST) {

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $endereco = $_POST["endereco"];
  $telemovel = $_POST["telemovel"];
  $nif = $_POST["nif"];


  $username = mysqli_real_escape_string($con, $username);
  $password = mysqli_real_escape_string($con, $password);


  if (!empty($username) && !empty($password) &&!empty($nome) && !empty($telemovel) &&!empty($endereco)&& is_numeric($nif) && !is_numeric($username) && is_numeric($telemovel)) {
    if (!preg_match('/\s/', $username)) {
      $username = xss_countermeasure($username);
      $password = xss_countermeasure($password);

      $query = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($con, $query);
      if (mysqli_num_rows($result) == 0) {
        $query = "insert into users (nome,email,username,password,endereco,telemovel,nif) values ('$nome','$email','$username','$password','$endereco','$telemovel','$nif')";
        $result = mysqli_query($con, $query);
        header("Location: Lojas.php");
        die;
      } else {
        $error_text = "User already exists!";
      }
    } else {
      $error_text = "No spaces allowed!";
    }
  } else {
    $error_text = "Please enter some valid information!";
  }
}

?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Registo">
    <meta name="description" content="">
    <title>Registo Particular</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Registo-Particular.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.14, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/fdc97e8567fcff5ce1a325047710eb5f.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Registo Particular">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
    <section class="u-align-center u-clearfix u-gradient u-section-1" id="carousel_0234">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-image-1" src="images/947ea8f2999b07da1da8b4b5f2dd955e.png" alt="" data-image-width="415" data-image-height="122">
        <h2 class="u-text u-text-default u-text-1">Registo</h2>
        <h6 class="u-text u-text-default u-text-2">Particulares</h6>
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-radius-30 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
          <form method="post">
          <input type="text" name="nome" placeholder="Nome Completo" />
          <input type="text" name="email" placeholder="email" />
          <input type="text" name="username" placeholder="Username" />
          <input type="text" name="password" placeholder="Password" />
          <input type="text" name="endereco" placeholder="endereco" />
          <input type="text" name="telemovel" placeholder="N telemóvel" />
          <input type="text" name="nif" placeholder="Nif" />
         
          <div class="text-center">
            <?php
            echo "<p style='color: red;'>$error_text</p>";
            ?>
            <input class="button" type="submit" value="Registo">
            <a href="Registo-Particular.php">
              <div class="button">Create an account</div>
            </a>
          </div>
        </form>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-b725"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="" class="u-image u-logo u-image-1" data-image-width="214" data-image-height="235">
          <img src="images/fdc97e8567fcff5ce1a325047710eb5f.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fca5"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-fca5"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a530"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a530"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c0a1"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c0a1"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-af5d"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-af5d"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
      </div></footer>
    
  </body>
</html>