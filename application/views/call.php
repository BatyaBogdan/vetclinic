<div class="container">
    <div class="row">
        <h2 class="text-center mt-3">Вызвать врача</h2>
        <form action="main/call" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Ваше имя</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Номер телефона</label>
                <input type="tel" class="form-control" name="phone" required>
            </div>
          <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>
</div>