<div class="row">
  <div class="panel panel-primary">
    <div class="panel-heading">User List
      <?php echo $this->Html->link(
        "+ Create User",
        "/users/create",
        [
          "class"=>"btn btn-success pull-right",
          "style"=>"margin-top:-8px;"
        ]
      ); ?>
    </div>
    <div class="panel-body">

      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Create Date</th>
            <th>Modified Date</th>
          </tr>
        </thead>
        <?php foreach ($user as $value): ?>
          <tbody>
          <tr>
            <td><?php echo $value->name."<br/>"; ?></td>
            <td><?php echo $value->email."<br/>"; ?></td>
            <td><?php echo $value->username."<br/>"; ?></td>
            <td><?php echo $value->password."<br/>"; ?></td>
            <td><?php echo $value->created."<br/>"; ?></td>
            <td><?php echo $value->modified."<br/>"; ?></td>
            <td>
              <?php
                echo $this->Html->link(
                  "Edit",
                  "/users/edit/".$value->id,
                  [
                    "class"=>"btn btn-warning"
                  ]
                );
                echo $this->Html->link(
                  "Delete",
                  "/users/delete/".$value->id,
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
