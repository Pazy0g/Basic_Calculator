<!doctype html>
<html lang="fr">

<head>
    <title>PHP CALCULS SIMPLES</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">

    <form class="form-inline" action="calculate.php" method="get">
        <div class="form-group">
            <input type="text" name="nb01" id="" class="form-control" placeholder="Premier nombre">
            <div class="form-group">
                <label for="">choisis un type d'opération: </label>
                <select class="custom-select" name="operation">
                    <option selected>Choisis un opérateur</option>
                        <option value="add">Additioner</option>
                        <option value="sub">Soustraire</option>
                        <option value="mul">multiplier</option>
                    <option value="div">Diviser</option>
                </select>
            </div>
        </div>
        <div class="p-2">
            <input type="text" class="form-control" name="nb02" placeholder="deuxième nombre">
            <button type="submit" class="btn btn-success p-2">Calculer!</button>
        </div>
    </form>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>