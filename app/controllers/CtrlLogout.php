<?php
// Inicie a sessão se ainda não estiver iniciada
session_start();

// Encerre a sessão
session_destroy();

// Retorne uma resposta JSON indicando sucesso
echo json_encode(['logout' => 'true']);
?>