<?php 

require 'functions.php';
require 'Task.php';

// movi los bloques de código para mayor limpieza

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';