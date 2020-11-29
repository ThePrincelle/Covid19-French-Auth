<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                Generating...
            </title>
            <link href="favicon.png" rel="icon" type="image/png"></link>
        </meta>

        <!-- Signature -->

    </head>
    <body>
        <div style="display: block; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 9999; background: url('/spinner.gif') 50% 50% no-repeat rgb(249,249,249);">
        </div>
        
        <div style="display: none">
            <form id="form-profile">
                <p class="msg-alert hidden">Veuillez choisir un motif</p>
                <input id="field-firstname" name="firstname" required="" type="text"></input>
                <input id="field-lastname" name="lastname" required="" type="text"></input>
                <input id="field-birthday" maxlength="10" required="" type="text"></input>     
                <input id="field-placeofbirth" name="placeofbirth" required="" type="text"></input>
                <input id="field-address" name="address" required="" type="text"></input>
                <input id="field-city" name="city" required="" type="text"></input>
                <input id="field-zipcode" name="zipcode" required="" type="number"></input>
                <input id="field-datesortie" name="datesortie" required="" type="date"></input>
                <input id="field-heuresortie" name="heuresortie" required="" type="time"></input>

                <fieldset id="reason-fieldset" class="fieldset">
                    <input id="checkbox-travail" name="field-reason" type="checkbox" value="travail"></input>
                    <input id="checkbox-achats" name="field-reason" type="checkbox" value="achats"></input>
                    <input id="checkbox-sante" name="field-reason" type="checkbox" value="sante"></input>
                    <input id="checkbox-famille" name="field-reason" type="checkbox" value="famille"></input>
                    <input id="checkbox-handicap" name="field-reason" type="checkbox" value="handicap"></input>
                    <input id="checkbox-sport_animaux" name="field-reason" type="checkbox" value="sport_animaux"></input>
                    <input id="checkbox-convocation" name="field-reason" type="checkbox" value="convocation"></input>
                    <input id="checkbox-missions" name="field-reason" type="checkbox" value="missions"></input>
                    <input id="checkbox-enfants" name="field-reason" type="checkbox" value="enfants"></input>
                </fieldset>
            </form>

            <div id="formgroup-storedata" class="form-check text-center mt-4"> <input class="form-check-input" type="checkbox" name="storedata" id="field-storedata" value="storedata"></div>

            <button type="button" id="cleardata" class="btn-clear-data"></button>

            <button type="button" id="generate-btn">Générer mon attestation</button>
            <div class="bg-primary d-none" id="snackbar"> L'attestation est téléchargée sur votre appareil. </div>
        </div>
        <p style="display: none" id="version">2020 - 1.1.0</p>
    </body>

    <script src="./deplacement-covid-19/main.833af409.js?version=<?= time() ?>" type="text/javascript"></script>
    <script src="./generate.js" type="text/javascript"></script>
</html>