![separe](https://github.com/studoo-app/.github/blob/main/profile/studoo-banner-logo.png)

[Retour](intro.md)
# Blind XSS

Blind XSS est similaire à un XSS stocké (que nous avons abordé dans la tâche 4) dans le sens où votre charge utile
est stockée sur le site Web pour qu'un autre utilisateur puisse la voir, mais dans ce cas, vous ne pouvez pas voir
la charge utile fonctionner ni pouvoir la tester contre vous-même d’abord.

**Exemple de scénario :**

un site Web dispose d'un formulaire de contact où vous pouvez envoyer un message à un membre du personnel. Le contenu du message n'est vérifié à la recherche d'aucun code malveillant, ce qui permet à l'attaquant de saisir tout ce qu'il souhaite. Ces messages sont ensuite transformés en tickets d'assistance que le personnel consulte sur un portail Web privé.

**Impact potentiel :**

en utilisant la charge utile appropriée, le JavaScript de l'attaquant pourrait rappeler le site Web d'un attaquant,
révélant l'URL du portail du personnel, les cookies du membre du personnel et même le contenu de la page du portail
en cours de consultation.

L'attaquant pourrait désormais potentiellement détourner la session du membre du personnel et accéder au portail privé.

**Comment tester Blind XSS :**

Lorsque vous testez les vulnérabilités Blind XSS, vous devez vous assurer que votre charge utile reçoit un rappel (généralement une requête HTTP).
De cette façon, vous savez si et quand votre code est en cours d'exécution.



Un outil populaire pour les attaques Blind XSS est [XSS Hunter Express](https://github.com/mandatoryprogrammer/xsshunter-express). Bien qu'il soit possible de créer votre propre outil en JavaScript,
cet outil capturera automatiquement les cookies, les URL, le contenu des pages et bien plus encore.