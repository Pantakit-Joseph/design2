<?php
require_once 'bootstrap.php';
$pageName = $pageName ?? 'Dashboard';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ออกแบบระบบ2</title>
    <link rel="stylesheet" href="<?= SITE_URL ?>/utility.css">
    <link rel="stylesheet" href="<?= SITE_URL ?>/style.css">
    <link rel="stylesheet" href="<?= SITE_URL ?>/layout.css">
</head>

<body>
    <div id="layout">
        <nav id="menu">
            <h1 class="head top-bar">
                ออกแบบระบบ2
            </h1>
            <div class="menu-list scroll">
                <a href="<?= SITE_URL ?>" class="menu-item <?= $pageName === 'Dashboard' ? 'active' : '' ?>">Dashboard</a>

                <span class="menu-title">PAGE</span>
                <a href="<?= SITE_URL ?>/pages/sign-up.php" class="menu-item">Register</a>
                <a href="<?= SITE_URL ?>/pages/sign-in.php" class="menu-item">Login</a>

                <span class="menu-title">Components</span>
                <a class="menu-item <?= $pageName === 'Card' ? 'active' : '' ?>" href="<?= SITE_URL. '/components/card.php' ?>">
                    Card
                </a>
                <a class="menu-item <?= $pageName === 'Table' ? 'active' : '' ?>" href="<?= SITE_URL. '/components/table.php' ?>">
                    Table
                </a>
                <a class="menu-item <?= $pageName === 'Buttons' ? 'active' : '' ?>" href="<?= SITE_URL. '/components/buttons.php' ?>">
                    Buttons
                </a>
                <a class="menu-item <?= $pageName === 'Form' ? 'active' : '' ?>" href="<?= SITE_URL. '/components/form.php' ?>">
                    Form
                </a>
                <a class="menu-item <?= $pageName === 'Alerts' ? 'active' : '' ?>" href="<?= SITE_URL. '/components/alerts.php' ?>">
                    Alerts
                </a>
                <br><br><br>
            </div>
        </nav>

        <header class="top-bar">
            <div><?= $pageName ?></div>
            <div class="avatar">
                <img src="https://images.unsplash.com/photo-1516475429286-465d815a0df7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&force=true&w=640" alt="" class="">
                <span class="name">Firstname Lastname</span>
            </div>
        </header>

        <main>
            <?= $page ?? "Empty page" ?>
            <footer class="">
            </footer>
        </main>
    </div>
</body>

</html>