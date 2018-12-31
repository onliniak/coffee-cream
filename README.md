# ocean-cream
Coffee Cream remix (stable)

This is Coffee Cream without custom code aka stable. 90% WordPress functions. 

[![Build Status](https://travis-ci.org/onliniak/ocean-cream.svg?branch=master)](https://travis-ci.org/onliniak/ocean-cream)

## Features :

- Without jQuery
- True all in one
- Under 10kb size
- Numeric keyboard navigation. Use 4 for previous post and 6 for next. 

### I nead live website preview for testing

Of course, look at https://skri.ga/nieoznaczony/ (news/status)
or https://skri.ga/eastern/ (post)
## Know Issues :

### Help, my sidebar is broken !

Disable all "minify/compress" HTML options. In this case we have this code :

#sidiBer[style*='display: block'] ~ article {

Plugins change this to #sidiBer[style*='display:block'] ~ article { ,
When we delete space between display: and block → browser skip this line.
In this line, we say "if sidebar is open (display: block), move article (a.k.a. post) 25% to right (or give me space for my sidebar)."

## Screenshots :

![Desktop](https://imgur.com/89yjw8Tl.png "Desktop")
![Sidebar](https://imgur.com/mOiRHiCl.png "Sidebar")
![Mobile](https://i.imgur.com/8v4i4jx.png  "Mobile")
![Menu](https://i.imgur.com/Vat2xVy.png    "Menu")
