create database newNews;
use newNews;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50),
    email varchar(50) unique,
    senha varchar(50),
    statusUser varchar(13)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS materias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo varchar(50),
    conteudo varchar(50),
    codigo varchar(255),
    tipo varchar(5),
    aprovacao boolean,
    editorId int references usuarios,
    admnistradorId int references usuarios 
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserindo administradores
INSERT INTO usuarios (nome, email, senha, statusUser)
VALUES
('Carlos Souza', 'carlos.souza@email.com', 'senha123', 'administrador'), -- admnistradorId 1
('Fernanda Lima', 'fernanda.lima@email.com', 'senha123', 'administrador'), -- admnistradorId 2
('Ricardo Mendes', 'ricardo.mendes@email.com', 'senha123', 'administrador'), -- admnistradorId 3
('Juliana Rocha', 'juliana.rocha@email.com', 'senha123', 'administrador'), -- admnistradorId 4
('Patrícia Duarte', 'patricia.duarte@email.com', 'senha123', 'administrador'); -- admnistradorId 5

-- Inserindo editores
INSERT INTO usuarios (nome, email, senha, statusUser)
VALUES
('João Silva', 'joao.silva@email.com', 'senha123', 'editor'), -- editorId 6
('Maria Oliveira', 'maria.oliveira@email.com', 'senha123', 'editor'), -- editorId 7
('Pedro Santos', 'pedro.santos@email.com', 'senha123', 'editor'), -- editorId 8
('Ana Costa', 'ana.costa@email.com', 'senha123', 'editor'), -- editorId 9
('Luiza Almeida', 'luiza.almeida@email.com', 'senha123', 'editor'); -- editorId 10

-- Inserindo matérias
INSERT INTO materias (titulo, conteudo, aprovacao, editorId, admnistradorId)
VALUES
('Avanços na Ciência', 'Novo método revolucionário é descoberto.',  TRUE, 6, 3),
('Escândalo Político', 'Denúncias surgem contra senador renomado.', TRUE, 7, 4),
('Desastres Climáticos', 'Tempestade causa devastação em cidade.', FALSE, 6, 3),
('Promoção Enganosa', 'Promoção de loja vira motivo de processo.', FALSE, 7, 4),
('Evento Cultural', 'Grande festival de música atrai multidões.', TRUE, 10, 5),
('Tecnologia Inovadora', 'Novo aplicativo promete revolucionar comunicação.', TRUE, 8, 2),
('Falso Alerta de Meteoro', 'Boato assusta moradores.', FALSE, 7, 4),
('Saúde Pública', 'Novo medicamento aprovado pela Anvisa.', TRUE, 8, 1),
('Investimento Econômico', 'Empresa investe bilhões em energia limpa.', FALSE, 9, 1),
('Teoria Conspiratória', 'Rede social divulga rumores falsos.', FALSE, 6, 3);


