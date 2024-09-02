const baseAnimation = {
  distance: "150px",
  opacity: 0,
  reset: true,
  duration: 700,
};

const slideLeft = {
  ...baseAnimation,
  origin: "left",
  delay: 400,
};

const slideRight = {
  ...baseAnimation,
  origin: "right",
  delay: 200,
};

const slideUp = {
  ...baseAnimation,
  origin: "bottom",
  delay: 400,
};

const slideDown = {
  ...baseAnimation,
  origin: "top",
  delay: 200,
};

const fadeIn = {
  delay: 200,
  duration: 600,
  opacity: 0,
  reset: true,
};

const scaleIn = {
  delay: 200,
  duration: 600,
  scale: 0.8,
  reset: true,
};

// Header Content
ScrollReveal().reveal(".header-content-left", slideLeft);
ScrollReveal().reveal(".header-content-right", slideRight);

// App preview Section
ScrollReveal().reveal(".app-preview-left", slideDown);
ScrollReveal().reveal(".app-preview-right", slideUp);

// Track Your Spending Section
ScrollReveal().reveal(".track-your-spending-left", slideLeft);
ScrollReveal().reveal(".track-your-spending-right", slideRight);

// Get in touch Section
ScrollReveal().reveal(".get-in-touch", slideUp);

// Footer
ScrollReveal().reveal(".footer-container", slideLeft);

// Additional Animations
ScrollReveal().reveal(".feature-item", fadeIn);
ScrollReveal().reveal(".testimonials", scaleIn);
