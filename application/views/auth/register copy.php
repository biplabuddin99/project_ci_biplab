<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Register form</h2>
  <?= form_open('') ?>
    <div class="mb-3 mt-3">
      <label for="role">Role:</label>
        <select class="form-control" id="role" name="role">
            <option value="">select role</option>
            <?php
                if($role){
                    foreach($role as $r){
            ?>  
                <option <?= set_value('role')==$r->id?"selected":"" ?> value="<?= $r->id ?>"> <?= $r->role_name ?> </option>
            <?php }} ?>
        </select>
        <b class="text-danger"><?= form_error('role'); ?></b>
    </div>
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" value="<?= set_value('name') ?>" class="form-control" id="name" placeholder="Enter name" name="name">
      <b class="text-danger"><?= form_error('name'); ?></b>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" value="<?= set_value('email') ?>" class="form-control" id="email" placeholder="Enter email" name="email">
      <b class="text-danger"><?= form_error('email'); ?></b>
    </div>
    <div class="mb-3 mt-3">
      <label for="contact">Contact No:</label>
      <input type="text" value="<?= set_value('contact') ?>" class="form-control" id="contact" placeholder="Enter contact" name="contact">
      <b class="text-danger"><?= form_error('contact'); ?></b>
    </div>
    <div class="mb-3 mt-3">
      <label for="uname">User Name:</label>
      <input type="text" value="<?= set_value('uname') ?>" class="form-control" id="uname" placeholder="Enter User name" name="uname">
      <b class="text-danger"><?= form_error('uname'); ?></b>
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      <b class="text-danger"><?= form_error('pwd'); ?></b>
    </div>
    <div class="mb-3">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter confirm password" name="cpswd">
      <b class="text-danger"><?= form_error('cpwd'); ?></b>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
