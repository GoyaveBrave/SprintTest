# SprintTest

Le test à été réalisé en suivant l'architecture MVC et les principes de bases de la Programmation Orienté Objet. 
Le fichier Output contenant les tickets dans le désordre est au format JSON, que l'on transforme ensuite en PHP afin de le modifier
et le remettre dans l'ordre et enfin de le remettre au format inital (JSON). 

Les tests sont au nombre de deux, un test permettant de vérifier que la première conversion du tableau JSON en tableau PHP, puis le deuxième
quant à lui de vérifier l'inverse. 
Pour un test plus "visuel", il suffit d'exectuer l'action "converter" dans l'url, puis de faire un "echo $converted_json" à la ligne 37 du "CardsController" avec un logiciel comme Insomnia ou PostMan. 
