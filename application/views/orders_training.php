<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <table class="table">
                    <th>№ п/п</th>
                    <th>Дата</th>
                    <th>Номер телефона</th>
                    <th>Тип животного</th>
                    <th>Порода животных</th>
                    <th>Кличка</th>
                    <th>Название тренировки</th>
                    <th>Адрес</th>
                    <th>Дата</th>
                    <th>Время</th>
                    <th>Цена</th>
                    <th>Статус оплаты</th>
                    <th>Статус</th>
                    <th>Действие</th>
                    <?php 
                        foreach($orders as $row) {
                            if($row['status'] == 'Новая заявка' && $row['status_pay'] == 'Не оплачено'){
                                $edit = '<div class="d-flex gap-2">
                                <form action="client/pay_training" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-success">Оплатить</button>
                                </form>
                                <form action="client/cancel_training" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-danger">Отменить</button>
                                </form>
                                </div>';
                            }
                            else if($row['status'] == 'Новая заявка' && $row['status_pay'] == 'Оплачено'){
                                $edit = '<form action="client/cancel_training" method="post">
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
                                <td>'.$row['phone'].'</td>
                                <td>'.$row['type_animal'].'</td>
                                <td>'.$row['breed'].'</td>
                                <td>'.$row['nickname'].'</td>
                                <td>'.$row['name_training'].'</td>
                                <td>'.$row['address'].'</td>
                                <td>'.$row['date_training'].'</td>
                                <td>'.$row['time_training'].'</td>
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