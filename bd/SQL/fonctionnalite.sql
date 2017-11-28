/*-------------------------------------------------------------*/
/*----------------------Gerer les produit----------------------*/
/*-------------------------------------------------------------*/
/*Ajouter un produit*/
Insert into PRODUIT (ID_PRODUIT,LIBELLEPRODUIT) values (1,'Bonbons');




/*Modifier un produit (ici le numero 1)*/
UPDATE PRODUIT
SET libeleProduit = 'nouvelle valeur'
WHERE id_produit = 1




/*Supprimer un produit (ici le numero 1)*/
DELETE FROM PRODUIT
WHERE id_produit = 1



/*-------------------------------------------------------------*/
/*----------------------Gerer les comptes----------------------*/
/*-------------------------------------------------------------*/

/*Creer le compte d'un enfant */
Insert into ENFANT (ID_ENFANT,MAILCONTACTENFANT,TELCONTACTENFANT,ID_PERSONNE,ID_CATEGORIE) values (1,'pierremartin@gmail.com','0102030405',1,1);

/*Creer un compte d'un parent membre*/
Insert into PERSONNE (ID_PERSONNE,NOMPERSONNE,PRENOMPERSONNE) values (1,'Martin','Pierre');

/*Supprimer un compte d'un parent membre  (ici le numero 1)*/
DELETE FROM PERSONNE
WHERE id_Personne = 1

/*Supprimer un compte d'un enfant (ici le numero 1)*/
DELETE FROM ENFANT
WHERE id_enfant = 1

/*-------------------------------------------------------------*/
/*-------------------Gerer les produit consome-----------------*/    
/*-------------------------------------------------------------*/

/*ajouter ce que l'enfant a consome*/
Insert into CONSOMME (DATECONSOMMATION,QTECONSOMMATION,ID_PRODUIT,ID_ENFANT,ID_PERSONNE) values (to_date('26-11ÔÂ-17','DD-MON-RR'),1,1,1,1);

/*supprimer ce que l'enfant a consome*/
DELETE FROM PRODUIT
WHERE id_Produit = 1
AND ID_ENFANT = 1
AND ID_PERSONNE = 1




/*-------------------------------------------------------------*/
/*----------------------Gerer les courses----------------------*/
/*-------------------------------------------------------------*/

/*Consulter les stock*/

SELECT STOCK
FROM  PRODUIT_SIMPLE

/*Indiquer montant total de l'achat (ici le numero 1)*/
SELECT montantCourse
FROM COURSE
WHERE idCourse = 1


/*?????????????????/Mettre a jour le stock de produit ????????????/*/
















