<div class="panel panel-primary">
  <div class="panel-heading">Login</div>
  <div class="panel-body">

    <?php echo $this->Form->create(
        null,
        [
          "url" => ["action"=>"login"]
        ]
      ); ?>
      <div class="form-group">
        <label for="username">Username:</label>
        <?php echo $this->Form->username("username",
          [
            "class"=>"form-control"
          ]
          ); ?>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <?php echo $this->Form->password("password",
          [
            "class"=>"form-control"
          ]
          ); ?>
      </div>
      <?php echo $this->Form->button("Login",
        [
          "class"=>"btn btn-success"
        ]
        ) ?>
    <?= $this->Form->end(); ?>

  </div>
</div>
