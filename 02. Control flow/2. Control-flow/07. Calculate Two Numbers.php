<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    <form method="get">
        <div>
            Operation
            <select name="operation">
                <option value="sum">Sum</option>
                <option value="subtract">Subtract</option>
            </select>
        </div>
        <div>
            Number 1:
            <input type="text" name="number_one" />
        </div>
        <div>
            Number 2:
            <input type="text" name="number_two" />
        </div>


    <?php if (isset($output)): ?>
        <div>
            Result:
            <input type="text" disabled="disabled" readonly="readonly" value="<?= $output; ?>"/>
        </div>
    <?php endif; ?>

    <div>
        <input type="submit" name="calculate" value="Calculate!" />
    </div>
    </form>



</body>
</html>