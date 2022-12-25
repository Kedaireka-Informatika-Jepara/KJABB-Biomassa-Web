<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Ubah Password</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>tema/css/lupa_password.css">
    <link rel="icon" type="image/png" href="tema/img/fish.png" sizes="32x32"/>
</head>

<body id="bg-forget">
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
    <div class="forget">
        <div class="box-forget">
            <span class="forget-form-title">
                Ubah Password
            </span>
            <hr color="#efefef"/>
            <form action="<?php echo base_url('lupapass/registration'); ?>" autocomplete="off" method="POST">
                <input type="text" name="user" id="user" placeholder="Masukkan Username">

                <button type="submit" name="submit" class="">Konfirmasi</button>
                <p><?= $this->session->flashdata('message'); ?></p>

                <input type="password" name="newpass1" id="newpass1" placeholder="Masukkan Password Baru">

                <input type="password" name="newpass2" id="newpass2" placeholder="Masukkan Kembali Password"><br />

                <button type="submit" name="submit" class="">Ubah</button><br>
                <a href="<?php echo base_url(); ?>signup">Sign Up?</a>
            </form>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>

</html>