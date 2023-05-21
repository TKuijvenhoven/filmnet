<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<?php
//    include_once ('defaults/header.php');
include_once ('defaults/menu.php');
//    include_once ('defaults/pictures.php');
?>
<?php if(!empty($message)): ?>
    <div class="alert alert-success" role="alert">
        <?=$message?>
    </div>
<?php endif;?>
<style>
    body {
        background-color: #ffffff;
    }
</style>
<body>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/banner101.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../img/banner102.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5><a href="#" class="btn btn-warning">Advertisement</a> POPULAR NOW:</h5>
                <p>The canon version of Black Adam appeared only once during Fawcett's initial publication run of Captain Marvel comics.
                    <br>In The Marvel Family #1, Black Adam is an ancient Egyptian named Teth-Adam...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/banner103.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5><a href="#" class="btn btn-warning">Advertisement</a> POPULAR NOW:</h5>
                <p>An armed conflict forces Pedro and Alma Madrigal, a young married couple,
                    <br> to flee their home village in Colombia with their infant triplets Julieta...</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br>
<h4> Member Profile </h4>
<table class="table align-middle">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>email</td>
        <td><?=$_SESSION['user']->email?></td>
    </tr>
    <tr>
        <td>firstname</td>
        <td><?=$_SESSION['user']->first_name?></td>
    </tr>
    <tr>
        <td>lastname</td>
        <td><?=$_SESSION['user']->last_name?></td>
    </tr>
    </tbody>
</table>
<a type="button" class="btn btn-success btn-sm px-3" href="/member/editprofile" >
    profile aanpassen
</a>
<a type="button" class="btn btn-danger btn-sm px-3" href="/member/changepassword" >
    password aanpassen
</a>
<hr>
<?php
include_once ('defaults/footer.php');
?>
</body>
</html>
