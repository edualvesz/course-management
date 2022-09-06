<?php include __DIR__.'/../header.php'; ?> 

    <form action="/salvar-curso<?= isset($curso) ? '?id=' . $curso->getId() : ''; ?>" class="form-group" method="POST">
        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" name="descricao" class="form-control" value="<?= isset($curso) ? $curso->getDescricao() : ''; ?>"><br>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php include __DIR__.'/../footer.php'; ?>