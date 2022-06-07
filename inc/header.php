<?php

$canonical = $_SERVER['REQUEST_URI'];
$canonical = explode("?", $canonical)[0];

?>
<meta charset="UTF-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title><?php echo $headerTitle; ?></title>

<?php if($metaDescription){ ?>
<meta name="description" content="<?php echo $metaDescription; ?>" />
<?php } ?>

<?php if($metaKeywords){ ?>
<meta name="keywords" content="<?php echo $metaKeywords; ?>"/>
<?php } ?>

<meta name="author" content="Nordic Sportsbar" />
<link rel="canonical" href="https://nordicsportsbar.se<?php echo $canonical; ?>" />

<!-- Dependecy Styles -->
<link rel="stylesheet" href="/plugins/wow/css/animate.css" type="text/css" />

<link
  rel="apple-touch-icon"
  sizes="180x180"
  href="/bilder/logo/favicon_package_v0.16/apple-touch-icon.png"
/>

<link
  rel="icon"
  type="image/png"
  sizes="32x32"
  href="/bilder/logo/favicon_package_v0.16/favicon-32x32.png"
/>

<link
  rel="icon"
  type="image/png"
  sizes="16x16"
  href="/bilder/logo/favicon_package_v0.16/favicon-16x16.png"
/>

<link
  rel="manifest"
  href="/bilder/logo/favicon_package_v0.16/site.webmanifest"
/>

<link
  rel="mask-icon"
  href="/bilder/logo/favicon_package_v0.16/safari-pinned-tab.svg"
  color="#5bbad5"
/>

<link rel="preload" as="image" href="/bilder/bowling-lanes-hd.webp" />

<script src="/plugins/wow/js/wow.min.js"></script>


<meta name="msapplication-TileColor" content="#da532c" />

<meta name="theme-color" content="#ffffff" />

<!-- META -->
<meta property="og:title" content="<?php echo $headerTitle; ?>" />
<meta property="og:type" content="article" />

<?php if($metaDescription){ ?>
<meta property="og:description" content="<?php echo $metaDescription; ?>" />
<?php } else{ ?>
<meta property="og:description" content="Hos oss hittar du bland annat bowling, shuffleboard, gamezone, vår restaurang & bar och mycket mer - hjärtligt välkomna!" />
<?php } ?>

<meta
  property="og:image"
  content="https://nordicsportsbar.se/bilder/nordic.webp"
/>

<!-- Site StyleSheet -->
<link rel="stylesheet" href="/style.css?v=11489998.1549163388.14239484.19">

