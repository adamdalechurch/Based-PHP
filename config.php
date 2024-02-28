<?php

$env = parse_ini_file('.env');

$config = [
  'SITE_NAME' => 'BasedPHP',

  'SITE_DESCRIPTION' => 'BasedPHP is a PHP framework that is based on PHP.',

  'SITE_KEYWORDS' => 'BasedPHP, PHP, Framework, Based, PHP, Based PHP',

  'TAGLINE' => 'The worlds most based PHP framework',

  'FAVICON' => 'assets/image/logo.svg',

  'LOGO' => 'assets/image/logo.svg',

  'LANGUAGE' => 'English',

  'AUTHOR' => 'Adam Church',

  'SITE_URL' => 'http://localhost:8000',

  'GA_TAG' => isset($env['GA_TAG']) ? $env['GA_TAG'] : '',
];



?>

