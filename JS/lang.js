let currentLang = "fr";

function loadLanguage(lang) {
  fetch(`/Portfolio/Lang/JSON/${lang}.json`)
    .then(res => res.json())
    .then(data => {
      document.querySelectorAll("[data-i18n]").forEach(elem => {
        const key = elem.getAttribute("data-i18n");
        if (data[key]) {
          elem.textContent = data[key];
        }
      });
    })
    .catch(() => console.error("Erreur chargement langue :", lang));
}

document.addEventListener("DOMContentLoaded", () => {
  loadLanguage(currentLang);

  const langBtn = document.getElementById("lang-switch");
  langBtn.addEventListener("click", () => {
    if (currentLang === "fr") currentLang = "en";
    else if (currentLang === "en") currentLang = "ta";
    else currentLang = "fr";

    langBtn.textContent = currentLang.toUpperCase();
    loadLanguage(currentLang);
  });
});
