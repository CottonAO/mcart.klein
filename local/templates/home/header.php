<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>HomeSpace &mdash; Colorlib Website Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
  <?$APPLICATION->SetAdditionalCSS("/local/templates/home/fonts/icomoon/style.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/style.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/bootstrap.min.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/magnific-popup.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/jquery-ui.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/owl.carousel.min.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/owl.theme.default.min.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/bootstrap-datepicker.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/mediaelementplayer.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/animate.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/flaticon.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/fl-bigmug-line.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/aos.css");
  $APPLICATION->SetAdditionalCSS("/local/templates/home/css/style.css");?>
</head>

<body>

  <div class="site-loader"></div>

  <div class="site-wrap">
  <?$APPLICATION->ShowHead();?>
  <?$APPLICATION->ShowPanel();?>  
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                  class="d-none d-md-inline-block ml-2"><?
                  $APPLICATION->IncludeFile(
                    SITE_DIR."local/include/phone.php",
                    Array(),
                    Array("MODE"=>"html")
                  );
                  ?></span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2"><?
                  $APPLICATION->IncludeFile(
                    SITE_DIR."local/include/email.php",
                    Array(),
                    Array("MODE"=>"html")
                  );
                  ?></span></a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
          <?
                  $APPLICATION->IncludeFile(
                    SITE_DIR."local/include/socials.php",
                    Array(),
                    Array("MODE"=>"html")
                  );
                  ?>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class=""><a href="index.html" class="h5 text-uppercase text-black"><strong><?
                  $APPLICATION->IncludeFile(
                    SITE_DIR."local/include/company_name.php",
                    Array(),
                    Array("MODE"=>"html")
                  );
                  ?><span
                    class="text-danger">.</span></strong></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
          <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li class="has-children">
                  <a href="properties.html">Properties</a>
                  <ul class="dropdown">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Lease</a></li>
                    <li class="has-children">
                      <a href="#">Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>


        </div>
      </div>
    </div>
  </div>
