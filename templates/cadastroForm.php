
    <h1>Acesse sua conta</h1>
    <form action="./controller/cadastro.php" method="POST">
        <p>
            <label>Nome</label>
            <input type="text" name="nome" required>
        </p>        
        <p>
            <label>E-mail</label>
            <input type="text" name="email" required>
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" required>
        </p>
        <p>
            <select name="statusUser" required>
                <option>Leitor</option>
                <option>editor</option>
            </select>
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>


