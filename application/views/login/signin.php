<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>tema/css/signin.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>tema/css/responsive.css"> -->
   
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/png" href="tema/img/fish.png" sizes="32x32"/>
    <title>Login Sistem Biomassa</title>
</head>

<body id="bg-login">
    <header>
        <div class="container">
            <div class="header">
                <nav class="navbar">
                    <div class="container-fluid justify-content-center ">
                        <img src="tema\img\undip.png" style="height: 50px; width: 50px; margin: 15px 5px">
                        <img src="tema\img\kemendikbud.png" style="height: 50px; width: 50px; margin: 15px 5px">
                        <img src="tema\img\mbkm.png" style="height: 50px; width: 50px; margin: 15px 5px">
                        <img src="tema\img\kedaireka.png" style="height: 50px; width: 50px; margin: 15px 5px">
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login">
                    <div class="box">
                        <span class="form-logo">
                            <img src="tema\img\kedaireka.png" style="height: 200px; width: 200px;">
					    </span>
                        <hr color="#efefef"/>
                        <span class="login100-form-title">
                            Halaman Login
                        </span>
                        <p><?= $this->session->flashdata('message'); ?></p>
                        <form action="<?php echo base_url();?>user" autocomplete="off">
                            <input type="text" name="user" id="user" placeholder="Username" value="<?= set_value('user') ?>">
                            <small><?= form_error('user') ?></small>

                            <input type="password" name="pass" placeholder="Password">
                            <small><?= form_error('pass') ?></small><br />

                            <br />
                            <button type="submit" name="submit" class="">Login</button>
                        </form>
                        <a href="<?php echo base_url();?>lupapass" style="color: #5b5b5b;">Lupa Password</a>
                        <a href="<?php echo base_url();?>signup" style="color: #5b5b5b;">Sign Up</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>



</html>

