<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

// Check logged user
if(Yii::$app->user->isGuest){
    echo 'Silahkan login terlebih dahulu';
} else { 
    $session = Yii::$app->user->identity;
?>

<div class="site-index">
    <div style="col-xs-12">
        <div>
            Selamat Datang, <b><?php echo $session->username ?></b> <br>
            Anda sudah berhasil login! 
        </div>
        <a href="http://localhost:8080/index.php?r=mahasiswa%2Findex">
            MENUJU CRUD MAHASISWA
        </a>
    </div>
</div>

<?php } ?>


