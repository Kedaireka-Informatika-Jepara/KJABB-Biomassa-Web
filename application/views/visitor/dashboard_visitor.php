<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <style>
        .sticky.is-active {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%
        }
    </style>

    <link rel="stylesheet" href=" <?php echo base_url(); ?>tema/css/header_visitor.css">
    <link rel="icon" type="image/png" href="tema/img/fish.png" sizes="32x32"/>
    <title>Dashboard</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="row"></div>
            <div class="row">
                <div class="col-xxl-12 py-5" style="background-image: url(<?php echo base_url() ?>tema/img/karimun.jpg); background-size: cover;">
                    <div class="bg-wlc">
                        <div class="wlc">
                            <h1>Selamat Datang di Sistem Monitoring Biomassa Ikan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>

    <main class="container text-blue">
        <div class="row">
            <div class="col-md-4 py-5">
                <img class="w-100" src="<?php echo base_url(); ?>tema/img/panen.jpg" alt="panen ikan">
            </div>
            <div class="col-md-8 py-5">
                <h1 class="crop"><a href="<?php echo base_url(); ?>panen">Hasil Panen Ikan</a></h1>
                <p>Proses pembudidayaan ikan di Teluk Awur, Jepara menghasilkan jumlah total panen ikan yang dicatat dalam
                    Sistem Monitoring Biomassa Ikan. Pencatatan tersebut meliputi jenis biota, tanggal panen, panjang ikan, bobot ikan,
                    tingkat kematian, dan nama keramba.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-5">
                <img class="w-100" src="<?php echo base_url(); ?>tema/img/jenis_ikan.jpg" alt="keramba">
            </div>
            <div class="col-md-8 py-5">
                <h1 class="fish"><a href="<?php echo base_url(); ?>keramba">Jenis Ikan yang Dibudidayakan
                        pada KJABB</a></h1>
                <p>Keramba KJABB yang dipasang pada Teluk Awur, Jepara berjumlah 3 buah dan masing-masing keramba memiliki
                    diameter 16 meter. Dalam keramba tersebut, dibudidayakan jenis-jenis ikan dan di antaranya ialah ikan kerapu
                    dan ikan bandeng.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-5">
                <img class="w-100" src="<?php echo base_url(); ?>tema/img/Pakan.jpg" alt="pakan ikan">
            </div>
            <div class="col-md-8 py-5">
                <h1 class="feed"><a href="<?php echo base_url(); ?>pakan">Informasi Pakan Ikan</a></h1>
                <p>Pakan yang digunakan di budidaya Kermba Jaring Apung Bulat Bertingkat (KJABB) ini merupakan pakan jenis runcah dan pelet. 
                    Pakan pelet merupakan pakan kualitas baik begitu juga dengan pakan runcah yang diambil dari potongan-potongan ikan segar. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-5">
                <img class="w-100" src="<?php echo base_url(); ?>tema/img/budidaya.jpg" alt="budidaya">
            </div>
            <div class="col-md-8 py-5">
                <h1 class="measure"><a href="<?php echo base_url(); ?>pengukuran_ikan">Proses Sampling Pengukuran Ikan</a></h1>
                <p>Ikan yang telah dibudidayakan dalam KJABB nantinya akan diambil sejumlah sampelnya untuk mengukur tingkat kehidupan
                    serta tingkat kematian dari suatu keramba. Sehingga, bisa didapat <i>survival rate</i> dari proses budidaya ikan pada KJABB.
                </p>
            </div>
        </div>
    </main>

    <footer class="container text-white">
        <div class="row">
            <div class="col-12 py-4 " style="background-color: #3C8D9E;">
                <p>Alamat <br>
                    Provisi: Jawa Tengah, Kabupaten: Jepara, Kecamatan: Karimun Jawa, Desa: Karimun Jawa
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>

</html>