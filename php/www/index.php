<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preload" href="/fonts/SourceSansPro-SemiBold.ttf" as="font">
    <title>Main</title>
</head>
<body>
    <div class="l-wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="sidebar-icon">
                    <img class="icon" src="/img/menu-outline.svg" alt="">
                </div>
                <button class="sidebar-card" onclick="openTab(event, 'tab1')">
                    <img class="icon" src="/img/home.svg" alt=""    >
                    Кредиты
                </button>
                <button class="sidebar-card" onclick="openTab(event, 'tab2')">
                    <img class="icon" src="/img/analytics-outline.svg" alt="">
                     Определение статуса одобрения
                </button>
                <button class="sidebar-card" onclick="openTab(event, 'tab3')">
                    <img class="icon" src="/img/trending-up-outline.svg" alt="">
                    Критерии
                </button>
                <button class="sidebar-card">
                    <img class="icon" src="/img/folders.svg" alt="">
                    Возможные значения
                </button>
                <button class="sidebar-card">
                    <img class="icon" src="/img/bookmark-outline.svg" alt="">
                    Описание критериев одобрения
                </button>
                <button class="sidebar-card">
                    <img class="icon" src="/img/book-outline.svg" alt="">
                    Проверка полноты знаний
                </button>
                <button class="sidebar-card">
                    <img class="icon" src="/img/time-outline.svg" alt="">
                    История
                </button>
                <button class="sidebar-card">
                    <img class="icon" src="/img/settings-outline.svg" alt="">
                    Настройки
                </button>
            </div>
        </div>
        <div class="main">
            <div class="main-header">
                <div class="header-buttons">
                    <a href="/auth.html"><img src="/img/user-thumb.svg" alt="user"></a>
                    <img src="/img/button.svg" alt="">
                </div>
            </div>
            <div id="tab1" class="tabcontent">
                <div class="table-header">
                    <div class="table-tabs">
                        <div class="tabs"><a href="#">Добавить</a></div>
                        <div class="tabs"><a href="#">Изменить</a></div>
                        <div class="tabs"><a href="#">Удалить</a></div>
                    </div>
                    <div class="table-find">
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="name1" />&nbsp;</th>
                        <th>Семейное положение</th>
                        <th>Иждивенство</th>
                        <th>Образование</th>
                        <th>Трудоустройство</th>
                        <th>Доход заявителя</th>
                        <th>Доход со заявителя</th>
                        <th>Величина займа</th>
                        <th>Срок кредита</th>
                        <th>Кредитная история</th>
                        <th>Область проживания</th>
                        <th>Статус</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="name1" />&nbsp;</td>
                        <td>В браке</td>
                        <td>Не иждивенец</td>
                        <td>Образован</td>
                        <td>Постоянная работа</td>
                        <td>500000</td>
                        <td>500000</td>
                        <td>30000</td>
                        <td>356</td>
                        <td>Хорошая</td>
                        <td>Город</td>
                        <td>Одобрено</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" />&nbsp;</td>
                        <td>В браке</td>
                        <td>Не иждивенец</td>
                        <td>Образован</td>
                        <td>Постоянная работа</td>
                        <td>500000</td>
                        <td>500000</td>
                        <td>30000</td>
                        <td>356</td>
                        <td>Хорошая</td>
                        <td>Город</td>
                        <td>Одобрено</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" />&nbsp;</td>
                        <td>В браке</td>
                        <td>Не иждивенец</td>
                        <td>Образован</td>
                        <td>Постоянная работа</td>
                        <td>500000</td>
                        <td>500000</td>
                        <td>30000</td>
                        <td>356</td>
                        <td>Хорошая</td>
                        <td>Город</td>
                        <td>Одобрено</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="tab2" class="tabcontent">
                <div class="status-form">
                    <form id="status" onsubmit="event.preventDefault(); sendData();">
                        <label for="family">Семейное положение:</label>
                        <select id="family" name="family">
                            <option value="merried">В браке</option>
                            <option value="notMerried">Не в браке</option>
                        </select>
                        <label for="dependent">Иждивенство:</label>
                        <select id="dependent" name="dependent">
                            <option value="dependent">Иждивенец</option>
                            <option value="notDependent">Не иждивенец</option>
                        </select>
                        <label for="education">Образование:</label>
                        <select id="education" name="education">
                            <option value="education">Образован</option>
                            <option value="notEducated">Не образован</option>
                        </select>
                        <label for="employment">Трудоустройство:</label>
                        <select id="employment" name="employment">
                            <option value="job">Постоянная работа</option>
                            <option value="notJob">Безработный</option>
                        </select>
                        <label for="applicantIncome">Доход заявителя:</label>
                        <input id="applicantIncome" type="number">
                        <label for="coapplicantIncome">Доход созаявителя:</label>
                        <input id="coapplicantIncome" type="number">
                        <label for="loanAmount">Величина займа:</label>
                        <input id="loanAmount" type="number">
                        <label for="term">Срок кредита:</label>
                        <input id="term" type="number">
                        <label for="creditHistory">Кредитная история:</label>
                        <select id="creditHistory" name="creditHistory">
                            <option value="good">Хорошая</option>
                            <option value="bad">Испорченная</option>
                        </select>
                        <label for="area">Область проживания:</label>
                        <select id="area" name="area">
                            <option value="city">Город</option>
                            <option value="suburb">Пригород</option>
                            <option value="village">Деревня</option>
                        </select>
                        <button type="submit">Определить</button>
                    </form>
                    <div id="result"></div>
                </div>
            </div>
            <div id="tab3" class="tabcontent">
                <div class="criteria">Семейное положение</div>
                <div class="criteria">Иждивенство</div>
                <div class="criteria">Образование</div>
                <div class="criteria">Трудоустройство</div>
                <div class="criteria">Доход заявителя</div>
                <div class="criteria">Доход со заявителя</div>
                <div class="criteria">Величина займа</div>
                <div class="criteria">Срок кредита</div>
                <div class="criteria">Кредитная история</div>
                <div class="criteria">Область проживания</div>
            </div>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>
