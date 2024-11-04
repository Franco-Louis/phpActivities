<?php
    $arrMonths = array('January', 'February', 'March', 'April', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    //echo date('F d Y');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Automation</title>
</head>
<body>
    <div class ="container">
        <div class="row">
            <div class="col-md-4">
                <select name="drpMonths" class="form-control">
                        <?php
                            if(isset($arrMonths)){
                                foreach ($arrMonths as $key => $value){
                                    if($value == date('F'))
                                        echo '<option value="' . $value . '" selected>' . $value . '</option>';
                                    else
                                        echo '<option value="' . $value . '">' . $value . '</option>';                                
                                }
                            }    
                        ?>
                </select>  

                <select name="drpDays" class="form-control">
                    <?php
                        for($i = 1; $i <32; $i++)
                            if($i == date('d'))
                                echo '<option value="' . $i . '" selected>' . $i . '</option>';
                            else
                                echo '<option value="' . $i . '">' . $i . '</option>';
                    ?>      
                </select>

                <select name="drpYears" class="form-control">
                    <?php
                    $currentYear = date('Y');
                    $startYear = $currentYear - 100;

                    for($year = $startYear; $year <= $currentYear; $year++){
                        if($year == 2010)
                            echo '<option value="' . $year . '"selected>' . $year . '</option>';
                        else
                            echo '<option value="' . $year . '">' . $year . '</option>';
                    }

                    ?>

                </select>

                <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg> Process</button>
            </div>
        </div>
    </div>
   

        <script type="text/javascript" href="js/jquery-3.7.1.js"></script>
        <script type="text/javascript" href="js/bootstrap.js"></script>
</body>
</html>