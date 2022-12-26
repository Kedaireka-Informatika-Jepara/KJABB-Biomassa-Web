<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>tema/css/signup.css">
    <link rel="icon" type="image/png" href="tema/img/fish.png" sizes="32x32"/>
</head>

<body id="bg-signup">
    <header>
        <div class="container justify-content-center" style="margin-left: 44%;">
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
    <div class="signup">
        <div class="box-signup">
            <span class="form-logo">
                <img src="tema\img\kedaireka.png" style="height: 200px; width: 200px;">
		    </span>
            <hr color="#efefef"/>
            <span class="signup-form-title">
                Halaman Sign Up
            </span>

            <form action="<?= base_url('signup/registration') ?>" autocomplete="on" method="POST">
                <p>Masukkan Email</p>
                <input type="email" name="email" id="email" placeholder="Email"  value="<?= set_value('email') ?>">
                <small><?= form_error('email') ?></small>

                <p>Masukkan Username</p>
                <input type="text" name="user" id="user" placeholder="Username" value="<?= set_value('user') ?>">
                <small><?= form_error('user') ?></small>

                <p>Masukan Password</p>
                <input type="password" name="pass1" id="pass1" placeholder="Password">
                <small><?= form_error('pass1') ?></small>

                <p>Masukan Kembali Password</p>
                <input type="password" name="pass2" id="pass2" placeholder="Konfirmasi Password">
                <small><?= form_error('pass2') ?></small><br />

                <button type="submit" name="submit" class="">Sign Up</button><br>
                <a href="<?php echo base_url(); ?>login" style="color: #5b5b5b;">Sudah Memiliki Akun?</a>
            </form>
        </div>
        
        
    </div>
</body>

</html>