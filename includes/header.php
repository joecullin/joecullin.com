<?php
  // Add "current" class to the nav link for the current page.
  $nav_url = preg_replace('/^([\/][^\/]*).*/', "$1", $_SERVER['SCRIPT_URL']);
  $nav_class[$nav_url] = 'current';

  $page_color = $page_color ? $page_color : 'tan';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Fira+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="/assets/css/terminal-<?php echo $page_color ?>.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>joecullin.com</title>
    <meta name="description" content="Joe Cullin's home on the web, featuring diy pallet projects, code hacks, and other goodies.">
    <link rel="shortcut icon" href="/assets/favicon.ico">
  </head>

  <body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-36636257-1', 'auto');
      ga('send', 'pageview');
    </script>

    <div class="site-header">
      <a href="/">JOECULLIN.COM</a>
    </div>

    <div id="large-resolution-extra"><?php echo $large_resolution_extra?></div>

    <div class="site-wrap">
      <div class="site-wrap__top-image"> </div>

      <div class="terminal-command"><?php echo $header_terminal_command ?></div>

      <div class="site-nav">
        <ul>
          <li><a href="/" class="<?php echo $nav_class['/'] ?>" >Home</a>
          <li><a href="/projects" class="<?php echo $nav_class['/projects'] ?>" >Projects</a></li>
          <li><a href="/about" class="<?php echo $nav_class['/about'] ?>" >About</a></li>
        </ul>
      </div>

      <div class="main-content">
