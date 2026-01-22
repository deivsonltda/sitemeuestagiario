<?php // app/layout/footer.php ?>
<footer class="footer">
  <div class="container footer-inner">
    <div class="muted">© <?= date('Y') ?> <?= htmlspecialchars($brand['name'] ?? 'MeuEstagiário') ?>. Todos os direitos reservados.</div>
    <div class="footer-links">
      <a href="https://meuestagiario.online/privacy.php">Privacidade</a>
      <a href="https://meuestagiario.online/terms.php">Termos</a>
      <a href="mailto:<?= htmlspecialchars($brand['email'] ?? 'contato@meuestagiario.com') ?>">Email</a>
    </div>
  </div>
</footer>

<script src="./assets/js/app.js"></script>
</body>
</html>