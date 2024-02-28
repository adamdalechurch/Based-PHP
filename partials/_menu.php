<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <?php foreach ($pages as $link): if(!$link['showInMenu']) continue; ?>
        <li class="nav-item">
            <span class="nav-link"
                onclick="scrollToSection('<?php echo $link['title']; ?>')"
            >
                <?php echo $link['title']; ?>
            </span>
        </li>
    <?php endforeach; ?>
<div class="theme-switch-container">
  <label class="ios7-switch">
    <span id="current-theme">☀️</span>
    <input class="theme-toggle" type="checkbox" onclick="changeTheme()" checked>
    <span></span>
  </label>
</div>
</ul>
