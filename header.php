<?php include 'pages.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="HandheldFriendly" content="True">
<meta name="application-name" content="BasedPHP">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="language" content="English">
<!-- favicon is a png -->
<!-- <link rel="icon" type="image/x-icon" href="assets/image/favicon.ico"> -->
<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/image/favicon.ico"> -->
<title>Based PHP</title>

<link rel="stylesheet" href="assets/css/based.css">
<link rel="stylesheet" href="assets/css/header.css">
<link rel="stylesheet" href="assets/css/footer.css">
<link rel="stylesheet" href="assets/css/layout.css">
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light top-nav">
        <div class="container-fluid">
            <button class="navbar-toggler menu-button" onclick='toggleMobileMenu()' type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                &#9776;
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($pages as $link): if(!$link['showInMenu']) continue; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $link['link']; ?>"><?php echo $link['title']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
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
