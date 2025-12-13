// ===============================
// 🌍 MULTI-LANGUE – Foulail Oumar (FINAL)
// ===============================

// langue par défaut
const defaultLang = localStorage.getItem("lang") || "fr";
loadLanguage(defaultLang);

// écoute les clics sur les boutons emoji (menu injecté)
document.addEventListener("click", (e) => {
  if (e.target.classList.contains("lang-btn")) {
    const lang = e.target.dataset.lang;

    localStorage.setItem("lang", lang);
    loadLanguage(lang);
  }
});

// ===============================
// 📥 Chargement JSON langue
// ===============================
function loadLanguage(lang) {
  fetch(`/Portfolio/Lang/JSON/${lang}.json`)
    .then((res) => {
      if (!res.ok) throw new Error("Lang file not found");
      return res.json();
    })
    .then((data) => applyTranslations(data))
    .catch((err) =>
      console.error("❌ Erreur chargement langue :", err)
    );
}

// ===============================
// 🔄 Appliquer les traductions
// ===============================
function applyTranslations(data) {
  document.querySelectorAll("[data-i18n]").forEach((el) => {
    const key = el.dataset.i18n;

    if (!data[key]) {
      console.warn("⚠️ Clé manquante :", key);
      return;
    }

    if (el.tagName === "INPUT" || el.tagName === "TEXTAREA") {
      el.placeholder = data[key];
    } else {
      el.innerHTML = data[key];
    }
  });

  highlightActiveLang();
}

// ===============================
// ⭐ Langue active (UX)
// ===============================
function highlightActiveLang() {
  const currentLang = localStorage.getItem("lang");

  document.querySelectorAll(".lang-btn").forEach((btn) => {
    btn.classList.toggle(
      "active-lang",
      btn.dataset.lang === currentLang
    );
  });
}
