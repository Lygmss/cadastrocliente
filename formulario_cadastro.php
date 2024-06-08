<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
    <h1>Cadastro de Filmes</h1>
    <form action="/submit_movie" method="post">
        <label for="titulo">Título do Filme:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="diretor">Diretor:</label>
        <input type="text" id="diretor" name="diretor" required>

        <label for="elenco">Elenco:</label>
        <input type="text" id="elenco" name="elenco" required>

        <label for="categoria">Categoria:</label>
        <select id="categoria" name="categoria" required>
            <option value="">Selecione</option>
            <option value="Ação">Ação</option>
            <option value="Comédia">Comédia</option>
            <option value="Drama">Drama</option>
            <option value="Terror">Terror</option>
            <option value="Ficção Científica">Ficção Científica</option>
            <option value="Romance">Romance</option>
            <!-- Adicione outras categorias conforme necessário -->
        </select>

        <label for="sinopse">Sinopse:</label>
        <textarea id="sinopse" name="sinopse" rows="5" required></textarea>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" min="1888" required>

        <button type="submit">Cadastrar Filme</button>
    </form>
</div>
    
</body>
</html>