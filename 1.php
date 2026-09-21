<!-- <!DOCTYPE html>
<html>

<head>
    <title>GET Form Example</title>
</head>

<body>

    <h2>GET Form Example</h2>

    <form method="GET">
        Name :
        <input type="text" name="name">

        <br><br>

        <button type="submit">Submit</button>

    </form>

    <hr>

    <?php
    if (isset($_GET["name"])) {
        echo "<h3>Hello " . $_GET["name"] . "</h3>";
    }
    ?>

</body>

</html> -->

<html>
    <head>
        <title>Form get example</title>
    </head>

    <body>
        <h2>Get example</h2>
        <form method="GET">
            name:<input type="text" name="name">
            <br><br>
            <button type="submit">submit</button>
        </form>

        <?php 
        if(isset($_GET['name'])){
            echo "<h2>HELOO " . $_GET['name'] . "<h2>";
        }
        
        
        ?>

    </body>
</html>