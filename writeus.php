<?php
    session_start();

    /*if ($_GET['exit'] == 1){
        session_unset();
        session_destroy();
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
    </script>
</head>
<body>

    <div class="container">
        <div class="header">
           <div>
                <section class="logo" title="BS">
                        <a href="index.php"> <img src="img/logo.jpg" alt="BS" hspace="5px"> BookShop </a>
                </section>
                <nav class="menu">
                        <ul>
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="catalog/catalog.php">Каталог</a></li>
                            <li><a href="contacts.php">Контакты</a></li>
                            <li><a href="writeus.php">Обратная связь</a></li>
                        </ul>
                </nav>
            </div>            

            <?php
                    if (!empty($_SESSION['login']) and !empty($_SESSION['id']))
                            echo"<a class='reg_link' href=''>Личный кабинет покупателя</a>";
                    else{
                        echo"<a class='reg_link' href='reg/index_reg.php'>Личный кабинет покупателя</a>";
                    }
            ?>
        </div>
        <div class="content">
            <h1>Напишите нам</h1>
            <form>
                <table>
                    <tr>
                        <td><p>Ваше имя</p></td>
                        <td><input class="text" type="text" id="t1"></td>
                        <td><p></p></td>
                    </tr>
                    <tr>
                        <td><p>E-mail</p></td>
                        <td><input class="text" type="text" id="t2"></td>
                        <td><p id="email"></p></td>
                    </tr>
                    <tr>
                        <td><p>Тема</p></td>
                        <td><input class="text" type="text" id="t3"></td>
                        <td><p></p></td>
                    </tr>
                </table>
                <p>Ваш вопрос или предложение<br>
                <textarea class="text" name="t4"></textarea></p>
                <button>Отправить</button>


            </form>
            <br><br><br>
            <p>Сформировать файл: </p><button onclick="myFun();">Сформировать</button>
            <p></p>
            <a download="testfile.txt" id="test" href="#">Скачать файл с данными формы</a>
            <script type="application/javascript">
                function myFun(){
                    var type = 'data:application/octet-stream;base64, ';
                    var name = 'Name: ' + translit(document.getElementById("t1").value) + ' ';
                    var email = 'E-mail: ' + translit(document.getElementById("t2").value) + ' ';
                    var subject = 'Subject: ' + translit(document.getElementById("t3").value) + ' ';
                    var question = 'Question: ';
                    var text = name.concat(email, subject, question);
                    var base = btoa(text);
                    var res = type + base;
                    document.getElementById('test').href = res;
                }

                function translit(s){
                    // Символ, на который будут заменяться все спецсимволы
                    var space = '-';
                    // Берем значение из нужного поля и переводим в нижний регистр
                    var text = s.toLowerCase();

                    // Массив для транслитерации
                    var transl = {
                    'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'ж': 'zh',
                    'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
                    'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
                    'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space, 'ы': 'y', 'ь': space, 'э': 'e', 'ю': 'yu', 'я': 'ya',
                    ' ': space, '_': space, '`': space, '~': space, '!': space, '@': space,
                    '#': space, '$': space, '%': space, '^': space, '&': space, '*': space,
                    '(': space, ')': space,'-': space, '\=': space, '+': space, '[': space,
                    ']': space, '\\': space, '|': space, '/': space,'.': space, ',': space,
                    '{': space, '}': space, '\'': space, '"': space, ';': space, ':': space,
                    '?': space, '<': space, '>': space, '№':space
                    }

                    var result = '';
                    var curent_sim = '';

                    for(i=0; i < text.length; i++) {
                        // Если символ найден в массиве то меняем его
                        if(transl[text[i]] != undefined) {
                             if(curent_sim != transl[text[i]] || curent_sim != space){
                                 result += transl[text[i]];
                                 curent_sim = transl[text[i]];
                                                                            }
                        }
                        // Если нет, то оставляем так как есть
                        else {
                            result += text[i];
                            curent_sim = text[i];
                        }
                    }

                    result = TrimStr(result);

                    return result;

                }

                function TrimStr(s) {
                    s = s.replace(/^-/, '');
                    return s.replace(/-$/, '');
                }

            </script>
        </div>
        <div class="footer">
            &copy; Все права защищены
        </div>

    <!--http://qaru.site/questions/714653/writing-data-to-a-local-text-file-with-javascript
    	https://xdan.ru/working-with-files-in-javascript-part-1-the-basics.html-->
    </div>
</body>
</html>
