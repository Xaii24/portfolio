<div class="top-bar">
  <div class="text--custom4 tracking-in-contract-bck-top">Xaivery Rusconi</div>
  <div class="text--custom10 tracking-in-contract-bck-top">iOS • Web • Apps</div>

  <div
    id="resume-button"
    class="text--custom5 tracking-in-contract-bck-top hover-underline-animation"
  >
    Resume
  </div>

  <?= $this->Html->link(
      '<span class="text--custom3 tracking-in-contract-bck-top hover-underline-animation">Contact</span>',
      'mailto:xaiveryr@outlook.com',
      ['escape' => false, 'id' => 'contact-link']
  ) ?>
</div>

<button class="text--customprojects" id="project-btn">
  <span data-text="Projects">Projects</span>
</button>

<!-- 🔊 Sound element -->
<audio id="mySound" src="/audio/Start2.mp3" preload="auto"></audio>
<audio id="projectClickSound" src="/audio/new.mp3" preload="auto"></audio>
<audio id="resumeContactSound" src="/audio/new2.mp3" preload="auto"></audio>

<section id="project-section" class="project-grid hidden">
  <!-- Encrypta Chat -->
  <a href="https://apps.apple.com/us/app/encrypta-chat/id6480382145" target="_blank" style="text-decoration: none;">
    <div class="project-entry portrait">
      <img src="img/spotlight120.png" />
      <h3>📱 Encrypta Chat</h3>
      <p>E2EE chat app with group msgs, push notifications, badge counts & more.<br>SwiftUI + Firebase.</p>
      <div class="project-link-btn"></div>
    </div>
  </a>

  <!-- Watch Trade -->
  <a href="https://apps.apple.com/us/app/encrypta-chat/id6480382145" target="_blank" style="text-decoration: none;">
    <div class="project-entry portrait">
      <img src="img/Congress.png" />
      <h3>📱 WatchTrade</h3>
      <p>E2EE chat app with group msgs, push notifications, badge counts & more.<br>SwiftUI + Firebase.</p>
      <div class="project-link-btn"></div>
    </div>
  </a>

    <!-- M+D Global -->
  <a href="https://globalmd-8141014c0210.herokuapp.com/" target="_blank" style="text-decoration: none;">
    <div class="project-entry">
      <img src="img/global1.png" alt="Global Connect Screenshot" />
      <h3>🌐 M+D Global</h3>
      <p>Full-stack medical supplies inventory management system.<br>CakePHP + MySQL.</p>
      <div class="project-link-btn"></div>
    </div>
  </a>
  
  <!--  Dragon Moving -->
  <a href="https://mover-site1-05c02c66f60b.herokuapp.com/" target="_blank" style="text-decoration: none;">
    <div class="project-entry">
      <img src="img/dragon.png" alt="Dragon Moving Screenshot" />
      <h3>🌐 DragonMovingCo.</h3>
      <p>Professional moving service web app with booking, quote requests, and responsive design.<br>CakePHP + MySQL.</p>
      <div class="project-link-btn"></div>
    </div>
  </a>



 <!-- GameZone -->
  <a href="https://gamezone-new123-3f3bf09999fc.herokuapp.com/" target="_blank" style="text-decoration: none;">
    <div class="project-entry">
      <img class="zoom" src="img/gamezone1.png" alt="GameZone Screenshot" />
      <h3>🌐 GameZone</h3>
      <p>Video game review website where users can post articles, like articles, and comment on articles.<br>CakePHP + MySQL.</p>
      <div class="project-link-btn"></div>
    </div>
  </a>


 <!-- Portfolio Site -->
<a href="https://yourportfolio.com" target="_blank" style="text-decoration: none;">
  <div class="project-entry">
    <img src="img/personal.png" alt="Portfolio Screenshot" />
    <h3>🌐 Personal Portfolio</h3>
    <p>Custom-coded portfolio built from scratch to showcase projects and design skills.<br>CakePHP + Mysql + JavaScript.</p>
    <div class="project-link-btn"></div>
  </div>
</a>

</section>


<!-- Background -->
<div id="vanta-bg" style="width: 100vw; height: 100vh; position: fixed; top: 0; left: 0; z-index: -1;"></div>

<!-- Vanta.js for fog background -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>
<script>
VANTA.FOG({
  el: "#vanta-bg",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,

  // 🎨 Colors
  highlightColor: 0xffffff,
  midtoneColor: 0xd4d4d4,
  lowlightColor: 0xf5f5f5,
  baseColor: 0xffffff,

  // 🌫 Fog intensity controls
  blurFactor: 1.3,       // Increase to make fog thicker (default ~0.5)
  zoom: 0.8,             // Decrease to “zoom in” fog clouds, making them feel closer
  speed: 3.00,           // Lower speed makes it look denser and calmer
  scale: 1.2,            // Makes the fog layers more compact
  scaleMobile: 1.5       // Stronger fog effect on mobile
});

</script>



<!-- Main interaction scripts -->
<script>
  const btn = document.getElementById('project-btn');
  const projectSection = document.getElementById('project-section');
  const clickSound = document.getElementById('mySound');
  const resumeContactSound = document.getElementById('resumeContactSound');

  // Projects button logic
  if (btn) {
    btn.addEventListener('click', () => {
      // 🔊 Play sound
      if (clickSound) {
        clickSound.currentTime = 0;
        clickSound.play();
      }

      document.querySelectorAll('#project-section a').forEach(card => {
        card.addEventListener('click', (e) => {
          const sound = document.getElementById('projectClickSound');
          if (sound) {
            sound.currentTime = 0;
            sound.play();
          }
        });
      });

      // 🔄 Animation and show section
      btn.classList.add('neon-pulse');
      setTimeout(() => {
        btn.style.display = 'none';
        projectSection.classList.remove('hidden');
        projectSection.classList.add('visible');
      }, 700);
    });
  }

  // Contact link animation + sound
  const contactLink = document.getElementById('contact-link');
  if (contactLink) {
    contactLink.addEventListener('click', (e) => {
      e.preventDefault();

      // 🔊 Play new2.mp3
      if (resumeContactSound) {
        resumeContactSound.currentTime = 0;
        resumeContactSound.play();
      }

      const span = contactLink.querySelector('span');
      if (span) {
        span.classList.add('pulse-boom');
        span.addEventListener('animationend', () => {
          span.classList.remove('pulse-boom');
          window.location.href = contactLink.href;
        }, { once: true });
      } else {
        window.location.href = contactLink.href;
      }
    });
  }

  // Resume button animation + sound
  const resumeBtn = document.getElementById('resume-button');
  if (resumeBtn) {
    resumeBtn.addEventListener('click', () => {
      // 🔊 Play new2.mp3
      if (resumeContactSound) {
        resumeContactSound.currentTime = 0;
        resumeContactSound.play();
      }

      resumeBtn.classList.add('pulse-boom');
      resumeBtn.addEventListener('animationend', () => {
        resumeBtn.classList.remove('pulse-boom');
        window.open('https://github.com/Xaii24/Resume/raw/main/Resume.pdf', '_blank');
      }, { once: true });
    });
  }
</script>
