<div class="container">
    <div class="row mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            foreach($result as $row){
                echo '
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['name_training'].'</h5>
                                <p class="card-text">Цена: '.$row['price'].' руб.</p>
                            </div>
                            <div class="card-footer">
                                <a href="client/order_training?id_training='.$row['id_training'].'&name_training='.$row['name_training'].'&price='.$row['price'].'" class="btn btn-primary">Записаться</a>
                            </div>
                    </div>
                </div>';
            }
        ?>
        </div>
    </div>
</div>