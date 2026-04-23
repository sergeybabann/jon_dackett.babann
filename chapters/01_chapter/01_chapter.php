<?php
// Данные для урока
$pageTitle = 'Глава 1: Переменные, выражения и операторы';
$lessonNumber = 1;
$lessonTitle = 'Переменные, выражения и операторы';

// Навигация
$prevLesson = null;
$nextLesson = '../02_chapter/02_chapter.php';

// Содержимое урока (HTML)
$lessonContent = '
    <h2>Практическое  выполнение кода</h2>
    <p> 
    Переменные<br>
    <a href="practice/1.1_file.php" target="_blank">🔗 1.1_file.php →</a>
    <a href="practice/1.2_file.php" target="_blank">🔗 1.2_file.php →</a>
    <a href="practice/variables.php" target="_blank">🔗 variables.php →</a>
    <a href="practice/updating-variables.php" target="_blank">🔗 updating-variables.php →</a>
    </p>

    <p>
    Массивы (ассоциативные, индексированные)<br>
    <a href="practice/1.1_file.php" target="_blank">🔗 1.1_file.php →</a>
    <a href="practice/associative-arrays.php" target="_blank">🔗 associative-arrays.php →</a>
    <a href="practice/indexed-arrays.php" target="_blank">🔗 indexed-arrays.php →</a>
    </p>

    <p>Обновление массивов<br>
    <a href="practice/updating-arrays.php" target="_blank">🔗 updating-arrays.php →</a>
    </p>

    <p>Многомерные массивы<br>
    <a href="practice/multidimensional-arrays.php" target="_blank">🔗 multidimensional-arrays.php →</a>
    </p>

    <p>Сокращенная запись команды echo<br>
    <a href="practice/abbreviated_echo.php" target="_blank">🔗 abbrevated_echo.php →</a>
    </p>

    <p>Строковые операторы<br>
    <a href="practice/combining_strings.php" target="_blank">🔗  combining_strings.php →</a>
    </p>

    <p>Использование операторов сравнения<br>
    <a href="practice/comparison_operators.php" target="_blank">🔗  comparison_operators.php →</a>
    </p>

    <p>Логические операторы<br>
    <a href="practice/logical-operators.php" target="_blank">🔗  logical_operators.php →</a>
    </p>

    <p>Приведение типов<br>
    <a href="practice/strings.php" target="_blank">🔗  strings.php →</a>
    </p>

    <h3>Простейшая страница на PHP</h3>


';

// Подключаем шаблон урока
include '../../templates/lesson_template.php';
?>