#####
Index
#####

Oto główny plik każdego motywu dla WordPressa i jeden z dwóch wymaganych do pełnej funkcjonalności (drugim jest Style.css). Zazwyczaj dzielony jest na kilka podczęści jak nagłówek, stopka, wpis, strona … ja jednak uważam, że taki "wzorowy" motyw jest nieczytelny i trudny do modyfikacji, więc zdecydowałem się umieścić wszystko w jednym.

Więcej informacji: https://developer.wordpress.org/themes/basics/template-hierarchy/

********
Nagłówek
********

Nagłówek, jak to nagłówek … zawiera całą sekcję <head> ("głowa"), w której za czasów HTMLa4 umieszczaliśmy wszystko, co miało być niewidoczne dla człowieka jak linki weryfikujące, tytuł strony, jej opis i takie tam. 

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 1-13

Tu generalnie niewiele się dzieje. Po prostu rozpoczynam nowy dokument (X)HTML5.

.. HINT::
   Do nagłówka powrócisz wielokrotnie, przy okazji wklejania różnego rodzaju weryfikatorów.

.. HINT::
   Osobiście radziłbym zainteresować się jakąś wtyczką SEO/Schema, która pomoże opisać zawartość strony i jej autora w wyszukiwarkach internetowych.

.. TIP::
   Najważniejsza do zapamiętania/skopiowania jest informacja o "Mobile zoom", czyli regułce zmniejszającej szerokość ekranu do szerokości urządzenia mobilnego. 
   https://developer.mozilla.org/pl/docs/Mozilla/Mobile/Viewport_meta_tag

****
Menu
****

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 14-32

.. literalinclude:: /../js/buttons.js
   :language: js
   :lines: 5-14

W tym miejscu wyświetlę menu, nazwane "header menu". Oznaczę je jako <nav> oraz przypiszę im wszystkie regułki CSS .menu

.. NOTE::
   Jako NAV oznaczamy główną nawigację witryny, chwilowo nie wspieram menu pobocznego.
   https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav

.. TIP::
   Zauważ, że menu jest otoczone przez <div id="ocean_cream_mobile_menu">, jego zadaniem jest ukrycie menu, gdy ekran (lub okno przeglądarki) jest mniejszy od 1000px. Więcej w sekcji "przycisk pokaż pasek boczny"
   Podobną rolę ma <span id="ocean_cream_mobile_menu_icon">, który odpowiada za wyświetlenie ikonki SVG (w tym wypadku "Hamburger menu") tylko na urządzeniach mobilnych.

.. HINT::
   Za pomocą body_class() możesz dodać nowe klasy CSS do całej strony.

************
Pasek boczny
************

Pasek boczny to jednocześnie uwielbiana i znienawidzona część motywów (przynajmniej dla mnie), z jednej strony używa się go dość często do umieszczania "zbędnych" linków i informacji, a z drugiej … zaśmieca stronę. Dlatego zdecydowałem się na jego ukrycie. Chociaż nie widziałem jeszcze, by ktoś postąpił podobnie, więc czekam na komentarze. 

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 34-42

<div id="ocean_cream_sidebar">
	Ukryje nam pasek boczny, dopóki go nie wyświetlimy, więcej za chwilę
dynamic_sidebar('sidebar');
	W tym miejscu pokaże się pasek boczny, oznaczam go jako aside, czyli wstawka/zawartość poboczna.

https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside

.. HINT::
   Jeśli nie chcesz ukrywać paska bocznego → usuń linijki 36 i 41. 
   <div id="ocean_cream_sidebar"> ... </div>


*************
Artykuł/Wpisy
*************

Najważniejsza część strony, to właśnie tutaj wyświetlimy wszystkie wpisy. Article oznacza główną treść.
https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article

=============================
Przycisk "Pokaż pasek boczny"
=============================

Skoro ukryłem pasek boczny, to dobrze by było gdyby użytkownik mógł go znów wyświetlić w prosty sposób. Wykorzystam przyciski skopiowane z https://www.w3schools.com/jsref/event_onclick.asp

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 36,42

.. literalinclude:: /../js/buttons.js
   :language: js
   :lines: 16-25

.. NOTE::
   Moja wersja została przepisana w ten sposób, by wykorzystać zewnętrzny skrypt js. Pomocne, jeśli ktoś będzie chciał się bawić w CSP (chociaż nie polecam).

.. HINT::
   Id (HTML/JS) = # (CSS)

Zacznijmy od index.php, rozbijmy tę linijkę na 
   <span id="ocean_cream_sidebar_open"
Oznaczę element jako ocean_cream_sidebar_open
   class="ocean_cream_button">
Wyświetl element jako przycisk (ang. button)
   <?php esc_html_e('Show Sidebar', 'ocean-cream'); ?>
Wyświetl tekst "Pokaż przycisk boczny" i pozwól go przetłumaczyć na inne języki.
   </span> → koniec elementu

Przejdźmy do /js/buttons.js,

document.getElementById('ocean_cream_sidebar_open').addEventListener('click', sidiBer);
	Znajdź element oznaczony jako ocean_cream_sidebar_open i wykonaj funkcję sidiBer (ang. sidebar → pasek boczny), gdy zostanie kliknięty.
function sidiBer() {
	Rozpocznij funkcję sidiBer
var x = document.getElementById('ocean_cream_sidebar');
	Znajdź element oznaczony jako ocean_cream_sidebar i oznacz jako x.
if (x.style.display === 'block') {
	Jeśli nasz x jest otwarty (posiada regułkę css identyczną do #ocean_cream_sidebar{display:block}) 

Więcej informacji https://developer.mozilla.org/pl/docs/Web/JavaScript/Referencje/Operatory/Operatory_por%C3%B3wnania

x.style.display = 'none';}
	To go zamknij/ukryj (zmień na #ocean_cream_sidebar{display:none})

else {x.style.display = 'block';}}
	W innym wypadku otwórz/wyświetl.

=====
Pętla
=====

Nigdy nie rozumiałem pętli, w dużym uproszczeniu polega to na wyświetlanie tej samej strony ale z inną treścią, tak długo jak jest co wyświetlać. 

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 43-46

.. HINT::
   Możesz zmienić ilość wyświetlanych wpisów w ustawieniach. 

.. HINT::
   Za pomocą post_class() możesz dodać nowe klasy CSS do swoich wpisów.

-----
Tytuł
-----

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 47-49

-----------------
Informacje/Sekcja
-----------------

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 50-69

-------
Obrazek
-------

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 70-73

-----
Treść
-----

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 74-84

---------
Paginacja
---------

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 85-86

-------------------
Przycisk komentarzy
-------------------

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 88-94

----------------
Ukryj komentarze
----------------

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 95-102

------------
Koniec pętli
------------

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 103-109

*********
Paginacja
*********

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 110-117

******
Stopka
******

.. literalinclude:: /../index.php
   :language: html+php
   :lines: 118-121