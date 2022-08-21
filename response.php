<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studentų registracija</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div>
            <h1 class="text-center text-white">Studento registracija</h1>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="w-50 m-auto mt-5">
                    <div class="card w-40 m-auto mt-3">
                        <div class="card-body">
                            <div class="mb-3">
                                <h5>Vardas:</h5>
                                <?php echo $_GET['fname']; ?>
                            </div>
                            <div class="mb-3">
                                <h5>Pavardė:</h5>
                                <?php echo $_GET['lname']; ?>
                            </div>
                            <div class="mb-5">
                                <h5>Lytis:</h5>
                                <?php
                                    $gender = $_GET['gender'];
                                    if ($gender == "Moteris") {
                                        echo "Moteris";
                                    } else if ($gender == "Vyras") {
                                        echo "Vyras";
                                    } else if ($gender == "Kita") {
                                        echo "Kita";
                                    }
                                ?>
                            </div>
                            <div class="mb-5">
                                <h5>Į paskaitas važinėsiu:</h5>
                                <?php
                                    foreach ($_GET["transport"] as $value) {
                                        echo "$value <br>";
                                    }
                                ?>
                            </div>
                            <div class="mb-5">
                                <h5>Kokiame mieste studijuojate?</h5>
                                <div class="col-sm-6">
                                    <?php
                                        if (isset($_GET["City"])) {
                                            $myCity = $_GET["City"];
                                            echo $myCity;
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h5>Trumpai apie save</h5>
                                <?php 
                                    echo $_GET["aboutYourself"];
                                ?>
                            </div>
                            <div class="mb-5">
                                <a href="form.php" class="btn btn-warning" role="button">Pildyti formą iš naujo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>