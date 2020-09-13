<!DOCTYPE html>
<html>
<head>
    <title></title>
     <link href="public/css/student.css" rel="stylesheet" />
</head>
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=PT+Sans+Narrow);
body ,html{
  font-family: Open Sans, "Helvetica Neue", "Helvetica", Helvetica, Arial,   sans-serif;
  font-size: 13px;
  color: #fff;
  position: relative;
  -webkit-font-smoothing: antialiased;
  margin: 0;
  background:#254E59;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, th, td {
  margin: 0;
  padding: 0;
  font-size: 13px;
  direction: ltr;
}

.sectionClass {
  padding: 20px 0px 50px 0px;
  position: relative;
  display: block;
}

.fullWidth {
  width: 100% !important;
  display: table;
  float: none;
  padding: 0;
  min-height: 1px;
  height: 100%;
  position: relative;
}


.sectiontitle {
  background-position: center;
  margin: 30px 0 0px;
  text-align: center;
  min-height: 20px;
}

.sectiontitle h2 {
  font-size: 30px;
  color: #ffffffcc;
  margin-bottom: 0px;
  padding-right: 10px;
  padding-left: 10px;
}


.headerLine {
  width: 160px;
  height: 2px;
  display: inline-block;
  background: #101F2E;
}


.projectFactsWrap{
    display: flex;
  margin-top: 30px;
  flex-direction: row;
  flex-wrap: wrap;
}


#projectFacts .fullWidth{
  padding: 0;
}

.projectFactsWrap .item{
  width: 25%;
  height: 100%;
  padding: 50px 0px;
  text-align: center;
}

.projectFactsWrap .item:nth-child(1){
  background: rgb(16, 31, 46);
}

.projectFactsWrap .item:nth-child(2){
  background: rgb(18, 34, 51);
}

.projectFactsWrap .item:nth-child(3){
  background: rgb(21, 38, 56);
}

.projectFactsWrap .item:nth-child(4){
  background: rgb(23, 44, 66);
}

.projectFactsWrap .item p.number{
  font-size: 40px;
  padding: 0;
  font-weight: bold;
}

.projectFactsWrap .item p{
  color: rgba(255, 255, 255, 0.8);
  font-size: 18px;
  margin: 0;
  padding: 10px;
  font-family: 'Open Sans';
}


.projectFactsWrap .item span{
  width: 60px;
  background: rgba(255, 255, 255, 0.8);
  height: 2px;
  display: block;
  margin: 0 auto;
}


.projectFactsWrap .item i{
  vertical-align: middle;
  font-size: 50px;
  color: rgba(255, 255, 255, 0.8);
}


.projectFactsWrap .item:hover i, .projectFactsWrap .item:hover p{
  color: white;
}

.projectFactsWrap .item:hover span{
  background: white;
}

@media (max-width: 786px){
  .projectFactsWrap .item {
     flex: 0 0 50%;
  }
}

/* AUTHOR LINK */


footer{
  z-index: 100;
  padding-top: 50px;
  padding-bottom: 50px;
  width: 100%;
  bottom: 0;
  left: 0;
}

footer p {
color: rgba(255, 255, 255, 0.8);
  font-size: 16px;
  opacity: 0;
  font-family: 'Open Sans';
  width: 100%;
    word-wrap: break-word;
  line-height: 25px;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  margin: 0;
  -webkit-transition: all 250ms ease;
  -moz-transition: all 250ms ease;
  transition: all 250ms ease;
}

footer .authorWindow a{
  color: white;
  text-decoration: none;
}

footer p strong {
    color: rgba(255, 255, 255, 0.9);
}

.about-me-img {
  width: 120px;
  height: 120px;
  left: 10px;
  /* bottom: 30px; */
  position: relative;
  border-radius: 100px;
}


.about-me-img img {
}


.authorWindow{
  width: 600px;
  background: #75439a;
  padding: 22px 20px 22px 20px;
  border-radius: 5px;
  overflow: hidden;
}

.authorWindowWrapper{
  display: none;
  left: 110px;
  top: 0;
  padding-left: 25px;
  position: absolute;
}





.trans{
  opacity: 1;
  -webkit-transform: translateX(0px);
  transform: translateX(0px);
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  transition: all 500ms ease;
}

@media screen and (max-width: 768px) {
    .authorWindow{
         width: 210px;
    }

    .authorWindowWrapper{
             bottom: -170px;
  margin-bottom: 20px;
    }

    footer p{
          font-size: 14px;
    }
}

.btn{
  background:rgb(16, 31, 46);
  font-size:20px;
  font-weight:bold;
  color: rgba(255, 255, 255, 0.8);;
  outline:none;
  width:45px;
  height:40px;
  border: 1px solid rgba(255, 255, 255, 0.8);;
  border-radius:4px;
  float:left;
  cursor:pointer;
}

.btn:hover{
  /* border: 1px solid rgba(255, 255, 255, 1); */
  box-shadow: 1px 1px 5px  rgba(200, 200, 200, 1) , -1px -1px 5px  rgba(200, 200, 200, 1);

}
</style>

<body>
    <script type="text/javascript"></script>

    <div class="sectiontitle">
    <h2>La fiche d'etudiant(e) <?=$student['nom']?></h2>
    <span class="headerLine"></span>
</div>
<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                <i class="fa fa-briefcase"></i>
                <p id="number1" class="number">12</p>
                <span></span>
                <p><?=$student['nom'].' '.$student['prenom'];?></p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                <i class="fa fa-smile-o"></i>
                <p id="number2" class="number"><?=$nbrMV;?></p>
                <span></span>
                <p>V</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                <i class="fa fa-coffee"></i>
                <p id="number3" class="number"><?=$nbrMR;?></p>
                <span></span>
                <p>NV</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                <i class="fa fa-camera"></i>
                <p id="number4" class="number"><?=$nbrMA;?></p>
                <span></span>
                <p>AJ</p>
            </div>
        </div>
    </div>
</div>
<button onclick="window.history.back();" class="btn"><<</button>

 <div class="CSSTableGenerator">
        <table>
            <tr>
                <td>Module
                </td>
                <td>Note
                </td>
            </tr>
            <tr>
                <td>ARCHITECTURE DES ORDINATEURS ET PROGRAMME ASSEMBLEUR
                </td>
                <td data-bind="text: xhr"><?=$student['AO_PA']?>
                </td>
            </tr>
            <tr>
                <td>LINUX
                </td>
                <td data-bind="text: blobCount"><?=$student['RI2']?>
                </td>
            </tr>
            <tr>
                <td>PFE
                </td>
                <td data-bind="text: blobCount"><?=$student['PFE']?>
                </td>
            </tr>
            <tr>
                <td>PHP
                </td>
                <td data-bind="text: startTime"><?=$student['WEB']?>
                </td>
            </tr>
            <tr>
                <td>PROGRAMMATION ORIENTÉE OBJET
                </td>
                <td data-bind="text: status"><?=$student['POO']?>
                </td>
            </tr>
            <tr>
                <td>RECHERCHE OPÉRATIONNELLE 
                </td>
                <td data-bind="text: fetchTime"><?=$student['RO']?>
                </td>
            </tr>
            <tr>
                <td>RÉSEAU INFORMATIQUE
                </td>
                <td data-bind="text: dbManifest"><?=$student['RI1']?>
                </td>
            </tr>
            <tr>
                <td>SQL
                </td>
                <td data-bind="text: xhr"><?=$student['SGBD']?>
                </td>
            </tr>
            <tr>
                <td>SYSTÈME D'EXPLOITATION
                </td>
                <td data-bind="text: b64Flag"><?=$student['OS']?>
                </td>
            </tr>
            <tr>
                <td>UML & GÉNIE LOGICIEL
                </td>
                <td data-bind="text: tileCount"><?=$student['UML_GL']?>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>