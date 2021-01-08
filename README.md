# Project 3 - Starter Kit - Symfony 4.2.8

![Wild Code School](https://wildcodeschool.fr/wp-content/uploads/2019/01/logo_pink_176x60.png)


## C'est parti!

### Prérequis

1. Verifier que `composer` est installé
2. Verifier que `yarn` et `node` sont installés
3. Verifier que `php-intl` est installé, sinon faire un `apt-get install php-intl`

### Installation

1. Créer un dossier dans lequel vous placerez le projet. 
2. Ensuite, il faut cloner le projet :

    * placez vous à la racine de votre dossier et fait un git clone de l’url du projet.

3. Installer les dépendances de Composer :

   * faire `composer install` via votre terminal.
   *  A la question" Do you want to execute this recipe?" répondre "y" 

4. Installer Yarn :

   * faire `yarn install` depuis le terminal.
   
5. Configuration de la connection à la base de données

   * Copier/coller le fichier `.env` en `.env.local` à la racine du projet
   *Ouvrir le fichier `.env.local` avec votre éditeur de texte préféré.
   * A la ligne : `DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
` insérer vos propres informations de connection.   

6. Créer la base de données:

    * avec `php bin/console doctrine:database:create`

7. Installer la base de données :

   * avec `php bin/console doctrine:schema:create` sur le terminal.
   
8. Jouer les migrations pour initialiser les données de l'application :

    * avec `php bin/console doctrine:migration:migrate`
   
8. Compiler les assets :

    * avec `yarn run encore production`
   
### Démarrage

1. Démarrer le projet avec votre serveur local :

   * taper la commande `php bin/console server:run`
     
    
## Développer avec

* [Symfony](https://github.com/symfony/symfony)
* [GrumPHP](https://github.com/phpro/grumphp)
* [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
* [PHPStan](https://github.com/phpstan/phpstan)
* [Travis CI](https://github.com/marketplace/travis-ci)

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Auteurs

Fait par les élèves de la [Wild Code School d'Orléans](https://wildcodeschool.fr)

Profils Linkedin

* [Jaffar Mallem](https://www.linkedin.com/in/jaffar-mallem/)
* [Angel Rion Cervi](https://www.linkedin.com/in/angel-rion-cervi-034253147/)
* [Manuel Leger](https://www.linkedin.com/in/manuel-leger-171905185/)
* [Vanina Diot](https://www.linkedin.com/in/vanina-diot/)
## License

MIT License

Copyright (c) 2019 aurelien@wildcodeschool.fr

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

## Acknowledgments

# RNV
