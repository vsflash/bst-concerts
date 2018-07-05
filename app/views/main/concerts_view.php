<?php if ($this->all_concerts): ?>
<div class="container">
    <div class="row">
        <?php foreach ($this->all_concerts as $concert): ?>
            <div class="card col-3 p-1 m-4 bg-info" style="width: 18rem;">
                <img class="card-img-top" src="../public/images/concerts/<?= $concert['image'] ?>" alt="<?= $concert['description'] ?>">
                <div class="card-body">
                    <h5 class="card-title text-light"><?= $concert['description'] ?></h5>
                    <p class="card-text text-light"><?= $concert['date'] ?></p>
                    <form method="post" action="/concerts/order">
                        <input type="hidden" value='<?= $concert['id'] ?>' name='id'>
                    <button type="submit" class="btn btn-danger"><?= $concert['price'] ?></button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
    <?php
 endif; 