const DEFAULT_LANG = "fr";

let currentLang = localStorage.getItem("lang") || DEFAULT_LANG;

async function loadLanguage(lang) {
  try {
    const response = await fetch(`../Lang/JSON/${lang}.json`);
    if (!response.ok) throw new Error("Lang file not found");

    const translations = await response.json();

    // Texte normal
    document.querySelectorAll("[data-i18n]").forEach(el => {
      const key = el.getAttribute("data-i18n");
      if (translations[key]) {
        el.textContent = translations[key];
      }
    });

    // Placeholders
    document.querySelectorAll("[data-i18n-placeholder]").forEach(el => {
      const key = el.getAttribute("data-i18n-placeholder");
      if (translations[key]) {
        el.setAttribute("placeholder", translations[key]);
      }
    });

    document.documentElement.lang = lang;
    localStorage.setItem("lang", lang);

  } catch (err) {
    console.error("Erreur de traduction :", err);
  }
}

// Boutons langue
document.addEventListener("DOMContentLoaded", () => {
  loadLanguage(currentLang);

  document.querySelectorAll(".lang-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      const lang = btn.dataset.lang;
      loadLanguage(lang);

      document.querySelectorAll(".lang-btn").forEach(b => b.classList.remove("active-lang"));
      btn.classList.add("active-lang");
    });
  });
});
