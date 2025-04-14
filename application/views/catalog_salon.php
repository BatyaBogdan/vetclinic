<div class="container">
    <div class="row mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            foreach($result as $row){
                echo '
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['name_salon'].'</h5>
                                <p class="card-text">Цена: '.$row['price'].' руб.</p>
                            </div>
                            <div class="card-footer">
                                <a href="client/order_salon?id_salon='.$row['id_salon'].'&name_salon='.$row['name_salon'].'&price='.$row['price'].'" class="btn btn-primary">Записаться</a>
                            </div>
                    </div>
                </div>';
            }
        ?>
        </div>
    </div>
</div>