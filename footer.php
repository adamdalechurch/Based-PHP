</div> <!-- end of main -->

<div class="footer">
    <div class="copyright">
         © <?php echo date('Y'); ?> <?php echo $config['SITE_NAME']; ?>. All rights reserved.
    </div>
</div>

<script>
const themes = [  '☀️' , '🌙' ];
let currentTheme = 0;
let mobileMenuOpen = false;

function scrollToSection(section) {
    document.getElementById('navbarNavMobile').style.display = 'none';
    const element = document.getElementById(section);
    element.scrollIntoView({behavior: "smooth"});
}

function changeTheme() {
    currentTheme = (currentTheme + 1) % 2;
    document.getElementById('current-theme').innerText = themes[currentTheme];
    document.body.classList.toggle('dark');
    
    if (currentTheme === 1) { 
        document.getElementById('hero-image').src = 'assets/image/hero-white.svg';
        document.getElementById('navbar-logo').src = 'assets/image/logo-white.svg';
     } else {
        document.getElementById('hero-image').src = 'assets/image/hero.svg';
        document.getElementById('navbar-logo').src = 'assets/image/logo.svg';
    }
}

function handleResize() {
    if (window.innerWidth > 786) {
        document.getElementById('navbarNavMobile').style.display = 'none';
        mobileMenuOpen = false;
    }
}

function toggleMobileMenu() {
    const navbarNavMobile = document.getElementById('navbarNavMobile');
    if (navbarNavMobile.style.display === 'block') {
        navbarNavMobile.style.display = 'none';
        mobileMenuOpen = false;
    } else {
        navbarNavMobile.style.display = 'block';
        mobileMenuOpen = true;
    }
}

// bind resize event:
window.addEventListener('resize', handleResize);

// Google Analytics:
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', '<?php echo $config['GA_TAG'] ?>');
</script>



<!-- Google tag (gtag.js) -->
<script>

</script>
