document.getElementById("menu-container").innerHTML = `
  <header>
    <input type="checkbox" id="burger-toggle" />
    <label for="burger-toggle" class="burger">
      <span></span><span></span><span></span>
    </label>

    <nav>
      <ul>
        <li><a href="/Portfolio/HTML/Accueil.html" data-i18n="menu_home">Accueil</a></li>
        <li><a href="/Portfolio/HTML/Profil.html" data-i18n="menu_profile">Profil</a></li>
        <li><a href="/Portfolio/HTML/BTS SIO.html" data-i18n="menu_bts">BTS SIO</a></li>
        <li><a href="/Portfolio/HTML/OClock.html" data-i18n="menu_oclock">O'Clock</a></li>
        <li><a href="/Portfolio/HTML/Projets.html" data-i18n="menu_projects">Projets</a></li>
        <li><a href="/Portfolio/HTML/Stage.html" data-i18n="menu_stage">Stages</a></li>
        <li><a href="/Portfolio/HTML/Veille Technologique.html" data-i18n="menu_veille">Veille Techno</a></li>
        <li><a href="/Portfolio/HTML/Certification.html" data-i18n="menu_certif">Certification</a></li>
        <li><a href="/Portfolio/HTML/Contact.html" data-i18n="menu_contact">Contact</a></li>
      </ul>
    </nav>

    <!-- bouton langues -->
    <button id="lang-switch" class="lang-btn">FR</button>
  </header>
`;
