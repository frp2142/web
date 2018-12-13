<html>

<head>
    <link rel="stylesheet" href="styles_change.css">
    <title> LoginPage </title>
</head>

<body>
    <div id="outside">
        <div id="inside">
            <div class="form-style-2">
                <div class="form-style-2-heading">Daten bearbeiten</div>
                <form action="Homepage.php" method="post">
                    <label for="name"> <span>Name: <span class="required"></span></span>
                    <input id="name" type="text" class="input-field" name="name" value="" /></label>
                    <label for="birthdate"><span>Geburtdatum: <span class="required"></span></span>
                    <input id="birthdate"type="date" class="input-field" name="birthdate" value="" /></label>
                    <label for="birthplace"><span>Geburtsort: <span class="required"></span></span>
                    <input id="birthplace" type="text" class="input-field" name="birthplace" value="" /></label>
                     <a href="Homepage.php" class="button">abbrechen</a>&nbsp;<input type="submit" value="speichern" /> 
                </form>
                
            </div>

        </div>
    </div>
    </div>
</body>

</html>