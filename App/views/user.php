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

<div class="container mt-5 mb-5">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-7">
            <div class="card">
                <div class="p-3">
                    <h6>Comments</h6>
                </div>
                <div class="mt-3 d-flex flex-row align-items-center p-3 form-color"> <img src="https://i.imgur.com/zQZSWrt.jpg" width="50" class="rounded-circle mr-2"> <input type="text" class="form-control" placeholder="Enter your comment..."> </div>
                <div class="mt-2">
                    <div class="d-flex flex-row p-3"> <img src="https://i.imgur.com/zQZSWrt.jpg" width="40" height="40" class="rounded-circle mr-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center"> <span class="mr-2">Brian selter</span></div> <small>12h ago</small>
                            </div>
                            <p class="text-justify comment-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            <div class="d-flex flex-row user-feed"> <span class="wish"><i class="fa fa-heartbeat mr-2"></i>24</span> <span class="ml-3"><i class="fa fa-comments-o mr-2"></i>Reply</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
