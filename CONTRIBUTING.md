# Translators
1. Translate theme.
- If you want translate this theme to your language, please download latest [pot file](https://github.com/onliniak/ocean-cream/blob/master/languages/ocean-cream.pot) and rename to [your_country.po](https://translate.wordpress.org/projects/wp/dev/), for example Poland → https://translate.wordpress.org/projects/wp/dev/pl/default/ → pl-PL (replace all - to _), so I create [pl_PL.po](https://github.com/onliniak/ocean-cream/blob/master/languages/pl_PL.po).
- After create po file → please, send pull request to https://github.com/onliniak/ocean-cream/blob/WordPress-repo/languages/
2. Translate documentation. 
- Similar to theme, but pot → https://github.com/onliniak/ocean-cream/tree/master/languages/gettext
# Documentation
- We use Sphinx documentation based on reStructuredText.
- Main documentation will be in polish.
- Link all files to rst instead of including it, for example 
```
.. literalinclude:: /css/critical.css
   :language: css
   :lines: 66-92
```
- Include all code with comments. 
- Tutorial → http://docutils.sourceforge.net/docs/user/rst/quickref.html#enumerated-lists or https://documentation-style-guide-sphinx.readthedocs.io/en/latest/style-guide.html
- Send all .rst files to /docs (source directory).
- Do not send build directory, Read The Docs will be create it for us.
- Send .pot files to languages/gettext directory. 
# Issues
- Please, write issues in english or polish.
- It's good idea to include screenshots.
- Write as simply as possible, for example instead of "something broke" or "I wanted to click on the given blue button, the one at the top with dark letters but I can not and I do not know what to do and I do not want to work and help me immediately".
  - write "I click on the button but the sidebar will not open".
    - or even "I can't open sidebar".
- Don't remove first tag/bracket, for example for bugs we use [🐛], for suggesions [🤔] and [❓] for questions. 
# Pull Requests
- TLDR: We use [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) with [custom ruleset](https://github.com/onliniak/ocean-cream/blob/intro/ruleset.xml) based on PSR-2.
- Long version:
-We use PSR-2 Coding Standards with little WordPress Coding Standards influence :
  - Tabs instead of spaces
  - Reasonably line high
  - UNIX-like new line
  - elseif instead of else if 
  - New line after <?
  - array as new line
  - No Shorthand PHP Tags
  - PHP 5 compatible syntax
  - Remove Trailing Spaces
    - One exception - functions.php
  - All functions and variable we write in *snake_case* like
    - {prefix}{main group(optional)}{sub-group(optional)}{name}
    - For example in depreciated https://github.com/onliniak/ocean-cream/wiki/ocean_cream_author_meta I used:
      - ocean_cream = Prefix
      - author = main group (from author.php or author's page)
      - meta = subgroup (from WordPress's the_author_meta)
      - localization = name (this variable translate something)
  - Readibility is the most important.
  - Please, use english comments (WordPress-like/simple/A2 level (EU) for example Do something with blah blah blah)
  - New code should be checked in [theme sniffer](https://github.com/WPTRT/theme-sniffer) for minimal supported PHP compatibility and escaping rules.
  - If you want to change current coding standard → please, send pull request to intro branch. 
