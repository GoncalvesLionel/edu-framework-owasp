![separe](https://github.com/studoo-app/.github/blob/main/profile/studoo-banner-logo.png)

[Retour](intro.md)
# DOM Based XSS

DOM signifie Document Object Model et est une interface de programmation pour les documents HTML et XML.
Il représente la page afin que les programmes puissent modifier la structure, le style et le contenu du document.
Une page Web est un document, et ce document peut être affiché dans la fenêtre du navigateur ou en tant que
source HTML.

Un diagramme du DOM HTML est affiché ci-dessous :

![dom-xss-1](images/dom-xss-1.png)

**Exploiter le DOM**

DOM Based XSS est l'endroit où l'exécution de JavaScript se produit directement dans le navigateur sans qu'aucune
nouvelle page ne soit chargée ni aucune donnée soumise au code backend. L'exécution se produit lorsque le code
JavaScript du site Web agit sur une saisie ou une interaction de l'utilisateur.

**Impact potentiel :**

Des liens créés pourraient être envoyés à des victimes potentielles, les redirigeant vers un autre site Web ou
volant le contenu de la page ou de la session de l'utilisateur.

**Comment tester le XSS basé sur Dom :**

XSS basé sur DOM peut être difficile à tester et nécessite une certaine connaissance de JavaScript pour lire
le code source. 