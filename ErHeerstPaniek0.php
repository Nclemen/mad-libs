  <?php
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title></title>
  </head>
  <body>
    <div id="main">
          <nav>
            <a href="ErHeerstPaniek0.php">Er heerst paniek...</a>
            <a href="onkunde.php">Onkunde</a>
          </nav>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form" method="post">
        <?php
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
          ?>
        <div class="grid-container">
          <div class="grid-item">
            <h1>Er heerst paniek...</h1>
          </div>
          <div class="grid-item">
          </div>
          <div class="grid-item">
            <p>Welk dier zou je nooit als huisdier willen hebben?</p>
          </div>
          <div class="grid-item">
            <input type="text" size="45" name="huisdier" >
            <span class="error">* <?php echo $huisdierErr;?>
          </div>
          <div class="grid-item">
            <p>wie is de belangrijkste persoon in je leven?</p>
          </div>
          <div class="grid-item">
            <input type="text" size="45" name="belangrijkste" >
            <span class="error">* <?php echo $belangrijksteErr;?>
          </div>
          <div class="grid-item">
            <p>In welk land zou je graag willen wonen?</p>
          </div>
          <div class="grid-item">
            <input type="text" size="45" name="land" >
            <span class="error">* <?php echo $landErr;?>
          </div>
          <div class="grid-item">
            <p>Wat doe je als je je verveelt?</p>
          </div>
          <div class="grid-item">
            <input type="text" size="45" name="verveelt" >
            <span class="error">* <?php echo $verveeltErr;?>
          </div>
          <div class="grid-item">
            <p>Met welk speelgoed speelde je als kind het meest?</p>
          </div>
          <div class="grid-item">
            <input type="text" size="45" name="speelgoed" >
            <span class="error">* <?php echo $speelgoedErr;?>
          </div>
          <div class="grid-item">
            <p>Bij welke docent spijbel je het liefst?</p>
          </div>
          <div class="grid-item">
            <input type="text" size="45" name="spijbel" >
            <span class="error">* <?php echo $spijbelErr;?>
          </div>
          <div class="grid-item">
            <p>als je &euro; 100.000,- had, wat zou je dan kopen?</p>
          </div>
          <div class="grid-item">
            <input type="text" size="45" name="kopen" >
            <span class="error">* <?php echo $kopenErr;?>
          </div>
          <div class="grid-item">
            <p>Wat is je favoriete bezigheid?</p>
          </div>
          <div class="grid-item">
            <input type="text" size="45" name="bezigheid" >
            <span class="error">* <?php echo $nameErr;?>
          </div>
          <div class="grid-item">
          </div>
          <div class="grid-item">
            <input type="submit" size="45" name="submit">
          </div>
        </div>
      </form>
      <?php }else {

        $huisdierErr= $belangrijksteErr= $landErr= $verveeltErr= $speelgoedErr= $spijbelErr= $kopenErr= $bezigheidErr = "";

        $huisdier= $belangrijkste= $land= $verveelt= $speelgoed= $spijbel= $kopen= $bezigheid= "";

        if (empty($_POST["huisdier"])) {
          $huisdierErr = "huisdier is verplicht";
        } else {
          $huisdier = test_input($_POST["huisdier"]);
        }

        if (empty($_POST["belangrijkste"])) {
          $belangrijksteErr = "belangrijkste is verplicht";
        } else {
          $belangrijkste = test_input($_POST["belangrijkste"]);
        }

        if (empty($_POST["land"])) {
          $landErr = "land is verplicht";
        } else {
          $land = test_input($_POST["land"]);
        }

        if (empty($_POST["verveelt"])) {
          $verveeltErr = "verveelt is verplicht";
        } else {
          $verveelt = test_input($_POST["verveelt"]);
        }

        if (empty($_POST["speelgoed"])) {
          $speelgoedErr = "speelgoed is verplicht";
        } else {
          $speelgoed = test_input($_POST["speelgoed"]);
        }

        if (empty($_POST["spijbel"])) {
          $spijbelErr = "spijbel is verplicht";
        } else {
          $spijbelErr = test_input($_POST["spijbel"]);
        }

        if (empty($_POST["kopen"])) {
          $kopenErr = "kopen is verplicht";
        } else {
          $kopen = test_input($_POST["kopen"]);
        }

        if (empty($_POST["bezigheid"])) {
          $bezigheidErr = "bezigheid is verplicht";
        } else {
          $bezigheid = test_input($_POST["bezigheid"]);
        }

       ?>
       <div class="grid-container">
         <div class="grid-item">
              <?php
                    echo "<h1>Er heerst paniek</h1>";
                    echo "<p>Er heerst paniek in het konkrijk Gallifrey. Koning Egmond is ten einde raad en als koning Egmond ten einde raad is, dan roept hij zijn ten-einde-raadsheer Narison</p>";
                    echo "<p> &ldquo; Spinoza! Het is een ramp! Het is een schande! &ldquo; </p>";
                    echo "<p>&ldquo;Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?&ldquo;</p>";
                    echo "<p>&ldquo; Mijn $huisdier is verdwenen! Zo maar, zonder waarschuwing. En ik had net $speelgoed voor hem gekocht! &ldquo;</p>";
                    echo "<p>&ldquo;Majesteit, uw $huisdier komt vast vanzelf weer terug? &ldquo;</p>";
                    echo "<p>&ldquo;Ja, Da&rsquo;s leuk en aardig, maar hoe moet ik in de tussentijd $bezigheid leren? &ldquo;</p>";
                    echo "<p>&ldquo;Maar Sire, daar kunt u toch uw $kopen voor gebruiken.&ldquo;</p>";
                    echo "<p>&ldquo;Spinoza, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had. &ldquo;</p>";
                    echo "<p>&ldquo;U $verveelt, Sire. &ldquo;</p>";  ?>
            </div>
          </div>
          <?php } ?>
       <footer><p>Deze website is gemaakt door &copy;Narison Clemencia</p></footer>
    </div>
  </body>
</html>
