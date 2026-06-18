<?php
$data = json_decode(file_get_contents("data/channels.json"), true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Novo Communications TV Channel Guide</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<h1>Novo Communications TV Channel Guide</h1>

<input type="text" id="search" placeholder="Search channels...">

<div id="filters">
    <button onclick="filterPackage('all')">All</button>
    <button onclick="filterPackage('Basic Package')">Basic</button>
    <button onclick="filterPackage('Explore Plus')">Explore Plus</button>
</div>

<div class="container">

<?php foreach ($data as $channel): ?>
    <?php if ($channel["isActive"]): ?>
        <div class="card" 
             data-name="<?= strtolower($channel['name']) ?>" 
             data-package="<?= $channel['package'] ?>">

            <img src="<?= $channel['logo'] ?>" />
            <h3><?= $channel['name'] ?></h3>
            <p><?= $channel['category'] ?></p>
            <span><?= $channel['package'] ?></span>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

</div>

<script src="assets/js/guide.js"></script>
</body>
</html>