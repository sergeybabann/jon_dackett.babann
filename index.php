<?php
// Данные для главной страницы
$pageTitle = 'Главная | Книга - PHP и MySQL. Серверная веб-разработка.';

// Массив с уроками
$lessons = [
    [
        'title' => 'Глава 1',
        'description' => 'Переменные, выражения и операторы',
        'link' => 'chapters/01_chapter/01_chapter.php'
    ],
    [
        'title' => 'Глава 2',
        'description' => 'Управляющие конструкции',
        'link' => 'chapters/02_chapter/02_chapter.php'
    ],
    [
        'title' => 'Глава 3',
        'description' => 'Функции',
        'link' => 'chapters/03_chapter/03_chapter.php'
    ],
    [
        'title' => 'Глава 4',
        'description' => 'Классы и объекты',
        'link' => 'chapters/04_chapter/04_chapter.php'
    ],
    [
        'title' => 'Глава 5',
        'description' => 'Встроенные функции',
        'link' => 'chapters/05_chapter/05_chapter.php'
    ],
    [
        'title' => 'Глава 6',
        'description' => 'Получение данных из браузера',
        'link' => 'chapters/06_chapter/06_chapter.php'
    ],
    [
        'title' => 'Глава 7',
        'description' => 'Изображения и файлы',
        'link' => 'chapters/07_chapter/07_chapter.php'
    ],
    [
        'title' => 'Глава 8',
        'description' => 'Дата и время',
        'link' => 'chapters/08_chapter/08_chapter.php'
    ],
    [
        'title' => 'Глава 9',
        'description' => 'Cookie и сессии',
        'link' => 'chapters/09_chapter/09_chapter.php'
    ],
    [
        'title' => 'Глава 10',
        'description' => 'Обработка ошибок',
        'link' => 'chapters/10_chapter/10_chapter.php'
    ],
    [
        'title' => 'Глава 11',
        'description' => 'Язык структурированных запросов (SQL)',
        'link' => 'chapters/11_chapter/11_chapter.php'
    ],
    [
        'title' => 'Глава 12',
        'description' => 'Получение и вывод информации из базы данных',
        'link' => 'chapters/12_chapter/12_chapter.php'
    ],
    [
        'title' => 'Глава 13',
        'description' => 'Изменение информации в базе данных',
        'link' => 'chapters/13_chapter/13_chapter.php'
    ],
    [
        'title' => 'Глава 14',
        'description' => 'Рефакторинг и внедрение зависимостей',
        'link' => 'chapters/14_chapter/14_chapter.php'
    ],
    [
        'title' => 'Глава 15',
        'description' => 'Пространства имен и библиотеки',
        'link' => 'chapters/15_chapter/15_chapter.php'
    ],
    [
        'title' => 'Глава 16',
        'description' => 'Регистрация пользователей',
        'link' => 'chapters/16_chapter/16_chapter.php'
    ],
    [
        'title' => 'Глава 17',
        'description' => 'Добавление нового функционала',
        'link' => 'chapters/17_chapter/17_chapter.php'
    ]    
];

// Подключаем шапку
include 'templates/header.php';
?>

<!-- Hero блок -->
<div class="hero">
    <h1>📚 PHP и MySQL. Серверная веб-разработка. </h1>
    <p>Книга авторов<br> Дакетт Джон.</p>
    <div class="badge">Всего Глав: <?php echo count($lessons); ?></div>
</div>

<!-- Секция с уроками -->
<div class="lessons-section">
    <h2>📖 Содержание</h2>
    
    <div class="lessons-grid">
        <?php foreach ($lessons as $index => $lesson): ?>
        <div class="lesson-card">
            <div class="lesson-number"><?php echo $index + 1; ?></div>
            <h3><?php echo htmlspecialchars($lesson['title']); ?></h3>
            <p><?php echo htmlspecialchars($lesson['description']); ?></p>
            <a href="<?php echo $lesson['link']; ?>" class="lesson-link">Перейти к главе →</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// Подключаем подвал
include 'templates/footer.php';
?>