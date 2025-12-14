const DEFAULT_LANG = "fr";

function loadLanguage(lang) {
  fetch(`../Lang/JSON/${lang}.json`)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Lang file not found");
      }
      return response.json();
    })
    .then((translations) => {
      document.querySelectorAll("[data-i18n]").forEach((el) => {
        const key = el.getAttribute("data-i18n");
        if (translations[key]) {
          el.textContent = translations[key];
        }
      });

      document.documentElement.lang = lang;
      localStorage.setItem("lang", lang);
    })
    .catch((error) => {
      console.error("Erreur chargement langue :", error);

      // 🔒 fallback sécurité : français
      if (lang !== DEFAULT_LANG) {
        loadLanguage(DEFAULT_LANG);
      }
    });
}

// Chargement initial
document.addEventListener("DOMContentLoaded", () => {
  const savedLang = localStorage.getItem("lang") || DEFAULT_LANG;
  loadLanguage(savedLang);

  document.querySelectorAll(".lang-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      loadLanguage(btn.dataset.lang);
    });
  });
});
