# Gestion des données avec WordPress

## Modèle conceptuel de données (MCD)

### Beauté Recrutement

![MCD Beauté Recrutement](./beauterecrutement.svg)

---

## Entités

|           Nom               | Table WordPress   |       Détail(s)         |
|:---------------------------:|:-----------------:|:-----------------------:|
| br2020_Users                | `users`           | rôle `utilisateur`      |
| br2020_Job offer            | `posts`           | type `offre d'emploi`   |
| br2020_Type                 | `terms`           | taxonomy `type`         |
| br2020_Localisation         | `terms`           | taxonomy `localisation` |
| br2020_Jobs                 | `terms`           | taxonomy `métiers`      |
| Newsletter Registration     | `users`           | type `newsletter`       |

---

## Propriétés (Attributs)

### Users

| Propriété     | Table WordPress   | Colonne      | Détails               |
|---------------|-------------------|--------------|-----------------------|
| email         | `users`           | `user_email` |                       |
| pass          | `users`           | `user_pass`  |                       |
| last name     | `usermeta`        | `meta_value` | `meta_key` last_name  |
| first name    | `usermeta`        | `meta_value` | `meta_key` first_name |
| avatar        |                   |              | Géré par Gravatar     |
| slug          | `users`           | `user_url`   |                       |

### Job offers

| Propriété         | Table WordPress   | Colonne        | Détails                    |
|-------------------|-------------------|----------------|----------------------------|
| title             | `posts`           | `post_title`   |                            |
| content           | `posts`           | `post_content` |                            |
| salairy           | `postmeta`        | `meta_value`   | `meta_key` salary          |
| educationLevel    | `postmeta`        | `meta_value`   | `meta_key` education_level |
| workingTime       | `postmeta`        | `meta_value`   | `meta_key` working_time    |
| state             | `posts`           | `post_status`  |                            |
| slug              | `posts`           | `post_url`     |                            |
| publicationDate   | `posts`           | `post_date`    |                            |
| modificationDate  | `posts`           | `post_date`    |                            |
| expirationDate    | `postmeta`        | `meta_value`   | `meta_key` expiration      |

### Type

| Propriété | Table WordPress   | Colonne   | Détails |
|-----------|-------------------|-----------|---------|
| name      | `terms`           | `name`    |         |
| slug      | `terms`           | `slug`    |         |

### Localisation

| Propriété      | Table WordPress   | Colonne        | Détails             |
|----------------|-------------------|----------------|---------------------|
| name           | `terms`           | `name`         |                     |
| address        | `termsmeta`       | `meta_value`   | `meta_key` adress   |
| slug           | `terms`           | `slug`         |                     |

### Jobs

| Propriété | Table WordPress   | Colonne   | Détails |
|-----------|-------------------|-----------|---------|
| name      | `terms`           | `name`    |         |
| slug      | `terms`           | `slug`    |         |

### Newsletter Registration

| Propriété | Table WordPress   |   Colonne    | Détails |
|:---------:|:-----------------:|:------------:|---------|
| email     | `users`           | `user_email` |         |

---

## Associations


|   Entité 1       |    Nom      |         Entité 2          |   Table WordPress    | Colonne entité 1 | Colonne entité 2 | Détail(s) |
|:----------------:|:---------:|:---------------------------:|:--------------------:|:----------------:|:----------------:|:---------:|
| br2020_TYPE      | defines   | br2020_JOB OFFER            | `term_relationships` | term_taxonomy_id | object_id        |           |
| br2020_JOB OFFER | content   | br2020_LOCALISATION         | `term_relationships` | object_id        | term_taxonomy_id |           |
| br2020_JOB OFFER | propose   | br2020_JOBS                 | `term_relationships` | object_id        | term_taxonomy_id |           |
| br2020_USERS     | draft     | br2020_JOB OFFER            | `posts`              | post_author      | ID               |           |
| br2020_USERS     | subscribe | NEWSLETTER REGISTRATION     | `users`              | user_email       | ID               |           |