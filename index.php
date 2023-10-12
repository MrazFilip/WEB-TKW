<?php
require_once 'php/WebParts.php';
/*require_once 'php/db.php';

$sql = 'SELECT * FROM Users';
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();

var_dump($users);
*/

?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Jaguár Praha</title>
    <?php echo get_links() ?>
</head>
<body>
<?php //echo get_header() ?>
<section id="home">
    <aside class="kick filter-primary">
        <img src="img/kisspng-world-taekwondo-martial-arts-desktop-wallpaper-spo-martial-arts-5ac37ed4316d34.6197403015227614282025.png" alt="taekwondo kick">
    </aside>
    <div class="content">
        <h1>TAEKWONDO JAGUÁR</h1>
        <p>Vítáme Vás v největším Taekwondo klubu v Praze!</p>
        <a href="#proc_cvicit">
        <span class="material-symbols-outlined">
        keyboard_double_arrow_down
        </span>
        </a>
    </div>
    <aside class="kick">
        <img src="img/kisspng-world-taekwondo-martial-arts-desktop-wallpaper-spo-martial-arts-5ac37ed4316d34.6197403015227614282025.png" alt="taekwondo kick">
    </aside>
</section>
<section id="news">
    <div class="content">
        <h2>Novinky</h2>
        <div class="news">
            <div class="news-row">
                <a href="" class="news-card">
                    <img src="img/image-1536x1024.png" alt="jaguar">
                    <div class="card-row">
                        <h2>Placeholder</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </a>
                <a href="" class="news-card">
                    <img src="img/image-1536x1024.png" alt="jaguar">
                    <div class="card-row">
                        <h2>Placeholder</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </a>
            </div>
            <div class="news-row">
                <a href="" class="news-card">
                    <img src="img/image-1536x1024.png" alt="jaguar">
                    <div class="card-row">
                        <h2>Placeholder</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </a>
                <a href="" class="news-card">
                    <img src="img/image-1536x1024.png" alt="jaguar">
                    <div class="card-row">
                        <h2>Placeholder</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="proc_cvicit">
    <div class="content">
        <h2>Proč cvičit u nás?</h2>
        <nav>
            <div class="nav-item">
                <span class="material-symbols-outlined">
                trending_up
                </span>
                <h4>Největší!</h4>
                <p>Největší klub v Praze a stále se rozrůstáme!</p>
            </div>
            <div class="nav-item">
                <span class="material-symbols-outlined">
                stars
                </span>
                <h4>Nejlepší!</h4>
                <p>Pravidělně jezdíme na turnaje s naším závodním týmem!</p>
            </div>
            <div class="nav-item">
                <span class="material-symbols-outlined">
                savings
                </span>
                <h4>Nejlevnější!</h4>
                <p>Máme nejlevnější tréninky v Praze!</p>
            </div>
        </nav>
    </div>
</section>
<?php //echo get_footer() ?>
<script src="script.js"></script>
</body>
</html>