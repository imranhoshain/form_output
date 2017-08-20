<?php

$tmp_name = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
move_uploaded_file ( $tmp_name , 'img/'.$img_name );
?>

<!DOCTYPE html>

<html>

<head>
    <title>Form Output</title>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>PHP function create</h1>
    </header>

    <div class="my-work">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered">
                    <thead>
                        <?php
                       
                    $thead= array(
                        array("Name",$_POST['name']), 
                            array("Email",$_POST['email']), 
                           array("Password",$_POST['pass']),
                           array("Address",$_POST['msg']),
                            array("Phone",$_POST['phone']),
                           array("Gender",implode($_POST['optradio'])), 
                            array("Skill",implode(' ,',$_POST['skill'])),
                            array("Birth",implode ('/',$_POST['birthdayPicker_birth'])),
                           array("ProfilePicture",$img_name),
                    );
                            
                        for ($row=0;$row<9;$row++){
                                echo "<tr>";
                            for ($col=0;$col<2;$col++){
                                echo "<td>".$thead [$row][$col]."</td>";    
                            }
                            echo "</tr>";
                        }     
                        
                    ?>

                    </thead>
                </table>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-left">
            <p>Copyright &copy 2017</p>
        </div>
        <div class="footer-right">
            <p>Powered by Imran Hoshain</p>
        </div>
    </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-birthday-picker.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>