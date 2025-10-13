// Burger Menu Toggle
const burgerMenu = document.querySelector('.burger-menu');
const nav = document.querySelector('nav');
const navLinks = document.querySelectorAll('nav a');

burgerMenu.addEventListener('click', () => {
  burgerMenu.classList.toggle('active');
  nav.classList.toggle('active');
  document.body.classList.toggle('menu-open');

  // Update aria-expanded for accessibility
  const isExpanded = burgerMenu.classList.contains('active');
  burgerMenu.setAttribute('aria-expanded', isExpanded);
});

// Close menu when clicking on a link
navLinks.forEach(link => {
  link.addEventListener('click', () => {
    burgerMenu.classList.remove('active');
    nav.classList.remove('active');
    document.body.classList.remove('menu-open');
    burgerMenu.setAttribute('aria-expanded', 'false');
  });
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
  if (!nav.contains(e.target) && !burgerMenu.contains(e.target) && nav.classList.contains('active')) {
    burgerMenu.classList.remove('active');
    nav.classList.remove('active');
    document.body.classList.remove('menu-open');
    burgerMenu.setAttribute('aria-expanded', 'false');
  }
});

// Close menu on escape key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && nav.classList.contains('active')) {
    burgerMenu.classList.remove('active');
    nav.classList.remove('active');
    document.body.classList.remove('menu-open');
    burgerMenu.setAttribute('aria-expanded', 'false');
  }
});
