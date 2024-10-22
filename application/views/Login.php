<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('Assets/custom_css/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('Assets/css/bootstrap.css');?>">
</head>
<body onload="loadCursor()">

   <div class="container">
    <div class="row mt-4">
        <div class="col-md-4"></div>
        <div class="col-md-4 bg-secondary">
        <h1 class="text-light">User Data</h1>
        <form action="insert_data" method="post">
            <div class="form-group">
                <label class="text-light">Name</label>
                <input type="text" id="name" name="name" autocomplete="off" class="form-control">
            </div>

            <div class="form-group">
                <label class="text-light">City</label>
                <input type="text" name="city" autocomplete="off" class="form-control">
            </div>
            <div class="d-flex p-4">
            <input type="submit" class="btn btn-primary m-auto" value="Submit"></input>
            </div>
            
        </form>

        </div>
        <div class="col-md-4"></div>
    </div>
   </div>

   <script type="text/javascript" src="<?= base_url('Assets/custom_js/myscript.js'); ?>"></script>
</body>
</html>