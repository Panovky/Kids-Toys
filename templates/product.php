<main class="main">
    <div class="container">
        <div class="row">
            <div class="text-center p-3 col-lg-12 col-md-12 col-sm-12">
                <h1 class="product-title"><?php echo $product['name']; ?></h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide col-lg-5 col-md-5 col-sm-12">
                <div class="carousel-indicators">
                    <?php for ($i = 0; $i < count($product['images']); $i++): ?>
                        <?php if ($i == 0): ?>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                        <?php else: ?>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>"
                                aria-label="Slide <?php echo $i + 1; ?>"></button>
                        <?php endif?>
                    <?php endfor; ?>
                </div>
                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($product['images']); $i++): ?>
                        <?php if ($i == 0): ?>
                            <div class="carousel-item active">
                                <img class="carousel-img" src="<?php echo $product['images'][$i]; ?>">
                            </div>
                        <?php else: ?>
                            <div class="carousel-item">
                                <img class="carousel-img" src="<?php echo $product['images'][$i]; ?>">
                            </div>
                        <?php endif?>
                    <?php endfor; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="product-info col-lg-7 col-md-7 col-sm-12">
                <h3>О товаре</h3>
                <p class="text-justify">
                    <?php echo $product['full_descr']; ?>
                    <br><br>Размер: <?php echo $product['size']; ?>
                    <br><br>Цена: <?php echo $product['price']; ?> ₽
                </p>
            </div>
        </div>
    </div>
</main>