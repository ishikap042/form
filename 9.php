<head>
    <title>strip_tags()</title>
</head>

<body>

    <h2>Comment Box</h2>

    <form method="POST">

        Comment

        <br>

        <textarea name="comment"></textarea>

        <br><br>

        <button type="submit">
            Post Comment
        </button>

    </form>

    <hr>

    <?php

    if (isset($_POST["comment"])) {

        $comment = strip_tags($_POST["comment"]);

        echo "<h3>Filtered Comment</h3>";

        echo $comment;
    }

    ?>

</body>

</html>