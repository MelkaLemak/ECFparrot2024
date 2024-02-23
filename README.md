site en ligne : https://garageparrotkz.000webhostapp.com/

Pour cloner et exécuter le projet ECFparrot2024 depuis GitHub sur votre ordinateur Windows, suivez ces étapes :

Ouvrez l'invite de commande de Windows. choisissez le dossier dans lequel vous voulez cloner votre dossier.

cd Chemin/Vers/Votre/DossierCloner 

le projet :
Utilisez la commande git clone suivie de l'URL du projet GitHub que vous avez fournie :

git clone https://github.com/MelkaLemak/ECFparrot2024.git

Configurer le serveur local 

:Pour ma part j'utilise XAMPP j'ai dois donc copier mon projet dans le repertoire 'htdocs'.

Importer la base de données :

Ouvrez votre outil de gestion de bases de données (tel que phpMyAdmin).Créez une nouvelle base de données et donnez-lui un nom.
Importez le fichier SQL fourni avec le projet dans la base de données que vous venez de créer.

Configurer les informations de la base de données :

Dans le projet cloné, recherchez le fichier de configuration connexion.BDD contenu dans le dossier configuration..Modifiez ce fichier pour qu'il corresponde aux informations de connexion à votre base de données locale.Accéder au projet dans votre navigateur :Ouvrez votre navigateur web.Accédez à l'URL locale correspondant à l'emplacement où vous avez placé le projet. Par exemple, http://localhost/ECFparrot2024.Vous devriez maintenant pouvoir accéder et utiliser le projet localement sur votre machine Windows.

Vous devriez maintenant pouvoir accéder et utiliser le projet localement sur votre machine Windows.

pour acceder a la page de gestion admin : username: V.Parrot ;mdp:perroquet. 
Afin de tester les fonctionnalités coté gestion de l'employes je vous invite a creer un compte employes via "ajouter employes" et de vous connecter avec les informations de connexion que vous aurez creer.

vous pourrez voir qu'il y a une BDD BDDECF.sql et une BDD ECF.SQL.
la BDD BDDECF.sql est une bdd que j'ai ecris afin de rester conforme au consigne. la BDD ecf.sql est la bdd finale exporter depuis phpmyadmin qui etait utilisés puisque j'utilisais XAMP avec un serveur Apache. Toutes les ligne de commandes ont été ecris conformement au consignes

