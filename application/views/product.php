<div class="container">
    <div class="row">
        <h2 class="text-center mt-3">Заказать товар</h2>
        <form action="client/new_order_product" method="post">
            <input type="hidden" name="id_product" value="<?=$id_product?>">
            <input type="hidden" name="price" value="<?=$price?>">
            <div class="mb-3">
                <label for="address_delivery" class="form-label">Адрес доставки</label>
                <textarea name="address_delivery" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="col" class="form-label">Количество</label>
                <input type="number" class="form-control" name="col" required>
            </div>
          <button class="btn btn-success" type="submit">Заказать</button>
        </form>
    </div>
</div>