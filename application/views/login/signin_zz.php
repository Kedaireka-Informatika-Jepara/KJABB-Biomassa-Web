

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="<?php echo base_url();?>tema/css/tampilan.css">
    <!-- icons -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<!-- <link rel="shortcut icon" href="assets/img/favicon.ico" /> -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Login Biomassa</title>  
</head>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <body id="bg-login">
                <div class="login">
                    <div class="box">
                        <span class="form-logo">
                            <img src="tema\img\kedaireka.png" style="height: 200px; width: 200px;">
					    </span>
                        <hr color="#efefef"/>
                        <span class="login100-form-title">
                            Halaman Login
                        </span>
                        <form action="<?php echo base_url();?>user" autocomplete="off">
                            <input type="text" name="user" placeholder="Username" class="username">
                            <input type="password" name="pass" placeholder="Password" class="password"><br />
                            <button type="submit" name="submit" class="">Login</button>
                        </form>
                        <a href="<?php echo base_url();?>lupapass" style="color: #5b5b5b;">Lupa Password</a>
                        <a href="<?php echo base_url();?>signup" style="color: #5b5b5b;">Sign Up</a>
                    </div>
                    
                </div>

                <!-- start js include path -->
                <script src="assets/plugins/jquery/jquery.min.js"></script>
                <!-- bootstrap -->
                <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                <script src="assets/js/pages/extra_pages/login.js"></script>
                <!-- end js include path -->

                <script type="text/javascript">
                    
                    async function getKeramba() {
                        let response = await
                        // if(error == 0) {
                        //     var data = {
                        //         username: document.querySelector('#username').value,
                        //         password: document.querySelector('#password').value
                        //     };
                        // }
                        fetch("http://localhost:8080/web-biomassa/api/v1/auth/login")
                        //     method: "POST",
                        //     body: JSON.stringify(data),
                        //     header: {
                        //         "Content-type": "application/json; charset-UTF-8"
                        //     },
                        // })
                        // .then((response) => response.json())
                        // .then((data) => {
                        //     console.log(data);
                        // })
                        // .catch((data) => {
                        //     console.error("Error: ", data.message);
                        // })
                        let data = await response.json()
                        return data;
                    }
                    getKeramba().then((data) => console.log(data))

                </script>
            </body>
        </div>
    </div>
</div>

</html>