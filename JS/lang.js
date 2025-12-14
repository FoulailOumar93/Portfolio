async function loadLanguage(lang) {
  try {
    const response = await fetch(`../Lang/JSON/${lang}.json`);
    if (!response.ok) throw new Error("Lang file not found");

    const translations = await response.json();

    document.querySelectorAll("[data-i18n]").forEach(el => {
      const key = el.getAttribute("data-i18n");
      if (translations[key]) {
        el.innerHTML = translations[key];
      }
    });

    document.documentElement.lang = lang;
    localStorage.setItem("lang", lang);

  } catch (error) {
    console.error("Erreur chargement langue :", error);
  }
}

// langue au chargement
document.addEventListener("DOMContentLoaded", () => {
  const savedLang = localStorage.getItem("lang") || "fr";
  loadLanguage(savedLang);
});

// boutons langue
document.addEventListener("click", e => {
  if (e.target.classList.contains("lang-btn")) {
    loadLanguage(e.target.dataset.lang);
  }
});
