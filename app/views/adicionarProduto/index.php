<html>

    <head>
        <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/public/css/meu-css.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Adicionar Produtos</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/app/views/listaProdutos">Lista dos Produtos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/app/views/adicionarProduto">Adicionar Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/app/views/adicionarCategoria">Adicionar Categoria</a>
                    </li>
                </ul>
            </div>
        </nav>

        <form>
            <div class="alinhar-centro">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label>Descrição:</label>
                    <textarea class="form-control" id="descricao"></textarea>
                </div>

                <div class="form-group">
                    <label>Categorias:</label>
                    <select class="form-control">
                        <option>Categoria 1</option>
                        <option>Categoria 2</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Valor do Custo:</label>
                    <input type="number" id="valor_custo" class="form-control" placeholder="0,00">
                </div>

                <div class="form-group">
                    <label>Valor de Venda:</label><br/>
                    <input type="number" id="valor_venda" class="form-control" placeholder="0,00">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" value="Adicionar">
                </div>
            </div>
        </form>

        <script src="/public/js/jquery-3.3.1.js"></script>
    </body>

</html>