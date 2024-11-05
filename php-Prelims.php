<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment and Grade Processing System</title>
    <script>
        // Function to submit the student enrollment form
        function submitStudentInfo(event) {
            event.preventDefault(); // Prevent form from submitting normally

            // Get values from the enrollment form
            var firstName = document.getElementById('txtFirstName').value;
            var lastName = document.getElementById('txtLastName').value;

            // Set the student's name in the grade entry form
            document.getElementById('studentName').textContent = firstName + " " + lastName;

            // Hide the enrollment form after submission
            document.getElementById('enrollmentForm').style.display = 'none';

            // Show the grade entry form
            document.getElementById('gradeForm').style.display = 'block';
        }

        // Function to submit grades and show the result
        function submitGrades(event) {
            event.preventDefault(); // Prevent form from submitting normally

            // Get the grades from the form
            var prelim = parseFloat(document.getElementById('prelim').value);
            var midterm = parseFloat(document.getElementById('midterm').value);
            var final = parseFloat(document.getElementById('final').value);

            // Calculate the average
            var average = (prelim + midterm + final) / 3;

            // Get the student's name from the enrollment form
            var studentName = document.getElementById('studentName').textContent;

            // Determine Pass/Fail based on the average
            var resultMessage = average >= 75 ? "Passed" : "Failed";
            var resultClass = average >= 75 ? "Passed" : "Failed";

            // Create a new section to display the grades and final average
            var resultSection = document.createElement('div');
            resultSection.innerHTML = `
                <h3>Student Grades and Final Average</h3>
                <p><strong>Name:</strong> ${studentName}</p>
                <p><strong>Prelim:</strong> ${prelim}</p>
                <p><strong>Midterm:</strong> ${midterm}</p>
                <p><strong>Final:</strong> ${final}</p>
                <p><strong>Final Average:</strong> ${average.toFixed(2)}</p>
                <p><strong>Status:</strong> ${resultMessage}</p>
            `;

            // Append the result section below the enrollment form
            document.body.appendChild(resultSection);

            // Show the enrollment form again at the top of the page
            document.getElementById('enrollmentForm').style.display = 'block';

            // Optionally, hide the grade entry form after submission
            document.getElementById('gradeForm').style.display = 'none';

            // Reset both the enrollment form and the grade entry form after submission
            resetForms();
        }

        // Function to reset the forms (enrollment and grade entry)
        function resetForms() {
            // Reset the student enrollment form fields
            document.getElementById('txtFirstName').value = '';
            document.getElementById('txtLastName').value = '';
            document.getElementById('txtAge').value = '';
            document.getElementById('radMale').checked = false;
            document.getElementById('radFemale').checked = false;
            document.getElementById('drpCourses').selectedIndex = 0; // Reset to first option
            document.getElementById('txtEmail').value = '';

            // Reset the grade entry form fields
            document.getElementById('prelim').value = '';
            document.getElementById('midterm').value = '';
            document.getElementById('final').value = '';
            
            // Reset the student's name in grade entry form
            document.getElementById('studentName').textContent = '';
        }
    </script>
</head>
<body>
    <h1>Student Enrollment and Grade Processing System</h1>

    <!-- Student Enrollment Form -->
    <div id="enrollmentForm">
        <h2>Student Enrollment Form</h2>

        <form onsubmit="submitStudentInfo(event)">
            <label for="txtFirstName">First Name:</label><br>
            <input type="text" name="txtFirstName" id="txtFirstName" required autofocus><br><br>

            <label for="txtLastName">Last Name:</label><br>
            <input type="text" name="txtLastName" id="txtLastName" required><br><br>

            <label for="txtAge">Age:</label><br>
            <input type="text" name="txtAge" id="txtAge" required><br><br>

            <label>Gender:</label><br>
            <input type="radio" name="radSex" id="radMale" value="Male" required> Male
            <input type="radio" name="radSex" id="radFemale" value="Female" required> Female<br><br>

            <label for="drpCourses">Course:</label><br><br>
            <select name="drpCourses" id="drpCourses" required>
                <option value="BSIT" selected>BSIT</option>
                <option value="BSTM">BSTM</option>
                <option value="BSHM">BSHM</option>
            </select><br><br>

            <label for="txtEmail">Email:</label><br>
            <input type="email" name="txtEmail" id="txtEmail" required><br><br>

            <input type="submit" value="Submit Student Information">
        </form>
    </div>

    <!-- Grade Entry Form (Hidden initially) -->
    <div id="gradeForm" style="display: none;">
        <h2>Enter Grades for <span id="studentName"></span></h2>

        <form onsubmit="submitGrades(event)">
            <label for="prelim">Prelim:</label><br>
            <input type="number" id="prelim" required><br><br>

            <label for="midterm">Midterm:</label><br>
            <input type="number" id="midterm" required><br><br>

            <label for="final">Final:</label><br>
            <input type="number" id="final" required><br><br>

            <input type="submit" value="Submit Grades">
        </form>
    </div>
</body>
</html>
