<!DOCTYPE html>

<html>

    <head>
        <title>La scandinave</title>
        <script type='text/javascript' src='https://widget.itea.fr/js/itea_widget.v2.js'></script>
        <script language="JavaScript">
        <!--
        //PLF-/
        var bauto = 0;
        var dossier="IMAGE/";
        var numero = 1;
        function objet() {
        this.length = objet.arguments.length
        for (var i = 0; i < this.length; i++) this[i+1] = objet.arguments[i]
        }
        var nom = new objet ("scandinave.jpg", "scandinave2.jpg", "scandinave3.jpg");
        function suivante() {
        numero += 1;
        if (numero == nom.length + 1) numero = 1;
        document.image.src = dossier+nom[numero];
        }
        function precedente() {
        numero -= 1;
        if (numero == 0) numero = nom.length;
        document.image.src = dossier+nom[numero];
        }
        function changer() {
        numero += 1;
        if (numero == nom.length + 1) numero = 1;
        document.image.src = dossier+nom[numero];
        roll=setTimeout("changer()", 1500);
        }
        function initial() {
        window.clearTimeout(roll);
        document.image.src = dossier+nom[numero];
        }
        function auto() {
        if (bauto == 0) {
        bauto =1; changer();
        document.vision.automat.value=" Lect/Stop ";
        }
        else {
        bauto =0; initial();
        document.vision.automat.value=" Lect/Auto ";
        }
        }
        //-->
        </script>
    </head>

    <body>
        <div class="box1">
            <div class="element1">
                <div class="box2">
                    <div class="element2">
                        <div class="box3">
                            <div class="element3">
                                <p>
                                    <a href="index.php?page=room"><img class="fleche_retour" src="IMAGE/fleche_retour.png"/></a>
                                </p>
                            </div>

                            <div class="element3">
                                <h1 class="title">Scandinave</h1>
                            </div>
                        </div>
                    </div>

                    <div class="element2">
                        <p>
                            <div align="center">&nbsp;<img src="IMAGE/scandinave.jpg" width="450" height="300" name="image"></div>
                            <form name="vision">
                            <div align="center">
                            <input type="button" class="button" name="precedent" value="Précédente" onClick="precedente();">
                            &nbsp;&nbsp;&nbsp;
                            <input type="button" class="button" name="suivant" value=" Suivante " onClick="suivante();">
                            &nbsp;&nbsp;&nbsp;
                            </div>
                            </form>
                        </p>
                    </div>

                    <div class="element2 border">
                        <div class="box3">
                            <div class="element3">
                                <p class="subtitle">
                                    Chambre:
                                </p>
                            </div>

                            <div class="element3">
                                <p class="text">
                                    Personnes: 2
                                </p>

                                <p class="text">
                                    Lit: 1 lit double
                                </p>
                            </div>

                            <div class="element3">
                                <p class="text">
                                    Taille: 35m²
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="element2 border">
                        <div class="box3">
                            <div class="element3">
                                <p class="subtitle">
                                    Plus d'info:
                                </p>
                            </div>

                            <div class="element3">
                                <p class="text">
                                    Texte en réflexion (momo a fait un copié/collé honteux avec le texte de la cocoon)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="element2 border">
                        <div class="box3">
                            <div class="element3">
                                <p class="subtitle">
                                    Confort:
                                </p>
                            </div>

                            <div class="element3">
                                <p class="text">
                                    Wifi
                                </p>

                                <p class="text">
                                    Douche
                                </p>

                                <p class="text">
                                    Bureau
                                </p>

                                <p class="text">
                                    Chauffage
                                </p>

                                <p class="text">
                                    Lave vaisselle
                                </p>

                                <p class="text">
                                    Machine à café
                                </p>

                                <p class="text">
                                    Mobilier extérieur
                                </p>

                                <p class="text">
                                    Réfrigérateur
                                </p>
                            </div>

                            <div class="element3">
                                <p class="text">
                                    Télévision
                                </p>

                                <p class="text">
                                    Serviettes
                                </p>

                                <p class="text">
                                    Chaise haute pour enfant
                                </p>

                                <p class="text">
                                    Micro-onde
                                </p>

                                <p class="text">
                                    Penderie
                                </p>

                                <p class="text">
                                    Sèche cheveux
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="element2 border">
                        <div class="box3">
                            <div class="element3">
                                <p class="subtitle">
                                    Arrivée et départ:
                                </p>
                            </div>

                            <div class="element3">
                                <p class="text">
                                    Arrivée: 17h00
                                </p>
                            </div>

                            <div class="element3">
                                <p class="text">
                                    Départ: 11h00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="element1 calendar">
                <div data-key="amkkhds7" data-numgite="2697" data-widget-itea="dispo" data-numchambre="2" data-nbmois="1" data-nbmois-ligne="1"></div>
            </div>
        </div>
    </body>

</html>