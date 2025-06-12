document.addEventListener("DOMContentLoaded", () => {
  const switcher = document.getElementById("theme-switch");
  const icon = switcher.querySelector("i");

  // 🔄 Appliquer le thème stocké au chargement
  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark");
    icon.classList.remove("fa-moon");
    icon.classList.add("fa-sun");
  } else {
    document.body.classList.remove("dark");
    icon.classList.remove("fa-sun");
    icon.classList.add("fa-moon");
  }

  // 👆 Au clic sur le bouton thème
  switcher.addEventListener("click", () => {
    document.body.classList.toggle("dark");

    // 🔁 Change l’icône
    icon.classList.toggle("fa-moon");
    icon.classList.toggle("fa-sun");

    // 💾 Stocke le choix
    if (document.body.classList.contains("dark")) {
      localStorage.setItem("theme", "dark");
    } else {
      localStorage.setItem("theme", "light");
    }
  });
});
