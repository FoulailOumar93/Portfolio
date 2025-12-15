// ===============================
// i18n – Language Manager
// Compatible GitHub Pages
// ===============================

const DEFAULT_LANG = "fr";
const LANG_PATH = "../Lang/JSON/";

let translations = {};
let currentLang = localStorage.getItem("lang") || DEFAULT_LANG;

// Charger la langue
async function loadLanguage(lang) {
  try {
    const response = await fetch(`${LANG_PATH}${lang}.json`);
    translations = await response.json();
    applyTranslations();
    document.documentElement.lang = lang;
    localStorage.setItem("lang", lang);
    setActiveLangButton(lang);
  } catch (error) {
    console.error("Erreur chargement langue :", error);
  }
}

// Appliquer les traductions
function applyTranslations() {
  document.querySelectorAll("[data-i18n]").forEach(el => {
    const key = el.getAttribute("data-i18n");
    if (translations[key]) {
      el.innerHTML = translations[key];
    }
  });

  // Placeholders (inputs / textarea)
  document.querySelectorAll("[data-i18n-placeholder]").forEach(el => {
    const key = el.getAttribute("data-i18n-placeholder");
    if (translations[key]) {
      el.placeholder = translations[key];
    }
  });
}

// Boutons actifs
function setActiveLangButton(lang) {
  document.querySelectorAll(".lang-btn").forEach(btn => {
    btn.classList.toggle("active-lang", btn.dataset.lang === lang);
  });
}

// Init
document.addEventListener("DOMContentLoaded", () => {
  loadLanguage(currentLang);

  document.querySelectorAll(".lang-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      loadLanguage(btn.dataset.lang);
    });
  });
});
