<?php require('partials/head.php') ?> <!-- traemos el primer partial -->

<h1>Submit Your Name</h1>

<form action="names" method="POST">
    <!-- incluir siempre attr name -->
    <input type="text" name="task">

    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php') ?> <!-- cierre del documento -->