<?php
$data = json_decode(file_get_contents("data/channels.json"), true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Novo Communications TV Channel Guide</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header>
    <h1>Novo Communications TV Channel Guide</h1>

    <input
        type="text"
        id="search"
        placeholder="Search channels...">
</header>

<!-- Package Filters -->
<section class="filters">

    <h3>Packages</h3>

    <button onclick="filterPackage('all')">All</button>
    <button onclick="filterPackage('Basic Package')">Basic Package</button>
    <button onclick="filterPackage('Explore Plus')">Explore Plus</button>
    <button onclick="filterPackage('Entertainment Elite')">Entertainment Elite</button>
    <button onclick="filterPackage('Screen Time Plus')">Screen Time Plus</button>
    <button onclick="filterPackage('Disney Pack')">Disney Pack</button>
    <button onclick="filterPackage('Jamz Pack')">Jamz Pack</button>
</section>

<!-- Category Filters -->
<section class="filters">

    <h3>Categorys</h3>

    <button onclick="filterCategory('all')">All</button>
    <button onclick="filterCategory('Local/Regional/General')">Local/Regional/General</button>
    <button onclick="filterCategory('Sports')">Sports</button>
    <button onclick="filterCategory('News')">News</button>
    <button onclick="filterCategory('Kids/Family')">Kids/Family</button>
    <button onclick="filterCategory('Discovery/Lifestyle')">Discovery/Lifestyle</button>
    <button onclick="filterCategory('Religious')">Religious</button>
    <button onclick="filterCategory('Entertainment/Movies/Series')">Entertainment/Movies/Series</button>
</section>

<!-- Channel Cards -->

<div class="container">

<?php foreach ($data as $channel): ?>

    <?php if ($channel["isActive"]): ?>

        <div class="card"

            data-name="<?= strtolower($channel['name']) ?>"
            data-package="<?= $channel['package'] ?>"
            data-category="<?= $channel['category'] ?>">

            <img
                src="<?= $channel['logo'] ?>"
                alt="<?= $channel['name'] ?> Logo">

            <h3><?= $channel['name'] ?></h3>

            <p><strong>Number:</strong> <?= $channel['id'] ?></p>

            <p><strong>Category:</strong> <?= $channel['category'] ?></p>

            <p><strong>Package:</strong> <?= $channel['package'] ?></p>

            <p><strong>Price:</strong> <?= $channel['price'] ?></p>

        </div>

    <?php endif; ?>

<?php endforeach; ?>

</div>

<script src="assets/js/guide.js"></script>

</body>
</html>