--------------------------------------------------------
--  文件已创建 - 星期一-十一月-27-2017   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for View VUECALCULM
--------------------------------------------------------

  CREATE OR REPLACE FORCE EDITIONABLE VIEW "YWANG8"."VUECALCULM" ("ID_ENFANT", "NOMPERSONNE", "PRENOMPERSONNE", "MONTANT") AS 
  SELECT 
    enfant.id_enfant,personne.nompersonne,personne.prenompersonne,sum(montantargent) as montant
FROM 
    enfant,ajout_argent,personne
    where
    enfant.id_enfant = ajout_argent.id_enfant
    and
    enfant.id_personne = personne.id_personne
    group by enfant.id_enfant,personne.nompersonne,personne.prenompersonne
;
--------------------------------------------------------
--  DDL for View VUEPRODUIT
--------------------------------------------------------

  CREATE OR REPLACE FORCE EDITIONABLE VIEW "YWANG8"."VUEPRODUIT" ("ID_PRODUIT", "PRIX") AS 
  (SELECT 
    produit.id_produit,prixunitaire as prix
FROM 
    produit,produit_simple
where
    produit.id_produit = produit_simple.id_produit
    )
union
    (
    select 
    produit.id_produit,sum(prixunitaire*qtecomposition )as prix
    from
    produit,produit_compose,est_compose_de,produit_simple
    where
    produit.id_produit = produit_compose.id_produit
    and
    produit_compose.id_produit = est_compose_de.id_produit
    and
    est_compose_de.id_produit_produit = produit_simple.id_produit
    group by produit.id_produit)
;
--------------------------------------------------------
--  DDL for View VUEPRIXTOTAL
--------------------------------------------------------

  CREATE OR REPLACE FORCE EDITIONABLE VIEW "YWANG8"."VUEPRIXTOTAL" ("ID_ENFANT", "PRENOMPERSONNE", "NOMPERSONNE", "TOTAL") AS 
  SELECT 
    enfant.id_enfant,personne.prenompersonne,personne.nompersonne, sum(prix * qteconsommation) as total
FROM 
    enfant,personne,vueproduit,consomme
    where
    enfant.id_personne = personne.id_personne
    and
    enfant.id_enfant = consomme.id_enfant
    and
    vueproduit.id_produit = consomme.id_produit
    group by  enfant.id_enfant,personne.prenompersonne,personne.nompersonne
;
--------------------------------------------------------
--  DDL for View VUESOLD
--------------------------------------------------------

  CREATE OR REPLACE FORCE EDITIONABLE VIEW "YWANG8"."VUESOLD" ("ID_ENFANT", "PRENOMPERSONNE", "NOMPERSONNE", "SOLDE") AS 
  (SELECT 
    vueprixtotal.id_enfant,vueprixtotal.prenompersonne,vueprixtotal.nompersonne,montant-total as solde
    

FROM 
    vueprixtotal,vuecalculm
    where
    vueprixtotal.id_enfant = vuecalculm.id_enfant)
union
(select "ID_ENFANT","NOMPERSONNE","PRENOMPERSONNE","MONTANT" from vuecalculm where id_enfant not in(select id_enfant from vueprixtotal))
;
REM INSERTING into YWANG8.VUECALCULM
SET DEFINE OFF;
Insert into YWANG8.VUECALCULM (ID_ENFANT,NOMPERSONNE,PRENOMPERSONNE,MONTANT) values (6,'Boisclair','Enzo',30);
Insert into YWANG8.VUECALCULM (ID_ENFANT,NOMPERSONNE,PRENOMPERSONNE,MONTANT) values (8,'Bouvier','Lucien',30);
Insert into YWANG8.VUECALCULM (ID_ENFANT,NOMPERSONNE,PRENOMPERSONNE,MONTANT) values (10,'Granville','Hugo',30);
Insert into YWANG8.VUECALCULM (ID_ENFANT,NOMPERSONNE,PRENOMPERSONNE,MONTANT) values (5,'Gamelin','Matheo',30);
Insert into YWANG8.VUECALCULM (ID_ENFANT,NOMPERSONNE,PRENOMPERSONNE,MONTANT) values (7,'Richer','Alex',30);
Insert into YWANG8.VUECALCULM (ID_ENFANT,NOMPERSONNE,PRENOMPERSONNE,MONTANT) values (2,'Pique','Antoine',60);
Insert into YWANG8.VUECALCULM (ID_ENFANT,NOMPERSONNE,PRENOMPERSONNE,MONTANT) values (4,'Lapierre','Lucas',30);
Insert into YWANG8.VUECALCULM (ID_ENFANT,NOMPERSONNE,PRENOMPERSONNE,MONTANT) values (1,'Martin','Maxime',60);
Insert into YWANG8.VUECALCULM (ID_ENFANT,NOMPERSONNE,PRENOMPERSONNE,MONTANT) values (3,'Bonami','Quentin',30);
REM INSERTING into YWANG8.VUEPRODUIT
SET DEFINE OFF;
Insert into YWANG8.VUEPRODUIT (ID_PRODUIT,PRIX) values (6,6);
Insert into YWANG8.VUEPRODUIT (ID_PRODUIT,PRIX) values (7,2);
Insert into YWANG8.VUEPRODUIT (ID_PRODUIT,PRIX) values (8,4);
REM INSERTING into YWANG8.VUEPRIXTOTAL
SET DEFINE OFF;
Insert into YWANG8.VUEPRIXTOTAL (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,TOTAL) values (4,'Lucas','Lapierre',12);
Insert into YWANG8.VUEPRIXTOTAL (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,TOTAL) values (5,'Matheo','Gamelin',6);
Insert into YWANG8.VUEPRIXTOTAL (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,TOTAL) values (2,'Antoine','Pique',8);
Insert into YWANG8.VUEPRIXTOTAL (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,TOTAL) values (6,'Enzo','Boisclair',4);
Insert into YWANG8.VUEPRIXTOTAL (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,TOTAL) values (3,'Quentin','Bonami',4);
Insert into YWANG8.VUEPRIXTOTAL (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,TOTAL) values (8,'Lucien','Bouvier',4);
Insert into YWANG8.VUEPRIXTOTAL (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,TOTAL) values (7,'Alex','Richer',6);
REM INSERTING into YWANG8.VUESOLD
SET DEFINE OFF;
Insert into YWANG8.VUESOLD (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,SOLDE) values (1,'Martin','Maxime',60);
Insert into YWANG8.VUESOLD (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,SOLDE) values (2,'Antoine','Pique',52);
Insert into YWANG8.VUESOLD (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,SOLDE) values (3,'Quentin','Bonami',26);
Insert into YWANG8.VUESOLD (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,SOLDE) values (4,'Lucas','Lapierre',18);
Insert into YWANG8.VUESOLD (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,SOLDE) values (5,'Matheo','Gamelin',24);
Insert into YWANG8.VUESOLD (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,SOLDE) values (6,'Enzo','Boisclair',26);
Insert into YWANG8.VUESOLD (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,SOLDE) values (7,'Alex','Richer',24);
Insert into YWANG8.VUESOLD (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,SOLDE) values (8,'Lucien','Bouvier',26);
Insert into YWANG8.VUESOLD (ID_ENFANT,PRENOMPERSONNE,NOMPERSONNE,SOLDE) values (10,'Granville','Hugo',30);


