</div> <!-- end of main -->
<link rel="stylesheet" href="assets/css/footer.css">

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Bottom Menu -->
                <div class="bottom-menu">
                    <?php foreach ($pages as $link): if(!$link['showInMenu']) continue; ?>
                        <a class="link" href="<?php echo $link['link']; ?>"><?php echo $link['title']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6" style='text-align:center'>
                <div class="policy-links">
                    <a href="#" class="white-hyperlink">Privacy Policy</a> / 
                    <a href="#" class="white-hyperlink">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <!-- © <?php echo date('Y'); ?> BasedPHP -->
    </div>
</div>
