<div class="container">
    <div class="row">
        <h2 class="text-center mt-3">Запись на прием к врачу</h2>
        <form action="client/appeal" method="post">
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
                <label for="complaint" class="form-label">Жалоба</label>
                <input type="text" class="form-control" name="complaint" required>
            </div>
          <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>
</div>