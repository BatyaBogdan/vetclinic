<div class="container">
    <div class="row mb-4">
        <h2 class="text-center mt-3">Бронирование номера в зоогостинице</h2>
        <form action="client/new_order_hostel" method="post">
            <div class="mb-3">
                <label for="id_cell" class="form-label">Номер клетки</label>
                <select name="id_cell" class="form-select">
                    <?php
                    foreach($cells as $row){
                        echo '<option value="'.$row['id_cell'].'">№'.$row['id_cell'].'. '.$row['status'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="type_animal" class="form-label">Тип животного</label>
                <input type="text" class="form-control" name="type_animal" required>
            </div>
            <div class="mb-3">
                <label for="breed" class="form-label">Порода животных</label>
                <input type="text" class="form-control" name="breed" required>
            </div>
            <div class="mb-3">
                <label for="nickname" class="form-label">Кличка</label>
                <input type="text" class="form-control" name="nickname" required>
            </div>
            <div class="mb-3">
                <label for="size_animal" class="form-label">Вес животного (кг)</label>
                <input type="number" class="form-control" name="size_animal" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Возраст</label>
                <input type="number" class="form-control" name="age" required>
            </div>
            <div class="mb-3">
                <label for="date_from" class="form-label">Дата начала</label>
                <input type="date" class="form-control" name="date_from" required>
            </div>
            <div class="mb-3">
                <label for="date_by" class="form-label">Дата окончания</label>
                <input type="date" class="form-control" name="date_by" required>
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Заметка</label>
                <textarea name="note" class="form-control"></textarea>
            </div>
          <button class="btn btn-success" type="submit">Записаться</button>
        </form>
    </div>
</div>