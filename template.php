<html>
    <head>

    </head>
    <body>

        <table>
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


    <form action="addMotorcycle.php" method="POST">

        Marka: <input type="text" id="name" name="marka"/>
        Model: <input type="text" id="model" name="model"/>
        Pojemnosc: <input type="text" id="pojemnosc" name="pojemnosc"/>
        Rok: <input type="text" id="rok" name="rok"/><br/>
        <input type="submit" value="Dodaj"/>


    </form>

    </body>
</html>
