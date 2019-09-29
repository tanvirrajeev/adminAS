<div class="panel panel-primary">
  <div class="panel-heading">Create User
    <?= $this->Html->link(
      "<<Back",
      "/users/home",
      [
        "class" => "btn btn-info pull-right",
        "style" => "margin-top:-6px"
      ]
    ); ?>
  </div>
  <div class="panel-body">

    <?php echo $this->Form->create(
      null,
      [
        "url" => ["action"=>"update"]
      ]
    ); ?>
    <input type="hidden" value="<?php echo $user->id ?>" name="userID"/>
    <div class="form-group">
      <label for="name">Name:</label>
      <?php echo $this->Form->text("name",
        [
          "class"=>"form-control",
          "value"=>"$user->name"
        ]
        ); ?>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <?php echo $this->Form->text("email",
        [
          "class"=>"form-control",
            "value"=>"$user->email"
        ]
        ) ?>
    </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <?php echo $this->Form->text("username",
          [
            "class"=>"form-control",
              "value"=>"$user->username"
          ]
          ); ?>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <?php echo $this->Form->password("password",
          [
            "class"=>"form-control",
              "value"=>"$user->password"
          ]
          ) ?>
      </div>
      <?php echo $this->Form->button("Update",
        [
          "class"=>"btn btn-success"
        ]
        ) ?>
    <?= $this->Form->end(); ?>
  </div>
</div>
