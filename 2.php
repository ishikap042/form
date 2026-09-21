<!-- <!DOCTYPE html>
<html>

<head>
    <title>POST Form Example</title>
</head>

<body>

    <h2>POST Form Example</h2>

    <form method="POST">
        Name :
        <input type="text" name="name">
        <br><br>
        <button type="submit">
            Submit
        </button>
    </form>
    <hr>

    <?php

    if (isset($_POST["name"])) {
        echo "<h3>Welcome " . $_POST["name"] . "</h3>";
    }

    ?>

</body>

</html> -->

<html>
    <head>
        <title>Post form example</title>
    </head>

    <body>
        <h2>POST form</h2>
        <form method="POST">
            name:<input type="text" name="name">
            <button type="submit">submit</button>
            <br><br>
        </form>

        <?php 
        if(isset($_POST['name'])){
            echo "<h2>hello " . $_POST['name'] . "</h2>";
        }
        
        ?>
    </body>
</html>