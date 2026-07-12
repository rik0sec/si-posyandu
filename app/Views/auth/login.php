<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= esc($title) ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    font-family:'Segoe UI',sans-serif;
}

body{

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    background:linear-gradient(135deg,#009688,#4CAF50);

}

body::before{

content:"";

position:absolute;

width:400px;
height:400px;

background:white;

opacity:.08;

border-radius:50%;

top:-120px;
left:-120px;

}

body::after{

content:"";

position:absolute;

width:350px;
height:350px;

background:white;

opacity:.08;

border-radius:50%;

bottom:-120px;
right:-120px;

}

.login-card{

width:100%;

border:none;

border-radius:20px;

overflow:hidden;

box-shadow:0 15px 35px rgba(0,0,0,.25);

backdrop-filter:blur(10px);

}

.login-header{

background:white;

padding:40px;

text-align:center;

}

.logo{

width:90px;

height:90px;

background:#009688;

margin:auto;

border-radius:50%;

display:flex;

justify-content:center;

align-items:center;

color:white;

font-size:38px;

margin-bottom:20px;

}

.login-header h3{

font-weight:bold;

color:#333;

}

.login-body{

padding:35px;

background:#fff;

}

.form-control{

height:48px;

border-radius:10px;

}

.btn-login{

height:48px;

border-radius:10px;

font-weight:bold;

font-size:17px;

}

.footer-login{

text-align:center;

margin-top:20px;

font-size:13px;

color:#999;

}

.password-box{

position:relative;

}

.password-box i{

position:absolute;

right:15px;

top:15px;

cursor:pointer;

color:#777;

}

</style>

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-lg-4 col-md-6">

<div class="card login-card">

<div class="login-header">

<div class="logo">

<i class="fa-solid fa-heart-pulse"></i>

</div>

<h3>Sistem Informasi Posyandu</h3>

<p class="text-muted mb-0">

Silakan login untuk melanjutkan

</p>

</div>

<div class="login-body">

<?php if(session()->getFlashdata('success')) : ?>

<div class="alert alert-success">

<?= session()->getFlashdata('success'); ?>

</div>

<?php endif; ?>


<?php if(isset($error)) : ?>

<div class="alert alert-danger">

<?= esc($error) ?>

</div>

<?php endif; ?>


<form action="<?= site_url('login') ?>" method="post">

<?= csrf_field(); ?>

<div class="mb-3">

<label class="form-label">

Username

</label>

<input

type="text"

class="form-control"

name="username"

placeholder="Masukkan Username"

value="<?= old('username') ?>"

required>

</div>


<div class="mb-4">

<label class="form-label">

Password

</label>

<div class="password-box">

<input

type="password"

class="form-control"

name="password"

id="password"

placeholder="Masukkan Password"

required>

<i class="fa-solid fa-eye"

onclick="showPassword()"

id="iconPassword">

</i>

</div>

</div>

<div class="d-grid">

<button class="btn btn-success btn-login">

<i class="fa-solid fa-right-to-bracket me-2"></i>

LOGIN

</button>

</div>

</form>

<div class="footer-login">

© <?= date('Y') ?>

Sistem Informasi Posyandu

</div>

</div>

</div>

</div>

</div>

</div>

<script>

function showPassword(){

let pass=document.getElementById("password");

let icon=document.getElementById("iconPassword");

if(pass.type==="password"){

pass.type="text";

icon.classList.remove("fa-eye");

icon.classList.add("fa-eye-slash");

}else{

pass.type="password";

icon.classList.remove("fa-eye-slash");

icon.classList.add("fa-eye");

}

}

</script>

</body>

</html>