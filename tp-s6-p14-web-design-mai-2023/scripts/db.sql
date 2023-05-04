DROP OWNED BY tp_s6_p14_mai_wd_2023;

CREATE TABLE Profils(
    id serial PRIMARY KEY NOT NULL,
    nom varchar(50) NOT NULL
);

CREATE TABLE Utilisateurs(
    id serial PRIMARY KEY NOT NULL,
    profil_id int REFERENCES Profils(id),
    nom varchar(50) NOT NULL,
    prenom varchar(75),
    email varchar(50) UNIQUE NOT NULL,
    mdp varchar(256) NOT NULL
);

CREATE TABLE Articles(
    id serial PRIMARY KEY NOT NULL,
    redacteur_id int REFERENCES Utilisateurs(id) NOT NULL,
    titre varchar(255) NOT NULL,
    resume varchar(255) NOT NULL,
    contenu text NOT NULL,
    dateHeureCreation timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
    validePar int REFERENCES Utilisateurs(id) NOT NULL,
    dateHeureValidation timestamp,
    publiePar int REFERENCES Utilisateurs(id) NOT NULL,
    dateHeurePublication timestamp,
    status int DEFAULT 0
);

CREATE TABLE Historiques(
    id serial PRIMARY KEY NOT NULL,
    article_id int REFERENCES Articles(id) NOT NULL,
    utilisateur_id int REFERENCES Utilisateurs(id),
    dateHeureModification timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
    contenu text NOT NULL,
    typeModification varchar(20) NOT NULL
);

INSERT INTO Profils(nom) VALUES
('Rédacteur'),
('Rédacteur en chef'),
('Administrateur');


INSERT INTO Utilisateurs(profil_id, nom, prenom, email, mdp) VALUES
(1, 'Rakotoarisoa', 'Pierrette', 'rakotoarisoa@gmail.com',sha256('rakotoarisoa1234')),
(2, 'Rabemananjara', 'Jean-Jacques', 'rabemananjara@gmail.com', sha256('rabemananjara1234')),
(3, 'Andrianivoson', 'Michel', 'andrianivoson@gmail.com', sha256('andrianivoson1234'));
