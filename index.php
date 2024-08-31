<?php
include('config/app.php');
include('html/header.php');
include('fct/item.php');

if (!file_exists(FILE_NAME)) {
  file_put_contents(FILE_NAME,serialize([]));
}  

?>

        <div class="row">
          <div class="col-12">
          <div class="card">
          
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Formulaire d'ajout -->
                <form action="addItem.php" method="post">
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="intitule">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-info btn-flat">+</button>
                    </span>
                  </div>
                </form>

                <!-- liste -->
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                  <?php
                  $items = getItems();
                  foreach($items as $key => $item){
                    echo displayItem($key,$item);
                  }
                  ?>
                </ul>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->

<?php
include('html/footer.php');
