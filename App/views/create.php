<?php $this->layout('layout', ['title' => 'Home']) ?>

<div class="container-sm">
    <form action="/create" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>Текущий аватар</h2>
                        </div>
                        <div class="panel-content">
                            <div class="form-group">
                                <img src="#" alt="" class="img-responsive" width="200">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="example-fileinput">Выберите аватар</label>
                                <input type="file" name="image" id="example-fileinput" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                                <textarea name="content" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Create</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>