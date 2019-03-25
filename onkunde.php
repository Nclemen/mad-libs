<?php

    $GLOBALS['verplicht'] = "Dit veld is verplicht";
    $GLOBALS['vraag1']= $GLOBALS['vraag2']= $GLOBALS['vraag3']= $GLOBALS['vraag4']= $GLOBALS['vraag5']= $GLOBALS['vraag6']= $GLOBALS['vraag7']= $GLOBALS['vraag8']= "";
    $GLOBALS['continue']= false;
    $GLOBALS['passed']= 0;

    function postCheck($var1){
      $error = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $error= emptyCheck($var1);
        return $error;
      }
    }

    function emptyCheck($var1)
    {
      if (empty($_POST[$var1])) {
        return $GLOBALS['verplicht'];
      } else {
        $GLOBALS[$var1]= test_input($_POST[$var1]);
        $GLOBALS['passed']++;
        echo "<script>console.log('plus')</script>";
        if ($GLOBALS['passed'] == 8) {
          $GLOBALS['continue']= true;
          echo "<script>console.log('8')</script>";
        }
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container" id="main">
      <div class="col-12 no-padding bg-red" id="nav">
        <a href="ErHeerstPaniek0.php">Er heerst paniek...</a>
        <a href="onkunde.php">Onkunde</a>
      </div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal" method="post">
        <?php if ($_SERVER["REQUEST_METHOD"] != "POST") { ?>
    <h1 id="title">Onkunde</h1>
      <div class="row">
        <div class="col-6">
          <ol>
            <li>Welk dier zou je nooit als huisdier willen hebben?</li>
            <li>wie is de belangrijkste persoon in je leven?</li>
            <li>In welk land zou je graag willen wonen?</li>
            <li>Wat doe je als je je verveelt?</li>
            <li>Met welk speelgoed speelde je als kind het meest?</li>
            <li>Bij welke docent spijbel je het liefst?</li>
            <li>als je &euro; 100.000,- had, wat zou je dan kopen?</li>
            <li>Wat is je favoriete bezigheid?</li>
          </ol>
        </div>
        <div class="col-6">
          <ul>
            <li>
              <input type="text" size="45" name="vraag1" >
            </li>
            <li>
              <input type="text" size="45" name="vraag2" >
            </li>
            <li>
              <input type="text" size="45" name="vraag3" >
            </li>
            <li>
              <input type="text" size="45" name="vraag4" >
            </li>
            <li>
              <input type="text" size="45" name="vraag5" >
            </li>
            <li>
              <input type="text" size="45" name="vraag6" >
            </li>
            <li>
              <input type="text" size="45" name="vraag7" >
            </li>
            <li>
              <input type="text" size="45" name="vraag8" >
            </li>
          </ul>
        </div>
        </div>
        <div class="row">
          <div class="col-9">

          </div>
          <div class="col-3">
            <input type="submit" size="45" name="submit">
          </div>
        </div>
    </form>
  <?php } else { ?>
       <div class="col-12 ">
         <?php
                      echo "<script>console.log('story');</script>";
                      echo "<h1>Er heerst paniek</h1>";
                      echo "<p>Er heerst paniek in het konkrijk Gallifrey. Koning Egmond is ten einde raad en als koning Egmond ten einde raad is, dan roept hij zijn ten-einde-raadsheer Narison</p>";
                      echo "<p> &ldquo; Spinoza! Het is een ramp! Het is een schande! &ldquo; </p>";
                      echo "<p>&ldquo;Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?&ldquo;</p>";
                      echo "<p>&ldquo; Mijn ".$GLOBALS['vraag1']." is verdwenen! Zo maar, zonder waarschuwing. En ik had net $speelgoed voor hem gekocht! &ldquo;</p>";
                      echo "<p>&ldquo;Majesteit, uw ".$GLOBALS['vraag1']." komt vast vanzelf weer terug? &ldquo;</p>";
                      echo "<p>&ldquo;Ja, Da&rsquo;s leuk en aardig, maar hoe moet ik in de tussentijd ".$GLOBALS['vraag8']." leren? &ldquo;</p>";
                      echo "<p>&ldquo;Maar Sire, daar kunt u toch uw ".$GLOBALS['vraag7']." voor gebruiken.&ldquo;</p>";
                      echo "<p>&ldquo;Spinoza, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had. &ldquo;</p>";
                      echo "<p>&ldquo;U ".$GLOBALS['vraag4'].", Sire. &ldquo;</p>";
            ?>
          </div>
      <?php } ?>
      <footer><p>Deze website is gemaakt door &copy;Narison Clemencia</p></footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
