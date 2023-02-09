<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Capital.test</h1>
    <form method="get" action="#">
    <label for="capital">
        <select name="capital" id="capital">
            <?php foreach ($capitals as $country => $details) : ?>
                <option value="<?= urlencode($country) ?>" <?php if ($country == $capital){
                    echo 'selected';
                }?>><?= mb_strtoupper($country) ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <input type="submit" value="Rechercher">
    </form>
<div>

   <?php if (isset($capital) && array_key_exists($capital, $capitals)) : ?>
        <h2><?= ucfirst($capital) ?></h2>
        <p>Capital: <?= ucfirst($capitals[$capital]['capital']) ?></p>
        <img src="<?= $capitals[$capital]['flag'] ?>" alt="drapeau">

    <?php elseif (isset($capital)) : ?>
        <h3>Pays non valide</h3>
        <p>La capitale demandée n'existe pas</p>
    <?php else:?>
        <h3>Il y a eu une erreur</h3>
    <?php endif; ?>
</div>
</body>
</html>