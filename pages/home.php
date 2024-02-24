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

.row{
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
        <div class="row">
            <!-- <button class="schedule-button" onclick="location.href='/contact'">&#128197; Schedule an Appointment</button> -->
         </div>

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
