# pith-pack-plex
Pack the Plex fonts for Pith

-------

# About

This project packs the IBM Plex Sans font so that it can be used with the Pith Framewok.

For info on IBM Plex Sans, visit: https://fonts.google.com/specimen/IBM+Plex+Sans/about

For info on Pith, see the Pith website at https://pith-framework.org/

# Install

Install to an existing Pith Framework project

Use Composer to install pack to the `vendor` folder.
```
php composer.phar require pith-front/pith-pack-plex
```

Add new route to your Route List:

```php
public array $routes = [
    // Other routes....
    // ...
    
    // Add route to call the Plex fonts from
    ['route', 'GET', '/resources/vendor/library/plex/{filepath:.+}', '\\PithFront\\PithPackPlex\\PlexResourceRoute'],
];
```

-------------


# Licensing Info

### IBM Plex Sans font
- IBM Plex Sans font (version 3.2 from 2018) 
- SIL OPEN FONT LICENSE Version 1.1 
- Copyright © 2017 IBM Corp. with Reserved Font Name "Plex". 
- Designed by Mike Abbink, IBM BX&D, in collaboration with Bold Monday, an independent Dutch type foundry. 
- https://fonts.google.com/specimen/IBM+Plex+Sans/about

### pith-pack-plex (The PHP files that wrap the font here)
- pith-pack-plex
- The MIT License (MIT)
- Copyright (c) Ian Maurmann
- Link: https://github.com/pith-front/pith-pack-plex