  <?php require_once 'v_headeradmin.php' ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Edit Rute</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Rute</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <center>
  </center>
  <form action="<?php echo base_url(). 'Crud/update_rute'; ?>" method="post">
    <?php
    $no = 1;
    foreach($rute as $r){ 
      ?>
    <div class="container">
    <div class="form-group col-sm-11">
      <label for="from">From</label>
      <input type="hidden" name="id" value="<?php echo $r->ruteid ?>">
      <input type="text" class="form-control" name="from" placeholder="Departure City" value="<?php echo $r->rute_from ?>">
    </div>
    <div class="form-group  col-sm-11">
      <label for="to">To</label>
      <input type="text" class="form-control" name="to" placeholder="Destination City" value="<?php echo $r->rute_to ?>">
    </div>
    <div class="form-group  col-sm-11">
      <label for="depart">Departure Date</label>
      <input id="datepicker" name="depart" type="datetime-local" value="<?php echo $r->depart_on ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
                  required="" class="form-control">
    </div>
    <div class="form-group  col-sm-11">
      <label for="arrive">Arrived</label>
      <input id="datepicker" name="arrive" type="datetime-local" value="<?php echo $r->arrive_at ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
                  required="" class="form-control">
    </div>
    <div class="form-group  col-sm-11">
      <label for="trans_id">Transportation Id</label>
      <input type="text" class="form-control" name="trans_id" placeholder="Transportation Id" value="<?php echo $r->transportation_id ?>">
    </div>
    <div class="form-group  col-sm-11">
      <label for="price">Price</label>
      <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $r->price ?>">
    </div>
    <div class="box=footer col-sm-11">    
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
   </div>
    <?php } ?>
  </form>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php require_once 'v_footeradmin.php' ?>
