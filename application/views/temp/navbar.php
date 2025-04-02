<body>
  <header>
  <nav class="navbar navbar-expand-md" style="background: linear-gradient(90deg,#1862eb,#0673e6,#2a82dd);">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="main/">Счастье животных</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="main/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="main/call">Вызвать врача</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="main/feedback">Напишите нам</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="main/contacts">Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="main/about_us">О нас</a>
          </li>
        </ul>
        <div class="d-flex">
        <button class="btn btn-secondary me-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Войти</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Авторизация</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <form action="main/login" method="post">
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" name="login" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Войти</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Регистрация</button>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Регистрация</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <form action="main/registration" method="post">
              <div class="mb-3">
                    <label for="fio" class="form-label">ФИО</label>
                    <input type="text" name="fio" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Номер телефона</label>
                    <input type="tel" name="phone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" name="login" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </nav>
</header>