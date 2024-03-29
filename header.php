<?php include 'pages.php'; ?>
<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="HandheldFriendly" content="True">
<meta name="application-name" content="<?php echo $config['SITE_NAME']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="language" content="<?php echo $config['LANGUAGE']; ?>">
<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml">
<!-- favicon is a png -->
<link rel="icon" type="image/x-icon" href="<?php echo $config['FAVICON']; ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $config['LOGO']; ?>">
<!-- SEO stuff -->
<meta name="description" content="<?php echo $config['SITE_DESCRIPTION']; ?>">
<meta name="keywords" content="<?php echo $config['SITE_KEYWORDS']; ?>">
<meta name="publisher" content="BasedPHP">
<meta name="copyright" content="BasedPHP">
<meta name="distribution" content="global">
<meta name="rating" content="general">
<meta name="url" content="<?php echo $config['SITE_URL']; ?>">
<meta name="identifier-URL" content="<?php echo $config['SITE_URL']; ?>">
<meta name="coverage" content="Worldwide">
<meta name="rating" content="General">
<meta name="revisit-after" content="7 days">
<meta name="language" content="English">
<meta name="robots" content="index, follow">

<title><?php echo $config['SITE_NAME']; ?></title>

<!-- normalize.css is performance drain -->
<!-- <link rel="stylesheet" href="assets/css/normalize.css"> -->

<link rel="stylesheet" href="assets/css/based.css">
<link rel="stylesheet" href="assets/css/home.css">

<style>
@font-face {
    font-family: 'roboto,sans-serif Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Martel Sans Regular'), local('MartelSans-Regular'), url(https://fonts.gstatic.com/s/martelsans/v6/h0GsssGi7VdzDgKjM-4d8hjYx-4.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

* {
    font-family: 'consolas' !important;
}

body {
    margin: 0;
    overflow-x: hidden;
    width: 100%;
}

</style>
</head>
<body>


<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
        <a class="navbar-brand" id="logo-container" href="/">
            <img id="navbar-logo" src="assets/image/logo.svg" alt="Logo" class="logo" width='210'>
        </a>
            <div class="collapse navbar-collapse" id="navbarNav">
               <?php include 'partials/_menu.php'; ?>
            </div>
            <button id="navbarNavMobileBtn" onclick="toggleMobileMenu()" type="button">
                ☰
            </button>
            <div id="navbarNavMobile">
                <?php include 'partials/_menu.php'; ?>
            </div>
        </div>
    </nav>
    <div class="subheader">
        <!-- Subheader content -->
        <div class="container">
            <div class="brand-container">
                <div class="logo-container">
                    <!-- <img src="assets/image/logo.svg" alt="Logo" class="logo"> -->
                </div>
                <div class="title-container">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">