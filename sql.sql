drop database if exists ppe;
create database ppe;
use ppe;

CREATE TABLE client(
        idclient         Int (50) NOT NULL Auto_increment,
        nom              Varchar (50),
        prenom           Varchar (50),
        adresse          Varchar (50),
        email            Varchar (50),   
        statut           Varchar (50),
        numero_passeport Varchar (50),
        tel              Int (50),
        mdp              Varchar (50),
        PRIMARY KEY (idclient)
);

CREATE TABLE cb(
        idcb         Int NOT NULL,
        nom          Varchar (50) ,
        numero       Varchar (50) ,
        datevalidite Date ,
        crypto       Varchar (4) ,
        idclient     Int NOT NULL,
        PRIMARY key (idclient),
        FOREIGN KEY (idclient) REFERENCES client(idclient)
);

CREATE TABLE aeroport(
        idaeroport Int NOT NULL Auto_increment,
        nom        Varchar (50) ,
        adresse    Varchar (100) ,
	PRIMARY KEY (idaeroport)
);

CREATE TABLE avion(
        idavion   Int (50) NOT NULL Auto_increment,
        nom       Varchar (50),
        nb_places Varchar (50),
        PRIMARY KEY (idavion)
);


CREATE TABLE vol(
        idvol              Int (50) NOT NULL Auto_increment,
        nom                Varchar (50) ,
        datedepart         Date ,
        heuredepart        Time ,
        datearrivee        Date ,
        heurearrivee       Time ,
        idaeroport         Int NOT NULL ,
        idavion            Int NOT NULL ,
        idaeroport_arriver Int NOT NULL,
        PRIMARY KEY (idvol),
        FOREIGN KEY (idaeroport) REFERENCES aeroport(idaeroport),
        FOREIGN KEY (idavion) REFERENCES avion(idavion),
        FOREIGN KEY (idaeroport_arriver) REFERENCES aeroport(idaeroport_arriver)
);


CREATE table reserver(
        place int(50),
        classe Varchar (50),
        repas Varchar(50),
        assistance Varchar(200),
        idclient int (50) not null,
        idvol int (50) not null,
        PRIMARY key (idclient,idvol),
        FOREIGN key (idclient) REFERENCES client(idclient),
        FOREIGN key (idvol) REFERENCES vol(idvol)
);


CREATE TABLE service(
        idservice Int (50) NOT NULL  Auto_increment,
        nom       Varchar (50),
        PRIMARY KEY (idservice)
);

CREATE TABLE typepartenaire(
        idtype  Int (50)  Auto_increment  NOT NULL ,
        libelle Varchar (50) NOT NULL,
	PRIMARY KEY (idtype)
);

CREATE TABLE partenaire(
        idpartenaire Int (50) NOT NULL Auto_increment,
        nom          Varchar (50) ,
        adresse      Varchar (200) ,
        idtype       Int (50) NOT NULL,
        PRIMARY KEY (idpartenaire),
        FOREIGN KEY (idtype) REFERENCES typepartenaire(idtype)
);


CREATE TABLE location(
        
        immatriculation Varchar (50),
        n_parking       Varchar (50),
        statut          Varchar (50),
        datedebut       Date ,
        datefin         Date ,
        prix            Float ,
        nom             Varchar (50) NOT NULL,
        idservice       Int (50) NOT NULL ,
	PRIMARY KEY (idservice),
        FOREIGN KEY (idservice) REFERENCES service(idservice)
);

CREATE TABLE logement(
        idservice     Int (50) NOT NULL ,
        adresse       Varchar (50) ,
        datedebut     Date ,
        datefin       Date ,
        nettoyage     Varchar (50) ,
        proprietaire  Varchar (50) ,
        surface       Varchar (50) ,
        prix          Float ,
        nom           Varchar (50) ,
	PRIMARY KEY (idservice),
	FOREIGN KEY (idservice) REFERENCES service(idservice)
);

CREATE TABLE promotion(
        nom         Varchar (50) ,
        pourcentage Varchar (10) ,
        nom_service Varchar (50) ,
        idservice   Int NOT NULL ,
        PRIMARY KEY (idservice),
        FOREIGN KEY (idservice) REFERENCES service(idservice)
);

INSERT INTO client VALUES(NULL,"Tang","Vaesna", "21 rue Gabriel","vaesna@gmail.com","celibataire","12345678","0780905636","vaesna");
INSERT INTO client VALUES(NULL,"Marday","Sendinee", "43 rue du Docteur Variot", "sendinee@gmail.com","celibataire","987654321","0782036248","zoé");
INSERT INTO client VALUES(NULL,"Rakotomalala", "Jenn", "8 avenue du clocher", "jenn@gmail.com", "celibataire", "147258369", "0753584177", "jenn");
