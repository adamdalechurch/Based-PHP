</div> <!-- end of main -->
<link rel="stylesheet" href="assets/css/footer.css">

<div class="footer">
    <div class="copyright">
         © <?php echo date('Y'); ?> <?php echo $config['SITE_NAME']; ?>. All rights reserved.
    </div>
</div>

<script>

function scrollToSection(section) {
    toggleMobileMenu();
    const element = document.getElementById(section);
    element.scrollIntoView({behavior: "smooth"});
}

function scrollUpToSection(section) {
    const element = document.getElementById(section);
    element.scrollIntoView({behavior: "smooth", block: "start"});
}

</script>