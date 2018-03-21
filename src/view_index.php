<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public_html/css/style.css">
    <title>Auto skelbimai</title>
</head>
<body>
<div class="container">
    <h1>Auto skelbimai</h1>
    <div class="form-apperance">
        <form action="http://miroslavpetkevic.ru/auto_ads/public_html/index.php" method="post">
            <p>
                <label>Markė</label>
                <select name="maker_id" required>
                    <option value="">Please select</option>
                    <?php foreach ($makers as $value): ?>
                        <option value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                    <?php endforeach; ?>
                </select>
            </p>

            <p>
                <label for="model">Modelis</label>
                <select name="model_id" id="model" required>
                    <option value="">Please select</option>
                </select>
            </p>

            <p>
                <label for="price">Kaina</label>
                <input type="text" name="price" id="price" required>
            </p>

            <p>
                <input type="hidden" name="used" value="2">
                <label><input type="checkbox" name="used" value="1"> Naudota</label>
            </p>

            <p>
                <input type="hidden" name="new" value="2">
                <label><input type="checkbox" name="new" value="1"> Nauja</label>


            </p>

            <p>
                <input type="hidden" name="crashed" value="2">
                <label for="crashed"><input type="checkbox" name="crashed" id="crashed" value="1"> Daužta</label>
            </p>

            <p>
                <label for="comment">Aprašymas</label>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
            </p>
            <p>
                <button type="submit">Patalpinti</button>
            </p>
        </form>
    </div>
    <div>
        <?php foreach ($list as $value) : ?>
        <div class="items">
            <h2><?= $value["maker"] ?></h2>
            <h3><?= $value["model"] ?></h3>
            <p><?= $value["price"] ?></p>
            <p><?= ($value["is_used"] == 2) ? "Naudota" : "" ?></p>
            <p><?= ($value["is_new"] == 2) ? "Nauja" : "" ?></p>
            <p><?= ($value["is_crashed"] == 2) ? "Daužta" : "" ?></p>
            <p><?= $value["description"] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="../public_html/js/jquery.min.js"></script>
<script src="../public_html/js/script.js"></script>
</body>
</html>