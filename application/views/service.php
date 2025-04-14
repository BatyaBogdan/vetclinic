<div class="container">
    <div class="row">
        <h2 class="text-center mt-3">Запись на услуги</h2>
        <p>Вид услуги: <?=$type_service;?></p>
        <p>Цена: <?=$price;?></p>
        <form action="client/new_service" method="post">
            <input type="hidden" name="id_service" value="<?=$id_service?>">
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
          <button class="btn btn-success" type="submit">Записаться</button>
        </form>
    </div>
</div>