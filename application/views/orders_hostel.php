<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <table class="table">
                    <th>№ п/п</th>
                    <th>Дата</th>
                    <th>Тип животного</th>
                    <th>Порода животных</th>
                    <th>Кличка</th>
                    <th>Вес животного</th>
                    <th>Возраст</th>
                    <th>Номер клетки</th>
                    <th>Дата начала</th>
                    <th>Дата окончания</th>
                    <th>Заметка</th>
                    <th>Статус оплаты</th>
                    <th>Статус</th>
                    <th>Действие</th>
                    <?php 
                        foreach($orders as $row) {
                            if($row['status'] == 'Новая заявка' && $row['status_pay'] == 'Не оплачено'){
                                $edit = '<div class="d-flex gap-2">
                                <form action="client/pay_hostel" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-success">Оплатить</button>
                                </form>
                                <form action="client/cancel_hostel" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-danger">Отменить</button>
                                </form>
                                </div>';
                            }
                            else if($row['status'] == 'Новая заявка' && $row['status_pay'] == 'Оплачено'){
                                $edit = '<form action="client/cancel_hostel" method="post">
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
                                <td>'.$row['type_animal'].'</td>
                                <td>'.$row['breed'].'</td>
                                <td>'.$row['nickname'].'</td>
                                <td>'.$row['size_animal'].' кг.</td>
                                <td>'.$row['age'].'</td>
                                <td>'.$row['id_cell'].'</td>
                                <td>'.$row['date_from'].'</td>
                                <td>'.$row['date_by'].'</td>
                                <td>'.$row['note'].'</td>
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