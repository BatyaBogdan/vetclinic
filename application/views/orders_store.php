<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <table class="table">
                    <th>№ п/п</th>
                    <th>Дата</th>
                    <th>Название продукта</th>
                    <th>Количество</th>
                    <th>Адрес доставки</th>
                    <th>Цена</th>
                    <th>Статус оплаты</th>
                    <th>Статус</th>
                    <th>Действие</th>
                    <?php 
                        foreach($orders as $row) {
                            if($row['status'] == 'Новая заявка' && $row['status_pay'] == 'Не оплачено'){
                                $edit = '<div class="d-flex gap-2">
                                <form action="client/pay_store" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-success">Оплатить</button>
                                </form>
                                <form action="client/cancel_store" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-danger">Отменить</button>
                                </form>
                                </div>';
                            }
                            else if($row['status'] == 'Новая заявка' && $row['status_pay'] == 'Оплачено'){
                                $edit = '<form action="client/cancel_store" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-danger">Отменить</button>
                                </form>';
                            }
                            else {
                                $edit = '';
                            }
                            echo '
                            <tr>
                                <td>'.$row['id_order'].'</td>
                                <td>'.$row['date'].'</td>
                                <td>'.$row['name_product'].'</td>
                                <td>'.$row['col'].'</td>
                                <td>'.$row['address_delivery'].'</td>
                                <td>'.$row['price'].'</td>
                                <td>'.$row['status_pay'].'</td>
                                <td>'.$row['status'].'</td>
                                <td>'.$edit.'</td>
                            </tr>';
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>