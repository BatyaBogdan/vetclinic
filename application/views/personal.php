<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 mb-4">
    <div class="col">
        <div class="card">
        <img src="<?php echo $this->session->userdata('photo')?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><span class="badge text-bg-primary"><?php echo $this->session->userdata('role')?></span></h5>
            <h4 class="card-text"><?php echo $this->session->userdata('fio')?></h4>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4">
        <div class="card-header">
            Заявки <span class="badge text-bg-primary">Ветеринарные услуги</span>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="client/service_orders" class="btn btn-primary">Посмотреть</a></li>
        </ul>
        </div>
        <div class="card">
        <div class="card-header">
            Заявки <span class="badge text-bg-primary">Дополнительные услуги</span>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="client/hostel_orders" class="btn btn-primary">Зоогостиница</a></li>
            <li class="list-group-item"><a href="client/store_orders" class="btn btn-primary">Зоопродукты</a></li>
            <li class="list-group-item"><a href="client/training_orders" class="btn btn-primary">Дрессировки для собак</a></li>
            <li class="list-group-item"><a href="client/salon_orders" class="btn btn-primary">Зоосалон</a></li>
        </ul>
        </div>
    </div>
    <div class="col">
    <div class="card">
        <div class="card-header">
            Другие
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="client/requests" class="btn btn-primary">Мои обращения</a></li>
            <li class="list-group-item"><a href="client/complaints" class="btn btn-primary">Узнать о жалобе</a></li>
        </ul>
        </div>
    </div>
    </div>
</div>