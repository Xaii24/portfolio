<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc.
 * Licensed under The MIT License
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/@barba/core"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My CakePHP Application</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Doto:wght@100..900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <?= $this->Html->css([
        'style',
        'view',
        'slider',
        'normalize.min',
        'milligram.min',
        'fonts',
        'cake',
        'styles',
    ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style>
        body {
            display: flex;
            flex-direction: column;
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
        }
        .header {
            background-color: black;
            color: white;
            padding: 10px 0;
        }
        .content {
            display: flex;
            flex: 1;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
    </style>
    
</head>

<body data-barba="wrapper">
    <main data-barba="container">
        <div class="content">
            <div class="main-content">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </main>

    <!-- Barba.js Transition Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            console.log("Barba.js Loaded ✅");

            barba.init({
                transitions: [
                    {
                        name: "fade",
                        leave(data) {
                            console.log("Leaving Page... 🔄");
                            return gsap.to(data.current.container, {
                                opacity: 0,
                                duration: 0.5
                            });
                        },
                        enter(data) {
                            console.log("Entering Page... ✅");
                            return gsap.from(data.next.container, {
                                opacity: 0,
                                duration: 0.5
                            });
                        }
                    }
                ]
            });

            // Ensure only specific buttons trigger transitions
            document.querySelectorAll('.transition-btn').forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    const href = this.getAttribute('href');
                    console.log("Navigating to: " + href); // Debugging log

                    barba.go(href);
                });
            });
        });
    </script>
</body>
</html>
