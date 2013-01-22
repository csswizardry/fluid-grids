# fluid-grids

_Simple calculator to convert fixed-width columnar grids into fluid ones._

Since porting CSS Wizardry over to Jekyll I lost the ability to self-host my
PHP-based fluid grids calculator (previously at `csswizardry.com/fluid-grids`).

A lot of people have asked where it went, and rightly so, so I rewrote the PHP
from memory and decided to open source it. If you’re a nifty PHP dev:

1. Please don’t laugh at this code! It was written in one  go off the top of my
   head; the old version was a litte more robust, but even more messy.
2. Please consider helping to tidy it up. Better structured, better documented,
   perhaps having some checks in place to make sure the values passed in are
   integers, and that they aren’t big enough to make a 1000k loop, and so on.

To run the code without having a local environment set up, copy and paste it
into [here](http://codepad.viper-7.com/) and adjust your values accordingly.

Cheers,  
H
