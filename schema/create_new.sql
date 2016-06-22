CREATE TABLE aeroportos
(
	idAeroporto int UNSIGNED AUTO_INCREMENT, 
	nome varchar(50)
	quantidadeAvioes int, 
	PRIMARY KEY (idAeroporto)
);

CREATE TABLE modelos
(
	idModelo int UNSIGNED AUTO_INCREMENT, 
	peso float, 
	capacidade int, 
	nome varchar(50),
	PRIMARY KEY (idModelo)
);

CREATE TABLE avioes 
(
	registro int, 
	idModelo int UNSIGNED, 
	idAeroporto int UNSIGNED, 
	PRIMARY KEY (registro), 
	FOREIGN KEY (idAeroporto) REFERENCES aeroportos(idAeroporto),
	FOREIGN KEY (idModelo) REFERENCES modelos(idModelo)
);


CREATE TABLE sindicatos
(
	nroMembro int, 
	nome varchar(50), 
	PRIMARY KEY (nroMembro)
);

CREATE TABLE empregados
(
	matricula int, 
	nome varchar(50), 
	telefone varchar(15), 
	salário float, 
	endereco varchar(50), 
	idAeroporto int UNSIGNED, 
	nroMembro int, 
	PRIMARY KEY (matricula),
	FOREIGN KEY (idAeroporto) REFERENCES aeroportos(idAeroporto),
	FOREIGN KEY (nroMembro) REFERENCES sindicatos(nroMembro)
);

CREATE TABLE tecnicos
(
	matricula int, 
	idModelo int UNSIGNED,
	PRIMARY KEY (matricula), 	
	FOREIGN KEY (matricula) REFERENCES empregados(matricula),
	FOREIGN KEY (idModelo) REFERENCES modelos(idModelo)
);

CREATE TABLE controladores
(
	matricula int, 
	dataExame varchar(10), 
	PRIMARY KEY (matricula), 
	FOREIGN KEY (matricula) REFERENCES empregados(matricula)
);

CREATE TABLE testes
(
	nroAnac int, 
	nome varchar(50), 
	PRIMARY KEY (nroAnac)
);

CREATE TABLE manutencao(
	idManutencao int UNSIGNED AUTO_INCREMENT,
	nroAnac int, 
	idModelo int UNSIGNED, 
	matricula int, 
	dataTeste varchar(10), 
	horasGastas float, 
	pontuacao int,
	PRIMARY KEY (idManutencao), 
	FOREIGN KEY (nroAnac) REFERENCES testes(nroAnac), 
	FOREIGN KEY (idModelo) REFERENCES modelos(idModelo), 
	FOREIGN KEY (matricula) REFERENCES empregados(matricula)
);
