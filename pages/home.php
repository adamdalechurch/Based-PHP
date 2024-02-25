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
<div class="parallax-background">
    <div class="container">
        <div class="row">
            <div class="hero-container">
                <div class="hero">
                    <img src="assets/image/hero.svg" alt="Logo" class="logo" width='330'>
                    <p>
                    BasedPHP is a simple, easy to use, and customizable 
                    PHP framework.
                    </p>
                    <button class="download-button" >⇓ Download </button>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                // echo card(
                //     '', 
                //     '#',
                //     '',
                //     '',
                //     6
                // );
            ?>
        </div>

        <?php include 'partials/_about.php'; ?>

        <?php include 'partials/_contact.php'; ?>
        <div class="row">
            <?php 
                // infoBox(
                //     "About Us", 
                //     "",
                //     false
                // );
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
