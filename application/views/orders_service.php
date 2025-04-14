<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <table class="table">
                    <th>№ п/п</th>
                    <th>Дата</th>
                    <th>Порода животных</th>
                    <th>Наименование услуги</th>
                    <th>Ф.И.О врача</th>
                    <th>Диагноз</th>
                    <th>Результат</th>
                    <th>Статус оплаты</th>
                    <th>Статус</th>
                    <th>Действие</th>
                    <?php 
                        foreach($orders as $row) {
                            if($row['status'] == 'Новая заявка' && $row['status_pay'] == 'Не оплачено'){
                                $edit = '<div class="d-flex gap-2">
                                <form action="client/pay_service" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-success">Оплатить</button>
                                </form>
                                <form action="client/cancel_service" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-danger">Отменить</button>
                                </form>
                                </div>';
                            }
                            else if($row['status'] == 'Новая заявка' && $row['status_pay'] == 'Оплачено'){
                                $edit = '<form action="client/cancel_service" method="post">
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
                                <td>'.$row['breed'].'</td>
                                <td>'.$row['type_service'].'</td>
                                <td>'.$row['fio_doctor'].'</td>
                                <td>'.$row['diagnosis'].'</td>
                                <td>'.$row['result'].'</td>
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