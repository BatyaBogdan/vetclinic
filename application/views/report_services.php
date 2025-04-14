<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-3 mt-3">Отчёт по оказанным услугам</h2>
                <table class="table table-striped">
                    <th>Дата</th>
                    <th>Количество обращений</th>
                    <th>Количество оказанных доп. услуг</th>
                    <th>Кол-во прививок</th>
                    <th>Общая сумма</th>
                    <?php 
                        foreach($services as $row) {
                            echo '
                            <tr>
                                <td>'.$row['date'].'</td>
                                <td>'.$row['COUNT(*)'].'</td>
                                <td>'.$row['COUNT(a.id_order)'].'</td>
                                <td>'.$row['COUNT(b.id_order)'].'</td>
                                <td>'.$row['SUM(orders.price)'].'</td></tr>';
                        }
                        foreach($all as $row) {
                            echo '
                            <tr>
                                <td><b>Итого</b></td>
                                <td>'.$row['COUNT(*)'].'</td>
                                <td>'.$row['COUNT(a.id_order)'].'</td>
                                <td>'.$row['COUNT(b.id_order)'].'</td>
                                <td>'.$row['SUM(orders.price)'].'</td></tr>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>