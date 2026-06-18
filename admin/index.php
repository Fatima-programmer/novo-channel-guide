<?php
$data = json_decode(file_get_contents("../data/channels.json"), true);
?>

<h1>Admin Panel</h1>

<a href="add.php">Add Channel</a>

<?php foreach ($data as $channel): ?>
    <div>
        <h3><?= $channel['name'] ?></h3>

        <a href="edit.php?id=<?= $channel['id'] ?>">Edit</a>
        <a href="delete.php?id=<?= $channel['id'] ?>">Delete</a>
    </div>
<?php endforeach; ?>