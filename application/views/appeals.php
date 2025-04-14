<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <table class="table">
                    <th>№ п/п</th>
                    <th>Дата</th>
                    <th>Ф.И.О клиента</th>
                    <th>Порода животных</th>
                    <th>Жалоба</th>
                    <th>Объективно</th>
                    <th>Диагноз</th>
                    <th>Результат</th>
                    <th>Ф.И.О врача</th>
                    <th>Статус</th>
                    <th>Действие</th>
                    <?php 
                        foreach($orders as $row) {
                            if($row['status'] == 'Новая заявка'){
                                $edit = '
                                <div class="d-flex gap-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#model'.$row['id_order'].'">
                                        Редактировать
                                    </button>
                                    <form action="doctor/delete_appeal" method="post">
                                        <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                        <button type="submit" class="btn btn-danger">
                                            <svg xmlns="img/trash.svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                
                                    <div class="modal fade" id="model'.$row['id_order'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Обновление заказа</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="doctor/appeals" method="post">
                                                        <input type="hidden" name="id_order" value="'.$row['id_order'].'">
                                                        <div class="mb-3">
                                                            <label for="objectively" class="form-label">Объективно</label>
                                                            <input type="text" name="objectively" class="form-control" value="'.$row['diagnosis'].'" required>
                                                        </div>                                            <div class="mb-3">
                                                            <label for="diagnosis" class="form-label">Диагноз</label>
                                                            <input type="text" name="diagnosis" class="form-control" value="'.$row['diagnosis'].'" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="result" class="form-label">Результат</label>
                                                            <input type="text" name="result" class="form-control" required>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>';
                            }
                            else {
                                $edit = '<form action="doctor/delete_appeal" method="post">
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
                                <td>'.$row['breed'].'</td>
                                <td>'.$row['complaint'].'</td>
                                <td>'.$row['objectively'].'</td>
                                <td>'.$row['diagnosis'].'</td>
                                <td>'.$row['result'].'</td>
                                <td>'.$row['fio_doctor'].'</td>
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