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
    resume text NOT NULL,
    contenu text NOT NULL,
    dateHeureCreation timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
    validePar int REFERENCES Utilisateurs(id),
    dateHeureValidation timestamp,
    publiePar int REFERENCES Utilisateurs(id),
    dateHeurePublication timestamp,
    status int DEFAULT 0,
    img text
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
(1, 'Rakotoarisoa', 'Pierrette', 'rakotoarisoa@gmail.com', 'rakotoarisoa1234'),
(2, 'Rabemananjara', 'Jean-Jacques', 'rabemananjara@gmail.com', 'rabemananjara1234'),
(3, 'Andrianivoson', 'Michel', 'andrianivoson@gmail.com', 'andrianivoson1234');


SELECT * FROM v_article WHERE lower(titre) like '%a%' OR lower(contenu) like '%a%' OR lower(redacteur_nom) like '%a%' OR lower(redacteur_prenom) like '%a%';

CREATE OR REPLACE VIEW v_article AS
SELECT a.id, a.titre, a.resume, a.contenu, a.dateheurecreation, u1.nom AS redacteur_nom, u1.prenom AS redacteur_prenom, u2.nom AS valideur_nom, u2.prenom AS valideur_prenom, u3.nom AS publieur_nom, u3.prenom AS publieur_prenom, a.dateheurevalidation, a.dateheurepublication, a.status, a.img
FROM articles a
JOIN utilisateurs u1 ON a.redacteur_id = u1.id
LEFT JOIN utilisateurs u2 ON a.validepar = u2.id
LEFT JOIN utilisateurs u3 ON a.publiepar = u3.id;

