</div> <!-- end of main -->

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

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $config['GA_TAG'] ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $config['GA_TAG'] ?>');
</script>
