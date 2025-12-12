// Récupère automatiquement le bon dossier HTML
const base = "/Portfolio/HTML/";

// Chargement du menu
fetch(base + "Menu.html")
  .then(res => res.text())
  .then(html => {
    document.getElementById("menu-container").innerHTML = html;
  })
  .catch(err => console.error("Erreur menu :", err));

// Chargement du footer
fetch(base + "Footer.html")
  .then(res => res.text())
  .then(html => {
    document.getElementById("footer-container").innerHTML = html;
  })
  .catch(err => console.error("Erreur footer :", err));
