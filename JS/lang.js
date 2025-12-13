let currentLang = localStorage.getItem("lang") || "fr";

function loadLang(lang) {
    fetch(`/Portfolio/lang/${lang}.json`)
        .then(res => res.json())
        .then(data => {
            document.querySelectorAll("[data-i18n]").forEach(el => {
                const key = el.getAttribute("data-i18n");
                if (data[key]) el.textContent = data[key];
            });
        });

    localStorage.setItem("lang", lang);
    currentLang = lang;
}

document.addEventListener("DOMContentLoaded", () => {
    loadLang(currentLang);

    document.getElementById("lang-switch").addEventListener("click", () => {
        const sequence = ["fr", "en", "ta"];
        let nextLang = sequence[(sequence.indexOf(currentLang) + 1) % 3];
        loadLang(nextLang);

        // bouton affiche la langue suivante
        document.getElementById("lang-switch").textContent =
            nextLang === "fr" ? "FR" : nextLang === "en" ? "EN" : "TA";
    });

    // initial keypad text
    document.getElementById("lang-switch").textContent =
        currentLang === "fr" ? "FR" : currentLang === "en" ? "EN" : "TA";
});
