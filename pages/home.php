<?php include 'header.php'; ?>
<?php include 'templates/card.php'; ?>
<?php include 'templates/infobox.php'; ?>

<link rel="stylesheet" href="assets/css/home.css">
<style>
.card {
    font-family: "Roboto", "Helvetica", "Arial", sans-serif;
    width: calc(100% / 2 - 20px) !important; /* Adjust the division value based on the number of cards per row */
}

.info-box {
    font-family: "Roboto", "Helvetica", "Arial", sans-serif;
    width: calc(100% / 3 - 20px) !important; /* Adjust the division value based on the number of info boxes per row */
}

.row {
    margin-top: 30px;
}

@media only screen and (max-width: 1200px) {
    .card {
        width: calc(100% / 2 - 20px) !important;
    }
}

@media only screen and (max-width: 786px) {
    .card, .info-box {
        width: 100% !important;
    }
}

</style>
<div class="container">
    <div class="section">
        <div id="Home" class="hero">
            <img src="assets/image/hero.svg" alt="Logo" class="logo" width='330'>
            <p>
                BasedPHP is a simple, easy to use, and customizable 
                PHP framework.
            </p>
            <a href="https://github.com/adamdalechurch/Based-PHP" target="_blank">
                <button class="download-button" >👉 Go To Github </button>
            </a>
        </div>
    </div>

    <?php include 'partials/_about.php'; ?>

    <?php include 'partials/_contact.php'; ?>

</div>

<?php include 'footer.php'; ?>
