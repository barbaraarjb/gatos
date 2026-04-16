<?php
require '../config/db.php';

$stmt = $pdo->query("
    SELECT 
        id,
        name,
        photo
    FROM cats
");

$cats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cats</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Gatos</h1>
    <h3>Apenas uma listagem de gatos aqui para você :)</h3>

    <br><br>
    <div class="grid">
        <?php foreach ($cats as $cat): ?>
            <div class="card">
                <img src="/storage/cats/<?php echo $cat['photo']; ?>">

               <div><h3><?= $cat['name'] ?></h3></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>