document.addEventListener("DOMContentLoaded", () => {
  const burger = document.getElementById("burger");
  const navLinks = document.getElementById("nav-links");

  if (!burger || !navLinks) {
    console.error("Menu.html non chargé");
    return;
  }

  burger.addEventListener("click", () => {
    navLinks.classList.toggle("open");
  });

  navLinks.querySelectorAll("a, button").forEach(el => {
    el.addEventListener("click", () => {
      navLinks.classList.remove("open");
    });
  });
});
