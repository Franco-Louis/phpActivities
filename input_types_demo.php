<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types Demo</title>
</head>
<body>
    <form>
        <label for="txtFirstName">First Name:</label>
        <input type="text" name="txtFirstName" id="txtFirstName" autofocus><br>
        <label for="txtLastName">Last Name:</label>
        <input type="text" name="txtLastName" id="txtLastName"><br>
        <label for="txtPassword">Password:</label>
        <input type="password" name="txtPassword" id="txtLastName"><br>
        <input type="submit" name="btnSave" value="Send">

        <input type="reset" name=""><br>
        <input type="reset" name="radSex" id="radMale" value="Male"><br>
        <label for="radSex">Male</label><br>
        <input type="reset" name="radSex" id="radFemale" value="Feale"><br>
        <label for="radSex">Feale</label><br>

        <input type="checkbox" name="chkBike" id="chkBike" value="Bike">
        <label for="chkBike">I have a bike.</label><br>
        <input type="checkbox" name="chkCar" id="chkBike" value="Bike">
        <label for="chkCar">I have a Car.</label><br>
        <input type="checkbox" name="chkBoat" id="chkBike" value="Bike">
        <label for="chkBoat">I have a Boat.</label><br>
        
        <label for="">Pick a color:</label>
        <input type="color" name="clrTheme" id="clrTheme"><br>

        <label for="dtpBirthday">Birthday:</label>
        <input type="date" name="dtpBirthday" id="dtpBirthday" value="2000-01-01"><br>

        <label for="txtEmail">Email Address:</label>
        <input type="email" name="txtEmail" id="txtEmail"><br>  
        
        <label for="filPhoto">Photo</label>
        <input type="file" name="filPhoto" id="filPhoto"><br>

        <label for="txtNumber">Enter Number</label>
        <input type="number" name="txtNumber" id="txtNumber" min="1" max="5"><br>

        <label for="txtVolume">Enter Volume</label>
        <input type="range" name="txtVolume" id="txtVolume" min="0" max="100" step="10" value="60"><br>

        <label for="txtTelephone">Enter Telephone Number</label>
        <input type="tel" name="txtTelephone" id="txtTelephone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>

        <label for="txtTime">Enter Quantity</label>
        <input type="time" name="txtTime" id="txtTime"><br>

        <label for="txtURL">Add URL</label>
        <input type="url" name="txtURL" id="txtURL"><br>






    </form>
</body>
</html>