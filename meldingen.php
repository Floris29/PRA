<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meldingen</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php require_once("header.php"); ?>

    <!-- START eigen code -->
    <main>
        <div class="wrapper">
            <h1>Neem contact op</h1>

            <form action="backend/contactController.php" method="post">

                <div class="wrapper--meldingen">

                    <input type="hidden" name="action" value="send">

                    <div class="form">
                        <label for="senderOnderwerp"><span class="form--title">Onderwerp</span></label>
                        </p>
                        <input type="text" name="senderOnderwerp" id="senderOnderwerp" placeholder="Onderwerp" required>
                        </p>
                        <label for="senderName"><span class="form--title">Naam</span></label>
                        </p>
                        <input type="text" name="senderName" id="senderName" placeholder="Naam" required>
                        </p>
                        <label for="senderTelefoonNummmer"><span class="form--title">Telefoonnummer</span></label>
                        </p>
                        <input type="number" name="senderTelefoonNummmer" id="senderTelefoonNummmers" placeholder="Telefoonnummer" required maxlength="10">
                        </p>
                        <label for="senderEmail"><span class="form--title">E-mailadres</span></label>
                        </p>
                        <input type="text" name="senderEmail" id="senderEmail" placeholder="E-mailadres" required>
                        </p>
                        <label for="senderBsnNUmmer"><span class="form--title">Bsn</span></label>
                        </p>
                        <input type="number" name="senderBsnNUmmer" id="senderBsnNUmmer" placeholder="BSN Nummer" required maxlength="9">
                        </p>

                        <div class="form-group">
                            <input type="submit" value="Verzend formulier">

                        </div>
                    </div>
                    <div class="flexbox--meldingen">
                        <label for="message"><span class="form--title">Bericht</span></label>
                        </p>
                        <textarea name="message" cols="30" rows="10" id="message" placeholder="Melding" required></textarea>
                    </div>
                </div>
            </form>

        </div>
        </div>
    </main>

    <!-- EINDE eigen code -->

    <?php require_once("footer.php"); ?>

</body>

</html>

verandering voor stijn