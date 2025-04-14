<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-3 mt-3">Отчёт по персоналу</h2>
                <table class="table table-striped">
                    <th>Ф.И.О врача</th>
                    <th>Специальность</th>
                    <th>Кол-во оказанных услуг</th>
                    <th>Кол-во жалоб клиентов</th>
                    <th>Сумма оплаты, руб</th>
                    <?php 
                        foreach($personal as $row) {
                            echo '
                            <tr>
                                <td>'.$row['fio_doctor'].'</td>
                                <td>'.$row['spec'].'</td>
                                <td>'.$row['COUNT(orders.id_order)'].'</td>
                                <td>'.$row['(SELECT COUNT(*) FROM complaints b WHERE b.fio_doctor = orders.fio_doctor)'].'</td>
                                <td>'.$row['SUM(orders.price)'].'</td></tr>';
                        }
                        foreach($all as $row) {
                            echo '
                            <tr>
                                <td colspan="2"><b>Итого</b></td>
                                <td>'.$row['COUNT(id_order)'].'</td>
                                <td>'.$row['(SELECT COUNT(*) FROM complaints WHERE fio_doctor IN (SELECT DISTINCT fio_doctor FROM orders WHERE fio_doctor IS NOT NULL))'].'</td>
                                <td>'.$row['SUM(price)'].'</td></tr>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>