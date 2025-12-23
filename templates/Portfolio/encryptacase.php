<?php
// encrypta.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Encrypta Chat Case Study</title>

  <!-- Main Styles -->
  <link rel="stylesheet" href="/css/case.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body>
  <header>
    <nav></nav>
  </header>

  <main>
    <!-- HERO -->
    <section class="encrypta-hero">
      <h1>Encrypta Chat Case Study</h1>
<p>A deep dive into how I built a secure, scalable, and fully-featured messaging app.</p>
      
    </section>

<!-- ARCHITECTURE -->
<section class="encrypta-architecture">
  <div class="container">
    <h6 class="encrypta-architecture-title">Architecture</h6>

    <div class="arch-section">
      <!-- Encryption & Key Management -->
      <div class="arch-block">
        <h6>Encryption & Key Management</h6>
        <p>
          Each user's AES-256 encryption key is generated from their unique UID.
          Keys are securely stored in the iOS Keychain for privacy and persistence,
          using frameworks such as CommonCrypto and CryptoSwift.
          All messages are encrypted end-to-end before leaving the device.
        </p>

        <p>
          In addition to end-to-end encryption, all user data is
          <strong>encrypted at rest</strong>. Messages stored in Firestore are already
          AES-256–encrypted before being uploaded, and media files are securely uploaded
          to <strong>Amazon S3</strong> with restricted access controls. This ensures that
          even if the database or storage is compromised, no readable data is ever exposed.
        </p>

<a href="https://www.cloudflare.com/learning/privacy/what-is-end-to-end-encryption/"
   target="_blank"
   class="learn-more-btn">
   Learn more about End-to-End Encryption
</a>
<br>
   <a href="https://www.freecodecamp.org/news/encryption-at-rest/"
   target="_blank"
   class="learn-more-btn">
   Learn more about Encryption at Rest
</a>
        <img src="/img/E2EE.jpg" alt="Encryption Flow Diagram">
      </div>

      <!-- Backend & Sync -->
      <div class="arch-block">
        <h6>Backend & Sync</h6>
        <p>
          Firebase Firestore powers real-time messaging, while Node.js Cloud Functions
          handle notifications, badge updates, and message deletion sync across devices.
          Messages deleted on one device are removed on all devices to maintain privacy.
        </p>

        <div class="learn-links">
          <a href="https://firebase.google.com/docs/firestore" target="_blank" class="learn-more-btn">
            Learn about Firestore
          </a><br>
          <a href="https://firebase.google.com/docs/functions" target="_blank" class="learn-more-btn">
            Learn about Cloud Functions
          </a>
        </div>

        <img src="/img/firebase.jpg" alt="Backend Diagram">
      </div>
    </div>
  </div>
</section>

<!-- PERFORMANCE & SCALABILITY -->
<section class="encrypta-performance" style="padding: 60px 20px; background: #f9f9f9; color: #1a1a1a;">
  <div class="container" style="max-width:1000px; margin:0 auto; text-align:center;">
    <h2 style="font-size:2rem; margin-bottom:10px;">Performance & Scalability</h2>
    <div style="width:80px; height:1px; background: linear-gradient(90deg, #7c3aed, #a855f7); margin:0 auto 30px; border-radius:2px;"></div>
    <p style="font-size:1rem; line-height:1.8; margin-bottom:20px;">
      Encrypta Chat is designed to handle <strong>thousands of concurrent users</strong> while maintaining low-latency real-time messaging.
      Messages sent while offline are queued locally using <strong>Core Data</strong> and automatically synced with <strong>Firebase</strong> once the user reconnects.
    </p>
    <p style="font-size:1rem; line-height:1.8;">
      The combination of Core Data and Firebase allows the app to scale seamlessly, supporting <strong>millions of messages and media transfers</strong> without sacrificing speed or reliability.
      This ensures a smooth, consistent experience even under heavy load.
    </p>
<img src="/img/database-1.png" alt="Performance & Scalability Diagram" class="performance-diagram">
  </div>
</section>



    <!-- LIVE CHAT INDICATORS -->
<section class="encrypta-livechat" style="padding: 40px 20px;">
  <div class="container" style="max-width:1000px; margin:0 auto; display:flex; flex-wrap:wrap; align-items:center;">

<div class="livechat-img-wrapper">
  <img src="/img/IMG_0196.png" alt="Live Chat Indicator Example" class="livechat-img">
  <div class="livechat-img-shadow"></div>
</div>

    <div style="flex:1; min-width:300px;">
<h2 class="livechat-title">Live Chat Indicators</h2>
      <p style="font-size:1rem; line-height:1.8;">
        Encrypta Chat features real-time <strong>presence indicators</strong> to show when users are online and active in a conversation.
        Each user’s status is updated instantly through <strong>Firebase Realtime Database</strong> and reflected with a
        smooth glowing green dot beside their profile photo.
      </p>
      <p style="font-size:1rem; line-height:1.8;">
This provides a fast, engaging experience that mirrors modern messaging apps, with instant online status updates and a lightweight, high-performance design.      </p>
    </div>
  </div>
</section>


<!-- MESSAGE DELETION & SYNC -->
<section class="encrypta-deletion" style="padding: 60px 20px; background: #fff;">
  <div class="container" style="max-width:1000px; margin:0 auto; display:flex; flex-wrap:wrap; align-items:center; gap:40px;">

    <!-- TEXT LEFT -->
    <div class="deletion-text" style="flex:1; min-width:300px;">
      <h2 class="deletion-title">Synchronized Message Deletion</h2>
      <p style="font-size:1rem; line-height:1.8;">
        Encrypta Chat gives users full control over their data with
        <strong>synchronized message deletion</strong> across all devices.
        When a message is deleted on one device, it’s automatically removed
        from the encrypted backend and from every user’s device in that chat.
      </p>
      <p style="font-size:1rem; line-height:1.8;">
        The app also includes a <strong>“Clear All Messages”</strong> option, which
        instantly wipes all encrypted message data from both <strong>Firestore</strong>
        and local device storage. This ensures no remnants of data remain —
        reinforcing the privacy-first design of Encrypta Chat.
      </p>
      <p style="font-size:1rem; line-height:1.8;">
        This real-time deletion sync is powered by <strong>Firebase Cloud Functions</strong>,
        ensuring secure, consistent cleanup across all user sessions.
      </p>
    </div>

    <!-- IMAGES RIGHT -->
<div class="deletion-img-wrapper">
  <div class="deletion-img-container">
    <img src="/img/deletesync1.png" alt="Message Deletion Example 2" class="deletion-img">
    <div class="deletion-img-shadow"></div>
  </div>
</div>

  </div>
</section>

<!-- 3RD PARTY CALLING / AGORA INTEGRATION -->
<section class="encrypta-calls">
  <div class="container">

    <!-- IMAGE LEFT -->
    <div class="calls-img-wrapper">
      <img src="/img/IMG_0218-portrait.png" alt="Agora Video Call Example">
      <div class="calls-img-shadow"></div>
    </div>

    <!-- TEXT RIGHT -->
    <div class="calls-text">
      <h2>HD Audio & Video Calls with Agora</h2>
      <div class="divider"></div>
      <p>
        Encrypta Chat integrates <strong>Agora SDK</strong> to deliver high-quality, low-latency
        video and audio calls. Users can make secure one-on-one or group calls, with smooth
        real-time streaming and dynamic network adaptation.
      </p>
      <p>
        Calls include essential controls such as mute, speaker toggle, and call end,
        ensuring users have a full-featured communication experience directly in-app.
      </p>
      
      <div class="call-features-grid">
        <div class="call-feature-card">
          <i class="fas fa-video"></i>
          <h5>HD Video</h5>
          <p>Crystal-clear video calls with dynamic resolution adjustment.</p>
        </div>
        <div class="call-feature-card">
          <i class="fas fa-microphone-slash"></i>
          <h5>Mute & Audio Controls</h5>
          <p>Users can mute/unmute and control speaker output in real-time.</p>
        </div>
        <div class="call-feature-card">
          <i class="fas fa-network-wired"></i>
          <h5>Low Latency</h5>
          <p>Optimized streaming for stable calls even on fluctuating networks.</p>
        </div>
      </div>

      <a href="https://www.agora.io/en/" target="_blank" class="learn-more-btn">
        Learn more about Agora SDK
      </a>
    </div>

  </div>
</section>

  <!-- KEY FEATURES -->
<section class="encrypta-features">
  <div class="container">
<div style="text-align:center; margin-bottom:60px;">
  <h2 style="font-size:2rem; margin-bottom:10px;">Key Features</h2>
  <div style="width:80px; height:1px; background:linear-gradient(90deg,#7c3aed,#a855f7); margin:0 auto; border-radius:2px;"></div>
</div>
    <div class="features-grid">
      <div class="feature-card">
        <div class="icon-wrap">
          <i class="fas fa-lock"></i>
        </div>
        <div>
          <h5>End-to-End Encryption</h5>
          <p>All chats are secured with AES-256 encryption and unique per-user keys for complete confidentiality.</p>
        </div>
      </div>

 <div class="feature-card">
  <div class="icon-wrap">
    <i class="fas fa-video"></i>
  </div>
  <div>
    <h5>
      HD Audio & Video Calls
      <span class="feature-status">In Progress</span>
    </h5>
    <p>
      Secure, low-latency audio and video calling currently being integrated using
      <strong>Agora SDK</strong>, focusing on real-time performance, call stability,
      and seamless in-app communication.
    </p>
  </div>
</div>


      <div class="feature-card">
  <div class="icon-wrap">
    <i class="fas fa-circle"></i>
  </div>
  <div>
    <h5>Live Chat Indicators</h5>
    <p>
      Real-time presence indicators show when users are online and actively engaged
      in a conversation. 
    </p>
  </div>
</div>


      <div class="feature-card">
        <div class="icon-wrap">
          <i class="fas fa-users"></i>
        </div>
        <div>
          <h5>Group Chats</h5>
          <p>Securely communicate with individuals or groups with end-to-end encryption, ensuring all messages remain private.</p>
        </div>
      </div>

      <div class="feature-card">
        <div class="icon-wrap">
          <i class="fas fa-bell"></i>
        </div>
        <div>
          <h5>Push Notifications</h5>
          <p>Instant alerts for messages, calls, and mentions — with granular control for user preferences.</p>
        </div>
      </div>

      <div class="feature-card">
        <div class="icon-wrap">
          <i class="fas fa-user-shield"></i>
        </div>
        <div>
          <h5>Private or Anonymous Login</h5>
          <p>Support for email sign-in, anonymous access, and token-based authentication for ultimate privacy.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Encrypta Chat App Template -->
<section class="encrypta-screenshots">
  <div class="container">
    <h6 class="screenshots-title">Encrypta Chat App Template</h6>
    <p class="template-description">
      Launch your own secure, end-to-end encrypted chat app quickly with our ready-made Encrypta Chat template. Fully customizable and scalable, it's designed to help you go from idea to live app fast.
    </p>

    <div class="screenshot-grid">
      <img src="/img/sp1.png" alt="Chat Screen 1">
      <img src="/img/IMG_0229-portrait.png" alt="Chat Screen 2">
      <img src="/img/IMG_0228-portrait.png" alt="Chat Screen 3">
    </div>

<!-- CTA Buttons Side by Side -->
<div class="template-cta">
 
  <a href="https://apps.apple.com/us/app/encrypta-chat/id6480382145" target="_blank" class="cta-btn">
    <!-- Simple Apple SVG Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="20" height="20" style="margin-right:6px; vertical-align:middle; fill:white;">
      <path d="M33.59 24.48c-.08-5.53 4.51-8.2 4.71-8.33-2.56-3.73-6.51-4.24-7.94-4.3-3.38-.34-6.58 1.99-8.27 1.99-1.7 0-4.34-1.94-7.14-1.89-3.67.05-7.08 2.13-8.97 5.42-3.82 6.6-.98 16.37 2.73 21.73 1.81 2.73 3.95 5.79 6.78 5.69 2.7-.1 3.72-1.75 6.97-1.75 3.22 0 4.16 1.75 6.97 1.69 2.86-.06 4.65-2.76 6.45-5.49 2.03-3.05 2.87-6.01 2.91-6.17-.06-.03-5.56-2.13-5.64-8.48zm-4.77-9.92c1.25-1.52 2.1-3.64 1.87-5.74-1.81.08-3.99 1.2-5.27 2.71-1.15 1.35-2.15 3.57-1.88 5.67 1.98.15 4.02-1 5.28-2.64z"/>
    </svg>
    Download on the Apple Store
  </a>
</div>


    <!-- CTA -->
    <section class="encrypta-cta">
      <div class="container">
         <!-- <a href="/#templates" class="cta-btn">View Templates</a> -->
       <p style="margin-top:20px; font-size:1.2rem;">
  Interested in your own secure app? 
  <a href="mailto:xaiveryr@outlook.com" style="color:#0070f3; text-decoration:none;">
    Talk to us
  </a>.
</p>

        <a href="/#chat-section" class="cta-btn1">Back to Home Page</a>
       
      </div>
    </section>

    
  </main>

  <footer>
    &copy; <?php echo date('Y'); ?> Mobella Apps. All rights reserved.
  </footer>
</body>
</html>
