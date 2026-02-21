<?php
// Inicia sessão apenas se ainda não tiver sido iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Caminho base do projeto
define('BASE_PATH', dirname(__DIR__)); // Aponta para a pasta IntensoCheiro

// Pastas que o autoload vai procurar
$folders = [
    BASE_PATH . '/src/controllers/',
    BASE_PATH . '/src/models/',
    BASE_PATH . '/src/core/',
];

// Função de autoload
spl_autoload_register(function ($class) use ($folders) {

    foreach ($folders as $folder) {

        // Tenta o nome direto: Ex: Contato => Contato.php
        $file = $folder . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }

        // Tenta com sufixo "_model": Ex: Contato => Contato_model.php
        $fileModel = $folder . $class . '_model.php';
        if (file_exists($fileModel)) {
            require_once $fileModel;
            return;
        }

        // Tenta com sufixo "_core": Ex: Database => Database_core.php
        $fileCore = $folder . $class . '_core.php';
        if (file_exists($fileCore)) {
            require_once $fileCore;
            return;
        }
    }

    // Opcional: lança um erro amigável se a classe não foi encontrada
    // throw new Exception("Classe $class não encontrada.");
});

// Carrega automaticamente arquivos essenciais se existirem
$essentialFiles = [
    BASE_PATH . '/src/core/Database.php',
    BASE_PATH . '/src/core/Verify.php',
];

foreach ($essentialFiles as $file) {
    if (file_exists($file)) {
        require_once $file;
    }
}

// Adiciona o path completo para poder usar require sem ../
set_include_path(get_include_path() . PATH_SEPARATOR . BASE_PATH . '/src');