  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#"><?php echo htmlspecialchars($person['name']); ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experiences">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo htmlspecialchars($site['linkedin']); ?>" target="_blank" rel="noopener noreferrer">
              <i class="bi bi-linkedin"></i> LinkedIn
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo htmlspecialchars($site['github']); ?>" target="_blank" rel="noopener noreferrer">
              <i class="bi bi-github"></i> GitHub
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
