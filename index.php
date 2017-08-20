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
                <form action="post.php" method="post" enctype="multipart/form-data">
                    <div class="name">
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="email">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="password">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                    <div class="address">
                        <label for="comment">Address:</label>
                        <textarea class="form-control" name="msg" rows="5" id="comment"></textarea>
                    </div>
                    <div class="mobile">
                        <label for="phone">Enter Your Phone Number:</label>
                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                    </div>
                    <div class="gender">
                        <h4>Select Your Gender</h4>
                        <div class="radio-inline">
                            <label><input type="radio" name="optradio[]" value="Male">Male</label>
                        </div>
                        <div class="radio-inline">
                            <label><input type="radio" name="optradio[]" value="Female">Female</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h4>Chose your Hobby</h4>
                            <div class="checkbox">
                                <label class="checkbox-inline"><input type="checkbox" name="skill[]" value="Cricket">Cricket</label>
                                <label class="checkbox-inline"><input type="checkbox" name="skill[]" value="Singing">Singing</label>
                                <label class="checkbox-inline"><input type="checkbox" name="skill[]" value="Dancing">Dancing</label>
                            </div>
                        </div>
                    </div>
                    <div class="birth">
                        <div id="birthdayPicker" name="birth"></div>
                    </div>
                    <div class="form-image">
                        <label for="imge">Image Upload</label>
                        <input type="file" class="form-control-file" name="image" id="imge">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

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