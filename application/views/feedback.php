<div class="container">
    <div class="row">
        <h2 class="text-center mt-3">Обратная связь</h2>
        <form action="main/feedback" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Ваше имя</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Номер телефона</label>
                <input type="tel" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Сообщение</label>
                <textarea class="form-control" name="message" required></textarea>
            </div>
          <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>
</div>