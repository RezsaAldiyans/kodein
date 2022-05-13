<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEK TOKEN</title>
</head>
<body>
    <h1>Cek Token</h1>
    <?php
    if(session()->getFlashData('selesai')){
        echo "<h2>".session()->getFlashData('selesai')."</h2>";
    }
    if(session()->getFlashData('berhasil')){
        echo "<h2>".session()->getFlashData('berhasil')."</h2>";
    }
    else if(session()->getFlashData('expired')){
        echo "<h2>".session()->getFlashData('expired')."</h2>";
    }
    else{
        echo "<h2>".session()->getFlashData('invalid')."</h2>";
    }
    ?>
    <form action="/cekToken" method="POST">
        <input type="email" name="email" placeholder="Masukan email" value="<?=$email?>" hidden/>
        <input type="text" name="token" placeholder="Masukan token" />
        <button type="submit" >Cek</button>
    </form>
    <a href="<?= base_url()?>/resetToken/<?= $email?>">Resend Code</a>
</body>
</html>