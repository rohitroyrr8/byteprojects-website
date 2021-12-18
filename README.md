# byteprojects-website

```sudo apt-get update```

Install and Configure PHP-FPM

The PHP FastCGI Process Manager (FPM) package enhances web server performance. It accelerates page generation, 
reduces memory consumption, and increases web server capacity. A special Apache module for FastCGI is required to use FPM.

## Install the php-fpm package.
 ```sudo apt install php-fpm```
 
## Install the associated Apache module.
``` sudo apt install libapache2-mod-fcgid```

## Confirm the php8.0-fpm service is running.

``` sudo systemctl status php8.0-fpm```
