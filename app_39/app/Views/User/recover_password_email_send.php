<?= $this->extend('layouts/user/user_layout') ?>
<?= $this->section('content') ?>


<div class="container vh-100">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-sm-10 col-lg-6 col-xl-5">

            <div class="card p-5">
                <h3 class="text-center">Recuperação da Senha</h3>
                <hr>

                <p class="text-center">Verifique a sua caixa de correio. <br>Enviamos um email para <strong><?= $username ?></strong> com informações sobre a recuperação da senha</p>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>




