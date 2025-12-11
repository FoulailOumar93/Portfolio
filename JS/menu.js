// Chargement du menu
fetch("/HTML/Menu.html")
  .then((res) => res.text())
  .then((html) => {
    document.getElementById("menu-container").innerHTML = html;
  })
  .catch((err) => console.error("Erreur menu:", err));

// Chargement du footer
fetch("/HTML/Footer.html")
  .then((res) => res.text())
  .then((html) => {
    document.getElementById("footer-container").innerHTML = html;
  })
  .catch((err) => console.error("Erreur footer:", err));
