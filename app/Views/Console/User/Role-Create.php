<section class="content-header">
   <h1>
      <?= $title ?>
      <small><?= $preview ?></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="<?= ADMIN_DIR ?>"><i class="fa fa-dashboard"></i> Trang chủ </a></li>
      <li class="active"><?= $title ?></li>
   </ol>
</section>
<section class="content">
   <div class="col-lg-7">
      <!-- general form elements -->
      <div class="box box-primary">
         <div class="box-header with-border">
            <h3 class="box-title"><?= $title ?></h3>
         </div>
         <!-- /.box-header -->
         <!-- form start -->
         <form id="adminForm" style="padding:10px;">
            <div class="form-group">
               <label for="name">Name</label>
               <input type="text" class="form-control" name="name" placeholder="Name" >
            </div>
            <div class="form-group">
               <label for="description">Description</label>
               <input type="text" class="form-control" name="description" placeholder="Description" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
      <!-- /.box -->
   </div>
</section>
<?php
Assets::js([
  //Url::consolePath().'js/pages/table-admin.js'
]);
?>