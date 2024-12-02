
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./static/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form id="signupForm" action="./controller/cadastro.php" method="post" class="bg-white p-4 rounded shadow w-100" style="max-width: 480px;">
            <h1 class="text-center mb-3">Faça seu cadastro</h1>
            
            <div class="mb-1">
                <label for="nome" class="form-label">Nome completo</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
            </div>

            <div>
            <label for="statusUser" class="form-label">Tipo de conta</label>
            <select name="statusUser" class="form-control" required>
                <option>Leitor</option>
                <option>editor</option>
            </select>
            </div>

            <div class="mb-1">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
            </div>

            <div class="mb-1">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Crie uma senha" required>
            </div>

            <div class="mb-1">
                <label for="confirmPassword" class="form-label">Confirme sua Senha</label>
                <input type="password" id="confirmPassword" class="form-control" placeholder="Confirme sua senha" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            
            <div class="text-center">
                <span>Já tem uma conta? <a href="?pagina=login" class="signIn-link">Entre agora</a></span>
            </div>
        </form>
    </div>



