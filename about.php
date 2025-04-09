<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>О проекте</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-b from-white to-gray-100 text-gray-800 font-sans">
  <!-- Хедер -->
  <header class="bg-white shadow-md p-6">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center">
      <h1 class="text-3xl font-bold text-indigo-600">Мультимедийное пособие</h1>
      <nav class="mt-4 md:mt-0">
        <ul class="flex flex-wrap gap-4 text-indigo-500 font-medium">
          <li><a href="index.html" class="hover:text-indigo-700">Главная</a></li>
          <li><a href="design.html" class="hover:text-indigo-700">Графический дизайн</a></li>
          <li><a href="multimedia.php" class="hover:text-indigo-700">Мультимедиа</a></li>
          <li><a href="tests.php" class="hover:text-indigo-700">Тесты</a></li>
          <li><a href="resources.php" class="hover:text-indigo-700">Ресурсы</a></li>
          <li><a href="about.php" class="hover:text-indigo-700 text-indigo-700 font-bold">О проекте</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Основной контент -->
  <main class="flex-1 px-6 py-10 max-w-6xl mx-auto space-y-12">
    <section class="text-center">
      <h2 class="text-3xl font-bold text-indigo-700 mb-6">О проекте</h2>
      <p class="text-xl leading-relaxed max-w-3xl mx-auto">Добро пожаловать в "Мультимедийное пособие" — образовательный ресурс, созданный для вдохновения и обучения в области графического дизайна и мультимедиа!</p>
    </section>

    <section class="bg-white rounded-xl shadow-md p-8">
      <h3 class="text-2xl font-semibold text-gray-900 mb-4">Что это такое?</h3>
      <p class="text-lg leading-relaxed text-gray-700">Этот проект — интерактивное пособие, которое объединяет теорию, практику и ресурсы для изучения графического дизайна и мультимедиа.</p>
    </section>

    <!-- Форма обратной связи -->
    <section class="bg-white rounded-xl shadow-md p-8">
      <h3 class="text-2xl font-semibold text-gray-900 mb-6">Обратная связь</h3>
      <form method="POST" action="about.php" class="space-y-6">
        <div>
          <label for="name" class="block text-lg font-medium text-gray-700">Ваше имя:</label>
          <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg" required>
        </div>
        <div>
          <label for="email" class="block text-lg font-medium text-gray-700">Email:</label>
          <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg" required>
        </div>
        <div>
          <label for="message" class="block text-lg font-medium text-gray-700">Сообщение:</label>
          <textarea id="message" name="message" class="w-full p-2 border rounded-lg" rows="4" required></textarea>
        </div>
        <input type="submit" name="submit_feedback" value="Отправить" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
      </form>

  
      <?php
      if (isset($_POST['submit_feedback'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        $feedback = "Имя: $name, Email: $email, Сообщение: $message (" . date("d.m.Y H:i") . ")\n";
        file_put_contents('feedback.txt', $feedback, FILE_APPEND);
        echo "<p class='mt-4 text-green-600'>Спасибо за ваш отзыв!</p>";
      }
      ?>
    </section>
  </main>

  <!-- Футер -->
  <footer class="bg-gray-800 text-gray-300 py-8 mt-auto">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
      <div class="text-center md:text-left">
        <p class="text-sm">© 2025 <span class="font-semibold text-indigo-400">Мультимедийное пособие</span>. Все права защищены.</p>
      </div>
      <div class="text-center">
        <ul class="flex flex-wrap justify-center gap-6 text-sm">
          <li><a href="index.html" class="hover:text-indigo-400 transition duration-300">Главная</a></li>
          <li><a href="design.html" class="hover:text-indigo-400 transition duration-300">Дизайн</a></li>
          <li><a href="multimedia.php" class="hover:text-indigo-400 transition duration-300">Мультимедиа</a></li>
          <li><a href="resources.php" class="hover:text-indigo-400 transition duration-300">Ресурсы</a></li>
        </ul>
      </div>
      <div class="text-center md:text-right">
        <div class="flex justify-center md:justify-end gap-5">
          <a href="#" class="text-gray-300 hover:text-indigo-400 transition duration-300"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12c0 5.08 3.76 9.23 8.65 9.91v-7h-2.6v-2.91h2.6v-2.22c0-2.58 1.58-3.98 3.88-3.98.77 0 1.62.14 2.43.41v2.67h-1.36c-1.34 0-1.6.64-1.6 1.57v2.06h2.87l-.46 2.91h-2.41v7c4.89-.68 8.65-4.83 8.65-9.91C22 6.48 17.52 2 12 2z"/></svg></a>
          <a href="#" class="text-gray-300 hover:text-indigo-400 transition duration-300"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5.47 15.24c-.72.52-1.91.76-2.94.36-.88-.34-1.38-1.24-1.81-2.18-.47-1.03-.88-2.11-1.34-3.15-.24-.54-.51-1.06-.83-1.55-.45-.7-1.06-1.25-1.85-1.42-.47-.1-.95-.03-1.38.22-.44.25-.76.67-.76 1.16 0 .62.33 1.18.86 1.53.67.44 1.47.56 2.23.56.34 0 .67-.06 1-.17.56-.19 1.03-.56 1.41-1.03.47-.58.88-1.2 1.28-1.84.33-.53.62-1.08.87-1.65.25-.57.41-1.17.41-1.79 0-.74-.24-1.43-.66-2-.47-.64-1.19-1.06-2-1.06-.47 0-.94.11-1.38.33-.47.24-.88.61-1.19 1.03-.25.35-.44.74-.56 1.14-.13.43-.19.88-.19 1.33 0 .66.16 1.31.47 1.91.34.66.88 1.23 1.53 1.62.66.39 1.44.59 2.22.59.62 0 1.22-.14 1.78-.41.59-.28 1.09-.72 1.47-1.28.38-.56.62-1.19.72-1.85.09-.58.03-1.16-.19-1.72-.22-.56-.59-1.06-1.06-1.44-.47-.38-1.03-.66-1.62-.81-.59-.15-1.19-.19-1.78-.13-.59.06-1.16.25-1.66.56-.5.31-.91.74-1.22 1.25-.31.5-.5 1.06-.56 1.66-.06.59.03 1.19.25 1.75.22.56.59 1.06 1.06 1.44.47.38 1.03.66 1.62.81.59.15 1.19.19 1.78.13.59-.06 1.16-.25 1.66-.56.5-.31.91-.74 1.22-1.25.31-.5.5-1.06.56-1.66.06-.59-.03-1.19-.25-1.75-.19-.5-.5-.94-.91-1.28z"/></svg></a>
          <a href="#" class="text-gray-300 hover:text-indigo-400 transition duration-300"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm2-8c0 .55-.45 1-1 1s-1-.45-1-1 .45-1 1-1 1 .45 1 1z"/></svg></a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>