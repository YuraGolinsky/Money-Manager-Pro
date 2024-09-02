document.addEventListener('DOMContentLoaded', function() {
  const languageSelect = document.querySelectorAll('.toggle-input');
  const translations = {};

  function loadTranslations() {
    fetch('http://localhost/Monances-main/translations/translations.json')
      .then(response => response.json())
      .then(data => {
        Object.assign(translations, data);
        // Устанавливаем язык по умолчанию
        const defaultLanguage = 'en';
        applyTranslations(defaultLanguage);
      })
      .catch(error => console.error('Error loading translations:', error));
  }

  function applyTranslations(language) {
    const elements = {
      headerTitle: document.querySelector('.logo p'),
      heroHeading: document.querySelector('.hero-section h1'),
      heroParagraph: document.querySelector('.hero-section p'),
      previewTitle: document.querySelector('.app-preview-right h2'),
      previewParagraph: document.querySelector('.app-preview-right p'),
      trackTitle: document.querySelector('.track-your-spending-left h2'),
      trackParagraph: document.querySelector('.track-your-spending-left p'),
      loginButton: document.querySelector('.buttons .button[onclick="openLoginModal()"]'),
      registerButton: document.querySelector('.buttons .button[onclick="openRegisterModal()"]'),
      telegramBot: document.querySelector('.buttons .button[onclick="openTelegramBot()"]'),
      loginModalTitle: document.querySelector('#loginModal h2'),
      registerModalTitle: document.querySelector('#registerModal h2'),
      loginFormUsername: document.querySelector('#loginForm label[for="loginUsername"]'),
      loginFormPassword: document.querySelector('#loginForm label[for="loginPassword"]'),
      registerFormUsername: document.querySelector('#registerForm label[for="registerUsername"]'),
      registerFormPassword: document.querySelector('#registerForm label[for="registerPassword"]'),
      loginLink: document.querySelector('#loginModal .link a'),
      registerLink: document.querySelector('#registerModal .link a'),
      footerMission: document.querySelector('.footer-card:nth-child(1) h3'),
      footerAbout: document.querySelector('.footer-card:nth-child(2) h3'),
      footerQuickLinks: document.querySelector('.footer-card:nth-child(3) h3'),
      footerGetInTouch: document.querySelector('.footer-card:nth-child(4) h3'),
      footerMissionLink: document.querySelector('.footer-card:nth-child(1) a'),
      footerAboutLink: document.querySelector('.footer-card:nth-child(2) a'),
      footerQuickLinksLink: document.querySelector('.footer-card:nth-child(3) a'),
      footerGetInTouchLink: document.querySelector('.footer-card:nth-child(4) a'),
      navHome: document.querySelector('nav a[href="./index.php"]'),
      navPreview: document.querySelector('nav a[href="#preview"]'),
      navTrackSpending: document.querySelector('nav a[href="#track"]'),
      navGetInTouch: document.querySelector('nav a[href="#get-in-touch"]'),
      sourceCode: document.querySelector('footer .footer-card:nth-child(2) a[href*="Money-Manager-Pro"]')
    };

    const langData = translations[language];
    if (langData) {
      for (const key in elements) {
        if (elements[key]) {
          const textKey = key.replace(/([A-Z])/g, '_$1').toLowerCase();
          if (Array.isArray(elements[key])) {
            elements[key].forEach(element => {
              element.textContent = langData[textKey] || element.textContent;
            });
          } else {
            elements[key].textContent = langData[textKey] || elements[key].textContent;
          }
        }
      }
    }
  }

  languageSelect.forEach(input => {
    input.addEventListener('change', function() {
      if (this.checked) {
        applyTranslations(this.value);
      }
    });
  });

  loadTranslations();
});
