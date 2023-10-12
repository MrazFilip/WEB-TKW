const ModeToggle = document.getElementById('dark-mode-toggle');
var ActiveMode = false;

window.onscroll = function () {
    console.log(scrollY);
    if (scrollY === 0) {
        document.getElementById('header').classList.remove("collapsed");
    } else {
        document.getElementById('header').classList.add("collapsed");
    }
}

ModeToggle.onchange = function () {
    if(ActiveMode) {
        document.documentElement.setAttribute('data-theme', 'dark');
        ActiveMode = false;
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        ActiveMode = true;
    }
}