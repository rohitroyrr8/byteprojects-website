# byteprojects-website

```sudo apt-get update```

## Installing and setting up nginx web server
``` 
sudo apt install nginx
sudo nginx -t

echo 'server {
    listen 80;
    server_name byteprojects.in www.byteprojects.in;
    root /home/ubuntu/byteprojects.in;

    # Add index.php to the list if you are using PHP
    index index.html index.htm index.nginx-debian.html index.php;

        location / {
                # as directory, then fall back to displaying a 404.
                try_files $uri $uri/ =404;

        }

        # pass PHP scripts to FastCGI server
        location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
        }
}' >> /etc/nginx/sites-available/byteprojects

sudo ln -s /etc/nginx/sites-available/byteprojects /etc/nginx/sites-enabled/
sudo systemctl restart nginx
sudo systemctl status nginx

```
## Install and Configure PHP-FPM

The PHP FastCGI Process Manager (FPM) package enhances web server performance. It accelerates page generation, 
reduces memory consumption, and increases web server capacity. A special Apache module for FastCGI is required to use FPM.

## Install the php-fpm package.
 ```sudo apt install php-fpm```
 
## Install the associated Apache module.
``` sudo apt install libapache2-mod-fcgid```

## Confirm the php8.0-fpm service is running.

``` sudo systemctl status php8.0-fpm```

## SSh into instance
```ssh -i byteprojects_main.pem ubuntu@3.111.0.56```
