<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
  <link rel="stylesheet" href="./styles/media.css">
  <link rel="stylesheet" href="./styles/Footer.css">
  <link rel="stylesheet" href="./styles/LoginRegistration.css">
  <link rel="stylesheet" href="./styles/Modal.css">

  <link rel="shortcut icon" href="./images/image-removebg-preview.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <title>Money Manager Pro</title>
 
</head>
<body>
<header class="container">
  <nav>
    <div class="logo">
      <p>Money Manager Pro</p>
    </div>
    <div class="buttons">
    <button class="button" onclick="openLoginModal()" data-key="login_button"></button>
<button class="button" onclick="openRegisterModal()" data-key="register_button"></button>
<a href="https://t.me/Financial_assistant_your_bot" target="register_button" data-key="register_button">
  <button class="button" onclick="openTelegramBot()" data-key="register_button"></button>
</a>

      <div class="language-switch">
        <input type="radio" id="languageEn" name="language" value="en" class="toggle-input" checked>
        <label for="languageEn" class="toggle-label">EN</label>
        <input type="radio" id="languageUk" name="language" value="uk" class="toggle-input">
        <label for="languageUk" class="toggle-label">UK</label>
        <input type="radio" id="languageRu" name="language" value="ru" class="toggle-input">
        <label for="languageRu" class="toggle-label">RU</label>
        <div class="toggle-slider"></div>
      </div>
    </div>
  
      <div class="mobile-menu">
        <div class="open-close">
          <img src="./images/menu.svg" alt="Open" class="open" onclick="Menu.open()" />
          <img src="./images/close.svg" alt="Close" class="close" onclick="Menu.close()" />
          <div class="logo-menu">
            <img src="./images/image-removebg-preview.png" alt="" />
            <p>Money Manager Pro</p>
          </div>
        </div>
        <div class="menu">
          <div class="menu-open">
            <div class="menu-items">
              <ul>
                <li><a href="./index.php" onclick="Menu.close()">Home</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="header-content">
      <div class="header-content-left">
        <div class="hero-section">
          <h1>Unlock Your Best Financial Life.</h1>
          <p>Experience a smart, user-friendly app designed to effortlessly manage your finances.</p>
        </div>
      </div>
      <div class="header-content-right">
        <img src="./images/team.jpg" alt="Team image" />
      </div>
    </div>
  </header>

  <main id="preview">
    <section class="app-preview container">
      <div class="app-preview-left">
        <img src="./images/th.jpg" alt="App image" />
      </div>
      <div class="app-preview-right">
        <h2 class="section-title">Spend Smart, Save More.</h2>
        <p class="section-paragraph">Embrace the end of spreadsheets with customizable budgets. Effortlessly manage your incomes and expenses with ease.</p>
      </div>
    </section>

    <section class="track-your-spending container" id="track">
      <div class="track-your-spending-left">
        <h2 class="section-title">Master Your Spending Habits</h2>
        <p class="section-paragraph">Achieve your goals with personalized budgets, effortlessly tracking your daily incomes and expenses—all for free.</p>
      </div>
      <div class="track-your-spending-right">
        <img src="./images/people.jpg" alt="image" />
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-card">
        <h3>Our mission</h3>
        <a href="./index.php">Home</a>
        <a href="#preview">Preview</a>
        <a href="#track">Track spending</a>
      </div>
      <div class="footer-card">
        <h3>About</h3>
        <a href="https://github.com/YuraGolinsky" target="_blank">viniscode</a>
        <a href="https://github.com/YuraGolinsky/Money-Manager-Pro" target="_blank">Source code</a>
      </div>
      <div class="footer-card">
        <h3>Quick Links</h3>
        <a href="./index.php">Home</a>
        <a href="#preview">Preview</a>
        <a href="#track">Track spending</a>
      </div>
      <div class="footer-card">
        <h3>Get in touch</h3>
        <div class="social">
          <a href="https://www.linkedin.com/in/yura-golinsky/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://github.com/YuraGolinsky" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://www.instagram.com/gamesvip777/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://t.me/Yura_Golinsky" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram">
          </a>
        </div>
      </div>
    </div>
  </footer>
  



  <!-- Login Modal -->
  <div id="loginModal" class="modal">
    <div class="form-container">
      <button class="close-button" onclick="closeLoginModal()">&times;</button>
      <h2>Login</h2>
      <form id="loginForm" action="login.php" method="post">
        <label for="loginUsername">Username:</label>
        <input type="text" id="loginUsername" name="loginUsername" required>
        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" name="loginPassword" required>
        <button type="submit" class="button">Login</button>
        <div class="link">Don't have an account? <a href="#" onclick="openRegisterModal()">Register</a></div>
      </form>
    </div>
  </div>

  <!-- Register Modal -->
  <div id="registerModal" class="modal">
    <div class="form-container">
      <button class="close-button" onclick="closeRegisterModal()">&times;</button>
      <h2>Register</h2>
      <form id="registerForm" action="register.php" method="post">
        <label for="registerUsername">Username:</label>
        <input type="text" id="registerUsername" name="registerUsername" required>
        <label for="registerPassword">Password:</label>
        <input type="password" id="registerPassword" name="registerPassword" required>
        <button type="submit" class="button">Register</button>
        <div class="link">Already have an account? <a href="#" onclick="openLoginModal()">Login</a></div>
      </form>
    </div>
  </div>

  <script src="https://unpkg.com/feather-icons"></script>
  <script src="/Monances-main/JS index/languageSelect.js"></script>
  <script src="/Monances-main/JS index/loginModal.js"></script>

</body>
</html>
