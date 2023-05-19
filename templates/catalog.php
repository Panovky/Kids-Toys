<main class="main d-flex justify-content-between flex-wrap">
    <?php foreach ($goods as $good): ?>
        <div class="card" style='width: 400px'>
            <img src="<?php echo $good['images'][0]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $good['name']; ?></h5>
                <p class="card-text"><?php echo $good['short_descr']; ?></p>
            </div>
            <p class="card-price"><?php echo $good['price']; ?> ₽</p>
            <a type="button" class="btn btn-outline-success" href="index.php?page=product&id=<?php echo $good['id']; ?>">Подробнее</a>
        </div>
    <?php endforeach; ?>
</main>