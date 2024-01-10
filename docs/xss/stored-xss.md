![separe](https://github.com/studoo-app/.github/blob/main/profile/studoo-banner-logo.png)

[Retour](intro.md)
# Stored XSS

Comme son nom l'indique, la charge utile XSS est stockée sur l'application Web (dans une base de données, par exemple),
puis est exécutée lorsque d'autres utilisateurs visitent le site ou la page Web.

**Exemple de scénario :**

un site Web de blog qui permet aux utilisateurs de publier des commentaires. Malheureusement, ces commentaires ne
sont pas vérifiés pour savoir s'ils contiennent du JavaScript ou filtrent tout code malveillant. Si nous publions maintenant un commentaire contenant du JavaScript, celui-ci sera stocké dans la base de données et tous les autres utilisateurs visitant actuellement l'article verront le JavaScript exécuté dans leur navigateur.

![stored-xss-1](images/stored-xss-1.png)

**Impact potentiel :**

le JavaScript malveillant pourrait rediriger les utilisateurs vers un autre site, voler le cookie de session de
l'utilisateur ou effectuer d'autres actions sur le site Web tout en agissant en tant qu'utilisateur visiteur.

**Comment tester le XSS stocké :**

Vous devrez tester tous les points d'entrée possibles où il semble que les données soient stockées, puis affichées
dans les zones auxquelles d'autres utilisateurs ont accès ; un petit exemple pourrait être :

- Commentaires sur un blog
- Informations sur le profil utilisateur
- Listes de sites Web
  Parfois, les développeurs pensent que limiter les valeurs d'entrée côté client est une protection suffisante,
  donc changer les valeurs en quelque chose que l'application Web ne s'attendrait pas est une bonne source de découverte.
