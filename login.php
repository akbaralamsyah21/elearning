<?php 
    if($nama){
        header("location:index.php");
    }
?>
<div id="loginform">

<?php

$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
if($notif == true){
echo "<div id='notif'>NPM atau Password Salah</div>";
}
?>
<div class="row">
    <form action="proseslogin.php" method="POST" class="col s12 m12">
    <div class="row">
        <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate" name="npm">
                <label for="icon_prefix">Masukan NPM</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 m12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_password" type="password" class="validate" name="password">
                <label for="icon_password">Masukan Password</label>
        </div>
    </div>

<button class="btn waves-effect waves-light right" type="submit" name="action">Masuk
    <i class="material-icons right">send</i>
</button>
</form>
</div>
</div>