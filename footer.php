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
    <div class="copyright">
         © <?php echo date('Y'); ?> <?php echo $config['SITE_NAME']; ?>. All rights reserved.
    </div>
</div>