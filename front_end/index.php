<?php
$url = 'http://localhost/backendm/uploads/img/';
$url_categorias = 'http://localhost/backendm/api/get_categorias';
$categorias = json_decode(file_get_contents($url_categorias));
$url_produtos = 'http://localhost/backendm/api/get_produtos';
$produtos = json_decode(file_get_contents($url_produtos));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Carlos">
    <meta name="keywords" content="Doces, atendimento">
  <title>IL Doces</title>
  <link rel="shortcut icon" href="assets/img/logo.jpeg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="assets/estilo/estilo.css" />
</head>

<body>
  <header class="bg-rosadark sticky-top">
    <div class="container">
      <div class="logo">
        <img src="assets/img/logo.jpeg" alt="Logo"/>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <aside class="col-md-2 sidebar">
        <h2 class="display-6 text-center m-3">Categorias</h2>
        <div class="categorias cate">
          <?php foreach ($categorias as $categoria): ?>
            <div class="card card-cate bg-rosadark" style="width: 13rem">
              <a href="<?php echo '#' . $categoria->cate_id ?>"><img
                  src="<?php echo $url . 'categorias/' . $categoria->cate_id . '/' . $categoria->cate_imagem ?>"
                  class="card-img-top w-50" alt="<?php echo $url . $categoria->cate_id . '/' . $categoria->cate_descricao?>" />
                <div class="card-body">
                  <h5 class="card-text text-center c-white"><?php echo $categoria->cate_descricao ?></h5>
                </div>
              </a>
            </div>
          <?php endforeach ?>
        </div>
      </aside>
      <div class="col-lg-10">
        <h3 class="display-5 m-4 text-center titulo-produto">Produtos</h3>
        <hr />
        <?php foreach ($categorias as $categoria): ?>
          <div class="aviso text-center m-4 bg-rosam bg-gradient c-white border">
            <p id="<?php echo $categoria->cate_id ?>" class="fs-3 pt-3 fw-bold"><?php echo $categoria->cate_descricao ?></p>
          </div>
          <div class="row justify-content-center">
            <?php foreach ($produtos as $produto): ?>
              <?php if ($produto->prod_categoria == $categoria->cate_id): ?>
                <div class="card m-5 col-4" style="width: 15rem">
                  <img src="<?php echo $url . 'produtos/' . $produto->prod_id . '/' . $produto->prod_imagem; ?>" class="card-img-top card-t" style="height: 15rem"
                    alt="<?php echo $url . 'produtos/' . $produto->prod_id . '/' . $produto->prod_descricao; ?>" />
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $produto->prod_descricao ?></h5>

                    <p class="card-text"><span>Preço:</span> R$<?php echo $produto->prod_preco ?></p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger btnc focus-ring focus-ring-danger red-a" data-bs-toggle="modal"
                      data-bs-target="#exampleModal">
                      <i class="bi bi-cart2"></i>
                    </button>
                  </div>
                </div>
              <?php endif ?>
            <?php endforeach ?>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-rosaclaro">
          <h1 class="modal-title fs-5 fw-bold c-white display-1" id="exampleModalLabel">Selecionar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputNumber" class="form-label c-bege">Quantidade</label>
              <input type="number" class="form-control" id="exampleInputNumber">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-outline-success">Salvar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>