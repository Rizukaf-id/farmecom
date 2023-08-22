<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <?php if(validation_errors()) : ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
    <?php endif; ?>
    <?php echo form_open_multipart('users/register'); ?>
      <h3 class="text-center"><?= $title ?></h3>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="password2">Confirm Password</label>
        <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
      </div>
      <div class="form-group">
        <label for="notelp">Nomor Telepon</label>
        <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Nomor Telepon">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
    <?php echo form_close() ?>
  </div>
</div>