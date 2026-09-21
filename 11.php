<!-- <!DOCTYPE html>
<html>

<head>
    <title>Employee Registration</title>
</head>

<body>

    <h2>Employee Registration Form</h2>

    <form method="POST">

        Employee Name

        <br>

        <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">

        <br><br>

        Employee Age

        <br>

        <input type="number" name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>">

        <br><br>

        <button type="submit">Register</button>

    </form>

    <hr>

    <?php

    if (isset($_POST["name"])) {

        $name = trim($_POST["name"]);
        $age = $_POST["age"];

        if (empty($name)) {
            echo "Employee Name is required.";
        } elseif (empty($age)) {
            echo "Employee Age is required.";
        } elseif ($age < 18) {
            echo "Employee must be at least 18 years old.";
        } else {
            echo "<h3>Employee Registration Successful</h3>";

            echo "Employee Name : " . htmlspecialchars($name);

            echo "<br>";

            echo "Employee Age : " . $age;
        }
    }

    ?>

</body>

</html> -->



<html>
    <head>
        <title>registration Form</title>
    </head>

    <body>
        <h2>Registration Form</h2>
        <form method="POST">
            enter name:
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
            <br><br>
             

            enter age:
            <input type="number" name="age" value="<?php if(isset($_POST['age'])) echo $_POST['age'];?>">
            <br><br>

            <button type="submit">Register</button>

        </form>
        <hr>

        <?php 
        if(isset($_POST['name'])){

            $name = trim($_POST['name']);
            $age = $_POST['age'];

            if(empty($name)){
                echo "emp name is required.";
            }elseif(empty($age)){
                echo "age is required.";
            }elseif($age < 18){
                echo "age must be at least 18";
            }else{
                echo "<h2>emp registration successfully</h2>";
                echo "employee name:   " . htmlspecialchars($name);
                echo "<br>";
                echo "employee age:  " . $age;
            }
        }
        
        
        
        ?>
    </body>
</html>