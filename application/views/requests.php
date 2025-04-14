<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <h2 class="mb-3 mt-3 text-center">Мои обращения</h2>
                <table class="table">
                    <th>№ п/п</th>
                    <th>Дата</th>
                    <th>Порода животных</th>
                    <th>Жалоба</th>
                    <th>Объективно</th>
                    <th>Диагноз</th>
                    <th>Результат</th>
                    <th>Ф.И.О врача</th>
                    <th>Статус</th>
                    <?php 
                        foreach($requests as $row) {
                            echo '
                            <tr>
                                <td>'.$row['id_order'].'</td>
                                <td>'.$row['date'].'</td>
                                <td>'.$row['breed'].'</td>
                                <td>'.$row['complaint'].'</td>
                                <td>'.$row['objectively'].'</td>
                                <td>'.$row['diagnosis'].'</td>
                                <td>'.$row['result'].'</td>
                                <td>'.$row['fio_doctor'].'</td>
                                <td>'.$row['status'].'</td>
                            </tr>';
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>