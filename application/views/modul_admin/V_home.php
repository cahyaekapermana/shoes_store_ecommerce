<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome <?php echo $this->session->userdata('s_username');?></h1>
    <h1>Anda Sebagai <?php echo $this->session->userdata('s_level');?> </h1>

</body>
</html>