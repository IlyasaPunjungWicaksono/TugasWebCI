<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body style="background: linear-gradient(135deg, #CD853F 0%, 	#DDA0DD 100%);">
<header class="ob">
    <div class="atas">
        <div id="logo"><img style="width: 127px;margin-left:40px;float: left;"src="<?=base_url()?>assets/ngkrun.png" alt=""></div>
            <nav>
                <ul>
                    <li><a href="<?=base_url()?>index.php/welcome/utama"><img style="width:25px;"src="<?=base_url()?>assets/house.png" alt=""></a>  </li>
                    <li><a href="<?=base_url()?>index.php/welcome/event"><img style="width:25px;"src="<?=base_url()?>assets/event.png" alt=""></a>  </li>
                    <li><a href="<?=base_url()?>index.php/welcome/gallery"><img style="width:25px;"src="<?=base_url()?>assets/gallery.png" alt=""></a>  </li>
                    <li><a href="<?=base_url()?>index.php/welcome/contact"><img style="width:25px;"src="<?=base_url()?>assets/contact.png" alt=""></a>  </li>
                    <li><a href="<?=base_url()?>index.php/welcome/profil"><img style="width:25px;"src="<?=base_url()?>assets/myprofil.png" alt=""></a>  </li>
                </ul>
            </nav>
    </div>
</header>
<img style="width:400px;" src="<?=base_url()?>assets/mountainbike.png" alt="">
<img style="width:400px;margin-top:-98px;margin-left:500px;" src="<?=base_url()?>assets/mountainbike2.png" alt="">
<h1 align="center" style="color:#2F4F4F;text-align:left;font-size:10.3mm;margin-top:-550px;margin-left:300px; font-family:sans-serif;">
Selamat Datang <?= $nama_lengkap ?>
<br>Berperilakulah seperti <?= $jenis_kelamin ?></h1>

<p style="font-size: 18px;margin-left:500px;margin-top:290px;"></p>
<img style="width:70px;margin-left:1230px;margin-top:93px;)" src="<?=base_url()?>assets/arrow.png" alt="">
</body>
</html>