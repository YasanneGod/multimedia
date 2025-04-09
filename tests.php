<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Тесты</title>
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
          <li><a href="tests.php" class="hover:text-indigo-700 text-indigo-700 font-bold">Тесты</a></li>
          <li><a href="resources.php" class="hover:text-indigo-700">Ресурсы</a></li>
          <li><a href="about.php" class="hover:text-indigo-700">О проекте</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Основной контент -->
  <main class="flex-1 px-6 py-10 max-w-5xl mx-auto space-y-12">
    <section class="text-center">
      <h2 class="text-3xl font-bold text-indigo-700 mb-6">Проверьте свои знания</h2>
      <p class="text-xl leading-relaxed max-w-3xl mx-auto">Пройдите тесты по графическому дизайну и мультимедиа, чтобы оценить свои навыки и узнать что-то новое!</p>
    </section>

    <!-- Тест 1: Основы графического дизайна -->
    <section class="bg-white rounded-xl shadow-md p-8">
      <h2 class="text-2xl font-semibold text-gray-900 mb-6">Тест 1: Основы графического дизайна</h2>
      <form id="test1" class="space-y-6" method="POST" action="tests.php">
        <div>
          <p class="text-lg font-medium">1. Что является основной целью графического дизайна?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q1_1" value="a" class="mr-2"> Создать красивую картинку</li>
            <li><input type="radio" name="q1_1" value="b" class="mr-2"> Передать или усилить сообщение</li>
            <li><input type="radio" name="q1_1" value="c" class="mr-2"> Использовать как можно больше цветов</li>
            <li><input type="radio" name="q1_1" value="d" class="mr-2"> Заполнить всё пространство элементами</li>
          </ul>
          <p id="result1_1" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">2. Какой элемент дизайна отвечает за настроение через оттенки?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q1_2" value="a" class="mr-2"> Линия</li>
            <li><input type="radio" name="q1_2" value="b" class="mr-2"> Форма</li>
            <li><input type="radio" name="q1_2" value="c" class="mr-2"> Цвет</li>
            <li><input type="radio" name="q1_2" value="d" class="mr-2"> Текстура</li>
          </ul>
          <p id="result1_2" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">3. Какой принцип дизайна помогает выделить главный элемент?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q1_3" value="a" class="mr-2"> Баланс</li>
            <li><input type="radio" name="q1_3" value="b" class="mr-2"> Акцент</li>
            <li><input type="radio" name="q1_3" value="c" class="mr-2"> Повторение</li>
            <li><input type="radio" name="q1_3" value="d" class="mr-2"> Контраст</li>
          </ul>
          <p id="result1_3" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">4. Какой стиль дизайна использует необработанные текстуры?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q1_4" value="a" class="mr-2"> Плоский стиль</li>
            <li><input type="radio" name="q1_4" value="b" class="mr-2"> Ар-деко</li>
            <li><input type="radio" name="q1_4" value="c" class="mr-2"> Брутализм</li>
            <li><input type="radio" name="q1_4" value="d" class="mr-2"> Классический стиль</li>
          </ul>
          <p id="result1_4" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">5. Что из перечисленного относится к продуктам графического дизайна?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q1_5" value="a" class="mr-2"> Музыкальный трек</li>
            <li><input type="radio" name="q1_5" value="b" class="mr-2"> Упаковка продукции</li>
            <li><input type="radio" name="q1_5" value="c" class="mr-2"> Видеоредактор</li>
            <li><input type="radio" name="q1_5" value="d" class="mr-2"> Код программы</li>
          </ul>
          <p id="result1_5" class="mt-2 text-sm font-medium"></p>
        </div>
        <button type="button" onclick="checkTest(1)" class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">Проверить</button>
        <input type="submit" name="submit1" value="Сохранить результат" class="mt-4 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
      </form>
      <div id="score1" class="mt-4 text-lg font-medium text-indigo-700"></div>
    </section>

    <!-- Тест 2: Основы мультимедиа -->
    <section class="bg-white rounded-xl shadow-md p-8">
      <h2 class="text-2xl font-semibold text-gray-900 mb-6">Тест 2: Основы мультимедиа</h2>
      <form id="test2" class="space-y-6" method="POST" action="tests.php">
        <div>
          <p class="text-lg font-medium">1. Что из перечисленного является компонентом мультимедиа?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q2_1" value="a" class="mr-2"> Текст</li>
            <li><input type="radio" name="q2_1" value="b" class="mr-2"> Программный код</li>
            <li><input type="radio" name="q2_1" value="c" class="mr-2"> Вирусы</li>
            <li><input type="radio" name="q2_1" value="d" class="mr-2"> Операционная система</li>
          </ul>
          <p id="result2_1" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">2. Какой формат видео обеспечивает высокое качество сжатия?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q2_2" value="a" class="mr-2"> AVI</li>
            <li><input type="radio" name="q2_2" value="b" class="mr-2"> MP4</li>
            <li><input type="radio" name="q2_2" value="c" class="mr-2"> FLV</li>
            <li><input type="radio" name="q2_2" value="d" class="mr-2"> WMV</li>
          </ul>
          <p id="result2_2" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">3. Какой тип мультимедиа чаще используется для подкастов?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q2_3" value="a" class="mr-2"> Видео</li>
            <li><input type="radio" name="q2_3" value="b" class="mr-2"> Аудио</li>
            <li><input type="radio" name="q2_3" value="c" class="mr-2"> Анимация</li>
            <li><input type="radio" name="q2_3" value="d" class="mr-2"> Текст</li>
          </ul>
          <p id="result2_3" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">4. Какой инструмент часто используется для создания анимации?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q2_4" value="a" class="mr-2"> Photoshop</li>
            <li><input type="radio" name="q2_4" value="b" class="mr-2"> After Effects</li>
            <li><input type="radio" name="q2_4" value="c" class="mr-2"> Canva</li>
            <li><input type="radio" name="q2_4" value="d" class="mr-2"> Word</li>
          </ul>
          <p id="result2_4" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">5. Какой формат изображения поддерживает прозрачность?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q2_5" value="a" class="mr-2"> JPEG</li>
            <li><input type="radio" name="q2_5" value="b" class="mr-2"> PNG</li>
            <li><input type="radio" name="q2_5" value="c" class="mr-2"> BMP</li>
            <li><input type="radio" name="q2_5" value="d" class="mr-2"> GIF</li>
          </ul>
          <p id="result2_5" class="mt-2 text-sm font-medium"></p>
        </div>
        <button type="button" onclick="checkTest(2)" class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">Проверить</button>
        <input type="submit" name="submit2" value="Сохранить результат" class="mt-4 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
      </form>
      <div id="score2" class="mt-4 text-lg font-medium text-indigo-700"></div>
    </section>

    <!-- Тест 3: Инструменты дизайна -->
    <section class="bg-white rounded-xl shadow-md p-8">
      <h2 class="text-2xl font-semibold text-gray-900 mb-6">Тест 3: Инструменты дизайна</h2>
      <form id="test3" class="space-y-6" method="POST" action="tests.php">
        <div>
          <p class="text-lg font-medium">1. Какой инструмент Adobe используется для работы с векторной графикой?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q3_1" value="a" class="mr-2"> Photoshop</li>
            <li><input type="radio" name="q3_1" value="b" class="mr-2"> Illustrator</li>
            <li><input type="radio" name="q3_1" value="c" class="mr-2"> Premiere Pro</li>
            <li><input type="radio" name="q3_1" value="d" class="mr-2"> After Effects</li>
          </ul>
          <p id="result3_1" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">2. Какой инструмент лучше подходит для создания интерфейсов?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q3_2" value="a" class="mr-2"> Blender</li>
            <li><input type="radio" name="q3_2" value="b" class="mr-2"> Figma</li>
            <li><input type="radio" name="q3_2" value="c" class="mr-2"> Canva</li>
            <li><input type="radio" name="q3_2" value="d" class="mr-2"> Audacity</li>
          </ul>
          <p id="result3_2" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">3. Какой инструмент используется для редактирования аудио?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q3_3" value="a" class="mr-2"> Audacity</li>
            <li><input type="radio" name="q3_3" value="b" class="mr-2"> Photoshop</li>
            <li><input type="radio" name="q3_3" value="c" class="mr-2"> Illustrator</li>
            <li><input type="radio" name="q3_3" value="d" class="mr-2"> InDesign</li>
          </ul>
          <p id="result3_3" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">4. Какой инструмент Adobe предназначен для видеомонтажа?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q3_4" value="a" class="mr-2"> Photoshop</li>
            <li><input type="radio" name="q3_4" value="b" class="mr-2"> Premiere Pro</li>
            <li><input type="radio" name="q3_4" value="c" class="mr-2"> Lightroom</li>
            <li><input type="radio" name="q3_4" value="d" class="mr-2"> Acrobat</li>
          </ul>
          <p id="result3_4" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">5. Какой инструмент бесплатен и подходит для 3D-моделирования?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q3_5" value="a" class="mr-2"> Maya</li>
            <li><input type="radio" name="q3_5" value="b" class="mr-2"> Blender</li>
            <li><input type="radio" name="q3_5" value="c" class="mr-2"> 3ds Max</li>
            <li><input type="radio" name="q3_5" value="d" class="mr-2"> Cinema 4D</li>
          </ul>
          <p id="result3_5" class="mt-2 text-sm font-medium"></p>
        </div>
        <button type="button" onclick="checkTest(3)" class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">Проверить</button>
        <input type="submit" name="submit3" value="Сохранить результат" class="mt-4 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
      </form>
      <div id="score3" class="mt-4 text-lg font-medium text-indigo-700"></div>
    </section>

    <!-- Тест 4: Форматы файлов -->
    <section class="bg-white rounded-xl shadow-md p-8">
      <h2 class="text-2xl font-semibold text-gray-900 mb-6">Тест 4: Форматы файлов</h2>
      <form id="test4" class="space-y-6" method="POST" action="tests.php">
        <div>
          <p class="text-lg font-medium">1. Какой формат изображения не поддерживает сжатие с потерями?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q4_1" value="a" class="mr-2"> JPEG</li>
            <li><input type="radio" name="q4_1" value="b" class="mr-2"> PNG</li>
            <li><input type="radio" name="q4_1" value="c" class="mr-2"> GIF</li>
            <li><input type="radio" name="q4_1" value="d" class="mr-2"> BMP</li>
          </ul>
          <p id="result4_1" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">2. Какой аудиоформат обеспечивает лучшее сжатие?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q4_2" value="a" class="mr-2"> WAV</li>
            <li><input type="radio" name="q4_2" value="b" class="mr-2"> MP3</li>
            <li><input type="radio" name="q4_2" value="c" class="mr-2"> FLAC</li>
            <li><input type="radio" name="q4_2" value="d" class="mr-2"> AAC</li>
          </ul>
          <p id="result4_2" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">3. Какой формат видео устарел и редко используется?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q4_3" value="a" class="mr-2"> MP4</li>
            <li><input type="radio" name="q4_3" value="b" class="mr-2"> AVI</li>
            <li><input type="radio" name="q4_3" value="c" class="mr-2"> MOV</li>
            <li><input type="radio" name="q4_3" value="d" class="mr-2"> FLV</li>
          </ul>
          <p id="result4_3" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">4. Какой формат поддерживает анимацию?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q4_4" value="a" class="mr-2"> JPEG</li>
            <li><input type="radio" name="q4_4" value="b" class="mr-2"> PNG</li>
            <li><input type="radio" name="q4_4" value="c" class="mr-2"> GIF</li>
            <li><input type="radio" name="q4_4" value="d" class="mr-2"> TIFF</li>
          </ul>
          <p id="result4_4" class="mt-2 text-sm font-medium"></p>
        </div>
        <div>
          <p class="text-lg font-medium">5. Какой формат чаще используется для хранения векторной графики?</p>
          <ul class="list-disc pl-6 text-lg">
            <li><input type="radio" name="q4_5" value="a" class="mr-2"> SVG</li>
            <li><input type="radio" name="q4_5" value="b" class="mr-2"> JPEG</li>
            <li><input type="radio" name="q4_5" value="c" class="mr-2"> PNG</li>
            <li><input type="radio" name="q4_5" value="d" class="mr-2"> BMP</li>
          </ul>
          <p id="result4_5" class="mt-2 text-sm font-medium"></p>
        </div>
        <button type="button" onclick="checkTest(4)" class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">Проверить</button>
        <input type="submit" name="submit4" value="Сохранить результат" class="mt-4 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
      </form>
      <div id="score4" class="mt-4 text-lg font-medium text-indigo-700"></div>
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

  <!-- PHP для сохранения результатов -->
  <?php
  function saveTestResult($testNum, $answers, $correct) {
    $score = 0;
    $total = 5;
    foreach ($correct as $key => $value) {
      if ($answers[$key] === $value) $score++;
    }
    $result = "Тест $testNum: $score из $total (" . date("d.m.Y H:i") . ")\n";
    file_put_contents('results.txt', $result, FILE_APPEND);
    echo "<script>alert('Результат сохранён: $score из $total');</script>";
  }

  if (isset($_POST['submit1'])) {
    $answers = [
      'q1_1' => $_POST['q1_1'] ?? 'не выбрано',
      'q1_2' => $_POST['q1_2'] ?? 'не выбрано',
      'q1_3' => $_POST['q1_3'] ?? 'не выбрано',
      'q1_4' => $_POST['q1_4'] ?? 'не выбрано',
      'q1_5' => $_POST['q1_5'] ?? 'не выбрано'
    ];
    $correct = ['q1_1' => 'b', 'q1_2' => 'c', 'q1_3' => 'b', 'q1_4' => 'c', 'q1_5' => 'b'];
    saveTestResult(1, $answers, $correct);
  }

  if (isset($_POST['submit2'])) {
    $answers = [
      'q2_1' => $_POST['q2_1'] ?? 'не выбрано',
      'q2_2' => $_POST['q2_2'] ?? 'не выбрано',
      'q2_3' => $_POST['q2_3'] ?? 'не выбрано',
      'q2_4' => $_POST['q2_4'] ?? 'не выбрано',
      'q2_5' => $_POST['q2_5'] ?? 'не выбрано'
    ];
    $correct = ['q2_1' => 'a', 'q2_2' => 'b', 'q2_3' => 'b', 'q2_4' => 'b', 'q2_5' => 'b'];
    saveTestResult(2, $answers, $correct);
  }

  if (isset($_POST['submit3'])) {
    $answers = [
      'q3_1' => $_POST['q3_1'] ?? 'не выбрано',
      'q3_2' => $_POST['q3_2'] ?? 'не выбрано',
      'q3_3' => $_POST['q3_3'] ?? 'не выбрано',
      'q3_4' => $_POST['q3_4'] ?? 'не выбрано',
      'q3_5' => $_POST['q3_5'] ?? 'не выбрано'
    ];
    $correct = ['q3_1' => 'b', 'q3_2' => 'b', 'q3_3' => 'a', 'q3_4' => 'b', 'q3_5' => 'b'];
    saveTestResult(3, $answers, $correct);
  }

  if (isset($_POST['submit4'])) {
    $answers = [
      'q4_1' => $_POST['q4_1'] ?? 'не выбрано',
      'q4_2' => $_POST['q4_2'] ?? 'не выбрано',
      'q4_3' => $_POST['q4_3'] ?? 'не выбрано',
      'q4_4' => $_POST['q4_4'] ?? 'не выбрано',
      'q4_5' => $_POST['q4_5'] ?? 'не выбрано'
    ];
    $correct = ['q4_1' => 'b', 'q4_2' => 'b', 'q4_3' => 'd', 'q4_4' => 'c', 'q4_5' => 'a'];
    saveTestResult(4, $answers, $correct);
  }
  ?>

  <!-- JavaScript для проверки тестов -->
  <script>
    function checkTest(testNum) {
      const answers = {
        1: { 'q1_1': 'b', 'q1_2': 'c', 'q1_3': 'b', 'q1_4': 'c', 'q1_5': 'b' },
        2: { 'q2_1': 'a', 'q2_2': 'b', 'q2_3': 'b', 'q2_4': 'b', 'q2_5': 'b' },
        3: { 'q3_1': 'b', 'q3_2': 'b', 'q3_3': 'a', 'q3_4': 'b', 'q3_5': 'b' },
        4: { 'q4_1': 'b', 'q4_2': 'b', 'q4_3': 'd', 'q4_4': 'c', 'q4_5': 'a' }
      };
      let score = 0;
      const total = 5;
      for (let i = 1; i <= 5; i++) {
        const selected = document.querySelector(`input[name="q${testNum}_${i}"]:checked`);
        const result = document.getElementById(`result${testNum}_${i}`);
        if (selected) {
          if (selected.value === answers[testNum][`q${testNum}_${i}`]) {
            result.textContent = 'Правильно!';
            result.className = 'mt-2 text-sm font-medium text-green-600';
            score++;
          } else {
            result.textContent = 'Неправильно!';
            result.className = 'mt-2 text-sm font-medium text-red-600';
          }
        } else {
          result.textContent = 'Выберите ответ!';
          result.className = 'mt-2 text-sm font-medium text-gray-600';
        }
      }
      document.getElementById(`score${testNum}`).textContent = `Ваш результат: ${score} из ${total}`;
    }
  </script>
</body>
</html>