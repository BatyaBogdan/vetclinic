<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Имя</th>
                            <th>Номер телефона</th>
                            <th>Сообщение</th>
                            <th>Дата сообщения</th>
                            <th>Статус</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        foreach($feedback as $row) 
                        {
                            if($row['status'] == 'Новая заявка'){
                                $edit = '<div class="d-flex gap-2">
                                <form method="post" action="doctor/feedback">
                                 <input type="hidden" name="id_feedback" value="'.$row['id_feedback'].'">
                                 <button type="submit" class="btn btn-success">Принять</button>
                                 </form>
                                 <form action="doctor/delete_feedback" method="post">
                                        <input type="hidden" name="id_feedback" value="'.$row['id_feedback'].'">
                                        <button type="submit" class="btn btn-danger">
                                            <svg xmlns="img/trash.svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>';
                            }
                            else {
                                $edit = '<form action="doctor/delete_feedback" method="post">
                                        <input type="hidden" name="id_feedback" value="'.$row['id_feedback'].'">
                                        <button type="submit" class="btn btn-danger">
                                            <svg xmlns="img/trash.svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                            </svg>
                                        </button>
                                    </form>';
                            }
                            echo '<tr>
                                <td>'.$row['id_feedback'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td>'.$row['message'].'</td>
                                <td>'.$row['date_feedback'].'</td>
                                <td>'.$row['status'].'</td>
                                <td>'.$edit.'</td></tr>';
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>