<!DOCTYPE html>

<html>

    <head>
        <title>Contact</title>
    </head>

    <body>
        <div class="box1">
            <div class="element1">
                <p>
                    <h1 class="title">Contactez-nous par téléphone au 06 31 84 42 39</h1>
                </p>
            </div>

            <div class="element1">
                <div class="box2">
                    <div class="element2">
                        <p class="subtitle">
                            Chambre d'hôtes
                        </p>

                        <p class="contact">
                            1400 rue de Beaumetz
                        </p>

                        <p class="contact">
                            59310 Saméon, France
                        </p>

                        <p class="contact">
                            Tél: 06 31 84 42 39
                        </p>

                        <p class="contact">
                            Mail: coutureducharme@gmail.com
                        </p>
                    </div>

                    <div class="element2">
                        <p class="text">
                            Si vous avez une demande particulière à nous transmettre ou si vous voulez juste en savoir plus sur notre établissement, nous vous proposons de nous envoyer un mail ou de nous appeler directement.
                        </p>

                        <p class="text"> 
                            Nous essayerons de répondre le plus rapidement possible.
                        </p>
                    </div>

                    <div class="element2">
                        <form action="index.php?page=send" method="post">
                            <p>
                            <input class="input1" type="text" id="name" name="name" placeholder="Nom"></input>
                            </p>

                            <p>
                            <input class="input1" type="text" id="e-mail" name="e-mail" placeholder="E-mail"></input>
                            </p>

                            <p>
                            <input class="input1" type="text" id="tel" name="tel" placeholder="Téléphone"></input>
                            </p>

                            <p>
                            <textarea class="input1 input2" rows="8" id="note" name="note" placeholder="Rédigez votre message ici..."></textarea>
                            </p>
                            
                            <p>
                                <button class="button" type="submit">Envoyer</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>