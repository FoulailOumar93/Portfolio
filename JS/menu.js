// Détection du bon chemin
let basePath = "";

// Si la page actuelle est dans /HTML/
if (window.location.pathname.includes("/HTML/")) {
  basePath = ""; // Menu dans le même dossier
} else {
  basePath = "HTML/"; // Menu dans le dossier HTML
}

// Chargement du menu
fetch(basePath + "Menu.html")
  .then((res) => res.text())
  .then((html) => {
    document.getElementById("menu-container").innerHTML = html;
  });

// Chargement du footer
fetch(basePath + "Footer.html")
  .then((res) => res.text())
  .then((html) => {
    document.getElementById("footer-container").innerHTML = html;
  });
