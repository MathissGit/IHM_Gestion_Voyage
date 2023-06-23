
# IHM_Gestion_Voyage


On souhaite développer une base de données décrivant les circuits touristiques proposés par l'agence de 
voyage. Chaque circuit comporte plusieurs étapes. La base contient aussi les lieux touristiques associés aux 
étapes des circuits. Un circuit possède un identifiant et un descriptif. Il est réalisé entre une ville de départ et 
une ville d'arrivée. Il a une durée exprimée en jours et coûte le prix prixInscription (prix non-incluant le coût 
des visites de lieux touristique).
Un circuit correspond à une liste de lieux à visiter (étapes) dans un certain ordre. Chaque étape référence un 
lieu à visiter. L'étape a lieu à une date avec une durée exprimée en minutes. Un lieu (un site, un monument, 
un musée) à visiter possède un nom, un descriptif et est situé dans une ville. La visite coûte un certain prix 
(pouvant être gratuit).
On souhaite enregistrer les réservations d’un client pour un circuit. Les clients seront caractérisés par un 
identifiant, leur nom, prénom et date de naissance. Un client peut réserver plusieurs places. La date de 
réservation d'un circuit devra être conservée.
Le schéma relationnel suivant décrive une partie de la base de données :
Circuit (Identifiant, Descriptif, VilleDepart, PaysDepar, VilleArrivee, PaysArrivee,
DateDepart, NbrPlaceDisponible, Duree, PrixInscription).
Etape (IidentifiantCircuit, Ordre, NomLieu, Ville, pays, DateEtape, Duree).
LieuAvisiter (NomLieu, Ville, Pays, Descriptif, PrixVisite).
Les clés primaires sont soulignées, l’identifiant du circuit est de type entier et les prix sont réels.

Développer une application dans le langage de votre choix (Python, C++, JAVA, C# ou PHP) qui gère les 
fonctionnalités de la 1ère partie de la gestion de voyages.
Deux types de personnes pourront utiliser l’application : les clients et les administrateurs. Les clients auront 
pour seul capaciter de réserver des voyages. Par contre, les administrateurs pourront manager (SELECT, 
INSERT, DELETE, UPDATE) la base de données les différents circuits, étapes, lieux à visiter etc. 
## consigne

1. Donner le MCD et le MLD correspondant à cette base de données.

2. Créer les tables et les remplir à l’aide des requêtes SQL.

3. Créer une IHM ainsi que le code associé qui permet l’authentification à l’application en fonction du type (administrateur ou client) de personnes. Pour se connecter, un identifiant et un mot de passe seront à fournir.

4. Si le client n’est pas dans la base de données, une option d’inscription pour les clients est à développer. Voici les informations minimales qui seront à fournir :

• Nom
• Prénom
• Identifiant
• Mot de passe

5. Une fois authentifiée, développé une IHM qui permet aux clients de réserver leurs circuits. En parallèle à cela, développé une interface pour les administrateurs.

6. Ajouter le code permettant de réaliser les actions précédemment citées en plus des améliorations que vous trouverez utiles d’ajouter

