<?php
// app/layout/head.php
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Organize suas finanças e compromissos direto no WhatsApp com o MeuEstagiário. Simples, rápido e sem planilhas.">
    <meta property="og:title" content="MeuEstagiário – Seu assistente financeiro no WhatsApp">
    <meta property="og:description" content="Registre gastos, receitas e compromissos apenas conversando.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <title><?= isset($brand['name']) ? htmlspecialchars($brand['name']) : 'Landing' ?></title>
    <link rel="icon" type="image/png" href="../public/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="../public/assets/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>