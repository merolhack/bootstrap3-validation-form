<?php
// Check if the form has submited
if (!is_null($_POST) && !empty($_POST)) {
    echo '<pre>'.print_r($_POST, true).'</pre>';
    $conn = new mysqli('localhost', 'uregister', '@DB.R3G1$_TER', 'dseinfonavit_register_2018');
    if ($conn->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
    $sql = "INSERT INTO registers (uuid, email, first_name, middle_name, last_name, phone, personal_email)
            VALUES (
                UUID(),
                '".$_POST['email']."',
                '".$_POST['first_name']."',
                '".$_POST['middle_name']."',
                '".$_POST['last_name']."',
                '".$_POST['phone']."',
                '".$_POST['personal_email']."')";
    if ($conn->query($sql) === TRUE) {
        printf("El registro se ha guardado correctamente.\n");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro 2018</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        label span {
            color: red;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <?php require_once('form/first.php'); ?>
    </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
</body>
</html>