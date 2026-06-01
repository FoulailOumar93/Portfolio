document.addEventListener("DOMContentLoaded", () => {

  const menuContainer = document.getElementById("menu-container");

  if (!menuContainer) {
    console.error("menu-container introuvable");
    return;
  }

  fetch("Menu.html")
    .then((response) => {

      if (!response.ok) {
        throw new Error("Menu.html non trouvé");
      }

      return response.text();

    })
    .then((html) => {

      menuContainer.innerHTML = html;

      const burger = document.querySelector(".burger");
      const navLinks = document.getElementById("nav-links");

      if (burger && navLinks) {

        burger.addEventListener("click", () => {
          navLinks.classList.toggle("open");
        });

        navLinks.querySelectorAll("a").forEach((link) => {
          link.addEventListener("click", () => {
            navLinks.classList.remove("open");
          });
        });

      }

      // 🔥 Recharge les traductions après l'injection du menu
      const currentLang =
        localStorage.getItem("lang") || "fr";

      if (typeof loadLanguage === "function") {
        loadLanguage(currentLang);
      }

    })
    .catch((err) => {
      console.error("Erreur menu :", err);
    });

});