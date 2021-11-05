<?php $this->layout('layout', ['title' => 'Product']) ?>
<div class="row height d-flex justify-content-center align-items-center">
    <div class="row" style="width: 18rem;">
        <img src="/App<?= $this->e($user['image']) ?>" width="300" height="300" class="card-img-top">
        <div class="row">
            <h5 class="card-title"><?= $this->e($user['username']) ?></h5>
            <p class="card-text"><?= $this->e($user['email']) ?></p>
        </div>
    </div>
</div>