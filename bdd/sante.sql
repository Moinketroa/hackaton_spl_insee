CREATE TABLE sante (
    id INT NOT NULL AUTO_INCREMENT,
    type VARCHAR(8) CHARACTER SET utf8,
    nom VARCHAR(53) CHARACTER SET utf8,
    x NUMERIC(16, 15),
    y NUMERIC(17, 15),
    z INT,
    PRIMARY KEY (id)
);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','CHRU Nancy',6.192021999999952,48.6852009,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','Bâtiment Brabois Adultes',6.146791600000029,48.64761919999999,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','CHU de Nancy - Hôpitaux de Brabois',6.147823799999969,48.646989,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','Bâtiment des Spécialités Médicales Philippe Canton',6.147252900000012,48.6458497,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','Heliport Hopital Central',6.192477999999937,48.68542699999999,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','Polyclinique de Gentilly',6.139275999999995,48.7018589,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','Institut de Cancérologie de Lorraine - Alexis Vautrin',6.144856300000015,48.64808569999999,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','Clinique Louis Pasteur',6.218064899999945,48.7015192,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','Clinique Jeanne d''Arc',6.175420499999973,48.680872699999995,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','Polyclinique Majorelle',6.144168000000036,48.700768,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('HOPITAL','Clinique Ambroise Paré',6.141480000000002,48.70247819999999,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('RETRAITE','Maison de Retraite ORPEA Les Cygnes',6.181739999999991,48.704736,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('RETRAITE','Korian Plaisance',6.192304000000036,48.69314199999999,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('RETRAITE','Korian Le Gentile',6.130307000000016,48.6960528,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('RETRAITE','Korian Le Haut du Bois',6.20681680000007,48.6590657,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('RETRAITE','Maison de retraite Saint Remy',6.170222100000046,48.6996763,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('RETRAITE','Korian La Saulx',6.12332760000004,48.69776599999999,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('RETRAITE','Maison de Retraite du Bas Château',6.216840000000047,48.70778700000001,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('RETRAITE','La Maison des Vignes, ADEF Résidences',6.17531919999999,48.71483569999999,0);
INSERT INTO sante (type, nom, x, y, z) VALUES ('RETRAITE','Korian Jardins du Charmois',6.170978500000047,48.66860260000001,0);
