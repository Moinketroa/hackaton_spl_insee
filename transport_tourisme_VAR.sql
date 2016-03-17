CREATE TABLE transport_tourisme_VAR (
    VAR_ID VARCHAR(12) CHARACTER SET utf8,
    VAR_LIB VARCHAR(60) CHARACTER SET utf8,
    VAR_LIB_LONG VARCHAR(355) CHARACTER SET utf8
);
INSERT INTO transport_tourisme_VAR VALUES ('CODGEO','Département -commune',NULL);
INSERT INTO transport_tourisme_VAR VALUES ('LIBGEO','Libellé de la commune',NULL);
INSERT INTO transport_tourisme_VAR VALUES ('DEP','Département',NULL);
INSERT INTO transport_tourisme_VAR VALUES ('REG','Région',NULL);
INSERT INTO transport_tourisme_VAR VALUES ('REG2016','Région 2016',NULL);
INSERT INTO transport_tourisme_VAR VALUES ('TAXI','Taxi',NULL);
INSERT INTO transport_tourisme_VAR VALUES ('AERO','Aéroport','Aéroport en activité avec plus de 1 000 passagers (mouvement commercial au départ ou à l’arrivée de l’aéroport hors transit).');
INSERT INTO transport_tourisme_VAR VALUES ('GARE_TGV','Gare avec train TAGV (train à grande vitesse)','Gare desservie par au moins un train à grande vitesse');
INSERT INTO transport_tourisme_VAR VALUES ('GARE_ETAT','Gare sous convention avec l’État','Gare desservie par au moins un train sous convention avec l’État (sans TAGV)');
INSERT INTO transport_tourisme_VAR VALUES ('GARE_CR_STIF','Gare sous convention avec les conseils régionaux ou les STIF','Gare desservie par au moins un train sous convention avec les conseils régionaux ou les STIF (transport Île de France) (sans TAGV et sans convention État)');
INSERT INTO transport_tourisme_VAR VALUES ('AG_VOY','Agence de voyage','Agences de voyage et voyagistes
Ne comprend plus les services de réservation et d''information touristique suite au passage à la NAF rév.2. Différence de -2 800 à compter de 2009.');
INSERT INTO transport_tourisme_VAR VALUES ('HOTEL','Hôtel homologué','Hôtels homologués, auxquels sont rajoutés les hôtels de chaîne à 0 étoile. Ne sont donc pas pris en compte les anciens "hôtels de préfecture".
Avec ou sans restaurant.');
INSERT INTO transport_tourisme_VAR VALUES ('CAMP','Camping homologué','Campings homologués, classés de 0 à 4 étoiles.  Donc y compris campings des comités d''entreprise, à clientèle spécifique (ouvriers, colonies de vacances, forains…) si  cette clientèle est de passage - c''est à dire ne restant pas pendant toute la période d''ouverture du camping - et campings de VVF. 
Non compris services de réservation et activités liées ');
INSERT INTO transport_tourisme_VAR VALUES ('INF_TOUR','Information Touristique','Comprend les services de réservation et d''information touristique.');
