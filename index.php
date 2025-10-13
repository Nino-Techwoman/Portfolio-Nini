<?php
require_once 'data.php';
require_once 'functions.php';
require_once 'components.php';

// Head + meta + CSS
render_head($site, $person, $skills);

// Header + Nav
render_header($person, $navigation, $social_links);

// Hero Section
render_hero($person);

// Skills Section
render_skills($skills);

// Projects Section
render_projects($projects);

// Footer
render_footer($site, $person, $social_links);

// Scripts
render_scripts();
?>

<script>
// Burger menu toggle
const burger = document.querySelector('.burger-menu');
const nav = document.querySelector('header nav');
const body = document.body;

burger.addEventListener('click', () => {
  burger.classList.toggle('active');
  nav.classList.toggle('active');
  body.classList.toggle('menu-open');
});

// Smooth scroll + close menu
document.querySelectorAll('header nav a[href^="#"]').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
    burger.classList.remove('active');
    nav.classList.remove('active');
    body.classList.remove('menu-open');
  });
});
</script>
