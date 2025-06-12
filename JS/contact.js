document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("form");
  const confirmation = document.querySelector(".confirmation-message");

  if (form && confirmation) {
    form.addEventListener("submit", () => {
      setTimeout(() => {
        confirmation.style.display = "block";
      }, 300);
    });
  }
});
