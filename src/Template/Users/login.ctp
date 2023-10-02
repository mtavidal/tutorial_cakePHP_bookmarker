<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<a href="/users/add"> Não sou cadastrado </a>
<?= $this->Form->end() ?>
