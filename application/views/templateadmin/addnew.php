<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="box box-info">
      <div class="box-body">
          <div><?php
                    echo form_open('crud/insert','class="form-horizontal"');
                    echo validation_errors();?> 
          <div class="form-group">
            <label class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
                <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
                <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Status</label>
            <div class="col-sm-10">
                <input type="radio" name="role" value="1" <?php echo set_radio('gender', '1'); ?>/>Admin
                <input type="radio" name="role" value="2" <?php echo set_radio('gender', '2'); ?>/>User Only
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Tambah Data</button>
            </div>
          </div>
      <?php form_close(); ?> <!-- menutup form -->
      </div>
    </div>
  </div>
</div>
</div>
<?php $this->load->view('templateadmin/footer'); ?>
