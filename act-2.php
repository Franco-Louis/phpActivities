<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
    <style>
        #previewImage {
            display: block;
            margin: 20px 0;
            border: 5px solid black; /* Default border color */
        }
    </style>
</head>
<body>
    <h3>Peys App</h3>

    <label for="rngSize">Select Photo Size:</label>
    <input type="range" id="rngSize" min="0" max="100" step="10" value="60"><br>

    <label for="clrTheme">Select Border Color:</label>
    <input type="color" id="clrTheme" value="#000000"><br>

    <button onclick="
        // Set the image width to the selected size
        document.getElementById('previewImage').style.width = document.getElementById('rngSize').value + '%'; 
        // Set the image border color to the selected color
        document.getElementById('previewImage').style.borderColor = document.getElementById('clrTheme').value;">
        Process
    </button>

    <img src="prangko.png" alt="Preview Image" id="previewImage" width="300">

</body>
</html>
