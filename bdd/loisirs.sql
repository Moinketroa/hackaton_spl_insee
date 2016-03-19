CREATE TABLE loisirs (
    id INT NOT NULL AUTO_INCREMENT,
    type VARCHAR(10) CHARACTER SET utf8,
    nom VARCHAR(47) CHARACTER SET utf8,
    x NUMERIC(17, 16),
    y NUMERIC(16, 14),
    z INT,
    PRIMARY KEY (id)
);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Café des artistes',6.180838300000005,48.6928936,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Bar le Clairlieu',6.113419600000044,48.65808070000001,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Bar du Montet',6.1692416999999296,48.6675266,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Pub Le Mac Carthy',6.177460099999962,48.6923356,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','La Buvette',6.186508600000025,48.6919475,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Le Pub 51',6.128510099999971,48.6914904,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','bar PMU de l''étoile',6.147396999999955,48.678961,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Carpe Diem',6.167011900000034,48.6886975,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Bistrot 127',6.19861549999996,48.68000259999999,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Le Coup du Monocle',6.186415699999998,48.6922331,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Les Petits Gobelins',6.185523900000021,48.69050069999999,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','La Taverne de l''Irlandais',6.176027200000021,48.68967580000001,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('BAR','Café Kléber',6.227172399999972,48.70540800000001,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','à la table du bon roi stanislas',6.180902999999944,48.693757,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','Le Bouche à Oreille',6.18100579999998,48.6907106,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','BUFFALO GRILL NANCY (VANDOEUVRE LES NANCY)',6.151090999999951,48.65323,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','Restaurant Tokyo',6.1866383999999925,48.6552609,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','Restaurant Campanile Nancy Ouest - Laxou Zénith',6.139761099999987,48.7050922,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','S.o.s Pizzas',6.1669189000000415,48.70820029999999,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','Restaurant Beira Mar',6.1722632999999405,48.7070848,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','Brasserie La Cantine',6.229597900000045,48.70513709999999,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','Del Arte',6.2454700000000685,48.7097545,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','Restaurant Le Petit Cochon',6.246992999999976,48.711721,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','China Palace',6.158319799999958,48.6778142,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','Grill Courtepaille Nancy Laxou',6.13159799999994,48.6947519,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','La Gargote',6.140981600000033,48.6858193,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','L''Ô à la Bouche',6.210221600000068,48.6871863,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('RESTAURANT','Bosphore II',6.213851799999929,48.6844427,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','Speed Burger',6.178933000000029,48.68450299999999,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','McDonald''s',6.165155000000027,48.666553,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','KFC',6.185527999999977,48.6374747,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','K.F.C.',6.13145080000004,48.693611,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','O''Kebap',6.185352400000056,48.6893931,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','Quick Vandoeuvre',6.145999999999959,48.649904,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','Quick de Nancy Centre Ville',6.18153099999995,48.689484,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','Quick de Nancy Frouard',6.150851999999986,48.7422061,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','Resto Burger',6.187213899999961,48.68787910000001,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','Burger King Nancy',6.18262900000002,48.690413,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','Stan Kebab',6.181834500000036,48.69320030000001,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','Royal Kebab',6.220549300000016,48.7052019,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','O Panini Kebab',6.195632299999943,48.69138969999999,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('FASTFOOD','La friterie',6.175118399999974,48.6898042,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('CLUB','L''Envers',6.170297500000061,48.6847165,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('CLUB','Le Chat Noir',6.171722600000067,48.686189,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('CLUB','Le Réseau',6.175202000000013,48.690621,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('CINEMA','U.G.C. Ludres',6.175222500000018,48.6178834,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('CINEMA','Cinéma Caméo',6.172269899999947,48.6871641,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('CINEMA','Kinepolis Nancy',6.195590000000038,48.69156,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('CINEMA','Cinéma Royal',6.2078054999999495,48.6996182,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('CINEMA','Caméo Saint-Sébastien',6.178693000000067,48.6890002,0);
INSERT INTO loisirs (type, nom, x, y, z) VALUES ('CINEMA','UGC',6.178853000000004,48.6898439,0);
