<div class="container">
    <div class="row mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            foreach($result as $row){
                echo '
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['name_product'].'</h5>
                                <p class="card-text">Цена: '.$row['price'].' руб.</p>
                            </div>
                            <div class="card-footer">
                                <a href="client/order_product?id_product='.$row['id_product'].'&name_product='.$row['name_product'].'&price='.$row['price'].'" class="btn btn-primary">Записаться</a>
                            </div>
                    </div>
                </div>';
            }
        ?>
        </div>
    </div>
</div>