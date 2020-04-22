<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/servicesOnly.css">
    </head>
<body>
    <header class="head-services">
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
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li id="current"><a href="Services.php">Services</a></li>
                </ul>
            </nav>
    </header>

    <div id="menu-list" class="menu-list active-element">
        <ul>
            <li  id="current"><a href="Home.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Services.php">Services</a></li>
        </ul>
    </div>

    <div class="grid-column-2 open-element">
        <aside class="sideBar open-element">
            <div id="sideBar-toggle" class="sideBar-toggle"> 
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <div class="allList">
                <ul class="list">
                <li id="GI" class="list-item"><span class="list-toggle">GI</span><svg aria-label="caret down icon" viewBox="0 0 24 24" role="img"><path d="M12 15.41l-5-5L8.41 9 12 12.58 15.59 9 17 10.41"></path></svg></li>
                    <ul class="subList">
                        <li id="OS">OS</li>
                        <li id="SGBD">SGBDA</li>
                        <li id="RI1">RESEAU 1</li>
                        <li id="RO">RO</li>
                        <li id="RI2">RESEAU 2</li>
                        <li id="POO">POO</li>
                        <li id="WEB">WEB</li>
                        <li id="UML_GL">UML & GL</li>
                    </ul>
            </ul>
            <ul class="list">
                <li id="EEA" class="list-item"><span class="list-toggle">EEA</span><svg aria-label="caret down icon" viewBox="0 0 24 24" role="img"><path d="M12 15.41l-5-5L8.41 9 12 12.58 15.59 9 17 10.41"></path></svg></li>
                    <ul class="subList">
                        <li>OS</li>
                        <li>SGBDA</li>
                        <li>RESEAU 1</li>
                        <li>RO</li>
                        <li>RESEAU 2</li>
                        <li>POO</li>
                        <li>WEB</li>
                        <li>UML & GL</li>
                    </ul>
            </ul>
            <ul class="list">
                <li id="TACQ" class="list-item"><span class="list-toggle">TACQ</span><svg aria-label="caret down icon" viewBox="0 0 24 24" role="img"><path d="M12 15.41l-5-5L8.41 9 12 12.58 15.59 9 17 10.41"></path></svg></li></li>
                    <ul class="subList">
                        <li>OS</li>
                        <li>SGBDA</li>
                        <li>RESEAU 1</li>
                        <li>RO</li>
                        <li>RESEAU 2</li>
                        <li>POO</li>
                        <li>WEB</li>
                        <li>UML & GL</li>
                    </ul>
            </ul>
        </div>
        </aside>
        <section class="grid-row">
            <div id="chartContainer" style="height: 370px;"></div>
            <div class="table">
                    <div class="search-names">
                        <input type="text" id="filterInput" placeholder="Search names...">
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Code Apogee</th>
                                <th>Nom</th>
                                <th>prenom</th>
                                <th>OS</th>
                                <th>POO</th>
                                <th>SGBD</th>
                                <th>RI1</th>
                                <th>RI2</th>
                                <th>AO_PA</th>
                                <th>RO</th>
                                <th>WEB</th>
                                <th>UML_GL</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="noscroll">
                            <?php
                                afficheNotes($resultSet);
                            ?>
                    </div>
            </div>
        </section>
    </div>                            
    <footer>
            <p>Statistiques, copyright &copy; <?php echo date('Y') ;?></p>
    </footer>
    <script>
            //recuperer les variable php pour dessiner la statistique
            var PV=<?php echo json_encode($PV);?>;
            var PNV=<?php echo json_encode($PNV);?>;
            var PAJ=<?php echo json_encode($PAJ);?>;
            var module=<?php echo json_encode($module);?>;
    </script>
    <script src="JS/canvasjs.min.js"></script>
    <script src="JS/Chart.js"> </script>
    <script src="JS/aside.js"></script>
    <script src="JS/Menu2.js"></script>
    <script src="JS/search.js"></script>
</body>
</html>