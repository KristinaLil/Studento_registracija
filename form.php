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

    <div class="container mt-5 mb-5">
        <div>
            <h1 class="text-center text-white">Studento registracija</h1>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="w-50 m-auto mt-5">
                    <div class="card w-40 m-auto mt-3">
                        <div class="card-body">
                            <form action="response.php" method="get">
                                <div class="mb-3">
                                    <label class="form-label">Vardas:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="fname" class="form-control" placeholder="Vardas">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pavardė:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="lname" class="form-control" placeholder="Pavardė">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <h6>Lytis:</h6>
                                    <div class="form-check form-check-inline">
                                        <div class="col-sm-4">
                                            <input class="form-check-input" type="radio" name="gender" value="Moteris">
                                        </div>
                                        <label class="form-check-label" for="inlineRadio1">Moteris</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <div class="col-sm-4">
                                            <input class="form-check-input" type="radio" name="gender" value="Vyras">
                                        </div>
                                        <label class="form-check-label" for="inlineRadio1">Vyras</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <div class="col-sm-4">
                                            <input class="form-check-input" type="radio" name="gender" value="Kita">
                                        </div>
                                        <label class="form-check-label" for="inlineRadio1">Kita</label>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <h6>Į paskaitas važinėsiu:</h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="transport[]" value="Dviračiu">
                                        <label class="form-check-label">Dviračiu</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="transport[]" value="Mašina">
                                        <label class="form-check-label">Mašina</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="transport[]" value="Autobusu">
                                        <label class="form-check-label">Autobusu</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="transport[]" value="Eisiu pėsčias/ia">
                                        <label class="form-check-label">Eisiu pėsčias/ia</label>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <h6>Kokiame mieste studijuojate?</h6>
                                    <div class="col-sm-6">
                                        <select class="form-select" name="City">
                                            <option selected>Pasirinkite</option>
                                            <option value="Vilniuje">Vilnius</option>
                                            <option value="Kaune">Kaunas</option>
                                            <option value="Klaipėdoje">Klaipėda</option>
                                            <option value="Šiauliuose">Šiauliai</option>
                                            <option value="Panevėžyje">Panevėžys</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <h6>Trumpai apie save</h6>
                                    <div class="mb-3 col-sm-6">
                                        <textarea class="form-control" name="aboutYourself" rows="6" placeholder="Apie save..."></textarea>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <button type="submit" class="btn btn-success col-sm-6">Įrašyti</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>