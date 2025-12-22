<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Doto:wght@100..900&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?: 'My CakePHP App' ?>
    </title>
    <?= $this->Html->meta('viewport', 'width=device-width, initial-scale=1') ?>

  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="Xaivery Portfolio" />
  <link rel="manifest" href="/site.webmanifest" />
    
    <?= $this->Html->meta('description', 'My CakePHP Application') ?>

    <!-- Load style.css from webroot/css/style.css -->
    <?= $this->Html->css('style') ?>
    <?= $this->Html->css('hero') ?>
    <?= $this->Html->css('blob') ?>
     <?= $this->Html->css('chat') ?>
     <?= $this->Html->css('case') ?>
     <?= $this->Html->css('topbar') ?>
     <?= $this->Html->css('mobilestyle') ?>
     <?= $this->Html->css('heromockup') ?>
     <?= $this->Html->css('menu') ?>
     <?= $this->Html->css('dashboard') ?>
     <?= $this->Html->css('mdglobal') ?>
          <?= $this->Html->css('dragon') ?>






          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">




    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">



    <!-- Allow views to add their own CSS files -->
    <?= $this->fetch('css') ?>
    <!-- Allow views to add their own scripts in head -->
    <?= $this->fetch('script') ?>
</head>
<body>

    <!-- Your page content -->
    <?= $this->fetch('content') ?>

</body>
</html>
