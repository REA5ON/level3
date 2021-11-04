<?php $this->layout('layout', ['title' => 'Home']) ?>



<?php foreach ($categories as $category) : ?>
    <a href="/category/<?= $this->e($category['id']) ?>" class="btn btn-info"><?= $this->e($category['name']) ?></a>
<?php endforeach; ?>


<?php foreach ($products as $product) : ?>
    <div class="card" style="width: 18rem;">
        <img src="/App/<?= $this->e($product['image']) ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <?php d($users); ?>
            <img src="<?= $this->e($user['image']) ?>" width="40" height="40" class="rounded-circle mr-3">
            <h5 class="card-title"><?= $this->e($product['title']) ?></h5>
            <p class="card-text"><?= $this->e($product['content']) ?></p>
            <a href="/product/<?= $this->e($product['id']) ?>" class="btn btn-warning">More...</a>
        </div>
    </div>
<?php endforeach; ?>




