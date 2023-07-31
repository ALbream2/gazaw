
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>
    <body>
        <h1>Forms in PHP</h1>
        <form>
            <label>Name:</label>
            <input name="name" type="text"><br>
            <label>Email:</label>
            <input name="email" type="email"><br>
            <label>Password:</label>
            <input name="password" type="password"><br>
            <label>Password Conf:</label>
            <input type="repassword"><br>
            <label>DoB:</label>
            <input type="date" name="date"><br>
            <label>Age:</label>
            <input type="number"><br>
            <label>Gender:</label>
            Male<input type="radio" name="gender">
            Female<input type="radio" name="gender"><br>
            <label>Remember Me:</label>
            <input type="checkbox"><br>
            <label>City:</label>
            <select>
                <option>Select</option>
                <option>N.Gaza</option>
                <option>Gaza</option>
                <option>Middle</option>
                <option>Khan</option>
                <option>Rafah</option>
            </select><br>
            <label>Skills:</label>
            <textarea></textarea><br>
            <button>Save</button>
            <input value="Send" type="submit">
            <input value="Clear" type="reset">
        </form>
    </body>
    </html>
<?php
$name = '';
$email = '';
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];

    $passRegex = '^(?=\P{Ll}*\p{Ll})(?=\P{Lu}*\p{Lu})(?=\P{N}*\p{N})(?=[\p{L}\p{N}]*[^\p{L}\p{N}])[\s\S]{8,}$';
    // VALIDATION

    //1-name more that 3 chars
    if(strlen($name) < 3){
        echo 'Name must be 3 chars at least<br>';
    }
    //2-email 
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        // echo 'Please, Enter valid email..<br>';
    }  else {
        echo 'Please, Enter valid email..<br>';
    }
    //3-password
    // echo filter_var($_POST['password'], FILTER_VALIDATE_REGEXP, $passRegex) ? "" : "Please, Enter Complex password";
    // 4-gender validation
    if(!isset($_POST['gender'])){
        echo 'Please, select gender..';

    }



    header('Location: c.php');
}
include 'b/menu.php';  ?>

<div class="container">
    <!-- <form action="r.php" method="post">  post  -->
    <form action="" method="post"> <!--  post  -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="<?php echo $name ; ?>" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input  value="<?php echo $email ; ?>" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <label for="exampleInputPassword1" class="form-label">Gender</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox1" name="gender">
            <label class="form-check-label" for="inlineCheckbox1">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" name="gender">
            <label class="form-check-label" for="inlineCheckbox2">Female</label>
        </div><br>
        <label for="exampleInputPassword1" class="form-label">City</label>
        <select name="city" class="form-select" aria-label="Default select example">
            <option selected disabled>Please, select options</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3" >Three</option>
        </select>
        <div class="mb-3 form-check">
            <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form> 

</div>

<div>
    <?php echo $name;  ?>
    <?php echo $email;  ?>
</div>

<?php
include 'b/footer.php';  ?>