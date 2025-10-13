  <!-- Contact Footer Section -->
  <footer id="contact" class="bg-dark text-white py-5">
    <div class="container text-center">
      <h2 class="display-5 fw-bold mb-4">Any Questions?</h2>
      <p class="lead mb-4">
        Mail me at: <a href="mailto:<?php echo htmlspecialchars($site['email']); ?>" class="text-warning text-decoration-none fw-bold">
          <?php echo htmlspecialchars($site['email']); ?>
        </a>
      </p>
      <div class="d-flex justify-content-center gap-3 mb-4">
        <a href="<?php echo htmlspecialchars($site['linkedin']); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light">
          <i class="bi bi-linkedin"></i> LinkedIn
        </a>
        <a href="<?php echo htmlspecialchars($site['github']); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light">
          <i class="bi bi-github"></i> GitHub
        </a>
      </div>
      <hr class="my-4 bg-white opacity-25">
      <p class="text-muted mb-0">&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($person['name']); ?>. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
