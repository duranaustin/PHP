<?php
require_once 'DataBaseConnection.php';
$firstName = htmlentities($_POST['firstName']);
$firstName = strtolower($firstName);
$firstName = ucwords($firstName);
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipCode = $_POST['zipCode'];
$birthDate = $_POST['birthDate'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$relationship = $_POST['relationship'];
$action = $_POST['action']
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="google" content="notranslate">
        <meta http-equiv="Content-Language" content="en">
        <title>Personal Info Manager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>

        </style>
    </head>

    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <?php
                print_r($_POST);
                switch ($action){
                    case "insert":
                        $insert = "INSERT INTO `Library`.`PersonalInfo`(`PersonalInfoFirstName`,`PersonalInfoLastName`,`PersonalInfoPhoneNumber`,`PersonalInfoAddress`,`PersonalInfoCity`,`PersonalInfoState`,`PersonalInfoZipCode`,`PersonalInfoBirthDate`,`PersonalInfoUserName`,`PersonalInfoPassword`,`PersonalInfoSex`,`PersonalInfoRelationship`,`Active`)"
                                ."VALUES ('$firstName', '$lastName', $phoneNumber, '$address', '$city', '$state', $zipCode, '$birthDate', '$userName', '$password', '$sex', '$relationship', 'N')";
                        $success = $con->query($insert);
                
                        if ($success == FALSE){
                            $failmess = "Whole query " . $insert . "<br>";
                            echo $failmess;
                            die('Invalid query: ' . mysqli_error($con));
                        }
                        else{
                            echo "$firstName was added<br>";
                        }
                        break;
                    case "update":
                        $update = "UPDATE `Library`.`PersonalInfo` SET `Active`='Y'";
                        if($relationship != '' || $relationship != null){
                            $update = $update . ", PersonalInfoRelationship = '$relationship'";
                        }
                        if ($state != "--"){
                            $update = $update . ", PersonalInfoState = '$state'";
                        }
                        $update.= " WHERE `PersonalInfoFirstName`='$firstName'";
                        $success = $con->query($update);
                        if ($success == FALSE){
                            $failmess = "Whole query " . $update . "<br>";
                            echo $failmess;
                            die('Invalid query: ' . mysqli_error($con));
                        }
                        else{
                            echo $firstName . " was made Active<br>";
                        }
                        break;
                    case "search":
                        $search = "SELECT * FROM Library.PersonalInfo where PersonalInfoFirstName Like '%$firstName%' Order by PersonalInfoFirstName";
                        
                        $return = $con->query($search);
                        
                        if(!$return){
                            $message = "Whole query " . $search;
                            echo $message;
                            die('Invalid query: ' . mysqli_error($con));
                        }
                        echo "<table class='table'><thead><th>First Name</th><th>Relationship</th><th>State</th><th>Zip Code</th></thead><tbody>";
                        while ($row = $return->fetch_assoc()){
                            echo "<tr><td>Name: " . $row['PersonalInfoFirstName']
                                 ."</td><td> Relationship: " . $row['PersonalInfoRelationship']
                                 ."</td><td> State: " .$row['PersonalInfoState']
                                 ."</td><td> Zip Code: " .$row['PersonalInfoZipCode'] . "</td></tr>";
                        }
                        echo "</tbody></table>";
                        break;
                    default: echo "This is bad<br>";
                }
                $con->close;
                ?>
                <a href="PersonalInfoInterface.php">Back</a>
     </div>
     </div> 
     </div>   
        
    </body>
        
    

