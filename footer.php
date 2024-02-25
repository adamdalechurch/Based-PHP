</div> <!-- end of main -->
<link rel="stylesheet" href="assets/css/footer.css">

<div class="footer">
    <div class="row">
        <div class="col-xs-4">
            <!-- Bottom Menu -->
            <div class="bottom-menu">
                <?php foreach ($pages as $link): if(!$link['showInMenu']) continue; ?>
                    <a 
                        class="link"
                        onclick="scrollUpToSection('<?php echo $link['title']; ?>')"
                        href="<?php echo $link['link']; ?>"
                    >
                        <?php echo $link['title']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- <div class="col-xs-4" style='text-align:center'>
            <div class="policy-links">
                <a href="#" class="white-hyperlink">Privacy Policy</a> / 
                <a href="#" class="white-hyperlink">Terms of Service</a>
            </div>
        </div> -->
    </div>
    <div class="copyright">
         © <?php echo date('Y'); ?> BasedPHP
    </div>
</div>
<script>
    function scrollUpToSection(section) {
        // document.body.scrollTop = 0;
        scrollToSection(section);
    }

    function scrollToSection(section) {
        var element = document.getElementById(section);
        element.scrollIntoView({behavior: "smooth"});
    }
</script>
