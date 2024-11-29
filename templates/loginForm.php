<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./static/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
<form action="../controller/login.php" method="POST" class="bg-white p-4 rounded shadow w-100" style="max-width: 480px;">
        <h1 class="text-center mb-4">Faça seu login</h1>
            
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" class="form-control" placeholder="Digite seu email" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" id="senha" class="form-control" placeholder="Digite sua senha" required>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <input type="checkbox" id="connect" class="form-check-input">
                <label for="connect" class="form-check-label">Mantenha-me conectado</label>
            </div>
        </div>

        <button class="btn w-100 mb-3" type="submit">Entrar</button>
            
        <div class="text-center">
            <span>Ainda não tem uma conta? <a href="?pagina=cadastro" class="signIn-link">Cadastre-se</a></span>
        </div>
    </form>
</div>