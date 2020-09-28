<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Lista Clientes</h1>
    </div>
  </div>

<a href=<?= base_url("clientes/add") ?> class="btn btn-dark mb-4">Adicionar Cliente</a>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Instagram</th>
                <th>Facebook</th>
                <th>Profissão</th>
                <th>Data de Cadastro</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($clientes as $cliente) : ?>
            <tr>
                <td><?= $cliente['nome']?></td>
                <td><?= $cliente['num_whats']?></td>
                <td><?= $cliente['perfil_instagram']?></td>
                <td><?= $cliente['perfil_face']?></td>
                <td><?= $cliente['profissao']?></td>
                <td><?= $cliente['data_cadastro']?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Instagram</th>
                <th>Facebook</th>
                <th>Profissão</th>
                <th>Data de Cadastro</th>
            </tr>
        </tfoot>
    </table>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>