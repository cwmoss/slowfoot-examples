<!doctype html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="SHORTCUT ICON" href="@assets/favicon.ico">
    <link rel="stylesheet" href="@assets/css/app.css" type="text/css">
    <script src="@assets/js/jquery-3.6.0.min.js"></script>
    <script src="@assets/js/app.js"></script>
    <title>MoMA Demo</title>

</head>

<body data-barba="wrapper">
    <header>
        <nav>
            <span>MoMA</span>
            <ul>
                <li><a :href="path_page('/')">Artists</a></li>
            </ul>
        </nav>
    </header>

    <main data-barba="container" data-barba-namespace="home">

        <slot.></slot.>

    </main>

    <footer>
        <div class="content">
            &copy; 2026
        </div>
    </footer>

</body>

</html>
<?php
// $settings = $helper->get('site_settings');
// $title = $settings->title;
// $nav = $ref($settings['nav_main']);
// $nav = ['items' => []];
