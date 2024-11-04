<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>

    <form method="post" action="capturing_form_data_receiver_demo.php">
        <label for="txtFirstname">First Name</label>
        <input type="text" name="txtFirstname" id="txtFirstname" autofocus><br>

        <label for="txtLastname">Last Name</label>
        <input type="text" name="txtLastname" id="txtLastname"><br>
        
        <input type="radio" name="radSex" id="radMale" value="Male" checked>
        <label for="radMale">Male</label>
        <input type="radio" name="radSex" id="radFemale" value="Female">
        <label for="radFemale">Female</label><br>

        <label for="filPhoto">Photo</label>
        


        <button type="submit" name="btnSend">Send</button>
    </form>

    
</body>
</html>