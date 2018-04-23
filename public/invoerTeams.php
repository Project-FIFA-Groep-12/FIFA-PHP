<?php require(realpath(__DIR__) . '/templates/header.php'); ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="invoerTeams.css">
        <title>Fifa project</title>
    </head>
    <body>

    <div class="main-content">
        <div class="header">
            <h1>Fifa Dev Edition</h1>
            <h2>Invoer Team en Spelers</h2>
        </div>

        <div class="border">
            <h4>Invoer Teams + Spelers</h4>
        </div>

        <div class="team">
            <form>
                <label>Naam Team:</label>
                <input type="text" name="Team" id="Team">
            </form>
        </div>

        <div class="teamList">
            <h4>Teams bekijken</h4>
            <?php
            $MaxTeams = 8;
            for ($Teams = 0; $Teams < $MaxTeams; $Teams++){

                echo "Team #$Teams ";
            }
            ?>
        </div>

        <div class="spelers">
            <?php
            for ($i = 0; $i<6; $i++){
                Echo "Selecteer Speler $i ";
                echo "<select name='formSpelers'>";
                echo "<option value=''>Select...</option>";
                echo "<option value='P1'>Speler 1</option>";
                echo "<option value='P2'>Speler 2</option>";
                echo "<option value='P3'>Speler 3</option>";
                echo "</select> ";
            } ?>
        </div>

        <div class="invoerTeam">
            <input type="submit" value="Team Invoeren">
        </div>

    </div>

    </body>
    </html>

<?php require(realpath(__DIR__) . '/templates/footer.php');
