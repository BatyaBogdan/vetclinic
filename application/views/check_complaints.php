<div class="container">
    <div class="row">
        <table class="table">
            <tr>
                <th>№</th>
                <th>Дата жалобы</th>
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
                echo '
                <tr><td>'.$row['id_answer'].'</td>
                <td>'.$row['date_complaint'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['fio_doctor'].'</td>
                <td>'.$row['details'].'</td>
                <td>'.$row['answer'].'</td>
                <td>'.$row['status'].'</td></tr>';
            }
            ?>
        </table>
    </div>
</div>