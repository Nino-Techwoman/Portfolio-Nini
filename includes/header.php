<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO Meta Tags -->
  <meta name="description" content="<?php echo htmlspecialchars($site['description']); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($site['keywords']); ?>">
  <meta name="author" content="<?php echo htmlspecialchars($site['author']); ?>">
  <meta name="robots" content="index, follow">
  <meta name="language" content="English">
  <meta name="revisit-after" content="7 days">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($site['url']); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($site['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($site['description']); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($site['og_image']); ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo htmlspecialchars($site['url']); ?>">
  <meta property="twitter:title" content="<?php echo htmlspecialchars($site['title']); ?>">
  <meta property="twitter:description" content="<?php echo htmlspecialchars($site['description']); ?>">
  <meta property="twitter:image" content="<?php echo htmlspecialchars($site['og_image']); ?>">

  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo htmlspecialchars($site['url']); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-touch-icon.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <title><?php echo htmlspecialchars($site['title']); ?></title>

  <!-- JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "<?php echo htmlspecialchars($person['name']); ?>",
    "jobTitle": "<?php echo htmlspecialchars($person['title']); ?>",
    "url": "<?php echo htmlspecialchars($site['url']); ?>",
    "email": "<?php echo htmlspecialchars($site['email']); ?>",
    "sameAs": [
      "<?php echo htmlspecialchars($site['linkedin']); ?>",
      "<?php echo htmlspecialchars($site['github']); ?>"
    ],
    "knowsAbout": <?php echo json_encode($skills); ?>,
    "description": "<?php echo htmlspecialchars($site['description']); ?>"
  }
  </script>
</head>

<body>
