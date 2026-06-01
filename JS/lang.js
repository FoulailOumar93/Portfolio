// ===============================
// LANG.JS
// ===============================

const DEFAULT_LANG = "fr";

async function loadLanguage(lang) {
  try {

    const path = window.location.pathname.includes("/HTML/")
      ? `../Lang/JSON/${lang}.json`
      : `Lang/JSON/${lang}.json`;

    const response = await fetch(path);

    if (!response.ok) {
      throw new Error(`Impossible de charger ${lang}.json`);
    }

    const translations = await response.json();

    // Traductions classiques
    document.querySelectorAll("[data-i18n]").forEach((element) => {

      const key = element.getAttribute("data-i18n");

      if (translations[key]) {
        element.textContent = translations[key];
      }

    });

    // Placeholders
    document.querySelectorAll("[data-i18n-placeholder]").forEach((element) => {

      const key = element.getAttribute("data-i18n-placeholder");

      if (translations[key]) {
        element.placeholder = translations[key];
      }

    });

    localStorage.setItem("lang", lang);

    document.documentElement.lang = lang;

    console.log(`✅ Langue chargée : ${lang}`);

  } catch (error) {

    console.error("❌ Erreur traduction :", error);

  }
}

document.addEventListener("DOMContentLoaded", () => {

  const savedLang =
    localStorage.getItem("lang") || DEFAULT_LANG;

  loadLanguage(savedLang);

  document.addEventListener("click", (event) => {

    if (event.target.classList.contains("lang-btn")) {

      const lang = event.target.dataset.lang;

      loadLanguage(lang);

    }

  });

});