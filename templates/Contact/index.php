<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
     .background--custom {
        background-color: #FFFFFF;
        width: 100vw;
        height: 100vh;
        position: fixed;
        overflow: hidden;
        top: 0;
        left: 0;
      }
      canvas#canvas {
        z-index: -1;
        position: absolute;
        width: 100%;
        height: 60%;
        transform: rotate(180deg) scale(3) translateY(0%);
        --gradient-color-1: #0A0709; 
        --gradient-color-2: #3A3B3B; 
        --gradient-color-3: #0F0E13;  
        --gradient-color-4: #3A3731;
        --gradient-speed: 0.000006;
      }
          /* Form styling */
          body {
        color: white; 
        font-family: Arial, sans-serif;
        margin: 0;
      }
      .form-container {
        position: relative;
        z-index: 1; /* Bring form above the background */
        background-color: #333;
        padding: 20px;
        border-radius: 5px;
        max-width: 500px;
        margin: 0 auto;
        margin-top: 100px;
        color: white;
      }
    </style>
</head>
<body>
    <!-- Custom Background with Canvas -->
    <div class="background--custom">
        <canvas id="canvas"></canvas>
    </div>

    <!-- Contact Form -->
    <div class="form-container">
    <h1 style="color: #FFFFFF;">Contact</h1>
<?= $this->Form->create(null, [
    'url' => ['controller' => 'Contact', 'action' => 'send'],
]) ?>
    <?= $this->Form->control('name', ['label' => 'Your Name']) ?>
    <?= $this->Form->control('email', ['label' => 'Your Email']) ?>
    <?= $this->Form->control('message', [
        'label' => 'Your Message',
        'type' => 'textarea',
    ]) ?>
    <?= $this->Form->button('Send Message') ?>
<?= $this->Form->end() ?>
    </div>

    <!-- JavaScript for Gradient Background -->
    <script src="https://cdn.jsdelivr.net/gh/greentfrapp/pocoloco@minigl/minigl.js"></script>
    <script>
        var gradient = new Gradient();
        gradient.initGradient("#canvas");
    </script>
</body>
</html>

