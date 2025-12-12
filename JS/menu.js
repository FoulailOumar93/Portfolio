// Chargement du menu (chemin relatif)
fetch("Menu.html")
  .then(res => res.text())
  .then(html => {
    document.getElementById("menu-container").innerHTML = html;
  })
  .catch(err => console.error("Erreur chargement menu :", err));

// Chargement du footer (chemin relatif)
fetch("Footer.html")
  .then(res => res.text())
  .then(html => {
    document.getElementById("footer-container").innerHTML = html;
  })
  .catch(err => console.error("Erreur chargement footer :", err));
