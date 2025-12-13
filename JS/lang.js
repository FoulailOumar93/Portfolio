// ===============================
// 🌍 MULTI-LANGUE – Foulail Oumar
// ===============================

// Langue par défaut
let currentLang = localStorage.getItem("lang") || "fr";

// Chargement de la langue choisie
loadLanguage(currentLang);

// Bouton dans le menu
document.addEventListener("click", (e) => {
  if (e.target.id === "lang-switch") {
    switchLanguage();
  }
});

// ===============================
// 🔁 Changement de langue
// ===============================
function switchLanguage() {
  currentLang = currentLang === "fr" ? "en" : currentLang === "en" ? "ta" : "fr";
  localStorage.setItem("lang", currentLang);
  loadLanguage(currentLang);
}

// ===============================
// 📥 Charge le fichier JSON
// ===============================
function loadLanguage(lang) {
  fetch(`/Portfolio/Lang/JSON/${lang}.json`)
    .then((res) => res.json())
    .then((data) => applyTranslations(data))
    .catch((err) => console.error("❌ Erreur chargement langue :", err));
}

// ===============================
// 🔄 Applique les traductions HTML
// ===============================
function applyTranslations(data) {
  // Mets à jour le bouton
  const btn = document.getElementById("lang-switch");
  if (btn) btn.textContent = currentLang.toUpperCase();

  // Remplace tout ce qui a un data-i18n
  document.querySelectorAll("[data-i18n]").forEach((el) => {
    const key = el.getAttribute("data-i18n");

    if (data[key]) {
      // Si c'est un input → placeholder
      if (el.tagName === "INPUT" || el.tagName === "TEXTAREA") {
        el.placeholder = data[key];
      } else {
        el.innerHTML = data[key];
      }
    } else {
      console.warn("⚠️ Clé manquante dans JSON :", key);
    }
  });
}
