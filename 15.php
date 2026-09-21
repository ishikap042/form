<!-- <!DOCTYPE html>
<html>

<head>
    <title>Select Example</title>
</head>

<body>

    <form method="POST">

        <select name="country">
            <option value="">Select</option>

            <option>India</option>

            <option>USA</option>

            <option>Canada</option>

            <option>Australia</option>

        </select>

        <br><br>

        <button>Submit</button>

    </form>

    <hr>

    <?php

    if (isset($_POST["country"])) {

        $country = $_POST["country"];

        if (empty($country)) {

            echo "Please Select Country.";
        } else {

            echo "Country : " . $country;
        }
    }

    ?>

</body>

</html> -->

<html>
    <head>
        <title>Select value</title>
    </head>

    <body>
        <h2>select county: </h2>
        <form method="POST">

        <select name="country[]" multiple>
            
            <option value=""></option>
            <option>INDIA</option>
            <option>USA</option>
            <option>CANADA</option>
            <option>Australia</option>


        </select>

        <button>submit</button>
        </form>


        <?php 
        if(isset($_POST['country'])){
            $countries = $_POST['country'];

        //     if(empty($country)){
        //         echo "select county";
        //     }else{
        //         echo "selecyed county: ";
        //         echo $county;
        //     }
        // }
        echo "<h2>select cources</h2>";
        foreach ($countries as $country){
            echo $country;
            echo "<br>";
        }
        }
        
        
        ?>
    </body>
</html>