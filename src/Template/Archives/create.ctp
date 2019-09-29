<div class="panel panel-primary">
  <div class="panel-heading">Archive an Item
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
        "url" => ["action"=>"save"]
      ]
    ); ?>
    <div class="form-group">
      <label for="file">File Name:</label>
      <?php echo $this->Form->text("file",
        [
          "class"=>"form-control"
        ]
        ); ?>
    </div>
    <div class="form-group">
      <label for="rack">Rack:</label>
      <?php echo $this->Form->text("rack",
        [
          "class"=>"form-control"
        ]
        ); ?>
    </div>
    <div class="form-group">
      <label for="location">Location:</label>
      <?php echo $this->Form->text("location",
        [
          "class"=>"form-control"
        ]
        ) ?>
    </div>
      <div class="form-group">
        <label for="item">Item:</label>
        <?php echo $this->Form->text("item",
          [
            "class"=>"form-control"
          ]
          ); ?>
      </div>
      <div class="form-group">
        <label for="itemdesp">Item Desp.:</label>
        <?php echo $this->Form->text("itemdesp",
          [
            "class"=>"form-control"
          ]
          ) ?>
      </div>
      <div class="form-group">
        <label for="department">Department:</label>
        <?php echo $this->Form->text("department",
          [
            "class"=>"form-control"
          ]
          ) ?>
      </div>
      <div class="form-group">
        <label for="division">Division:</label>
        <?php echo $this->Form->text("division",
          [
            "class"=>"form-control"
          ]
          ) ?>
      </div>
      <div class="form-group">
        <label for="responsible">Responsible:</label>
        <?php echo $this->Form->text("responsible",
          [
            "class"=>"form-control"
          ]
          ) ?>
      </div>
      <?php echo $this->Form->button("Assign",
        [
          "class"=>"btn btn-success"
        ]
        ) ?>
    <?= $this->Form->end(); ?>
  </div>
</div>
