<div class="container">
    <div class="row">
        <table class="table">
            <tr>
                <th>№</th>
                <th>Дата жалобы</th>
                <th>ФИО</th>
                <th>Номер телефона</th>
                <th>Email</th>
                <th>ФИО доктора</th>
                <th>Подробности</th>
                <th>Ответ</th>
                <th>Статус</th>
                <th></th>
            </tr>
            <?php
            foreach($complaints as $row){
                if($row['status'] == 'Открыт'){
                    $edit = '
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal'.$row['id_answer'].'">
                      Ответить
                    </button>
                    <div class="modal fade" id="modal'.$row['id_answer'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ответить</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="chief/complaints" method="post">
                              <input type="hidden" name="id_answer" value="'.$row['id_answer'].'">
                              <div class="mb-3">
                                <label for="answer" class="form-label">Ответ</label>
                                <input type="text" name="answer" class="form-control">
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Ответить</button>
                          </div>
                            </form>
                        </div>
                      </div>
                    </div>';
                }
                else {
                  $edit = '';
                }
                echo '
                <tr><td>'.$row['id_answer'].'</td>
                <td>'.$row['date_complaint'].'</td>
                <td>'.$row['fio'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['fio_doctor'].'</td>
                <td>'.$row['details'].'</td>
                <td>'.$row['answer'].'</td>
                <td>'.$row['status'].'</td>
                <td>'.$edit.'</td></tr>';
            }
            ?>
        </table>
    </div>
</div>