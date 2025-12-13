<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <style>
      
    </style>
  </head>
  <body>

    <div class="background--custom"></div>  


<div class="middle-line"></div>

<!-- div class="text--git">
    <i class="fab fa-github"></i> Github
</div> -->

<!-- <a href="https://github.com/Xaii24" target="_blank" rel="noopener noreferrer">
    <div class="text--git">
        <svg height="20" width="20" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.22 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.28.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.92-.01 2.18 0 .21.15.46.55.38C13.71 14.53 16 11.54 16 8c0-4.42-3.58-8-8-8z"></path>
        </svg>
        Github
    </div>
</a> -->

 <?= $this->Html->link(
     '<div class="text--custom3">Contact</div>',
     ['controller' => 'Contact', 'action' => 'index'],
     ['escape' => false]
 ) ?>
  iOS Developer | Mobile & Web Apps

    <div class="text--custom4">Xaivery Rusconi</div>
    <div class="text--custom10">iOS Developer | Mobile & Web Apps
    </div>
    <div class="text--custom5">Location:<br>Calgary, Canada</div>
<!-- 
    <div class="text--custom6">
         <span class="planet-text">Location: Earth</span> 
         <i class="fas fa-globe spinning"  style="font-size: 30px;"></i> 
         </div>  -->
<!-- 
        <div class="text--custom7">iOS/Web developer with a passion for building things.<br>
To me, programming is more than just writing code—it’s about crafting solutions that make a real impact.<br>
Whether it’s a web app or a mobile app, every project has the potential to leave a lasting impression.<br>
I’m always learning, always improving, and always building.
I'm usually coding something when I should be asleep,<br>Constantly refining and pushing myself, updating projects or creating something new.<br>
The journey never ends—there’s always something new to explore, something else to build. -->


</div>
<div class="tech-container">

<div class="text--custom8">Expertise</div>

<div class="tech-html">
  <i class="fab fa-html5" style="font-size: 50px;"></i>
  <p>HTML</p>
</div>
<div class="tech-css">
  <i class="fab fa-css3-alt" style="font-size: 50px;"></i>
  <p>CSS</p>
</div>
<div class="tech-js">
  <i class="fab fa-js-square" style="font-size: 50px;"></i>
  <p>JavaScript</p>
</div>
  <div class="tech-PHP">
    <i class="fab fa-php" style="font-size: 50px;"></i>
    <p>PHP</p>
  </div>
  <div class="tech-cake">
    <i class="fas fa-database" style="font-size: 50px;"></i>
    <p>CakePHP</p>
  </div>
  <div class="tech-swift">
    <i class="fab fa-swift" style="font-size: 50px;"></i>
    <p>Swift</p>
  </div>
  <div class="tech-swiftUI">
  <i class="fab fa-swift" style="font-size: 50px;"></i>
  <p>SwiftUI</p>
  </div>
  <div class="tech-Flutter">
  <?= $this->Html->image('flutter.svg', [
      'alt' => 'Flutter',
      'style' => 'width: 50px; height: 50px;',
  ]) ?>
  <p>Flutter</p>
</div>
<div class="tech-Dart">
  <?= $this->Html->image('dart.svg', [
      'alt' => 'Dart',
      'style' => 'width: 50px; height: 50px;',
  ]) ?>
  <p>Dart</p>
</div>
<div class="tech-Firebase">
  <?= $this->Html->image('firebase.svg', [
      'alt' => 'Firebase',
      'style' => 'width: 50px; height: 50px;',
  ]) ?>
  <p>Firebase</p>
</div>
<div class="tech-Mysql">
  <?= $this->Html->image('mysql.svg', [
      'alt' => 'Mysql',
      'style' => 'width: 80px; height: 90px;',
  ]) ?>
</div>
</div>

<div class="text--customprojects">Projects</div>

<?= $this->Html->link(
    'Projects',
    ['controller' => 'Portfolio', 'action' => 'view'],
    ['class' => 'text--customprojects']
) ?>



<!-- 
        <script>
      class TextScramble {
        constructor(el) {
          this.el = el;
          this.chars = 'Abcdefghijklmnopqrsxyz/[]{}—=+*^?#';
          this.update = this.update.bind(this);
        }
        setText(newText) {
          const oldText = this.el.innerText;
          const length = Math.max(oldText.length, newText.length);
          const promise = new Promise((resolve) => this.resolve = resolve);
          this.queue = [];
          for (let i = 0; i < length; i++) {
            const from = oldText[i] || '';
            const to = newText[i] || '';
            const start = Math.floor(Math.random() * 40);
            const end = start + Math.floor(Math.random() * 40);
            this.queue.push({ from, to, start, end });
          }
          cancelAnimationFrame(this.frameRequest);
          this.frame = 0;
          this.update();
          return promise;
        }
        update() {
          let output = '';
          let complete = 0;
          for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i];
            if (this.frame >= end) {
              complete++;
              output += to;
            } else if (this.frame >= start) {
              if (!char || Math.random() < 0.28) {
                char = this.randomChar();
                this.queue[i].char = char;
              }
              output += `<span class="dud">${char}</span>`;
            } else {
              output += from;
            }
          }
          this.el.innerHTML = output;
          if (complete === this.queue.length) {
            this.resolve();
          } else {
            this.frameRequest = requestAnimationFrame(this.update);
            this.frame++;
          }
        }
        randomChar() {
          return this.chars[Math.floor(Math.random() * this.chars.length)];
        }
      }

      const phrasesHome = ['Home'];
      const phrasesAbout = ['About'];
      const phrasesContact = ['Contact'];

      // Targeting the elements to scramble their text
      const elHome = document.querySelector('.text--custom1');
      const elAbout = document.querySelector('.text--custom2');
      const elContact = document.querySelector('.text--custom3');
      
      const fxHome = new TextScramble(elHome);
      const fxAbout = new TextScramble(elAbout);
      const fxContact = new TextScramble(elContact);

      // Function to scramble the "Home" text
      let counterHome = 0;
      const nextHome = () => {
        fxHome.setText(phrasesHome[counterHome]).then(() => {
          setTimeout(nextHome, 4000); // Delay before switching to next phrase (10 seconds)
        });
        counterHome = (counterHome + 1) % phrasesHome.length;
      };

      // Function to scramble the "About" text
      let counterAbout = 0;
      const nextAbout = () => {
        fxAbout.setText(phrasesAbout[counterAbout]).then(() => {
          setTimeout(nextAbout, 4000); // Delay before switching to next phrase (10 seconds)
        });
        counterAbout = (counterAbout + 1) % phrasesAbout.length;
      };

      // Function to scramble the "Contact" text
      let counterContact = 0;
      const nextContact = () => {
        fxContact.setText(phrasesContact[counterContact]).then(() => {
          setTimeout(nextContact, 4000); // Delay before switching to next phrase (10 seconds)
        });
        counterContact = (counterContact + 1) % phrasesContact.length;
      };

      // Start scrambling immediately for all
      document.addEventListener("DOMContentLoaded", () => {
        nextHome(); // Scramble immediately for "Home"
        nextAbout(); // Scramble immediately for "About"
        nextContact(); // Scramble immediately for "Contact"
      });

    </script>


  </body>
</html>

 -->
