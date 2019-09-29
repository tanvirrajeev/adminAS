<div class="panel panel-primary">
  <div class="panel-heading">Home
    <?php echo $this->Html->link(
      "Logout",
      "/users/logout",
      [
        "class"=>"btn btn-warning pull-right",
        "style"=>"margin-top:-8px;"
      ]
    ); ?>
  </div>
  <div class="panel-body">

    <?php echo $this->Html->link(
      "+ Create User",
      "/users/create",
      [
        "class"=>"btn btn-success",
        "style"=>"margin-top:6px;"
      ]
    ); ?>
    <br/>
    <?= $this->Html->link(
      "User List",
      "/users/index",
      [
        "class" => "btn btn-success",
        "style" => "margin-top:6px"
      ]
    ); ?>
    <br/>
    <?= $this->Html->link(
      "Archive List",
      "/archives/index",
      [
        "class" => "btn btn-success",
        "style" => "margin-top:6px"
      ]
    ); ?>
    <br/>
    <?= $this->Html->link(
      "Archive an Item",
      "/archives/create",
      [
        "class" => "btn btn-success",
        "style" => "margin-top:6px"
      ]
    ); ?>





  </div>
</div>
