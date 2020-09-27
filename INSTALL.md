# Installation de Beauté Recrutement

1. Cloner le repository du projet beaute-recrutement

2. Se positionner dans le dossier du projet avec la commande `cd`

3. Télécharger WordPress, ses plugins et ses thèmes provenant de wordpress.org avec la commande `composer install`

4. Créer la base de données encodée en `utf8mb4` avec un utilisateur MySQL dédié

5. Compléter dans le fichier `wp-config.php` :
    1. Les informations de connexion à la base de données (constantes préfixées par `DB_*`)
    2. L'URL de la page d'accueil (constante `WP_HOME`)
    3. La clé de salage de JWT Auth (`JWT_AUTH_SECRET_KEY`)

6. Modifier les droits des dossiers et fichiers avec les commandes

    * `sudo chown -R $USER:www-data .`
    * `sudo find . -type f -exec chmod 664 {} +`
    * `sudo find . -type d -exec chmod 775 {} +`
    * `sudo chmod g-w .htaccess`

7. Installer WordPress avec la commande `wp core install --prompt`

8. Lancer **un** des scripts de wordpress de composer en fonction de l'environnement d'exécution afin de :

<details>
  <summary>⚠️ S'il y a une erreur ⚠️</summary>

  Donner les droits d'exécution sur le fichier `wp` avec la commande :
  ```bash
  chmod +x vendor/bin/wp
  ```
</details>

    * Générer les clés de salage
    * Activer les plugins installés
    * Activer le thème à utiliser
    * Télécharger les traductions françaises
    * Passer le site en français
    * Modifier la structure des URLs du router de WordPress
    * (Activer le débug)
    * (Définir la constante d'environnement)

```bash
# Environnement de production
composer run-script wordpress-configure

# Environnement de pré-production
composer run-script wordpress-configure-staging

# Environnement de développement
composer run-script wordpress-configure-development
```