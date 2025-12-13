document.getElementById("menu-container").innerHTML = `
  <header>
    <input type="checkbox" id="burger-toggle" />
    <label for="burger-toggle" class="burger">
      <span></span><span></span><span></span>
    </label>

    <nav>
      <ul>
        <li><a href="../HTML/Accueil.html" data-i18n="menu_home">Accueil</a></li>
        <li><a href="../HTML/Profil.html" data-i18n="menu_profile">Profil</a></li>
        <li><a href="../HTML/BTS SIO.html" data-i18n="menu_bts">BTS SIO</a></li>
        <li><a href="../HTML/OClock.html" data-i18n="menu_oclock">O'Clock</a></li>
        <li><a href="../HTML/Projets.html" data-i18n="menu_projects">Projets</a></li>
        <li><a href="../HTML/Stage.html" data-i18n="menu_stage">Stage</a></li>
        <li><a href="../HTML/Veille Technologique.html" data-i18n="menu_veille">Veille Technologique</a></li>
        <li><a href="../HTML/Certification.html" data-i18n="menu_certif">Certification</a></li>
        <li><a href="../HTML/Contact.html" data-i18n="menu_contact">Contact</a></li>
      </ul>
    </nav>

    <button id="lang-switch" class="lang-btn">FR</button>
  </header>
`;
