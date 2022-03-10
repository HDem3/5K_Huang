CREATE TABLE Squadre
 (CodiceSquadra CHAR(5) NOT NULL,
   Denominazione CHAR(20) NOT NULL,
    Primary Key (CodiceSquadra));


INSERT INTO Squadre VALUES ('00001','Milan');
INSERT INTO Squadre VALUES ('00002','Inter');
INSERT INTO Squadre VALUES ('00003','Napoli');



CREATE TABLE Giocatori
 (Codice INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY, 
  Cognome VARCHAR(15) NOT NULL,
  Nome VARCHAR(15) NOT NULL,
  Sesso VARCHAR(1) NOT NULL,
  Indirizzo VARCHAR(20) NOT NULL,
  Telefono VARCHAR(14),
 CodiceSquadra CHAR(5),
FOREIGN KEY (CodiceSquadra) REFERENCES Squadre(CodiceSquadra)
);

INSERT INTO Giocatori VALUES (NULL,'Rossi', 'Mario','M', 'Via Torino 10', '011882234','00001');
INSERT INTO Giocatori VALUES (NULL, 'Pasticcio', 'Ciccio', 'M', 'Via G.Verdi 15', '011862211','00001');
