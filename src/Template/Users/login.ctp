<div class="panel panel-primary">
  <div class="panel-heading">Panel Heading</div>
  <div class="panel-body">

    <?php echo $this->Form->create(); ?>
        <div class="form-group">

          <?php echo $this->Form->input("username",
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
            "class"=>"btn btn-success",
            "controller"=>"Users",
            "action"=>"login"
          ]
          ) ?>
      <?php echo $this->Form->end();  ?>
  </div>
</div>
