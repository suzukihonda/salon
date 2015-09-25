<html>
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        .bs-example {
            margin: 20px;
        }

        form {

            width: 50%;
        }
    </style>
</head>
<body>
<div class="bs-example">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Pojemność</th>
                        <th>Rok</th>
                    </tr>
                    </thead>
                    <?php foreach ($app->getMoto() as $value): ?>
                        <tr>
                            <td>
                                <?php echo $value['marka']; ?>
                            </td>
                            <td>
                                <?php echo $value['model']; ?>
                            </td>
                            <td>
                                <?php echo $value['pojemnosc']; ?>
                            </td>
                            <td>
                                <?php echo $value['rok']; ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
            <div class="col-md-12">

                <input type="submit" value="Dodaj motocykl" onclick="wyswietl()" />

                <form action="addMotorcycle.php" method="POST">
                    <div class="form-group">

                        <label for="name">Marka: </label><input type="text" class="form-control" id="name"
                                                                name="marka"/>
                        <label for="model"> Model: </label><input type="text" class="form-control" id="model"
                                                                  name="model"/>
                        <label for="pojemnosc"> Pojemnosc: </label><input type="text" class="form-control"
                                                                          id="pojemnosc" name="pojemnosc"/>
                        <label for="rok"> Rok: </label><input type="text" class="form-control" id="rok"
                                                              name="rok"/><br/>
                        <button type="submit" class="btn btn-default">Dodaj</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
    function wyswietl() {
        $.ajax({
            url: "plik.html",
            context: document.body
        }).done(function (zawartoscPliku) {
            $("table").append(zawartoscPliku);

        });
    }
</script>
</body>
</html>
