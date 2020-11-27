<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/statistics-style.css">
    <script src="https://kit.fontawesome.com/3d9e005fd2.js" crossorigin="anonymous"></script>
    <title>Twarzobaza</title>
</head>
<body>
    <div class="main-container">
        <header>
            <h1>twarzobaza</h1>
        </header>
        <nav>
            <ul>
                <li>
                    <i class="fas fa-home"></i>
                    <a href="main.html">strona główna</a>
                </li>
                <li>
                    <i class="fas fa-user"></i>
                    <a href="user.html">konto użytkownika</a>
                </li>
                <li>
                    <i class="fas fa-search"></i>
                    <a href="search.html">wyszukaj w bazie</a>
                </li>
                <li>
                    <i class="fas fa-chart-bar"></i>
                    <a href="statistics.html">statystyki</a>
                </li>
                <li>
                    <i class="fas fa-sign-out-alt"></i>
                    <a href="login.html">wyloguj</a>
                </li>
            </ul>
        </nav>
        <main>
            <section class="statistics-form-container">
                <form class="statistics-form">
                    <label for="user">Użytkownik</label>
                    <select name="user" class="user-select">
                        <option value="jr">Joachim Rotenschwanz</option>
                        <option value="rk">Radosław Kuczniewicz</option>
                        <option value="rm">Robert Modlirzycki</option>
                        <option value="kk">Karol Karolewski</option>
                    </select>
                    <label for="groupby">Grupuj według</label>
                    <select name="groupby" class="groupby-select">
                        <option value="year">Rok</option>
                        <option value="month">Miesiąc</option>
                        <option value="day">Dzień</option>
                        <option value="weekday">Dzień tygodnia</option>
                    </select>
                    <button><i class="fas fa-arrow-right"></i></button>
                </form>
            </section>
            <section class="results-container">
                <h1>Wyniki</h1>
                <div class="results-table-container">
                    <table>
                        <tr>
                            <th>Rok</th>
                            <th>Liczba postów</th>
                        </tr>
                        <tr>
                            <td>2010</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2011</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2012</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2013</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2014</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2015</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2016</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2017</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2018</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2019</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2020</td>
                            <td>1000</td>
                        </tr>
                    </table>
                </div>
            </section>
            <br><br>
        </main>
    </div>
</body> 