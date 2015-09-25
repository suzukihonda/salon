<html>
    <head>

    </head>
    <body>

        <table>
            <?php foreach ($result as $value): ?>
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

    </body>
</html>
