<!DOCTYPE html>
<!-- WebEnginnering WS17/18: Burak Günaydin (853872) & Eric Wenzke (860492) -->
<html>
    <head>
        <!-- Ohne den meta Tag klappt die Mobile Skalierung nicht -->
        <meta name="viewport" content="initial-scale=1">
        <meta charset="utf-8"/>
        <title>Coffee Stats</title>
        <link rel="stylesheet/less" type="text/css" href="./less/master.less">
        <script src="./less/less.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="outerbox">
            <div class="innerbox">
                <nav>
                    <img id="header-icon" src="./pics/coffeestats_logo_v2.png">
                    <ul>
                        <li id="active-nav-link"><a href="index.htm">Home</a></li>
                        <li><a href="./html/formular.htm">Formular</a></li>
                        <li><a id="border-right" href="./html/tabelle.htm">Tabelle</a></li>
                    </ul>
                </nav>
                <div class="contentbox">
                    <article id="shadow">
                        <h1>Coffee Stats - Kenne deinen Konsum</h1>
                        <p>
                            Mit Coffee Stats können Sie Ihren Koffeinkonsum überwachen. Auf der Seite <a href="./html/formular.htm">Formular</a> können Sie Werte eintragen und überschreiben. Die eingetragenen Werte können auf der Seite <a href="./html/tabelle.htm">Tabelle</a> angeschaut werden. 
                        </p>
                        <br>
                        <h2>Mehr über Koffein erfahren</h2>
                        <div class="blogmodul">
                            <div class="blogpost">
                                <a href="./html/blog/koffein-psychoaktiv.htm">
                                    <img src="./pics/psychoaktiv.jpg">
                                </a>     
                                <h3><a href="./html/blog/koffein-psychoaktiv.htm">Koffein die wohl beliebteste Psychoaktive Droge</a></h3>
                                <p>
                                    Im Durchschnitt konsumiert jeder Deutsche etwa 200 Milligramm Koffein pro Tag. Wie er diese aufnimmt variiert von Person zu Person. Viele betrachten dabei Koffein als alltägliche Substanz...
                                </p>
                                <php>
                                    include("./php/dynamic.php");
                                </php>
                                
                            </div>
                            <div class="blogpost">
                                <a href="./html/blog/wirkung-koffein.htm">
                                    <img src="./pics/wirkung.jpg">
                                </a>                                
                                <h3><a href="./html/blog/wirkung-koffein.htm">Wie wirkt Koffein eigentlich?</a></h3>
                                <p>
                                    Viele Menschen nehmen Koffein, sei es in Form von Kaffee, Energiedrinks oder Koffeintabletten. Ziel: die Steigerung der Aufmerksamkeit. Die positive Wirkung von Koffein...
                                </p>
                            </div>
                            <div class="blogpost">
                                <a href="./html/blog/nebenwirkung-koffein.htm">
                                    <img src="./pics/nebenwirkung.jpg">
                                </a>
                                <h3><a href="./html/blog/nebenwirkung-koffein.htm">Nebenwirkung von Koffein</a></h3>
                                <p>
                                    Wird Koffein in größeren Mengen konsumiert, kann es zu einer Reihe von Nebenwirkungen kommen. Dazu gehören unter anderem Schlafstörungen, Kopfschmerzen, Nervosität oder Magen-Darm-Beschwerden.                            
                                </p>
                            </div>
                        </div>
                    </article>

                </div>
                <footer>
                    <p>    
                        WebEnginnering WS17/18: Burak Günaydin (853872) &amp; Eric Wenzke (860492)
                    </p>
                </footer>
            </div>
        </div>
    </body>
</html>
