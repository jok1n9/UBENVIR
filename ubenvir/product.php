<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
$produto = $_SESSION['id'];
$result = mysqli_query($con, "SELECT * FROM products where id = '$produto'");
$result2= mysqli_fetch_array($result);
if ($_POST) {
  #$query = "insert into carrinho (productid, userid) values ($result2['id'], $user_data['id'])";
  $result = mysqli_query($con, $query);
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Our Team">
    <meta name="description" content="">
    <title>product</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="product.css" media="screen">
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
    <meta property="og:title" content="product">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-xl-mode">
    <section class="u-clearfix u-section-1" id="sec-259e">
      <div class="u-clearfix u-sheet u-sheet-1">
      <a href="Lojas.php">
        <img class="u-image u-image-default u-image-1" src="images/947ea8f2999b07da1da8b4b5f2dd955e.png" alt="" data-image-width="415" data-image-height="122">
      </a>          
      <a href="suporte.php" class="u-btn u-btn-round u-button-style u-gradient u-none u-radius-4 u-text-body-alt-color u-btn-1">CALL US</a><span class="u-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 53 53" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9bc7"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 53 53" x="0px" y="0px" id="svg-9bc7" style="enable-background:new 0 0 53 53;"><path style="fill:#E7ECED;" d="M18.613,41.552l-7.907,4.313c-0.464,0.253-0.881,0.564-1.269,0.903C14.047,50.655,19.998,53,26.5,53
	c6.454,0,12.367-2.31,16.964-6.144c-0.424-0.358-0.884-0.68-1.394-0.934l-8.467-4.233c-1.094-0.547-1.785-1.665-1.785-2.888v-3.322
	c0.238-0.271,0.51-0.619,0.801-1.03c1.154-1.63,2.027-3.423,2.632-5.304c1.086-0.335,1.886-1.338,1.886-2.53v-3.546
	c0-0.78-0.347-1.477-0.886-1.965v-5.126c0,0,1.053-7.977-9.75-7.977s-9.75,7.977-9.75,7.977v5.126
	c-0.54,0.488-0.886,1.185-0.886,1.965v3.546c0,0.934,0.491,1.756,1.226,2.231c0.886,3.857,3.206,6.633,3.206,6.633v3.24
	C20.296,39.899,19.65,40.986,18.613,41.552z"></path><g><path style="fill:#556080;" d="M26.953,0.004C12.32-0.246,0.254,11.414,0.004,26.047C-0.138,34.344,3.56,41.801,9.448,46.76
		c0.385-0.336,0.798-0.644,1.257-0.894l7.907-4.313c1.037-0.566,1.683-1.653,1.683-2.835v-3.24c0,0-2.321-2.776-3.206-6.633
		c-0.734-0.475-1.226-1.296-1.226-2.231v-3.546c0-0.78,0.347-1.477,0.886-1.965v-5.126c0,0-1.053-7.977,9.75-7.977
		s9.75,7.977,9.75,7.977v5.126c0.54,0.488,0.886,1.185,0.886,1.965v3.546c0,1.192-0.8,2.195-1.886,2.53
		c-0.605,1.881-1.478,3.674-2.632,5.304c-0.291,0.411-0.563,0.759-0.801,1.03V38.8c0,1.223,0.691,2.342,1.785,2.888l8.467,4.233
		c0.508,0.254,0.967,0.575,1.39,0.932c5.71-4.762,9.399-11.882,9.536-19.9C53.246,12.32,41.587,0.254,26.953,0.004z"></path>
</g></svg></span>
        <a href="" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-2"><?php echo "Olá, ", $user_data['username']; ?></a>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-86e3">
      <div class="u-clearfix u-sheet u-sheet-1"><!--product--><!--product_options_json--><!--{"source":""}--><!--/product_options_json--><!--product_item-->
        <div class="u-container-style u-expanded-width u-product u-shape-rectangle u-product-1">
          <div class="u-container-layout u-container-layout-1"><!--product_gallery--><!--options_json--><!--{"maxItems":""}--><!--/options_json-->
            <div class="u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-bottom u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-6016">
              <div class="u-carousel-inner u-gallery-inner" role="listbox"><!--product_gallery_item-->
                <div class="u-active u-carousel-item u-gallery-item">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="images/12.svg">
                  </div>
                  <div class="u-over-slide u-over-slide-1">
                    <h3 class="u-gallery-heading">Sample Title</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div><!--/product_gallery_item--><!--product_gallery_item-->
                <div class="u-carousel-item u-gallery-item">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="images/8.svg">
                  </div>
                  <div class="u-over-slide u-over-slide-2">
                    <h3 class="u-gallery-heading">Sample Title</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div><!--/product_gallery_item-->
              </div>
              <a class="u-carousel-control u-carousel-control-prev u-icon-circle u-opacity u-opacity-70 u-text-grey-60 u-text-hover-grey-75 u-carousel-control-1" href="#carousel-6016" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
              </a>
              <a class="u-carousel-control u-carousel-control-next u-icon-circle u-opacity u-opacity-70 u-text-grey-60 u-text-hover-grey-75 u-carousel-control-2" href="#carousel-6016" role="button" data-u-slide="next">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
              </a>
              <ol class="u-carousel-thumbnails u-spacing-20 u-carousel-thumbnails-1"><!--product_gallery_thumbnail-->
                <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-6016" data-u-slide-to="0">
                  <img class="u-carousel-thumbnail-image u-image" src="images/12.svg">
                </li><!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
                <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-6016" data-u-slide-to="1">
                  <img class="u-carousel-thumbnail-image u-image" src="images/8.svg">
                </li><!--/product_gallery_thumbnail-->
              </ol>
            </div><!--/product_gallery--><!--product_title-->
            <h2 class="u-product-control u-text u-text-1">
              <a class="u-product-title-link" href="#"><!--product_title_content--><?php 
          echo $result2['nome']; ?><!--/product_title_content--></a>
            </h2><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-1">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-hide-price u-old-price" style="text-decoration: line-through !important;"><!--product_old_price_content-->$20.00<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                <div class="u-price u-text-palette-2-base" style="font-size: 1.5rem; font-weight: 700;"><!--product_regular_price_content--><?php echo $result2['preco'];?>€<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_content-->
            <div class="u-product-control u-product-desc u-text u-text-2"><!--product_content_content-->
              <p><?php echo $result2['comentário'];?></p><!--/product_content_content-->
            </div><!--/product_content--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
            <form method="post">
            <input type=submit placeholder="Add to Cart" class="u-black u-btn u-button-style u-product-control u-btn-1">
            </form>
            <a href="carrinho.php" class="u-border-2 u-border-hover-palette-2-base u-border-palette-1-base u-btn u-btn-round u-button-style u-none u-radius-50 u-btn-2"><span class="u-icon u-text-palette-1-base u-icon-1"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><circle cx="181.333" cy="437.333" r="53.333"></circle><path d="M509.867,89.6c-2.133-2.133-4.267-4.267-8.533-4.267H96L85.333,29.867c-2.133-4.267-6.4-8.533-10.667-8.533h-64 C4.267,21.333,0,25.6,0,32s4.267,10.667,10.667,10.667h55.467l51.2,260.267c8.533,34.133,38.4,59.733,74.667,59.733h245.333 c6.4,0,10.667-4.267,10.667-10.667c0-6.4-4.267-10.667-10.667-10.667H192c-17.067,0-34.133-8.533-42.667-23.467L460.8,275.2 c4.267,0,8.533-4.267,8.533-8.533L512,96C512,96,512,91.733,509.867,89.6z"></path><circle cx="394.667" cy="437.333" r="53.333"></circle></svg><img></span>
            </a>
          </div>
        </div><!--/product_item--><!--/product-->
      </div>
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-b725"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="214" data-image-height="235">
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