// ===============================
// i18n – FINAL STABLE VERSION
// ===============================

const DEFAULT_LANG = "fr";

// Détection automatique du bon chemin
const BASE_PATH = window.location.pathname.includes("/HTML/")
  ? "../Lang/JSON/"
  : "Lang/JSON/";

let translations = {};
let currentLang = localStorage.getItem("lang") || DEFAULT_LANG;

async function loadLanguage(lang) {
  try {
    const response = await fetch(`${BASE_PATH}${lang}.json`);
    if (!response.ok) throw new Error("JSON not found");
    translations = await response.json();

    applyTranslations();
    localStorage.setItem("lang", lang);
    document.documentElement.lang = lang;
    setActiveLangButton(lang);
  } catch (err) {
    console.error("❌ Lang load error:", err);
  }
}

function applyTranslations() {
  document.querySelectorAll("[data-i18n]").forEach(el => {
    const key = el.dataset.i18n;
    if (translations[key]) {
      el.innerHTML = translations[key];
    }
  });

  document.querySelectorAll("[data-i18n-placeholder]").forEach(el => {
    const key = el.dataset.i18nPlaceholder;
    if (translations[key]) {
      el.placeholder = translations[key];
    }
  });
}

function setActiveLangButton(lang) {
  document.querySelectorAll(".lang-btn").forEach(btn => {
    btn.classList.toggle("active-lang", btn.dataset.lang === lang);
  });
}

document.addEventListener("DOMContentLoaded", () => {
  loadLanguage(currentLang);

  document.querySelectorAll(".lang-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      loadLanguage(btn.dataset.lang);
    });
  });
});
