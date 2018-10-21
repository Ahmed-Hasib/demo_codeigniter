<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $title; ?></title>
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url()?><!--/assets/css/bootstrap.min.css">-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php $this->load->view('templates/header.php');?>
<p><?php  if(isset($status)) echo $status;?></p>
<p><?php echo $notification; ?></p>
<div class="container">
    <h2>Person registration</h2>
    <form method="post" action="<?php echo base_url() ?>index.php/User_details/form_validation">
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
            <input type="submit" class="form-control" id="pwd" name="submit" value="Add Employee">
            <span class="text-danger"><?php echo form_error('hobby')?></span>
        </div>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Hobby</th>
            <th>Delete</th>
            <th>Update</th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($user_data as $value)
        {  echo '<tr>' ;?>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['hobby'];?></td>
            <td><a href="<?php echo base_url();?>User_details/delete_data?id=<?php echo $value['id'];?>">Delete</a></td>
            <td><a href="<?php echo base_url();?>User_details/update_data?id=<?php echo $value['id'];?>">Edit</a></td>
        <?php echo '</tr>' ;} ?>


        </tbody>
    </table>

<?php $this->load->view('templates/footer.php');?>
</body>
</html>

