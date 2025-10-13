<?php
/**
 * data.php
 * All site content for Nino Bregvadze Portfolio
 */

// Site Info
$site = [
    'title' => 'Nino Bregvadze | Web Developer Portfolio - HTML, CSS, JavaScript',
    'description' => 'Nino Bregvadze - Web Developer specializing in responsive, user-friendly websites. Expert in HTML, CSS, JavaScript, and modern web development.',
    'keywords' => 'Nino Bregvadze, web developer, frontend developer, HTML, CSS, JavaScript, responsive design, portfolio, web development',
    'author' => 'Nino Bregvadze',
    'url' => 'https://ninobregvadze.com/',
    'email' => 'nini.bregvadze@icloud.com',
    'linkedin' => 'https://www.linkedin.com/in/ninobregvadze',
    'github' => 'https://github.com/ninobregvadze',
    'og_image' => 'https://ninobregvadze.com/assets/og-image.png'
];

// Personal Info
$person = [
    'name' => 'Nino Bregvadze',
    'title' => 'Junior WordPress & Front-End Developer',
    'intro' => "I am a passionate and detail-oriented Junior WordPress Developer with hands-on experience gained at SkillWill, where I learned PHP, Elementor, and WooCommerce. Currently expanding my Front-End skills with HTML, CSS, and JavaScript at GITA. I love learning, exploring new technologies, and turning designs into functional, responsive, user-friendly websites.",
    'profile_image' => './assets/image.png',
    'cv_path' => './assets/Nino-Bregvadze-cv.pdf'
];

// Navigation
$navigation = [
    ['label' => 'About Me', 'href' => '#about'],
    ['label' => 'Experiences', 'href' => '#experiences'],
    ['label' => 'Contact', 'href' => '#contact']
];

// Social Links
$social_links = [
    ['platform' => 'LinkedIn', 'url' => $site['linkedin'], 'icon' => 'bi-linkedin'],
    ['platform' => 'GitHub', 'url' => $site['github'], 'icon' => 'bi-github']
];

// Skills
$skills = [
    'WordPress',
    'Elementor / WooCommerce',
    'XAMPP / LocalWP',
    'HTML5',
    'CSS3',
    'PHP basics',
    'JavaScript (ongoing)',
    'Responsive Design',
    'Git & GitHub'
];

// Projects
$projects = [
    [
        'title' => 'Travelix – Travel Agency Platform',
        'description' => 'Team project featuring a travel site with destination listings and contact form. I handled the PHP backend and form functionality.',
        'image' => './assets/Screenshot 2025-10-13 at 09.22.17.png',
        'image_alt' => 'Screenshot of e-commerce website project showing product catalog',
        'github_link' => 'https://github.com/Nino-Techwoman/Travelix_website_final'
    ],
    [
        'title' => 'Lux-Venstus – Frontend Project',
        'description' => 'A collaborative web project built with HTML, CSS, JavaScript, and PHP. Worked with a team to develop and design a responsive, user-friendly site. Still in progress.',
        'image' => './assets/lux.png',
        'image_alt' => 'Screenshot of portfolio website showing modern design',
        'github_link' => 'https://github.com/SalomeSivsivadze12345678/Lux-Ventus1'
    ],
    [
        'title' => 'Miko Hospital Website',
        'description' => 'Developed the full PHP backend, including data management and index functions. Added JavaScript features for dynamic user experience.',
        'image' => './assets/mico.png',
        'image_alt' => 'Screenshot of weather application showing forecast interface',
        'github_link' => 'https://github.com/Nino-Techwoman/mico'
    ]
];
?>

