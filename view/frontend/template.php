<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?></title>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?=$css?>
    </head>
<body>
    <header class="head-services unselected">
            <div id="title">
                <span>S</span><span> tatistiques </span>
            </div>

            <!-- <div class="search">
                <input type="text" placeholder="Search ...">
            </div> -->
        <?php if(isset($_SESSION['auth'])){ ?>
            <div id="menu-toggle" class="menu-toggle active-element">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <nav id="firstList">
                <ul>
                    <li onclick="event.preventDefault();document.getElementById('form_id').submit()">Logout</li>
                </ul>
            </nav>
            <form id="form_id"  action="index.php" method="post">
                 <input type="hidden" name="logout" value="logout">
            </form>
        <?php }?>

    </header>
    
    <?php if(isset($_SESSION['auth'])){ ?>
        <div id="menu-list" class="menu-list active-element">
            <ul>
                <li onclick="event.preventDefault();document.getElementById('form_id').submit()">Logout</li>
            </ul>
        </div>
    <?php }?>

    <?=$content?>

    <?php 
        if(isset($_SESSION['auth'])){
        
            require 'Partials/Footer.php';
        }
    ?>

    <?=$script?>

    <script src="public/JS/Menu2.js"></script>
    <!-- <script src="public/JS/template.js"></script> -->
</body>
</html>