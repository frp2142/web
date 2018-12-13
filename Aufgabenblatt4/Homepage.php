<?php
class homepage {
	
	public function __construct() {
    }
  
  }	
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
  <title> Homepage </title>
</head>

<body>
  <div id="outside">
    <div class="container">
      <p id="headline">Willkommen auf der Homepage von Bart Simpson! </p>
      <div id="content">
        <ul class="nav nav-tabs" data-tabs="tabs" id="tabs">
          <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#steckbrief">Steckbrief</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#details">mehr Details...</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#links">meine Links</a>
          </li>
        </ul>

        <div class="tab-pane active show" id="steckbrief">
          <div id="insideSteckbrief">
            <h3> Mein Steckbrief:</h3>
            <img alt="Fehler beim Laden des Bildes. Bitte gib einen gültigen Pfad ein!" class="steckbriefBild" id="steckbriefPicture"
              src="/img/maggie.png">
            <div id="steckbriefSpacer">&nbsp;</div>
            <div id="steckbriefDaten">
              <!-- <form class="form-horizontal" novalidate="" role="form"> -->
              <div class="form-group row"><label class="control-label col-sm-4" for="name">Name:</label>
                <div class="col-sm-8"><input id="name" class="form-control" name="name" type="text" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "Maggie"; ?>" disabled></div>
              </div>
              <div class="form-group row"><label class="control-label col-sm-4" for="birthdate">Geburtsdatum:</label>
                <div class="col-sm-8"><input id="birthdate" class="form-control" name="birthdate" type="date" disabled value="<?php echo isset($_POST['birthdate']) ? htmlspecialchars($_POST['birthdate']) : "2002-02-12"; ?>" disabled></div>
              </div>
              <div class="form-group row"><label class="control-label col-sm-4" for="birthplace">Ort:</label>
                <div class="col-sm-8"><input id="birthplace" class="form-control" name="birthplace" type="text"value="<?php echo isset($_POST['birthplace']) ? htmlspecialchars($_POST['birthplace']) : "Stockholm"; ?>" disabled></div>
              </div>
              <div class="form-group row"><label class="control-label col-sm-4" for="profession">Beruf: </label>
                <div class="col-sm-8"><input id="profession" class="form-control" name="profession" type="text" value="Nervensäge"             disabled=""></div>
              </div>
              <div class="form-group row"><label class="control-label col-sm-4" for="picturePath">Bildpfad: </label>
                <div class="col-sm-8"><input id="picturePath" class="form-control" name="picturePath" type="text"
                    disabled=""></div>
              </div>

            </div>

          </div>
        </div>
      </div>
      <div id="buttondiv">
      <button name="changeButton" type="button" onclick="window.open('./Loginpage.php','_blank')"> ändern </button>
      </div>
    </div>
  </div>
</body>
</html>
