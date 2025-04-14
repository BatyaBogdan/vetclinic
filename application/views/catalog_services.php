<div class="container">
    <div class="row mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            foreach($result as $row){
                echo '
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['type_service'].'</h5>
                                <p class="card-text">Цена: '.$row['price'].' руб.</p>
                            </div>
                            <div class="card-footer">
                                <a href="client/service?id_service='.$row['id_service'].'&type_service='.$row['type_service'].'&price='.$row['price'].'" class="btn btn-primary">Записаться</a>
                            </div>
                    </div>
                </div>';
            }
        ?>
        </div>
    </div>
</div>