<?php

function get_header() {
    return'
    <header id="header">
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