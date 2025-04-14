<div class="container">
    <div class="row">
        <h2 class="text-center mt-3">Запись в зоосалон</h2>
        <form action="client/new_order_salon" method="post">
            <input type="hidden" name="id_salon" value="<?=$id_salon?>">
            <input type="hidden" name="price" value="<?=$price?>">
            <div class="mb-3">
                <label for="type_animal" class="form-label">Тип животного</label>
                <input type="text" class="form-control" name="type_animal" required>
            </div>
            <div class="mb-3">
                <label for="breed" class="form-label">Пород животных</label>
                <input type="text" class="form-control" name="breed" required>
            </div>
            <div class="mb-3">
                <label for="nickname" class="form-label">Кличка</label>
                <input type="text" class="form-control" name="nickname" required>
            </div>
            <div class="mb-3">
                <label for="salon_date" class="form-label">Выберите дату</label>
                <input type="date" class="form-control" name="salon_date" required>
            </div>
            <div class="mb-3">
                <label for="salon_time" class="form-label">Время</label>
                <input type="time" class="form-control" name="salon_time" required>
            </div>
          <button class="btn btn-success" type="submit">Записаться</button>
        </form>
    </div>
</div>