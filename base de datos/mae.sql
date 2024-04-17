CREATE DATABASE MAE;

USE MAE;

CREATE TABLE Registro (IDRegistro INT(4),
                       PassRegistro VARCHAR(30),
                       CONSTRAINT pk_Registro PRIMARY KEY (IDRegistro, PassRegistro)
                      );

CREATE TABLE InicioSesion (IDSesion INT(4),
                           PassSesion VARCHAR(30),
                           FechaInicio DATE,
                           HoraInicio TIME
                          );

CREATE TABLE CierreSesion (IDSesion INT(4),
                           PassSesion VARCHAR(30),
                           FechaCierre DATE,
                           HoraCierre TIME
                          );

CREATE TABLE Usuarios (ID INT(4) PRIMARY KEY,
                       Nombre VARCHAR(50),
                       Apellido_P VARCHAR(20),
                       Apellido_M VARCHAR(20),
                       Edad VARCHAR(2),
                       NumeroTelefonico VARCHAR(10),
                       Localidad VARCHAR(100),
                       IDMaquina INT(5)
                      );

CREATE TABLE Maquina (IDMaquina INT(5) PRIMARY KEY,
                       NoCalentadores INT(2),
                       NoVentiladores INT(2),
                       ID INT(4)
                      );

CREATE TABLE Dht11 (ID INT PRIMARY KEY,
                    humidity VARCHAR(5),
                    temperature VARCHAR(5),
                    fecha TIMESTAMP
                   );
                      
CREATE TABLE SoporteTecnico (IDSoporte INT(3) PRIMARY KEY,
                       ID INT(4),
                       IDMaquina INT(5),
                       Fecha DATETIME,
                       Problema VARCHAR(500),
                       CorreoElectronico VARCHAR(100)
                      );

ALTER TABLE InicioSesion
ADD CONSTRAINT fk_InicioSesion_Registro
FOREIGN KEY (IDSesion, PassSesion) REFERENCES Registro(IDRegistro, PassRegistro);

ALTER TABLE CierreSesion
ADD CONSTRAINT fk_CierreSesion_Registro
FOREIGN KEY (IDSesion, PassSesion) REFERENCES Registro(IDRegistro, PassRegistro);

ALTER TABLE Usuarios
ADD CONSTRAINT fk_Usuarios_Maquina
FOREIGN KEY (IDMaquina) REFERENCES Maquina(IDMaquina);

ALTER TABLE Maquina
ADD CONSTRAINT fk_Maquina_Usuarios
FOREIGN KEY (ID) REFERENCES Usuarios(ID);

ALTER TABLE SoporteTecnico
ADD CONSTRAINT fk_SoporteTecnico_Usuarios
FOREIGN KEY (ID) REFERENCES Usuarios(ID);
ALTER TABLE SoporteTecnico
ADD CONSTRAINT fk_SoporteTecnico_Maquina
FOREIGN KEY (IDMaquina) REFERENCES Maquina(IDMaquina);
