<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Adicionar Clientes</h1>
    </div>
  </div>

<?php if (isset($sucesso) && $sucesso === true): ?>
  <div class="alert alert-success" role="alert">
    Cliente Adicionado com sucesso!
  </div>
<?php endif; ?> 

  <form action=<?= base_url("clientes/store") ?> method="POST">
    <div class="form-group">
      <?= csrf_field() ?>
      
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome">

      <label for="telefone">Telefone/WhatsApp</label>
      <input type="text" class="form-control" id="telefone" name="telefone" aria-describedby="telefone">

      <label for="instagram">Instagram</label>
      <input type="url" class="form-control" id="instagram" name="instagram" aria-describedby="instagram">

      <label for="facebook">Facebook</label>
      <input type="url" class="form-control" id="facebook" name="facebook" aria-describedby="facebook">

      <label for="profissao">Profissão</label>
      <input type="text" class="form-control" id="profissao" name="profissao" aria-describedby="profissao">

      <button class="btn btn-dark mt-2">Adicionar</button>
    </div>
  </form>
</div>
