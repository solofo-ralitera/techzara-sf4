**Install composer**

https://getcomposer.org/download/
- php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
- php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
- php composer-setup.php : Si erreur run as admin
- php -r "unlink('composer-setup.php');"

**Install Symfony 4**

To install Symfony 4 : Get the file "composer.json" from https://github.com/symfony/skeleton/blob/4.0/composer.json

Install sf et dépendances :
- php composer.phar install : si erreur run as admin
 
- Créer le fichier .env à la racine : https://symfony.com/doc/current/best_practices/configuration.html#infrastructure-related-configuration

Start php internal server
- php -S localhost:8000 -t ./public 
- Navigateur : http://localhost:8000/

**Install dépendances et default controller**

Installer les annotations : pour activer la configuration du routing
- php composer.phar require annotations

Installer le profiler pour debuger
- php composer.phar require profiler

Créer un controller pour la route "/"
- App\Controller\DefaultController


**Auhtentication**
https://symfony.com/doc/current/security/custom_provider.html
https://symfony.com/doc/current/security/entity_provider.html

Installer la couche security
- php composer.phar require security
- Create User class : App\Security\User
- Create User provider : App\Security\UserProvider
- Update security.yaml
    - providers
    - encoders
    - firewalls
    
    
