<!DOCTYPE html>
<html
<head>
    <title>Masuk | Perpustakaan IPB</title>
<style type="text/css">
body{
    background-color: #b0c4de;
    color: #191970;
    font-size: 20px;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}

#utama{
    Width: 300px;
    margin: 0 auto;
    margin-top: 12%;
    background-color: #b0c4de;
}

#judul{
    padding: 15px;
    text-align: center;
    color: #b0c4de;
    font-size: 20px;
    background-color: #000080;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom: 3px solid #808080;
}

#data{
    background-color: #dcdcdc;
    padding: 20px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
}

input{
    padding: 8px;
    border: 0;
}

.content{
    text-align: center;
}
.lebar{
    width: 243px;
}
.tombol{
    background-color: #808080;
    border-radius: 3px;
    text-align: center;
    color: #fff
}
.tombol:hover{
    background-color: #000090;
}
.tittle m-b-md{
     margin-bottom: 30px;
}

</style>
</head>
<body>

<div class="content">
    <div class="title m-b-md">
        Selamat Datang di Perpustakaan IPB
    </div>

<div id="utama">
    <div id="judul" class="content">
        Login Untuk Masuk
    </div>

    <div id="data" class="content">
    <form action="" method="post">
        <div>
            <input type="text" name="user" placeholder="Username" class="lebar" />
        </div>
        <div style="margin-top:8px;">
            <input type="password" name="pass" placeholder="Password" class="lebar" />
        </div> 
        <div style="margin-top:8px;">
            <input type="submit" name="login" value="Login" class="tombol" />
        </div>
    </form>

    <?php
    $user = @$_POST['user'];
    $pass = @$_POST['pass'];
    $login = @$_POST['login'];

    if($login) {
        if($user == "")
            echo "Username tidak boleh kosong.";
    }
    ?>
    </div>
</div>

</body>
</html>