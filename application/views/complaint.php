<div class="container">
    <div class="row">
        <h2 class="text-center mt-3">Оставить жалобу</h2>
        <form action="client/complaint" method="post">
            <div class="mb-3">
                <label for="phone" class="form-label">Номер телефона</label>
                <input type="tel" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="fio_doctor" class="form-label">На врача</label>
                <select name="fio_doctor" class="form-select">
                    <?php
                    foreach($doctors as $row){
                        echo '<option value="'.$row['fio'].'">'.$row['fio'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="details" class="form-label">Подробнее</label>
                <input type="text" class="form-control" name="details" required>
            </div>
          <button class="btn btn-success" type="submit">Отправиить</button>
        </form>
    </div>
</div>