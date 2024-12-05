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
    titulo varchar(255),
    conteudo varchar(1000),
    imagem varchar(255),
    views int,
    aprovacao enum('pendente','aprovado','rejeitado') DEFAULT 'pendente',
    editorId int references usuarios,
    administradorId int references usuarios,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
INSERT INTO materias (titulo, conteudo, imagem, views, aprovacao, editorId, administradorId)
VALUES
('NewJeans no FNS Musical Festival Day 1',
    'O grupo de K-pop NewJeans iniciou sua mundialmente aguardada "Bunnyland Tour" em Seul, com ingressos esgotados em menos de três minutos. A turnê, marcada por uma produção grandiosa e performances impecáveis, atraiu fãs de todo o mundo. Especialistas apontam que a combinação de músicas cativantes e conexão com os fãs é chave para o sucesso do grupo, que promete marcar novos marcos nas próximas etapas da turnê.',
    "./db/images/destaque1.jpeg", 3000, 'aprovado', 6, 3),
('Ditto, o novo concorrente entre os hits de inverno do kpop',
    'Com o lançamento do álbum "OMG", NewJeans cativou fãs ao redor do mundo. A faixa-título se tornou viral rapidamente, com críticas destacando a maturidade artística do grupo. O álbum, com uma sonoridade inovadora e temas profundos, desafia as normas do K-pop e apresenta uma experiência única para os ouvintes. Fãs e críticos celebraram o lançamento, elevando o grupo ao topo das paradas globais.',
    "./db/images/destaque2.jpeg", 0, 'aprovado', 7, 4),
('Rolling Stone nomeia "How Sweet" como a melhor música de kpop de 2024',
    'NewJeans lançou recentemente o documentário "Behind the Bunny", que mostra os bastidores da vida do grupo, desde os treinos intensos até momentos de amizade. As integrantes compartilham desafios pessoais e como lidam com a pressão da fama, oferecendo aos fãs uma visão íntima e emocionante de sua jornada. O documentário foi muito bem recebido, destacando a proximidade do grupo com seus seguidores.',
    "./db/images/destaque3.jpeg", 0, 'pendente', 6, 3),
('NewJeans retorna para a Coreia do Sul após promoções no Japão',
    'Rumores indicam uma possível colaboração do NewJeans com artistas globais como Billie Eilish e Pharrell Williams em seu próximo álbum. Embora a gravadora ADOR ainda não tenha confirmado oficialmente, essa parceria gerou grande expectativa entre os fãs. Especialistas acreditam que essa colaboração pode fortalecer ainda mais o grupo no cenário internacional do K-pop.',
    "./db/images/noticia1.jpeg", 0, 'pendente', 7, 4),
('NewJeans ocupa 4 posições do top10 músicas de girlgroup mais ouvidas no Spotify Korea 2024',
    'Encerrando um ano repleto de conquistas, NewJeans fez um show inesquecível em Seul, transmitido ao vivo para fãs de mais de 100 países. A performance contou com um cenário futurista e coreografias impressionantes, sendo descrita como um espetáculo audiovisual que redefine os padrões da indústria musical. A banda também apresentou uma nova música que deixou os fãs ansiosos por mais.',
    "./db/images/noticia2.jpeg", 0, 'aprovado', 10, 5),
('NewJeans é o ato mais tocado no YouTube Music South Korea em 2024',
    'NewJeans anunciou o lançamento de um aplicativo exclusivo para seus fãs, o "BunnyHub". O app oferece uma experiência interativa única, com funcionalidades como personalização de avatares e eventos virtuais, além de conteúdos exclusivos. A novidade, que inclui realidade aumentada, já foi baixada por milhões de usuários e promete aproximar ainda mais o grupo de seus fãs.',
    "./db/images/noticia3.jpeg", 0, 'aprovado', 8, 2);

INSERT INTO materias (titulo,conteudo,imagem,views,aprovacao,editorId) 
VALUES
("Daniele marca presença no tapete vermelho do evento da Celine",
    "Daniele, integrante do NewJeans, fez uma aparição deslumbrante no tapete vermelho do evento de lançamento da nova coleção da Celine. Com um look elegante e moderno, ela chamou a atenção dos fotógrafos e fãs, consolidando sua presença no mundo da moda. Sua participação no evento, que reuniu várias celebridades, reflete o crescente impacto do grupo, não só na música, mas também nas passarelas e no universo fashion.",
    "./db/images/3.png", 60, "aprovado", 8),

INSERT INTO materias (titulo,conteudo,imagem,views,aprovacao,editorId) 
VALUES
("NewJeans aciona 'Coletiva de Imprensa de Emergência' a respeito de seu contrato com ADOR",
    "Após rumores sobre o fim do contrato com a gravadora ADOR, o grupo NewJeans convocou uma coletiva de imprensa de emergência para esclarecer a situação. Durante a reunião, representantes do grupo esclareceram que o contrato não foi rompido, mas que estavam em negociações para possíveis mudanças em sua parceria. O grupo agradeceu aos fãs pelo apoio contínuo e garantiu que novidades seriam anunciadas em breve.",
    "./db/images/2.png", 45, "aprovado", 8),

INSERT INTO materias (titulo,conteudo,imagem,views,aprovacao,editorId) 
VALUES
("NewJeans oficializa o fim de seu contrato com ADOR",
    "Após meses de especulação, o NewJeans oficializou o fim de seu contrato com a gravadora ADOR. Em um comunicado conjunto, o grupo agradeceu à ADOR pelo suporte durante sua trajetória e anunciou novos planos para o futuro, com uma transição para uma nova fase de sua carreira. A decisão marca o fim de um capítulo importante, mas abre portas para o grupo explorar novas possibilidades no mercado musical.",
    "./db/images/1.png", 50, "aprovado", 8);
