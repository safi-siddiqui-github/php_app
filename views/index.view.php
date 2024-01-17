<?php require('partials/head.php') ?>

<h1>Home Page</h1>

<?php foreach ($posts as $post) : ?>
    <h2><?= $post['title'] ?></h2>
<?php endforeach; ?>

<a href="/notes">Notes</a>

<?php require('partials/foot.php') ?>