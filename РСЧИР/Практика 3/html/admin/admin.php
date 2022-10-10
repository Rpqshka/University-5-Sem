<html lang="en">
<head>
    <title>Админ-панель</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Управление посетителями библиотеки</h1>
<h2>Добавить читателя</h2>
<form action="add.php" method="get">
    <div class="flex-row logo">
    </div>
    <div class="flex-row">
      <input id="username" class='input' placeholder='Фамилия' type='text' name="name" required>
    </div>
    <div class="flex-row">
      <input id="book" class='input' placeholder='Книга' type='text' name="book" required>
    </div>
    <input class='submit' type='submit' value='Добавить'>
  </form>
  <h2>Удалить читателя</h2>
  <form action="del.php" method="get">
    <div class="flex-row logo">
    </div>
    <div class="flex-row">
      <input id="username" class='input' placeholder='Id' type='text' name="id" required>
    </div>
    <input class='submit' type='submit' value='Удалить'>
  </form>

</body>
</html>