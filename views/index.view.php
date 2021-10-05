<?php require('partials/head.php') ?> <!-- traemos el primer partial -->

<ul>

    <?php foreach($users as $user): ?>
    <li><?= $user->name ?></li>
    <?php endforeach; ?>
        
</ul>

<h1>Submit Your Name</h1>

<form action="names" method="POST">
    <!-- incluir siempre attr name -->
    <input type="text" name="name">

    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php') ?> <!-- cierre del documento -->