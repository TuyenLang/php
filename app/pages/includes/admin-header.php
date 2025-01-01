<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Trang web âm nhạc</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/style.css?52423">
</head>
<body>
    <style>
        header a{
            color: white;
        }

        .dropdown-list{
            background-color: #444;
        }
    </style>
    <header style="background-color: #3e344e; color: white;">
        <div class="logo-holder">
            <a href="<?=ROOT?>"><img class="logo" src="<?=ROOT?>/assets/images/logo.jpg"></a>
        </div>
        <div class="header-div">
            <div class="main-title">
                KHU VỰC QUẢN TRỊ
                <div class="socials">
                </div>
            </div>
            <div class="main-nav">
                <div class="nav-item"><a href="<?=ROOT?>/admin">Bảng điều khiển</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/users">Người dùng</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/songs">Bài hát</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/categories">Danh mục</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/artists">Nghệ sĩ</a></div>
                <div class="nav-item dropdown">
                    <a href="#">Xin chào, <?=user('username')?></a>
                    <div class="dropdown-list">
                        <div class="nav-item"><a href="<?=ROOT?>/profile">Hồ sơ cá nhân</a></div>
                        <div class="nav-item"><a href="<?=ROOT?>">Trang web</a></div>
                        <div class="nav-item"><a href="<?=ROOT?>/logout">Đăng xuất</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php if(message()):?>
        <div class="alert"><?=message('',true)?></div>
    <?php endif;?>
