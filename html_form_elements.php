<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form Elements</title>
</head>
<body>
    <form>
        <input type="" name="">
        <hr>
        <select name="drpPhones" size="5" multiple>
            <option value="Apple">Apple</option>
            <option value="Vivo">Vivo</option>
            <option value="Samsung">Samsung</option>
            <option value="ASUS">ASUS</option>
            <option value="Realme">Realme</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="Oppo">Oppo</option>
        </select>


        <hr>

        <textarea name="txtPost" rows="10" cols="30">Franco Pogi</textarea>

        <hr>

        <button type="button">Click Me!</button>

        <hr>

        <fieldset>
            <legend>Personal Information</legend>
            First Name <input type="" name=""><br>
            Last Name  <input type="" name=""><br>

        <hr>

        <input type="text" name="dlstBrowsers" list="browsers">
        <datalist id="browsers">
            <option value="Microsoft Edge">
            <option value="Mozilla Firefox">
            <option value="Google Chrome">
            <option value="Opera">
            <option value="Safari">

    </datalist>
    </form>   
</body>
</html>