<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <table class="table">
                    <th>№ п/п</th>
                    <th>Дата</th>
                    <th>Ф.И.О клиента</th>
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
                            if($row['status'] == 'Новая заявка' && $row['status_pay'] == 'Оплачено'){
                                $edit = '
                                <div class="d-flex gap-2">
                                <form action="doctor/hostel_orders" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <input type="hidden" name="id_cell" value="'.$row['id_cell'].'">
                                    <button type="submit" class="btn btn-primary">Принять</button>
                                </form>
                                <form action="doctor/delete_order_hostel" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="img/trash.svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                        </svg>
                                    </button>
                                </form>
                                </div>';
                            }
                            else if($row['status'] == 'Принята'){
                                $edit = '<form action="doctor/end_hostel" method="post">
                                        <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                        <input type="hidden" name="id_cell" value="'.$row['id_cell'].'">
                                        <button type="submit" class="btn btn-primary">Выселить</button>
                                        </form>';
                            }
                            else {
                                $edit = '<form action="doctor/delete_order_hostel" method="post">
                                    <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="img/trash.svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                        </svg>
                                    </button>
                                </form>';
                            }
                            echo '
                            <tr>
                                <td>'.$row['id_order'].'</td>
                                <td>'.$row['date'].'</td>
                                <td>'.$row['fio'].'</td>
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