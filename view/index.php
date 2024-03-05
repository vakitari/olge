<?php
include_once "component/start.php";
?>
        <div id="main-con">
            <h1>Добро пожаловать на наш сайт!</h1>
            <p class="pMain">Мы предоставляем информационную систему для учета грузоперевозок. Наша система помогает отслеживать движение грузов, контролировать их расход и приход, а также предоставляет подробные отчеты.</p>
            <a href="#" id="registerButton" class="btn btn-outline-success">Попробуйте бесплатно</a>

            <div class="mid-con">
                <p>Мы предоставляем</p>
                <div class="mid-inf">
            <div class="card">
                <p>Перевозка</p>
                <img style="border: 2px solid;border-color: cadetblue;" src="img/perev.jpg" alt="123">
                <p style="margin:20px">Из года в год мы оптимизируем наши маршруты, для самой быстрой и безопасной доставки</p>
            </div>
            <div class="card">
                <p>Автоматизация</p>
                <img style="border: 2px solid;border-color: #4e92ff;" src="img/avtomat.png" alt="123">
                <p style="margin:20px">Устаревшие методы организации доставки никому не нужны, мы предоставляем лучшую автоматизированную систему</p>
            </div>
            <div class="card">
                <p>Оповещения</p>
                <img style="border: 2px solid;border-color:red;" src="img/opov.jpg" alt="123">
                <p style="margin:20px">Ради удобства пользования нашей программой, мы реализовали оповещение статуса транспортировки, вес и т.д.</p>
            </div>
            </div>
            </div>
            <!-- Модальное окно -->
            <div id="registerModal" class="modal">
                <!-- Форма регистрации -->

                <form class="modal-content" id="registerForm"  >
                    <div > <span class="close">&times;</span></div>
                    <div class="df">
                        <div style="width: 400px;">
                            <div class="mb-3">
                                <p class="form-label">Майл адрес</p>
                                <input type="email" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <p class="form-label">Имя</p>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <p class="form-label">Логин</p>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <p class="form-label">Номер телефона</p>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <p class="form-label">Пароль</p>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="reg-inf ">
                            <h2>Регистрация</h2>
                            <div class="mb-3">
                                <p class="form-label">Давайте начнем нашу работу</p>
                                <p class="form-text">Мы Советуем никому не сообщать свои данные</p>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
            <script>
                // Получаем элементы кнопки и модального окна
                var registerButton = document.getElementById("registerButton");
                var registerModal = document.getElementById("registerModal");
                var closeButton = document.getElementsByClassName("close")[0];

                // Когда пользователь нажимает на кнопку, открываем модальное окно
                registerButton.onclick = function() {
                    registerModal.style.display = "block";
                }

                // Когда пользователь нажимает на кнопку закрытия, закрываем модальное окно
                closeButton.onclick = function() {
                    registerModal.style.display = "none";
                }

                // Когда пользователь щелкает вне модального окна, закрываем его
                window.onclick = function(event) {
                    if (event.target == registerModal) {
                        registerModal.style.display = "none";
                    }
                }
            </script>
        </div>
</body>
</html>