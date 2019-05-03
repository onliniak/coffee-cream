########
StyleCSS
########

Pozostałe reguły CSS, nie są wymagane do poprawnego wyświetlenia strony, dlatego załadujemy je dopiero na samym końcu.

****
Info
****

.. NOTE::
   "WordPress uses the header comment section of a style.css to display information about the theme in the Appearance (Themes) dashboard panel." <https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/>

.. NOTE::
   Github url oznacza, że motyw może być pobrany z wykorzystaniem wtyczki GitHub Updater <https://github.com/afragen/github-updater/>

.. literalinclude:: /../style.css
   :language: css
   :lines: 1-15

*************
WordPress CSS
*************

.. NOTE::
   "Several classes for aligning images and block elements (div, p, table etc.) were introduced in WordPress 2.5: aligncenter, alignleft and alignright. In addition the class alignnone is added to images that are not aligned, so they can be styled differently if needed.
   The same classes are used to align images that have a caption (as of WordPress 2.6). Three additional CSS classes are needed for the captions, and one more for accessibility. Together, the classes are: "

.. literalinclude:: /../style.css
   :language: css
   :lines: 24-47,58-65,116-173,282-284

.. NOTE::
   "Each Theme should have these or similar styles in its style.css file to be able to display images and captions properly. The exact HTML elements and class and ID values will depend on the structure of the Theme you are using.
   <https://codex.wordpress.org/CSS>"

****
Inne
****

Tabele
======

.. literalinclude:: /../style.css
   :language: css
   :lines: 20-22,320-333

Komentarze
==========

.. literalinclude:: /../style.css
   :language: css
   :lines: 16-18,53-56,290-318

Przyciski
=========

.. literalinclude:: /../style.css
   :language: css
   :lines: 83-91

Nawigacja
=========

.. literalinclude:: /../style.css
   :language: css
   :lines: 96-114

Sticky
======

.. literalinclude:: /../style.css
   :language: css
   :lines: 195-204

Sidebar
=======

.. literalinclude:: /../style.css
   :language: css
   :lines: 205-224

Cytaty
======

.. literalinclude:: /../style.css
   :language: css
   :lines: 226-234

Terminal
========

.. literalinclude:: /../style.css
   :language: css
   :lines: 241-249

Definicje
=========

.. literalinclude:: /../style.css
   :language: css
   :lines: 251-280

Domyślny
========

.. literalinclude:: /../style.css
   :language: css
   :lines: 174-193

Kompatybilność
==============

.. literalinclude:: /../style.css
   :language: css
   :lines: 66-81