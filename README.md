<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# FACSO COLABORATORIO
## REQUISITOS
* php 8.1+ (8.2.15)
* docker 25.0.3
* docker compose
* MariaDB 10.5.23
* [facso-investiga](https://github.com/SurturTawers/facso-investiga)

## SETUP
### INICIAL
```bash
# directorio padre de ambos proyectos
mkdir -p facso/facso_investiga facso/facso_colaboratorio && cd facso
touch .env.example docker-compose.yml
# Una vez listo el .env.example
cp .env.example .env
```
#### .env.example
```dotenv
APP_INVEST_PORT=8000
APP_COLAB_PORT=8001

WWWUSER=sail
WWWGROUP=sail

DB_CONNECTION=mysql
DB_HOST=mariadb
DB_PORT=3306
DB_DATABASE=facso_app
DB_USERNAME=facso
DB_PASSWORD=

VITE_INVEST_PORT=5173
VITE_COLAB_PORT=5174
```
#### docker-compose.yml
```yaml
services:
    facso_investiga:
        build:
            context: ./facso_investiga/vendor/laravel/sail/runtimes/8.3
            dockerfile: Dockerfile
            args:
                WWWGROUP: '${WWWGROUP}'
        image: sail-8.3/app
        extra_hosts:
            - 'host.docker.internal:host-gateway'
        ports:
            - '${APP_INVEST_PORT:-80}:80'
            - '${VITE_INVEST_PORT:-5173}:${VITE_PORT:-5173}'
        environment:
            WWWUSER: '${WWWUSER}'
            LARAVEL_SAIL: 1
            XDEBUG_MODE: '${SAIL_XDEBUG_MODE:-off}'
            XDEBUG_CONFIG: '${SAIL_XDEBUG_CONFIG:-client_host=host.docker.internal}'
            IGNITION_LOCAL_SITES_PATH: '${PWD}'
        volumes:
            - './facso_investiga/:/var/www/html'
        networks:
            - sail
        depends_on:
            - mariadb

    facso_colaboratorio:
        build:
            context: ./facso_colaboratorio/vendor/laravel/sail/runtimes/8.3
            dockerfile: Dockerfile
            args:
                WWWGROUP: '${WWWGROUP}'
        image: sail-8.3/app
        extra_hosts:
            - 'host.docker.internal:host-gateway'
        ports:
            - '${APP_COLAB_PORT:-80}:80'
            - '${VITE_COLAB_PORT:-5173}:${VITE_PORT:-5173}'
        environment:
            WWWUSER: '${WWWUSER}'
            LARAVEL_SAIL: 1
            XDEBUG_MODE: '${SAIL_XDEBUG_MODE:-off}'
            XDEBUG_CONFIG: '${SAIL_XDEBUG_CONFIG:-client_host=host.docker.internal}'
            IGNITION_LOCAL_SITES_PATH: '${PWD}'
        volumes:
            - './facso_colaboratorio/:/var/www/html'
        networks:
            - sail
        depends_on:
            - mariadb

    mariadb:
        image: 'mariadb:10'
        ports:
            - '${FORWARD_DB_PORT:-3306}:3306'
        environment:
            MYSQL_ROOT_PASSWORD: '${DB_PASSWORD}'
            MYSQL_ROOT_HOST: '%'
            MYSQL_DATABASE: '${DB_DATABASE}'
            MYSQL_USER: '${DB_USERNAME}'
            MYSQL_PASSWORD: '${DB_PASSWORD}'
            MYSQL_ALLOW_EMPTY_PASSWORD: 'yes'
        volumes:
            - 'sail-mariadb:/var/lib/mysql'
            - './facso_investiga/vendor/laravel/sail/database/mysql/create-testing-database.sh:/docker-entrypoint-initdb.d/10-create-testing-database.sh'
        networks:
            - sail
        healthcheck:
            test:
                - CMD
                - mysqladmin
                - ping
                - '-p${DB_PASSWORD}'
            retries: 3
            timeout: 5s
networks:
    sail:
        driver: bridge
volumes:
    sail-mariadb:
        driver: local
```

### REPOSITORIOS
```bash
# CLONAR REPOS
git clone https://github.com/SurturTawers/facso-investiga.git ./facso_investiga 
git clone https://github.com/SurturTawers/facso-colaboratorio.git ./facso_colaboratorio 
# COMPOSER INSTALL
cd facso_investiga && composer install && cd ../facso_colaboratorio/ && composer install && cd ..
# CREA LOS CONTENEDORES
docker compose --env-file .env up -d # debe ser desde el directorio padre (facso)

# DOCKER CONTAINER SETUP 
# CONTAINER facso_investiga
docker compose exec facso_investiga sh 
chown -R sail:sail storage/ bootstrap/cache
## la prueba de fuego
## los comandos artisan se pueden ejecutar desde tu máquina pero las migraciones y relacionados a DB se ejecutan del contenedor (sino tira error)
php artisan migrate:fresh && php artisan db:seed

# CONTAINER facso_colaboratorio
docker compose exec facso_colaboratorio sh 
chown -R sail:sail storage/ bootstrap/cache

# CONTAINER mariadb
docker compose exec mariadb sh
## el user nuevo y db deberían crearse automaticamente
## de todas formas, para corroborar
mariadb -u root - p # el password que pusiste en el .env
SELECT user,host FROM mysql.user; # deberia existir facso@localhost
show databases; # deberia existir facso_app y testing
```

