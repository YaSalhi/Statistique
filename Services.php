<?php
    include('connection.php');

    $cnx=getConnection();
    $orderSql="select * from gi";

    if(isset($_GET['module']) )
    {
        $module = $_GET['module']; // On y met les données
    }else
    $module='POO';
    if(! $cnx->query($orderSql) )
    {
        die ('cannot excute the query');
    }
    else{
            $nbrV=$nbrNV=$nbrAJ=0;
        foreach($cnx->query($orderSql) as $row)
        {
            if($row[$module]>10)  $nbrV++;
            elseif($row[$module]>5)  $nbrNV++;
            else  $nbrAJ++;

        }
        $total=$nbrV+$nbrNV+$nbrAJ;
        $PV=$nbrV*100/$total;
        $PNV=$nbrNV*100/$total;
        $PAJ=$nbrAJ*100/$total;
    }
?>
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
            <script>
                    var PV=<?php echo json_encode($PV);?>;
                    var PNV=<?php echo json_encode($PNV);?>;
                    var PAJ=<?php echo json_encode($PAJ);?>;
                    window.onload = function () {

                    var chart = new CanvasJS.Chart("chartContainer", {
                        theme: "light2",
                        animationEnabled: true,
                        title: {
                            text: "Statistiques for students"
                        },
                        subtitles: [{
                            text: "GI, 2019",
                            fontSize: 16
                        }],
                        data: [{
                            type: "pie",
                            indexLabelFontSize: 18,
                            radius: 80,
                            indexLabel: "{label} - {y}",
                            yValueFormatString: "###0.0\"%\"",
                            click: explodePie,
                            dataPoints: [
                                { y: PV, label: "validée" },
                                { y: PNV, label: "non validée" },
                                { y: PAJ, label: "ajournée" }
                            ]
                        }]
                    });
                    chart.render();

                    function explodePie(e) {
                        for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
                            if(i !== e.dataPointIndex)
                                e.dataSeries.dataPoints[i].exploded = false;
                        }
                    }
                    
                    }
        </script>
        <div id="chartContainer" style="height: 370px;">
        </div>
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
                 <table>
                    <tbody>     
                        <?php
                                foreach($cnx->query($orderSql) as $row)
                                {
                                    echo " 
                                    <tr class=\"row\">
                                        <td>".$row['code_apogee']."</td>
                                        <td class=\"names\">".$row['nom']."</td>
                                        <td>".$row['prenom']."</td>
                                        <td>".$row['OS']."</td>
                                        <td>".$row['POO']."</td>
                                        <td>".$row['SGBD']."</td>
                                        <td>".$row['RI1']."</td>
                                        <td>".$row['RI2']."</td>
                                        <td>".$row['AO_PA']."</td>
                                        <td>".$row['RO']."</td>
                                        <td>".$row['WEB']."</td>
                                        <td>".$row['UML_GL']."</td>
                                    </tr>
                                    ";

                                }
                        ?>
                    </tbody>
                 </table>
                </div>
        </div>
    </section>
</div>                            

    <footer>
            <p>Statistiques, copyright &copy; <?php echo date('Y') ;?></p>
    </footer>
    <script>
    </script>
    <script src="Aside.js"></script>
    <script src="js/Menu2.js"></script>
    <script src="canvasjs.min.js"></script>
    <script src="search.js"></script>

</body>
</html>