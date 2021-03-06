<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uk', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Назад',
    'label_next' => 'Далі',
    'filter_searchword' => 'Пошук...',
  ),
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ця форма не повинна містити додаткових полів.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Завантажений файл занадто великий. Будь ласка, спробуйте завантажити файл меншого розміру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значення недопустиме. Будь ласка, спробуйте відправити форму знову.',
    'This value is not a valid HTML5 color.' => 'Це значення не є допустимим кольором HTML5.',
    'Please enter a valid birthdate.' => 'Будь ласка, введіть дійсну дату народження.',
    'The selected choice is invalid.' => 'Обраний варіант недійсний.',
    'The collection is invalid.' => 'Колекція недійсна.',
    'Please select a valid color.' => 'Будь ласка, оберіть дійсний колір.',
    'Please select a valid country.' => 'Будь ласка, оберіть дійсну країну.',
    'Please select a valid currency.' => 'Будь ласка, оберіть дійсну валюту.',
    'Please choose a valid date interval.' => 'Будь ласка, оберіть дійсний інтервал дати.',
    'Please enter a valid date and time.' => 'Будь ласка, введіть дійсну дату та час.',
    'Please enter a valid date.' => 'Будь ласка, введіть дійсну дату.',
    'Please select a valid file.' => 'Будь ласка, оберіть дійсний файл.',
    'The hidden field is invalid.' => 'Приховане поле недійсне.',
    'Please enter an integer.' => 'Будь ласка, введіть ціле число.',
    'Please select a valid language.' => 'Будь ласка, оберіть дійсну мову.',
    'Please select a valid locale.' => 'Будь ласка, оберіть дійсну локаль.',
    'Please enter a valid money amount.' => 'Будь ласка, введіть дійсну суму грошей.',
    'Please enter a number.' => 'Будь ласка, введіть число.',
    'The password is invalid.' => 'Пароль недійсний.',
    'Please enter a percentage value.' => 'Будь ласка, введіть процентне значення.',
    'The values do not match.' => 'Значення не збігаються.',
    'Please enter a valid time.' => 'Будь ласка, введіть дійсний час.',
    'Please select a valid timezone.' => 'Будь ласка, оберіть дійсний часовий пояс.',
    'Please enter a valid URL.' => 'Будь ласка, введіть дійсну URL-адресу.',
    'Please enter a valid search term.' => 'Будь ласка, введіть дійсний пошуковий термін.',
    'Please provide a valid phone number.' => 'Будь ласка, введіть дійсний номер телефону.',
    'The checkbox has an invalid value.' => 'Прапорець має недійсне значення.',
    'Please enter a valid email address.' => 'Будь ласка, введіть дійсну адресу електронної пошти.',
    'Please select a valid option.' => 'Будь ласка, оберіть дійсний варіант.',
    'Please select a valid range.' => 'Будь ласка, оберіть дійсний діапазон.',
    'Please enter a valid week.' => 'Будь ласка, введіть дійсний тиждень.',
    'This value should be false.' => 'Значення повинно бути Ні.',
    'This value should be true.' => 'Значення повинно бути Так.',
    'This value should be of type {{ type }}.' => 'Тип значення повинен бути {{ type }}.',
    'This value should be blank.' => 'Значення повинно бути пустим.',
    'The value you selected is not a valid choice.' => 'Обране вами значення недопустиме.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ви повинні обрати хоча б {{ limit }} варіант.|Ви повинні обрати хоча б {{ limit }} варіанти.|Ви повинні обрати хоча б {{ limit }} варіантів.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ви повинні обрати не більше ніж {{ limit }} варіантів.',
    'One or more of the given values is invalid.' => 'Одне або кілька заданих значень є недопустимі.',
    'This field was not expected.' => 'Це поле не очікується.',
    'This field is missing.' => 'Це поле не вистачає.',
    'This value is not a valid date.' => 'Дане значення не є вірною датою.',
    'This value is not a valid datetime.' => 'Дане значення дати та часу недопустиме.',
    'This value is not a valid email address.' => 'Значення адреси электронної пошти недопустиме.',
    'The file could not be found.' => 'Файл не знайдено.',
    'The file is not readable.' => 'Файл не читається.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадто великий ({{ size }} {{ suffix }}). Дозволений максимальний розмір {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тип файлу недопустимий ({{ type }}). Допустимі MIME-типи файлів {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значення повинно бути {{ limit }} або менше.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значення занадто довге. Повинно бути рівне {{ limit }} символу або менше.|Значення занадто довге. Повинно бути рівне {{ limit }} символам або менше.|Значення занадто довге. Повинно бути рівне {{ limit }} символам або менше.',
    'This value should be {{ limit }} or more.' => 'Значення повинно бути {{ limit }} або більше.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значення занадто коротке. Повинно бути рівне {{ limit }} символу або більше.|Значення занадто коротке. Повинно бути рівне {{ limit }} символам або більше.|Значення занадто коротке. Повинно бути рівне {{ limit }} символам або більше.',
    'This value should not be blank.' => 'Значення не повинно бути пустим.',
    'This value should not be null.' => 'Значення не повинно бути null.',
    'This value should be null.' => 'Значення повинно бути null.',
    'This value is not valid.' => 'Значення недопустиме.',
    'This value is not a valid time.' => 'Значення часу недопустиме.',
    'This value is not a valid URL.' => 'Значення URL недопустиме.',
    'The two values should be equal.' => 'Обидва занчення повинні бути одинаковими.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадто великий. Максимальний допустимий розмір {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл занадто великий.',
    'The file could not be uploaded.' => 'Файл не можливо завантажити.',
    'This value should be a valid number.' => 'Значення має бути допустимим числом.',
    'This file is not a valid image.' => 'Цей файл не є допустимим форматом зображення.',
    'This is not a valid IP address.' => 'Це некоректна IP адреса.',
    'This value is not a valid language.' => 'Це некоректна мова.',
    'This value is not a valid locale.' => 'Це некоректна локалізація.',
    'This value is not a valid country.' => 'Це некоректна країна.',
    'This value is already used.' => 'Це значення вже використовується.',
    'The size of the image could not be detected.' => 'Не вдалося визначити розмір зображення.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина зображення занадто велика ({{ width }}px). Максимально допустима ширина {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина зображення занадто мала ({{ width }}px). Мінімально допустима ширина {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Висота зображення занадто велика ({{ height }}px). Максимально допустима висота {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Висота зображення занадто мала ({{ height }}px). Мінімально допустима висота {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Значення має бути поточним паролем користувача.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значення повиино бути рівним {{ limit }} символу.|Значення повиино бути рівним {{ limit }} символам.|Значення повиино бути рівним {{ limit }} символам.',
    'The file was only partially uploaded.' => 'Файл був завантажений лише частково.',
    'No file was uploaded.' => 'Файл не був завантажений.',
    'No temporary folder was configured in php.ini.' => 'Не налаштована тимчасова директорія в php.ini.',
    'Cannot write temporary file to disk.' => 'Неможливо записати тимчасовий файл на диск.',
    'A PHP extension caused the upload to fail.' => 'Розширення PHP викликало помилку при завантаженні.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ця колекція повинна містити {{ limit }} елемент чи більше.|Ця колекція повинна містити {{ limit }} елемента чи більше.|Ця колекція повинна містити {{ limit }} елементів чи більше.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ця колекція повинна містити {{ limit }} елемент чи менше.|Ця колекція повинна містити {{ limit }} елемента чи менше.|Ця колекція повинна містити {{ limit }} елементов чи менше.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ця колекція повинна містити рівно {{ limit }} елемент.|Ця колекція повинна містити рівно {{ limit }} елемента.|Ця колекція повинна містити рівно {{ limit }} елементів.',
    'Invalid card number.' => 'Невірний номер карти.',
    'Unsupported card type or invalid card number.' => 'Непідтримуваний тип карти або невірний номер карти.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Це не дійсний міжнародний номер банківського рахунку (IBAN).',
    'This value is not a valid ISBN-10.' => 'Значення не у форматі ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Значення не у форматі ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Значення не відповідає форматам ISBN-10 та ISBN-13.',
    'This value is not a valid ISSN.' => 'Значення має невірний формат ISSN.',
    'This value is not a valid currency.' => 'Значення має невірний формат валюти.',
    'This value should be equal to {{ compared_value }}.' => 'Значення повинно дорівнювати {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значення має бути більше ніж {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значення має бути більше або дорівнювати {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значення має бути ідентичним {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значення повинно бути менше ніж {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значення повинно бути менше або дорівнювати {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значення не повинно дорівнювати  {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значення не повинно бути ідентичним {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Співвідношення сторін зображення занадто велике ({{ ratio }}). Максимальне співвідношення сторін {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Співвідношення сторін зображення занадто мало ({{ ratio }}). Мінімальне співвідношення сторін {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Зображення квадратне ({{ width }}x{{ height }}px). Квадратні зображення не дозволені.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Зображення альбомної орієнтації ({{ width }}x{{ height }}px). Зображення альбомної орієнтації не дозволені.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Зображення в портретній орієнтації ({{ width }}x{{ height }}px). Зображення в портретної орієнтації не дозволені.',
    'An empty file is not allowed.' => 'Порожні файли не дозволені.',
    'The host could not be resolved.' => 'Ім\'я хоста не знайдено.',
    'This value does not match the expected {{ charset }} charset.' => 'Значення не збігається з очікуваним {{ charset }} кодуванням.',
    'This is not a valid Business Identifier Code (BIC).' => 'Це не дійсний банківський код (BIC).',
    'Error' => 'Помилка',
    'This is not a valid UUID.' => 'Це не валідне значення UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Це значення повинне бути кратним {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Банківський код (BIC) не пов’язаний із міжнародним номером банківського рахунку (IBAN) {{ iban }}.',
    'This value should be valid JSON.' => 'Значення має бути корректним JSON.',
    'This collection should contain only unique elements.' => 'Ця колекція повинна мати тільки унікальни значення.',
    'This value should be positive.' => 'Значення має бути позитивним.',
    'This value should be either positive or zero.' => 'Значення має бути позитивним або дорівнювати нулю.',
    'This value should be negative.' => 'Значення має бути негативним.',
    'This value should be either negative or zero.' => 'Значення має бути негативним або дорівнювати нулю.',
    'This value is not a valid timezone.' => 'Значення не є дійсним часовим поясом.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Цей пароль був скомпрометований в результаті витоку даних та не повинен використовуватися. Будь ласка, використовуйте інший пароль.',
    'This value should be between {{ min }} and {{ max }}.' => 'Значення має бути між {{ min }} та {{ max }}.',
    'This value is not a valid hostname.' => 'Значення не є дійсним іменем хоста.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Кількість елементів у цій колекції повинна бути кратною {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Значення повинно задовольняти хоча б одному з наступних обмежень:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Кожен елемент цієї колекції повинен задовольняти власному набору обмежень.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Це значення не є дійсним міжнародним ідентифікаційним номером цінних паперів (ISIN).',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Помилка автентифікації.',
    'Authentication credentials could not be found.' => 'Автентифікаційні дані не знайдено.',
    'Authentication request could not be processed due to a system problem.' => 'Запит на автентифікацію не може бути опрацьовано у зв’язку з проблемою в системі.',
    'Invalid credentials.' => 'Невірні автентифікаційні дані.',
    'Cookie has already been used by someone else.' => 'Хтось інший вже використав цей сookie.',
    'Not privileged to request the resource.' => 'Відсутні права на запит цього ресурсу.',
    'Invalid CSRF token.' => 'Невірний токен CSRF.',
    'No authentication provider found to support the authentication token.' => 'Не знайдено провайдера автентифікації, що підтримує токен автентифікаціії.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія недоступна, її час вийшов, або cookies вимкнено.',
    'No token could be found.' => 'Токен не знайдено.',
    'Username could not be found.' => 'Ім’я користувача не знайдено.',
    'Account has expired.' => 'Термін дії облікового запису вичерпано.',
    'Credentials have expired.' => 'Термін дії автентифікаційних даних вичерпано.',
    'Account is disabled.' => 'Обліковий запис відключено.',
    'Account is locked.' => 'Обліковий запис заблоковано.',
    'Too many failed login attempts, please try again later.' => 'Забагато невдалих спроб входу. Будь ласка, спробуйте пізніше.',
    'Invalid or expired login link.' => 'Посилання для входу недійсне, або термін його дії закінчився.',
  ),
));

$catalogueDe = new MessageCatalogue('de', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Vorherige',
    'label_next' => 'Nächste',
    'filter_searchword' => 'Suchbegriff...',
  ),
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
    'This value is not a valid HTML5 color.' => 'Dieser Wert ist keine gültige HTML5 Farbe.',
    'Please enter a valid birthdate.' => 'Bitte geben Sie ein gültiges Geburtsdatum ein.',
    'The selected choice is invalid.' => 'Die Auswahl ist ungültig.',
    'The collection is invalid.' => 'Diese Gruppe von Feldern ist ungültig.',
    'Please select a valid color.' => 'Bitte geben Sie eine gültige Farbe ein.',
    'Please select a valid country.' => 'Bitte wählen Sie ein gültiges Land aus.',
    'Please select a valid currency.' => 'Bitte wählen Sie eine gültige Währung aus.',
    'Please choose a valid date interval.' => 'Bitte wählen Sie ein gültiges Datumsintervall.',
    'Please enter a valid date and time.' => 'Bitte geben Sie ein gültiges Datum samt Uhrzeit ein.',
    'Please enter a valid date.' => 'Bitte geben Sie ein gültiges Datum ein.',
    'Please select a valid file.' => 'Bitte wählen Sie eine gültige Datei.',
    'The hidden field is invalid.' => 'Das versteckte Feld ist ungültig.',
    'Please enter an integer.' => 'Bitte geben Sie eine ganze Zahl ein.',
    'Please select a valid language.' => 'Bitte wählen Sie eine gültige Sprache.',
    'Please select a valid locale.' => 'Bitte wählen Sie eine gültige Locale-Einstellung aus.',
    'Please enter a valid money amount.' => 'Bitte geben Sie einen gültigen Geldbetrag ein.',
    'Please enter a number.' => 'Bitte geben Sie eine gültige Zahl ein.',
    'The password is invalid.' => 'Das Kennwort ist ungültig.',
    'Please enter a percentage value.' => 'Bitte geben Sie einen gültigen Prozentwert ein.',
    'The values do not match.' => 'Die Werte stimmen nicht überein.',
    'Please enter a valid time.' => 'Bitte geben Sie eine gültige Uhrzeit ein.',
    'Please select a valid timezone.' => 'Bitte wählen Sie eine gültige Zeitzone.',
    'Please enter a valid URL.' => 'Bitte geben Sie eine gültige URL ein.',
    'Please enter a valid search term.' => 'Bitte geben Sie einen gültigen Suchbegriff ein.',
    'Please provide a valid phone number.' => 'Bitte geben Sie eine gültige Telefonnummer ein.',
    'The checkbox has an invalid value.' => 'Das Kontrollkästchen hat einen ungültigen Wert.',
    'Please enter a valid email address.' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
    'Please select a valid option.' => 'Bitte wählen Sie eine gültige Option.',
    'Please select a valid range.' => 'Bitte wählen Sie einen gültigen Bereich.',
    'Please enter a valid week.' => 'Bitte geben Sie eine gültige Woche ein.',
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert oder der temporäre Ordner existiert nicht.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige internationale Bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'An empty file is not allowed.' => 'Eine leere Datei ist nicht erlaubt.',
    'The host could not be resolved.' => 'Der Hostname konnte nicht aufgelöst werden.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dieser Wert ist kein gültiger BIC.',
    'Error' => 'Fehler',
    'This is not a valid UUID.' => 'Dies ist keine gültige UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dieser Wert sollte ein Vielfaches von {{ compared_value }} sein.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Diese internationale Bankleitzahl (BIC) ist nicht mit der IBAN {{ iban }} assoziiert.',
    'This value should be valid JSON.' => 'Dieser Wert sollte gültiges JSON sein.',
    'This collection should contain only unique elements.' => 'Diese Sammlung darf keine doppelten Elemente enthalten.',
    'This value should be positive.' => 'Diese Zahl sollte positiv sein.',
    'This value should be either positive or zero.' => 'Diese Zahl sollte entweder positiv oder 0 sein.',
    'This value should be negative.' => 'Diese Zahl sollte negativ sein.',
    'This value should be either negative or zero.' => 'Diese Zahl sollte entweder negativ oder 0 sein.',
    'This value is not a valid timezone.' => 'Dieser Wert ist keine gültige Zeitzone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Dieses Passwort ist Teil eines Datenlecks, es darf nicht verwendet werden.',
    'This value should be between {{ min }} and {{ max }}.' => 'Dieser Wert sollte zwischen {{ min }} und {{ max }} sein.',
    'This value is not a valid hostname.' => 'Dieser Wert ist kein gültiger Hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Die Anzahl an Elementen in dieser Sammlung sollte ein Vielfaches von {{ compared_value }} sein.',
    'This value should satisfy at least one of the following constraints:' => 'Dieser Wert sollte eine der folgenden Bedingungen erfüllen:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Jedes Element dieser Sammlung sollte seine eigene Menge an Bedingungen erfüllen.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Dieser Wert ist keine gültige Internationale Wertpapierkennnummer (ISIN).',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
    'Too many failed login attempts, please try again later.' => 'Zu viele fehlgeschlagene Anmeldeversuche, bitte versuchen Sie es später noch einmal.',
    'Invalid or expired login link.' => 'Ungültiger oder abgelaufener Anmelde-Link.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueDe);

return $catalogue;
