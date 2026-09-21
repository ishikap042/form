<!DOCTYPE html>
<html>

<head>
    <title>isset() and empty()</title>
</head>

<body>

    <h2>Registration Form</h2>

    <form method="POST">
        Name <br>
        <input type="text" name="name">
        <br><br>

        <button type="submit">Register</button>
    </form>

    <hr>

    <?php


    if (isset($_POST["name"])) {

        echo "<b>isset():</b> Form was submitted.<br><br>";

        $name = $_POST["name"];

        
        if (empty($name)) {
            echo "<b>empty():</b> Name is required.";
        } else {
            
            echo "Welcome " . $name;
        }
    } else {

        echo "The form has not been submitted yet.";
    }

    ?>

</body>

</html>