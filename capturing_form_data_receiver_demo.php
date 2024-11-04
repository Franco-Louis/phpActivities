<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data (Received)</title>
</head>
<body>
    <?php
        /*
        use $_GET if you use get method on your form

        $firstname = $_GET['txtFirstname'];
        $lastname = $_GET['txtLastname'];
        $sex = $_GET['radSex'];

        if($sex == 'Male')
            echo "Hello, Sir $firstname $lastname";

        else
            echo "Hello, Ma'am $firstname $lastname";  
       
       
    */

        $firstname = $_POST['txtFirstname'];
        $lastname = $_POST['txtLastname'];
        $sex = $_POST['radSex'];
        $filPhotoo = $_POST['filPhoto']

        if($sex == 'Male')
            echo "Hello, Sir $firstname $lastname";

        else
            echo "Hello, Ma'am $firstname $lastname";  
   
       

            /*      
        $firstname = $_REQUEST['txtFirstname'];
        $lastname = $_REQUEST['txtLastname'];
        $sex = $_REQUEST['radSex'];

        if($sex == 'Male')
            echo "Hello, Sir $firstname $lastname";

        else
            echo "Hello, Ma'am $firstname $lastname";  
   */
        ?>  
</body>
</html>