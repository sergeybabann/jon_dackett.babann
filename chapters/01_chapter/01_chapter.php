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
    <div class="container">
    <ul>
    <li>Переменные</li>
    <li>Операторы</li>
    </ul>
    </div>
    
    <h2>Практическое  выполнение кода</h2>
    <a href="practice/1.1_file.php" target="_blank">🔗 1.1_file.php →</a>
    <a href="practice/1.2_file.php" target="_blank">🔗 1.2_file.php →</a>
';

// Подключаем шаблон урока
include '../../templates/lesson_template.php';
?>