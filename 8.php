<!DOCTYPE html>
<html>

<head>
    <title>htmlspecialchars() Example</title>
</head>

<body>

    <h2>htmlspecialchars() Example</h2>

    <form method="POST">

        Message

        <br>

        <textarea name="message" rows="5" cols="40"></textarea>

        <br><br>

        <button type="submit">
            Submit
        </button>

    </form>

    <hr>

    <!-- <?php

    if (isset($_POST["message"])) {

        $message = $_POST["message"];

        echo "<h3>Original Input</h3>";

        echo $message;

        echo "<hr>";

        echo "<h3>Safe Output (Using htmlspecialchars())</h3>";

        echo htmlspecialchars($message);
    }

    ?> -->

<?php 
if(isset($_POST['message'])){
    $message = $_POST['message'];

    echo "Origional message:  ";
    echo $message;

    echo "<hr>";

    echo "<h3>safe output (using htmlspecialchars())</h3>";
    echo htmlspecialchars($message);
}



?>
</body>

</html>