<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?></title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?=$css?>
    </head>
<body>
    <header class="head-services unselected">
            <div id="title">
                <span>S</span><span> tatistiques </span>
            </div>

            <div class="search">
                <input type="text" placeholder="Search ...">
            </div>

            <div id="menu-toggle" class="menu-toggle active-element">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <nav id="firstList">
                <ul>
                    <li>Home</li>
                    <li>Services</li>
                    <li class="sign">SignIn</li>
                    <li class="sign">SignUp</li>
                </ul>
            </nav>
    </header>
    <div id="menu-list" class="menu-list active-element">
        <ul>
          <li>Home</li>
          <li>Services</li>
          <li>Inscription</li>
        </ul>
    </div>

    <?=$content?>

    <footer class="unselected">
            <p>Statistiques, copyright &copy; <?php echo date('Y') ;?></p>
    </footer>
    <?=$script?>

    <script src="JS/Menu2.js"></script>
    <script src="JS/template.js"></script>
</body>
</html>