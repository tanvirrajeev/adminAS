<div class="row">
  <div class="panel panel-primary">
    <div class="panel-heading">Archive List

      <?= $this->Html->link(
        "<<Back",
        "/users/home",
        [
          "class" => "btn btn-info pull-right",
          "style" => "margin-top:-6px"
        ]
      ); ?>
      <?php
        echo $this->Html->link(
          "Search",
          "/archives/index/",
          [
            "class"=>"btn btn-info pull-right",
            "style"=>"margin-right:35px;"
          ]
        );

        echo $this->Form->create("",["type"=>"get"]);
        echo $this->Form->control("keyword", ["class"=>"pull-right"]);



        echo $this->Form->end();
      ?>

    </div>
    <div class="panel-body">

      <table class="table">
        <thead>
          <tr>
            <th>File Name</th>
            <th>Rack</th>
            <th>Location</th>
            <th>Item</th>
            <th>Item Desp</th>
            <th>Department</th>
            <th>Division</th>
            <th>Responsible</th>
          </tr>
        </thead>
        <?php foreach ($archive as $value): ?>
          <tbody>
          <tr>
            <td><?php echo $value->file."<br/>"; ?></td>
            <td><?php echo $value->rack."<br/>"; ?></td>
            <td><?php echo $value->location."<br/>"; ?></td>
            <td><?php echo $value->item."<br/>"; ?></td>
            <td><?php echo $value->itemdesp."<br/>"; ?></td>
            <td><?php echo $value->department."<br/>"; ?></td>
            <td><?php echo $value->division."<br/>"; ?></td>
            <td><?php echo $value->responsible."<br/>"; ?></td>
            <td>
              <?php
              echo $this->Html->link(
                "View",
                "/archives/view/".$value->id,
                [
                  "class"=>"btn btn-info"
                ]
              );
                echo $this->Html->link(
                  "Edit",
                  "/archives/edit/".$value->id,
                  [
                    "class"=>"btn btn-info",
                    "style"=>"margin-left:5px;"
                  ]
                );
                echo $this->Html->link(
                  "Delete",
                  "/archives/delete/".$value->id,
                  [
                    "class"=>"btn btn-danger",
                    "style"=>"margin-left:5px;"
                  ]
                );
               ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
