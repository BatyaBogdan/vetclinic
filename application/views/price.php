<div class="container">
    <div class="row">
        <h2 class="text-center mb-4 mt-3">Цены на услуги</h2>
    <div class="accordion" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Ветеринарные услуги
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <table class="table table-striped">
            <tr>
                <th>№</th>
                <th>Вид услуги</th>
                <th>Стоимость</th>
            </tr>
            <?php
            foreach($services as $row){
                echo '<tr><td>'.$row['id_service'].'</td>
                <td>'.$row['type_service'].'</td>
                <td>'.$row['price'].' руб.</td></tr>';
            }
            ?>
        </table>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Дрессировки
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <table class="table table-striped">
            <tr>
                <th>№</th>
                <th>Название тренировки</th>
                <th>Стоимость</th>
            </tr>
            <?php
            foreach($dogtraining as $row){
                echo '<tr><td>'.$row['id_training'].'</td>
                <td>'.$row['name_training'].'</td>
                <td>'.$row['price'].' руб.</td></tr>';
            }
            ?>
        </table>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Прайс-лист зоомагазина
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <table class="table table-striped">
            <tr>
                <th>№</th>
                <th>Название товара</th>
                <th>Цена</th>
            </tr>
            <?php
            foreach($zooproducts as $row){
                echo '<tr><td>'.$row['id_product'].'</td>
                <td>'.$row['name_product'].'</td>
                <td>'.$row['price'].' руб.</td></tr>';
            }
            ?>
        </table>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Прайс-лист услуг груминга собак и кошек
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <table class="table table-striped">
            <tr>
                <th>№</th>
                <th>Вид услуги</th>
                <th>Стоимость</th>
            </tr>
            <?php
            foreach($zoosalon as $row){
                echo '<tr><td>'.$row['id_salon'].'</td>
                <td>'.$row['name_salon'].'</td>
                <td>'.$row['price'].' руб.</td></tr>';
            }
            ?>
        </table>
    </div>
  </div>
</div>
    </div>
</div>