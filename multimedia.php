<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мультимедиа</title>
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
          <li><a href="multimedia.html" class="hover:text-indigo-700 text-indigo-700 font-bold">Мультимедиа</a></li>
          <li><a href="tests.php" class="hover:text-indigo-700">Тесты</a></li>
          <li><a href="resources.php" class="hover:text-indigo-700">Ресурсы</a></li>
          <li><a href="about.html" class="hover:text-indigo-700">О проекте</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="flex-1 px-6 py-10 max-w-5xl mx-auto space-y-12">
    <!-- Введение -->
    <section class="text-center">
      <h2 class="text-3xl font-bold text-indigo-700 mb-6">Погружение в мультимедиа</h2>
      <p class="text-xl leading-relaxed max-w-3xl mx-auto">Мультимедиа — это мощный способ объединить текст, звук, видео и анимацию, чтобы рассказать историю или донести идею. Узнайте, как создавать захватывающий контент для любых целей!</p>
    </section>

    <!-- Что такое мультимедиа -->
    <section>
      <h2 class="text-2xl font-semibold text-gray-900 mb-4 border-b pb-2 border-indigo-200">Что такое мультимедиа?</h2>
      <p class="text-lg leading-relaxed">Мультимедиа — это сочетание различных форм контента: текста, изображений, видео, звука и интерактивных элементов. Она используется в рекламе, образовании, играх и социальных сетях, чтобы сделать информацию более доступной и запоминающейся.</p>
      <div class="mt-6 bg-indigo-50 p-6 rounded-xl shadow-md">
        <p class="text-xl italic text-indigo-700">Пример: короткий анимационный ролик может объяснить сложную концепцию лучше, чем страница текста.</p>
      </div>
    </section>

    <!-- Примеры и форматы -->
    <section>
      <h2 class="text-2xl font-semibold text-gray-900 mb-4 border-b pb-2 border-indigo-200">Примеры и форматы</h2>
      <p class="text-lg leading-relaxed">Мультимедиа включает множество форматов:</p>
      <ul class="list-disc pl-6 space-y-2 text-lg mt-2">
        <li><strong>Видео</strong>: MP4, AVI — для фильмов, рекламы, уроков.</li>
        <li><strong>Аудио</strong>: MP3, WAV — подкасты, музыка, звуковые эффекты.</li>
        <li><strong>Анимация</strong>: GIF, SVG — короткие циклы или интерактивная графика.</li>
        <li><strong>Изображения</strong>: JPG, PNG — статичные визуальные элементы.</li>
      </ul>
      <p class="text-lg leading-relaxed mt-4">Современные веб-технологии (HTML5, CSS, JavaScript) позволяют легко встраивать мультимедиа на сайты, делая их динамичными и привлекательными.</p>
    </section>

    <!-- Инструменты -->
    <section>
      <h2 class="text-2xl font-semibold text-gray-900 mb-4 border-b pb-2 border-indigo-200">Полезные инструменты</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-xl shadow-md">
          <h3 class="text-xl font-semibold text-indigo-600 mb-2">CapCut</h3>
          <p class="text-lg">Бесплатный видеоредактор для новичков с эффектами и шаблонами.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-md">
          <h3 class="text-xl font-semibold text-indigo-600 mb-2">Audacity</h3>
          <p class="text-lg">Программа для записи и редактирования аудио, простая и мощная.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-md">
          <h3 class="text-xl font-semibold text-indigo-600 mb-2">Adobe Premiere Pro</h3>
          <p class="text-lg">Профессиональный инструмент для монтажа видео.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-md">
          <h3 class="text-xl font-semibold text-indigo-600 mb-2">Blender</h3>
          <p class="text-lg">Бесплатная программа для 3D-анимации и визуализации.</p>
        </div>
      </div>
    </section>

    <!-- Видеоурок -->
    <section>
      <h2 class="text-2xl font-semibold text-gray-900 mb-4 border-b pb-2 border-indigo-200">Видеоурок: Основы монтажа видео</h2>
      <div class="aspect-w-16 aspect-h-9">
        <iframe class="w-full h-96 rounded-xl shadow-md" src="https://www.youtube.com/embed/5X1jqMGCBPU" title="Основы монтажа видео" frameborder="0" allowfullscreen></iframe>
      </div>
      <p class="text-lg mt-4 text-center">Узнайте, как монтировать видео с нуля, используя бесплатные инструменты!</p>
    </section>

    <!-- Призыв к действию -->
    <section class="bg-indigo-100 p-8 rounded-xl shadow-md text-center">
      <h2 class="text-2xl font-bold text-indigo-700 mb-4">Создайте своё мультимедиа</h2>
      <p class="text-lg leading-relaxed max-w-2xl mx-auto">Попробуйте сделать ролик, анимацию или аудиозапись уже сегодня. Начните с простого и вдохновляйтесь нашими советами!</p>
      <a href="index.html" class="inline-block mt-6 bg-indigo-600 text-white py-3 px-6 rounded-full hover:bg-indigo-700 transition duration-300">Вернуться на главную</a>
    </section>
  </main>

  <footer class="bg-gray-800 text-gray-300 py-8 mt-auto">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
      <div class="text-center md:text-left">
        <p class="text-sm">© 2025 <span class="font-semibold text-indigo-400">Мультимедийное пособие</span>. Все права защищены.</p>
      </div>
      <div class="text-center">
        <ul class="flex flex-wrap justify-center gap-6 text-sm">
          <li><a href="index.html" class="hover:text-indigo-400 transition duration-300">Главная</a></li>
          <li><a href="design.html" class="hover:text-indigo-400 transition duration-300">Дизайн</a></li>
          <li><a href="multimedia.html" class="hover:text-indigo-400 transition duration-300">Мультимедиа</a></li>
          <li><a href="tests.php" class="hover:text-indigo-400 transition duration-300">Тесты</a></li>
          <li><a href="resources.php" class="hover:text-indigo-400 transition duration-300">Ресурсы</a></li>
        </ul>
      </div>
      <div class="text-center md:text-right">
        <div class="flex justify-center md:justify-end gap-5">
          <a href="#" class="text-gray-300 hover:text-indigo-400 transition duration-300">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C6.48 2 2 6.48 2 12c0 5.08 3.76 9.23 8.65 9.91v-7h-2.6v-2.91h2.6v-2.22c0-2.58 1.58-3.98 3.88-3.98.77 0 1.62.14 2.43.41v2.67h-1.36c-1.34 0-1.6.64-1.6 1.57v2.06h2.87l-.46 2.91h-2.41v7c4.89-.68 8.65-4.83 8.65-9.91C22 6.48 17.52 2 12 2z"/>
            </svg>
          </a>
          <a href="#" class="text-gray-300 hover:text-indigo-400 transition duration-300">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5.47 15.24c-.72.52-1.91.76-2.94.36-.88-.34-1.38-1.24-1.81-2.18-.47-1.03-.88-2.11-1.34-3.15-.24-.54-.51-1.06-.83-1.55-.45-.7-1.06-1.25-1.85-1.42-.47-.1-.95-.03-1.38.22-.44.25-.76.67-.76 1.16 0 .62.33 1.18.86 1.53.67.44 1.47.56 2.23.56.34 0 .67-.06 1-.17.56-.19 1.03-.56 1.41-1.03.47-.58.88-1.2 1.28-1.84.33-.53.62-1.08.87-1.65.25-.57.41-1.17.41-1.79 0-.74-.24-1.43-.66-2-.47-.64-1.19-1.06-2-1.06-.47 0-.94.11-1.38.33-.47.24-.88.61-1.19 1.03-.25.35-.44.74-.56 1.14-.13.43-.19.88-.19 1.33 0 .66.16 1.31.47 1.91.34.66.88 1.23 1.53 1.62.66.39 1.44.59 2.22.59.62 0 1.22-.14 1.78-.41.59-.28 1.09-.72 1.47-1.28.38-.56.62-1.19.72-1.85.09-.58.03-1.16-.19-1.72-.22-.56-.59-1.06-1.06-1.44-.47-.38-1.03-.66-1.62-.81-.59-.15-1.19-.19-1.78-.13-.59.06-1.16.25-1.66.56-.5.31-.91.74-1.22 1.25-.31.5-.5 1.06-.56 1.66-.06.59.03 1.19.25 1.75.22.56.59 1.06 1.06 1.44.47.38 1.03.66 1.62.81.59.15 1.19.19 1.78.13.59-.06 1.16-.25 1.66-.56.5-.31.91-.74 1.22-1.25.31-.5.5-1.06.56-1.66.06-.59-.03-1.19-.25-1.75-.19-.5-.5-.94-.91-1.28z"/>
            </svg>
          </a>
          <a href="#" class="text-gray-300 hover:text-indigo-400 transition duration-300">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm2-8c0 .55-.45 1-1 1s-1-.45-1-1 .45-1 1-1 1 .45 1 1z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>