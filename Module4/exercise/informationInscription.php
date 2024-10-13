<?php
$id = $_POST['ID'];
$ConfirmID = $_POST['confirmID'];
$Name = $_POST['Name'];
$LastName = $_POST['LastName'];
$email = $_POST['Email'];
$confirmemail = $_POST['ConfirmEmail'];
$Country = $_POST['Country'];
$State = $_POST['State'];
$City = $_POST['City'];
$Age = $_POST['Age'];
$Address = $_POST['Address'];
$ContactNumber = $_POST['ContactNumber'];
$diploma = $_POST['Diploma'];
$information = $_POST['Information'];
$gender = $_POST['Gender'];
$Policy = $_POST['Policy'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Registration info </h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <td><?php echo $id; ?></td>
        </tr>
        <tr>
            <th>Confirm ID</th>
            <td><?php echo $ConfirmID; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $Name; ?></td>
        </tr>
        <tr>
            <th>Last name</th>
            <td><?php echo $LastName; ?></td>
        </tr>
        <tr>
            <th>email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Confirm email</th>
            <td><?php echo $confirmemail; ?></td>
        </tr>
        <tr>
            <th>Country</th>
            <td><?php echo $Country; ?></td>
        </tr>
        <tr>
            <th>State</th>
            <td><?php echo $State; ?></td>
        </tr>
        <tr>
            <th>City</th>
            <td><?php echo $City; ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?php echo $Age; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $Address; ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?php echo $ContactNumber; ?></td>
        </tr>
        <tr>
            <th>Diploma</th>
            <td><?php echo $diploma; ?></td>
        </tr>
        <tr>
            <th>Info</th>
            <td><?php echo $information; ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $gender; ?></td>
        </tr>
</body>
</html>