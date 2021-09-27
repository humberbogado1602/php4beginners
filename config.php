<?php 

// devuelve los datos para hacer la conexión, esto es más fácil de proteger ya que quien necesite usar el proyecto tendrá una plantilla de esto y no mis datos de conexión

return [
    'database' => [
        'connection' => 'mysql:host=localhost',
        'dbname' => 'mytodo',
        'user' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //para tener más contexto en nuestras consultas fallidas
        ]
    ],
];