document.addEventListener("DOMContentLoaded", () => {
  const menuContainer = document.getElementById("menu-container");

  if (!menuContainer) {
    console.error("menu-container introuvable");
    return;
  }

  // ⚠️ Menu.html est dans le MÊME dossier HTML
  fetch("Menu.html")
    .then((response) => {
      if (!response.ok) {
        throw new Error("Menu.html non trouvé");
      }
      return response.text();
    })
    .then((html) => {
      menuContainer.innerHTML = html;

      // ===== BURGER =====
      const burger = document.querySelector(".burger");
      const navLinks = document.getElementById("nav-links");

      if (burger && navLinks) {
        burger.addEventListener("click", () => {
          navLinks.classList.toggle("open");
        });

        // Ferme le menu quand on clique sur un lien
        navLinks.querySelectorAll("a").forEach((link) => {
          link.addEventListener("click", () => {
            navLinks.classList.remove("open");
          });
        });
      }
    })
    .catch((err) => console.error("Erreur menu :", err));
});
