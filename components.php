<?php
/**
 * components.php
 * Functions to render the portfolio sections dynamically
 */

/**
 * Render HTML Head
 */
function render_head($site, $person, $skills) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?= $site['title'] ?></title>
        <meta name="description" content="<?= $site['description'] ?>">
        <meta name="keywords" content="<?= $site['keywords'] ?>">
        <meta name="author" content="<?= $site['author'] ?>">

        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= $site['url'] ?>">
        <meta property="og:title" content="<?= $site['title'] ?>">
        <meta property="og:description" content="<?= $site['description'] ?>">
        <meta property="og:image" content="<?= $site['og_image'] ?>">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= $site['title'] ?>">
        <meta name="twitter:description" content="<?= $site['description'] ?>">
        <meta name="twitter:image" content="<?= $site['og_image'] ?>">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php
}

/**
 * Render Header + Navigation
 */
function render_header($person, $navigation, $social_links) {
    ?>
    <header>
        <div class="nav container">
            <button class="burger-menu" aria-label="Toggle navigation menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
            <nav aria-label="Main navigation">
                <?php foreach($navigation as $item): ?>
                    <a href="<?= $item['href'] ?>"><?= $item['label'] ?></a>
                <?php endforeach; ?>
                <hr class="custom-line" aria-hidden="true">
                <?php foreach($social_links as $link): ?>
                    <a href="<?= $link['url'] ?>" target="_blank" rel="noopener noreferrer" aria-label="Visit my <?= $link['platform'] ?> profile"><?= $link['platform'] ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>
    <?php
}

/**
 * Render Hero Section
 */
function render_hero($person) {
    ?>
    <main>
        <div class="main container">
            <div class="herobox1">
                <h1>Hi, I'm <?= $person['name'] ?></h1>
                <p><?= $person['intro'] ?></p>
                <div class="mybutton">
                    <a href="<?= $person['cv_path'] ?>" download>Download CV</a>
                </div>
            </div>
            <div class="herobox2">
                <img src="<?= $person['profile_image'] ?>" alt="Profile photo of <?= $person['name'] ?>">
            </div>
        </div>
    </main>
    <?php
}

/**
 * Render Skills Section
 */
function render_skills($skills) {
    ?>
    <section id="skills" aria-labelledby="skills-heading">
        <div class="section container">
            <h2 id="skills-heading">My Skills</h2>
            <ol>
                <?php foreach($skills as $skill): ?>
                    <li><?= $skill ?></li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>
    <?php
}

/**
 * Render Projects Section
 */
function render_projects($projects) {
    ?>
    <section id="experiences" class="section1" aria-labelledby="experiences-heading">
        <?php foreach($projects as $project): ?>
            <div class="cards container">
                <div class="card1">
                    <img src="<?= $project['image'] ?>" alt="<?= $project['image_alt'] ?>">
                </div>
                <div class="card2">
                    <h3><?= $project['title'] ?></h3>
                    <p><?= $project['description'] ?></p>
                    <div class="mybutton">
                        <a href="<?= $project['github_link'] ?>" target="_blank">View Git</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <?php
}

/**
 * Render Footer
 */
function render_footer($site, $person, $social_links) {
    ?>
    <footer id="contact">
        <div class="footer container">
            <h2>Any Questions?</h2>
            <p>Mail me at: <a href="mailto:<?= $site['email'] ?>"><?= $site['email'] ?></a></p>
        </div>
    </footer>
    <?php
}

/**
 * Render Scripts
 */
function render_scripts() {
    ?>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <script src="script.js"></script>
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
    </body>
    </html>
    <?php
}
?>
