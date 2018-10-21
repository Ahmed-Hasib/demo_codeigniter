<!DOCTYPE html>
<html>
<head>
    <title>User Details Page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Edit Form</h2>
    <form method="post" action="<?php echo base_url() ?>User_details/update_data">
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="usr" name="name">
            <span class="text-danger"><?php echo form_error('name')?></span>
        </div>
        <div class="form-group">
            <label for="pwd">Hobby:</label>
            <input type="text" class="form-control" id="pwd" name="hobby">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" id="pwd" name="submit" value="Edit Person">
            <span class="text-danger"><?php echo form_error('hobby')?></span>
        </div>
    </form>


</body>
</html>


