<?php $this->layout('layout', ['title' => 'Product']) ?>
<div class="row height d-flex justify-content-center align-items-center">
    <div class="row" style="width: 18rem;">
        <img src="/App/<?= $this->e($user['image']) ?>" width="300" height="300" class="card-img-top">
        <div class="row">
            <h5 class="card-title"><?= $this->e($user['username']) ?></h5>
            <p class="card-text"><?= $this->e($user['email']) ?></p>
        </div>
    </div>
</div>

<?php foreach ($products as $product) : ?>
    <div class="card" style="width: 18rem;">
        <img src="/App/<?= $this->e($product['image']) ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <img src="#" width="40" height="40" class="rounded-circle mr-3">
            <a href="/user/<?= $this->e($product['created_id']) ?>" class="btn btn-success">user</a>
            <h5 class="card-title"><?= $this->e($product['title']) ?></h5>
            <p class="card-text"><?= $this->e($product['content']) ?></p>
            <a href="/product/<?= $this->e($product['id']) ?>" class="btn btn-warning">More...</a>
        </div>
    </div>
<?php endforeach; ?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
