CREATE TABLE Impiegati (
     ID         smallint primary key,
     Nome     char(20) not null,
     Cognome     char(30) not null,
     Residenza     char(20) default '*** Manca Residenza',
     Stipendio     decimal(9,2),
     Dipartimento char(5) references Dipartimenti(Codice)
   );

CREATE TABLE Dipartimenti (
     Codice         char(5),
     Descrizione     char(20) not null,
     Sede         char(20),
     Manager         smallint,
     Primary Key (Codice),
     Unique (Descrizione),
     Foreign Key (Manager) references Impiegati(ID)
        On Delete set null
        On Update cascade
    );

  INSERT INTO Impiegati (ID, Nome, Cognome, Stipendio)
  VALUES(22,'Bruno','Locatelli',33000);
