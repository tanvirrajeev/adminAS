<div class="panel panel-primary">
  <div class="panel-heading">Archive an item
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
    <input type="hidden" value="<?php echo $archive->id ?>" name="archiveID"/>
    <div class="form-group">
      <label for="file">File Name:</label>
      <?php echo $this->Form->text("file",
        [
          "class"=>"form-control",
          "value"=>"$archive->rack"
        ]
        ); ?>
    </div>
    <div class="form-group">
      <label for="rack">Rack:</label>
      <?php echo $this->Form->text("rack",
        [
          "class"=>"form-control",
          "value"=>"$archive->rack"
        ]
        ); ?>
    </div>
    <div class="form-group">
      <label for="location">Location:</label>
      <?php echo $this->Form->text("location",
        [
          "class"=>"form-control",
            "value"=>"$archive->location"
        ]
        ) ?>
    </div>
      <div class="form-group">
        <label for="item">Item:</label>
        <?php echo $this->Form->text("item",
          [
            "class"=>"form-control",
              "value"=>"$archive->item"
          ]
          ); ?>
      </div>
      <div class="form-group">
        <label for="itemdesp">Item Desp.:</label>
        <?php echo $this->Form->text("itemdesp",
          [
            "class"=>"form-control",
              "value"=>"$archive->itemdesp"
          ]
          ) ?>
      </div>
      <div class="form-group">
        <label for="department">Department:</label>
        <?php echo $this->Form->text("department",
          [
            "class"=>"form-control",
              "value"=>"$archive->department"
          ]
          ) ?>
      </div>
      <div class="form-group">
        <label for="division">Division:</label>
        <?php echo $this->Form->text("division",
          [
            "class"=>"form-control",
              "value"=>"$archive->division"
          ]
          ) ?>
      </div>
      <div class="form-group">
        <label for="responsible">Responsible:</label>
        <?php echo $this->Form->text("responsible",
          [
            "class"=>"form-control",
              "value"=>"$archive->responsible"
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
