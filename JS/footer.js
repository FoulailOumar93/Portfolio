document.addEventListener("DOMContentLoaded", () => {
  const footer = `
    <footer class="footer">
      <h4>Follow Us</h4>
      <div class="social-links">
        <a href="https://x.com/oumar_foulail" target="_blank">
          <img src="../IMG/X Icon.jpg" alt="Twitter" />
        </a>
        <a href="https://www.instagram.com/oumar_foulail_93120/" target="_blank">
          <img src="../IMG/Instagram Icon.png" alt="Instagram" />
        </a>
        <a href="https://www.linkedin.com/in/oumar-foulail-9b0232178/" target="_blank">
          <img src="../IMG/LinkedIn Icon.png" alt="LinkedIn" />
        </a>
        <a href="https://github.com/FoulailOumar93" target="_blank">
          <img src="../IMG/GitHub Icon.png" alt="GitHub" />
        </a>
      </div>
      <p>© 2025 Tous Droits Réservés — Foulail Oumar</p>
    </footer>
  `;
  const container = document.getElementById("footer-container");
  if (container) {
    container.innerHTML = footer;
  }
});
