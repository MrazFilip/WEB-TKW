<?php

function get_links() {
    return'
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100,0,0" />
    ';
}

function get_header() {
    return'
    <header id="header">
        <div class="mode-toggle">
            <input type="checkbox" id="dark-mode-toggle">
            <label class="slider" for="dark-mode-toggle"></label>
        </div>
        <nav>
            <div class="logo-wrapper">
                <img src="img/jaguar_190.png" alt="Klubové logo" class="logo">
            </div>
            <div class="nav-socials">
                <a href="">
                </a>
                <a href="">
                </a>
            </div>
            <div class="nav-links">
                <a href="index.php">Domů</a>
                <a href="">Přihláška</a>
                <a href="">Kde trénujeme?</a>
                <a href="">Trenéři</a>
                <a href="">Novinky</a>
                <a href="">Galerie</a>
            </div>
            <div class="button-wrapper">
                <button id="login-button">
                    PŘIHLÁSIT SE
                </button>
            </div>
        </nav>
    </header>
    ';
}

function get_footer() {
    return'
    <footer>
        <div class="top">
            <div class="info">
                <h2>Kontakt:</h2>
                <h3>Martin Břeň</h3>
                <p>Email: <a href="mailto:bren@taekwondo-praha.cz">bren@taekwondo-praha.cz</a></p>
                <p>Tel.: <a href="tel:+420603805004">603 805 004</a></p>
            </div>
            <div class="socials">
                <a href=""><img class="filter-color" src="img/5282541_fb_social%20media_facebook_facebook%20logo_social%20network_icon.png" alt="facebook logo"></a>
                <a href=""><img class="filter-color" src="img/5282544_camera_instagram_social%20media_social%20network_instagram%20logo_icon%20(1).png" alt="instagram logo"></a>
            </div>
        </div>
        <div class="bottom">
            <p>Copyright © 2023</p>
            <a href="index.php">Taekwondo - Praha</a>
        </div>
    </footer>
    ';
}