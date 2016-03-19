CREATE TABLE logement (
    id INT NOT NULL AUTO_INCREMENT,
    type VARCHAR(10) CHARACTER SET utf8,
    nom VARCHAR(48) CHARACTER SET utf8,
    x NUMERIC(17, 16),
    y NUMERIC(17, 15),
    z INT,
    PRIMARY KEY (id)
);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','agence immobilière ORPI',6.18466860000001,48.6880309,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','Laforêt Immobilier',6.166913600000044,48.6883096,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','Foncia Transaction',6.175987999999961,48.6907321,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','Foncia Solonim',6.178120000000035,48.6803296,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','CENTURY 21 Joël Pierre Immobilier',6.177341100000035,48.6918187,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','Century 21 Midon Baudoin Immobilier',6.2051753000000645,48.6996524,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','Laforêt Vandoeuvre Les Nancy',6.167601699999977,48.6677044,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','Olma Immobilier VANDOEUVRE LES',6.174976399999991,48.6624355,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','Thouvenin Immobilier',6.164420100000029,48.6616749,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','Liberty Home',6.187213499999984,48.6851496,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','La Une de L''immo (VIAEMEDIA)',6.160781199999974,48.6620097,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','FB Immo Conseil',6.174932799999965,48.6621349,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('IMMOBILIER','IMMOLIVIER',6.173760000000016,48.661118,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('ResidenceU','Residence Universitaire Charmois',6.173686900000007,48.6671674,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('ResidenceU','Residence Monbois',6.162809799999991,48.696657800000004,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('ResidenceU','Residence Universitaire Proveneal',6.194953400000031,48.67713570000001,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('ResidenceU','Cite Universitaire Monplaisir',6.1630826000000525,48.6654651,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('ResidenceU','Le Crous de Nancy-Metz',6.1584814999999935,48.6845541,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('ResidenceU','Centre Regional Oeuvres Universitaires Scolaires',6.162814799999978,48.6964505,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('ResidenceU','Residence Universitaire Placieux',6.156414799999993,48.6725262,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('ResidenceU','Cite Universitaire Haute-Malgrange',6.189140400000042,48.660777,0);
INSERT INTO logement (type, nom, x, y, z) VALUES ('ResidenceU','Residence Bateliere',6.167493199999968,48.7058791,0);
