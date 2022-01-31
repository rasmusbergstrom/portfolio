<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="home-header">
        <div class="head-content">
            <div class="header-title">
                <h2>Rasmus Bergström</h2>
            </div>
            <div class="hamburger" id="js-navbar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <nav class="header-mob-menu">
                <ul class="menu-list">
                    <li class="menu-item">
                        <a class="menu-link" href="/home.html">
                            Start
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="/index.html">
                            Portfolio
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="/about-me.html">
                            Om mig
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="/contactpage.html">
                            Kontakt
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
</header>