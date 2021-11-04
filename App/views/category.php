<?php $this->layout('layout', ['title' => 'Home']) ?>


<?php foreach ($categories as $category) : ?>
    <a href="/category/<?= $this->e($category['id']) ?>" class="btn btn-info"><?= $this->e($category['name']) ?></a>
<?php endforeach; ?>

<?php foreach ($products as $product) : ?>
    <div class="card" style="width: 18rem;">
        <img src="/App/<?= $this->e($product['image']) ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $this->e($product['title']) ?></h5>
            <p class="card-text"><?= $this->e($product['content']) ?></p>
            <a href="/product/<?= $this->e($product['id']) ?>" class="btn btn-warning">More...</a>
        </div>
    </div>
<?php endforeach; ?>
