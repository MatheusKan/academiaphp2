Create database bdAcademia;
use bdAcademia;

create table tblogin(
login varchar(30) not null primary Key,
senha varchar(30) not null) ENGINE=InnoDB DEFAULT CHARSET=latin1;

Create table tbAluno(
idAluno int primary key auto_increment
, nome_aluno varchar(40) not null
, cpf char (15)
, endereco varchar(40)
, bairro varchar(40)
, cidade varchar (30)
, estado char(2)
, cep char(9)
, telefone char(14)
, celular char(15)
, email varchar(40) not null unique
, peso decimal(6,3)
, altura decimal(3,2)
, imc decimal(5,3)
, statusAluno varchar(10)
, obs varchar(100)
, senha varchar(30) not null
);

create table tbProfessor(
idProfessor int primary key auto_increment
, nome varchar(40) not null
, telefone char(14)
, celular char(15)
, email varchar(40) not null unique
, senha varchar(30) not null
); 

create table tbTurma(
idTurma int primary key auto_increment
, descricao varchar(30)
, horarioInicio time
, horarioTermino time
, idProfessor int 
, foreign key (idProfessor) references tbProfessor(idprofessor)
);

create table tbMatricula(
idMatricula  int primary key auto_increment
, dataMatricula date
, idAluno int
, idTurma int
, foreign key (idAluno) references tbAluno(idAluno)
, foreign key (idTurma) references tbTurma(idTurma)
);


insert into tblogin values ('mama',123);
-- Inserindo dados na tabela tbAluno
INSERT INTO tbAluno (nome_aluno, cpf, endereco, bairro, cidade, estado, cep, telefone, celular, email, peso, altura, imc, statusAluno, obs, senha) VALUES 
('Aluno1', '111.111.111-11', 'Rua A', 'Bairro A', 'Cidade A', 'ES', '29000-000', '27999999999', '27999999999', 'aluno1@email.com', 70.500, 1.75, 23.02, 'Ativo', 'Observação 1', 'senha1'),
('Aluno2', '222.222.222-22', 'Rua B', 'Bairro B', 'Cidade B', 'RJ', '22000-000', '21999999999', '21999999999', 'aluno2@email.com', 68.500, 1.80, 21.15, 'Ativo', 'Observação 2', 'senha2'),
('Aluno3', '333.333.333-33', 'Rua C', 'Bairro C', 'Cidade C', 'SP', '23000-000', '23999999999', '23999999999', 'aluno3@email.com', 75.000, 1.65, 27.55, 'Ativo', 'Observação 3', 'senha3'),
('Aluno4', '444.444.444-44', 'Rua D', 'Bairro D', 'Cidade D', 'MG', '24000-000', '24999999999', '24999999999', 'aluno4@email.com', 60.000, 1.70, 20.76, 'Ativo', 'Observação 4', 'senha4'),
('Aluno5', '555.555.555-55', 'Rua E', 'Bairro E', 'Cidade E', 'BA', '25000-000', '25999999999', '25999999999', 'aluno5@email.com', 80.000, 1.75, 26.12, 'Ativo', 'Observação 5', 'senha5'),
('Aluno6', '666.666.666-66', 'Rua F', 'Bairro F', 'Cidade F', 'RS', '26000-000', '26999999999', '26999999999', 'aluno6@email.com', 72.000, 1.78, 22.72, 'Ativo', 'Observação 6', 'senha6'),
('Aluno7', '777.777.777-77', 'Rua G', 'Bairro G', 'Cidade G', 'PR', '27000-000', '27999999999', '27999999999', 'aluno7@email.com', 68.000, 1.65, 24.98, 'Ativo', 'Observação 7', 'senha7'),
('Aluno8', '888.888.888-88', 'Rua H', 'Bairro H', 'Cidade H', 'SC', '28000-000', '28999999999', '28999999999', 'aluno8@email.com', 65.000, 1.80, 20.06, 'Ativo', 'Observação 8', 'senha8'),
('Aluno9', '999.999.999-99', 'Rua I', 'Bairro I', 'Cidade I', 'GO', '29000-000', '29999999999', '29999999999', 'aluno9@email.com', 78.000, 1.82, 23.55, 'Ativo', 'Observação 9', 'senha9'),
('Aluno10', '000.000.000-00', 'Rua J', 'Bairro J', 'Cidade J', 'PE', '30000-000', '30999999999', '30999999999', 'aluno10@email.com', 85.000, 1.75, 27.76, 'Ativo', 'Observação 10', 'senha10'),
('Aluno11', '111.111.111-12', 'Rua K', 'Bairro K', 'Cidade K', 'CE', '31000-000', '31999999999', '31999999999', 'aluno11@email.com', 60.500, 1.68, 21.45, 'Ativo', 'Observação 11', 'senha11'),
('Aluno12', '222.222.222-23', 'Rua L', 'Bairro L', 'Cidade L', 'PB', '32000-000', '32999999999', '32999999999', 'aluno12@email.com', 70.000, 1.72, 23.66, 'Ativo', 'Observação 12', 'senha12'),
('Aluno13', '333.333.333-34', 'Rua M', 'Bairro M', 'Cidade M', 'RN', '33000-000', '33999999999', '33999999999', 'aluno13@email.com', 75.500, 1.75, 24.65, 'Ativo', 'Observação 13', 'senha13'),
('Aluno14', '444.444.444-45', 'Rua N', 'Bairro N', 'Cidade N', 'AL', '34000-000', '34999999999', '34999999999', 'aluno14@email.com', 80.000, 1.80, 24.69, 'Ativo', 'Observação 14', 'senha14'),
('Aluno15', '555.555.555-56', 'Rua O', 'Bairro O', 'Cidade O', 'SE', '35000-000', '35999999999', '35999999999', 'aluno15@email.com', 60.000, 1.65, 22.04, 'Ativo', 'Observação 15', 'senha15'),
('Aluno16', '666.666.666-67', 'Rua P', 'Bairro P', 'Cidade P', 'MT', '36000-000', '36999999999', '36999999999', 'aluno16@email.com', 65.000, 1.70, 22.49, 'Ativo', 'Observação 16', 'senha16'),
('Aluno17', '777.777.777-78', 'Rua Q', 'Bairro Q', 'Cidade Q', 'MS', '37000-000', '37999999999', '37999999999', 'aluno17@email.com', 70.000, 1.75, 22.86, 'Ativo', 'Observação 17', 'senha17'),
('Aluno18', '888.888.888-89', 'Rua R', 'Bairro R', 'Cidade R', 'PA', '38000-000', '38999999999', '38999999999', 'aluno18@email.com', 68.000, 1.60, 26.56, 'Ativo', 'Observação 18', 'senha18'),
('Aluno19', '999.999.999-90', 'Rua S', 'Bairro S', 'Cidade S', 'MA', '39000-000', '39999999999', '39999999999', 'aluno19@email.com', 75.000, 1.77, 23.94, 'Ativo', 'Observação 19', 'senha19'),
('Aluno20', '000.000.000-01', 'Rua T', 'Bairro T', 'Cidade T', 'PI', '40000-000', '40999999999', '40999999999', 'aluno20@email.com', 80.000, 1.85, 23.37, 'Ativo', 'Observação 20', 'senha20');

-- Inserindo dados na tabela tbProfessor
INSERT INTO tbProfessor (nome, telefone, celular, email, senha) VALUES 
('Professor1', '27999999999', '27999999999', 'professor1@email.com', 'senha1'),
('Professor2', '21999999999', '21999999999', 'professor2@email.com', 'senha2'),
('Professor3', '23999999999', '23999999999', 'professor3@email.com', 'senha3'),
('Professor4', '24999999999', '24999999999', 'professor4@email.com', 'senha4'),
('Professor5', '25999999999', '25999999999', 'professor5@email.com', 'senha5'),
('Professor6', '26999999999', '26999999999', 'professor6@email.com', 'senha6'),
('Professor7', '27999999999', '27999999999', 'professor7@email.com', 'senha7'),
('Professor8', '28999999999', '28999999999', 'professor8@email.com', 'senha8'),
('Professor9', '29999999999', '29999999999', 'professor9@email.com', 'senha9'),
('Professor10', '30999999999', '30999999999', 'professor10@email.com', 'senha10'),
('Professor11', '31999999999', '31999999999', 'professor11@email.com', 'senha11'),
('Professor12', '32999999999', '32999999999', 'professor12@email.com', 'senha12'),
('Professor13', '33999999999', '33999999999', 'professor13@email.com', 'senha13'),
('Professor14', '34999999999', '34999999999', 'professor14@email.com', 'senha14'),
('Professor15', '35999999999', '35999999999', 'professor15@email.com', 'senha15'),
('Professor16', '36999999999', '36999999999', 'professor16@email.com', 'senha16'),
('Professor17', '37999999999', '37999999999', 'professor17@email.com', 'senha17'),
('Professor18', '38999999999', '38999999999', 'professor18@email.com', 'senha18'),
('Professor19', '39999999999', '39999999999', 'professor19@email.com', 'senha19'),
('Professor20', '40999999999', '40999999999', 'professor20@email.com', 'senha20');

-- Inserindo dados na tabela tbTurma
INSERT INTO tbTurma (descricao, horarioInicio, horarioTermino, idProfessor) VALUES 
('Turma1', '08:00:00', '09:00:00', 1),
('Turma2', '09:00:00', '10:00:00', 2),
('Turma3', '10:00:00', '11:00:00', 3),
('Turma4', '11:00:00', '12:00:00', 4),
('Turma5', '12:00:00', '13:00:00', 5),
('Turma6', '13:00:00', '14:00:00', 6),
('Turma7', '14:00:00', '15:00:00', 7),
('Turma8', '15:00:00', '16:00:00', 8),
('Turma9', '16:00:00', '17:00:00', 9),
('Turma10', '17:00:00', '18:00:00', 10),
('Turma11', '18:00:00', '19:00:00', 11),
('Turma12', '19:00:00', '20:00:00', 12),
('Turma13', '20:00:00', '21:00:00', 13),
('Turma14', '21:00:00', '22:00:00', 14),
('Turma15', '22:00:00', '23:00:00', 15),
('Turma16', '23:00:00', '00:00:00', 16),
('Turma17', '07:00:00', '08:00:00', 17),
('Turma18', '06:00:00', '07:00:00', 18),
('Turma19', '05:00:00', '06:00:00', 19),
('Turma20', '04:00:00', '05:00:00', 20),
('Turma21', '08:00:00', '09:00:00', 1),
('Turma22', '09:00:00', '10:00:00', 2),
('Turma23', '10:00:00', '11:00:00', 3),
('Turma24', '11:00:00', '12:00:00', 4),
('Turma25', '12:00:00', '13:00:00', 5),
('Turma26', '13:00:00', '14:00:00', 6),
('Turma27', '14:00:00', '15:00:00', 7),
('Turma28', '15:00:00', '16:00:00', 8),
('Turma29', '16:00:00', '17:00:00', 9),
('Turma30', '17:00:00', '18:00:00', 10),
('Turma31', '18:00:00', '19:00:00', 11),
('Turma32', '19:00:00', '20:00:00', 12),
('Turma33', '20:00:00', '21:00:00', 13),
('Turma34', '21:00:00', '22:00:00', 14),
('Turma35', '22:00:00', '23:00:00', 15),
('Turma36', '23:00:00', '00:00:00', 16),
('Turma37', '07:00:00', '08:00:00', 17),
('Turma38', '06:00:00', '07:00:00', 18),
('Turma39', '05:00:00', '06:00:00', 19),
('Turma40', '04:00:00', '05:00:00', 20),
('Turma41', '08:00:00', '09:00:00', 1),
('Turma42', '09:00:00', '10:00:00', 2),
('Turma43', '10:00:00', '11:00:00', 3),
('Turma44', '11:00:00', '12:00:00', 4),
('Turma45', '12:00:00', '13:00:00', 5),
('Turma46', '13:00:00', '14:00:00', 6),
('Turma47', '14:00:00', '15:00:00', 7),
('Turma48', '15:00:00', '16:00:00', 8),
('Turma49', '16:00:00', '17:00:00', 9),
('Turma50', '17:00:00', '18:00:00', 10),
('Turma51', '18:00:00', '19:00:00', 11),
('Turma52', '19:00:00', '20:00:00', 12),
('Turma53', '20:00:00', '21:00:00', 13),
('Turma54', '21:00:00', '22:00:00', 14),
('Turma55', '22:00:00', '23:00:00', 15),
('Turma56', '23:00:00', '00:00:00', 16),
('Turma57', '07:00:00', '08:00:00', 17),
('Turma58', '06:00:00', '07:00:00', 18),
('Turma59', '05:00:00', '06:00:00', 19),
('Turma60', '04:00:00', '05:00:00', 20);

-- Inserindo dados na tabela tbMatricula
INSERT INTO tbMatricula (dataMatricula, idAluno, idTurma) VALUES 
('2024-01-01', 1, 1),
('2024-01-01', 2, 1),
('2024-01-02', 3, 1),
('2024-01-02', 4, 1),
('2024-01-03', 5, 2),
('2024-01-03', 6, 2),
('2024-01-04', 7, 2),
('2024-01-04', 8, 2),
('2024-01-05', 9, 3),
('2024-01-05', 10, 3),
('2024-01-06', 11, 3),
('2024-01-06', 12, 3),
('2024-01-07', 13, 4),
('2024-01-07', 14, 4),
('2024-01-08', 15, 4),
('2024-01-08', 16, 4),
('2024-01-09', 17, 5),
('2024-01-09', 18, 5),
('2024-01-10', 19, 5),
('2024-01-10', 20, 5),
('2024-01-11', 1, 6),
('2024-01-11', 2, 6),
('2024-01-12', 3, 6),
('2024-01-12', 4, 6),
('2024-01-13', 5, 7),
('2024-01-13', 6, 7),
('2024-01-14', 7, 7),
('2024-01-14', 8, 7),
('2024-01-15', 9, 8),
('2024-01-15', 10, 8),
('2024-01-16', 11, 8),
('2024-01-16', 12, 8),
('2024-01-17', 13, 9),
('2024-01-17', 14, 9),
('2024-01-18', 15, 9),
('2024-01-18', 16, 9),
('2024-01-19', 17, 10),
('2024-01-19', 18, 10),
('2024-01-20', 19, 10),
('2024-01-20', 20, 10),
('2024-01-21', 1, 11),
('2024-01-21', 2, 11),
('2024-01-22', 3, 11),
('2024-01-22', 4, 11),
('2024-01-23', 5, 12),
('2024-01-23', 6, 12),
('2024-01-24', 7, 12),
('2024-01-24', 8, 12),
('2024-01-25', 9, 13),
('2024-01-25', 10, 13),
('2024-01-26', 11, 13),
('2024-01-26', 12, 13),
('2024-01-27', 13, 14),
('2024-01-27', 14, 14),
('2024-01-28', 15, 14),
('2024-01-28', 16, 14),
('2024-01-29', 17, 15),
('2024-01-29', 18, 15),
('2024-01-30', 19, 15),
('2024-01-30', 20, 15),
('2024-01-31', 1, 16),
('2024-01-31', 2, 16),
('2024-02-01', 3, 16),
('2024-02-01', 4, 16),
('2024-02-02', 5, 17),
('2024-02-02', 6, 17),
('2024-02-03', 7, 17),
('2024-02-03', 8, 17),
('2024-02-04', 9, 18),
('2024-02-04', 10, 18),
('2024-02-05', 11, 18),
('2024-02-05', 12, 18),
('2024-02-06', 13, 19),
('2024-02-06', 14, 19),
('2024-02-07', 15, 19),
('2024-02-07', 16, 19),
('2024-02-08', 17, 20),
('2024-02-08', 18, 20),
('2024-02-09', 19, 20),
('2024-02-09', 20, 20);
