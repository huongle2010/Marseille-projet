<?php include("head.php"); ?>
<!-- CONTENU HTML -->
<h2>Vous souhaitez nous soutenir ?</h2>
        <h4>Veuillez compléter ce formulaire :</h4>

        <form>
            <!--CHAMPS DE FORMULAIRE-->
            <div class="inputs">
                <input type="text" placeholder="Nom*" required>
                <input type="text" placeholder="Prénom*" required>
                <input type="text" placeholder="Société" required>
                <input type="text" placeholder="Email*" required>
                <textarea name="txt" id="" cols="30" rows="10" placeholder="Votre texte ici"></textarea>
            </div>
            <!--CHECKBOX-->
            <input type="checkbox">
            <label for="checkbox">J'ai lu et j'accepte la politique de confidentialité</label><br>
            <!--BOUTONS RESET/VALIDATION-->
            <div class="BoutonsForm">
                <input type="reset" value="Vider le formulaire" id="reset" name="reset" />
                <input type="submit" value="Envoyer" id="submit" name="submit" />
            </div>            
        </form>
<!-- FIN DU CONTENU HTML -->
<?php include("foot.php"); ?>