<?php include __DIR__.'/../header.php'; ?> 

  <form action="/realiza-login" method="POST">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="password" name="senha" id="senha" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>

<?php include __DIR__.'/../footer.php'; ?>