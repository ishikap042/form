<!-- <!DOCTYPE html>
<html>

<head>
    <title>Sticky Form</title>
</head>

<body>

    <h2>Sticky Form Example</h2>

    <form method="POST">

        Name

        <br>

        <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">

        <br><br>

        <button type="submit">
            Submit
        </button>

    </form>

    <hr>

    <?php

    if (isset($_POST["name"])) {

        echo "Hello " . $_POST["name"];
    }

    ?>

</body>

</html> -->


<html>
    <head>
        <title>Sticky Form</title>
    </head>

    <body>
        <h2>Sticky Form</h2>
        <form method="POST">
        name:
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
        <br><br>
        <button type="submit">submit</button>
        </form>

        <?php 
        if(isset($_POST['name'])){
            echo "Hello " . $_POST['name'];
        }
        ?>
    </body>
</html>