<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('Assets/css/bootstrap.css');?>">
</head>
<body>
<h1>User List</h1>
<a href="<?php echo site_url('login'); ?>">Add New User</a>
<table class="table table-bordered w-50 m-auto">
    <tr>
        <th>ID</th><th>Name</th><th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->city; ?></td>
        
        <td>
            <a href="<?= base_url('EditUser/edit/' . $user->uid); ?>" class="btn btn-warning">Edit</a> |
            <a href="<?php echo site_url('EditUser/delete/' . $user->uid); ?>" class="btn btn-danger" 
                   onclick="return confirm('Are you sure you want to delete this user?');">
                   Delete
                </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="<?php echo site_url('login/logout'); ?>">Logout</a>

</body>
</html>