// ===============================
// 🍔 MENU BURGER RESPONSIVE
// ===============================
document.addEventListener("DOMContentLoaded", () => {
  const burger = document.getElementById("burger");
  const nav = document.getElementById("nav-links");

  if (burger && nav) {
    burger.addEventListener("click", () => {
      nav.classList.toggle("open");
      burger.classList.toggle("active");
    });

    // 🔒 Fermer le menu quand on clique sur un lien
    nav.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => {
        nav.classList.remove("open");
        burger.classList.remove("active");
      });
    });
  }

  // ===============================
  // 🌍 GESTION DES LANGUES
  // ===============================
  const langButtons = document.querySelectorAll(".lang-btn");

  // Langue sauvegardée ou FR par défaut
  let currentLang = localStorage.getItem("lang") || "fr";

  applyLanguage(currentLang);
  setActiveLangButton(currentLang);

  langButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      const selectedLang = btn.dataset.lang;

      if (selectedLang) {
        currentLang = selectedLang;
        localStorage.setItem("lang", currentLang);

        applyLanguage(currentLang);
        setActiveLangButton(currentLang);

        // 🔒 Ferme le menu burger après changement de langue
        nav.classList.remove("open");
        burger.classList.remove("active");
      }
    });
  });

  // ===============================
  // 📥 CHARGEMENT JSON
  // ===============================
  function applyLanguage(lang) {
    fetch(`../Lang/JSON/${lang}.json`)
      .then(res => {
        if (!res.ok) throw new Error("Lang file not found");
        return res.json();
      })
      .then(data => {
        translatePage(data);
        document.documentElement.lang = lang; // 🔥 important pour CSS Tamil
      })
      .catch(err => console.error("❌ Lang error:", err));
  }

  // ===============================
  // 🔄 TRADUCTION DU CONTENU
  // ===============================
  function translatePage(data) {
    document.querySelectorAll("[data-i18n]").forEach(el => {
      const key = el.getAttribute("data-i18n");
      if (data[key]) {
        el.innerHTML = data[key];
      }
    });

    document.querySelectorAll("[data-i18n-placeholder]").forEach(el => {
      const key = el.getAttribute("data-i18n-placeholder");
      if (data[key]) {
        el.placeholder = data[key];
      }
    });
  }

  // ===============================
  // ⭐ BOUTON LANGUE ACTIF
  // ===============================
  function setActiveLangButton(lang) {
    langButtons.forEach(btn => {
      btn.classList.toggle("active-lang", btn.dataset.lang === lang);
    });
  }
});
