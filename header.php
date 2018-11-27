<!DOCTYPE html>
<html lang="et">

<head>

<?php wp_head(); ?>

  <meta charset="utf-8" />
  <meta name="author" content="Richard Aljaste" />
  <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('description');
    }
    ?>" />
  <meta name="keywords" content="bru, veebiarendaja, fotograaf, lihtne, richard aljaste, richard, aljaste, mycloud.ee, richardmediagroup, eesti, estonia, html, css, javascript, developer, simple" />
  <meta name="google" content="notranslate" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <link rel="stylesheet" href="https://use.typekit.net/cdj4qgy.css">
  <link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <script>
    function getStylesheet() {
      var currentTime = new Date().getHours();
      if (0 <= currentTime && currentTime < 5) {
        document.write("<link rel='stylesheet' href='<?php echo get_template_directory_uri() . '/css/theme/night.css' ?>' type='text/css'>");
      }
      if (5 <= currentTime && currentTime < 11) {
        document.write("<link rel='stylesheet' href='<?php echo get_template_directory_uri() . '/css/theme/morning.css' ?>' type='text/css'>");
      }
      if (11 <= currentTime && currentTime < 16) {
        document.write("<link rel='stylesheet' href='<?php echo get_template_directory_uri() . '/css/theme/day.css' ?>' type='text/css'>");
      }
      if (16 <= currentTime && currentTime < 22) {
        document.write("<link rel='stylesheet' href='<?php echo get_template_directory_uri() . '/css/theme/evening.css' ?>' type='text/css'>");
      }
      if (22 <= currentTime && currentTime <= 24) {
        document.write("<link rel='stylesheet' href='<?php echo get_template_directory_uri() . '/css/theme/night.css' ?>' type='text/css'>");
      }
    }

    getStylesheet();
  </script>
  <noscript>
    <link href="<?php echo get_template_directory_uri() . '/css/theme/morning.css' ?>" rel="stylesheet" type='text/css'>
    <style>body { display: block;}</style>
  </noscript>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>