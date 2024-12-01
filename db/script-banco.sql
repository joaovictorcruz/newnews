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
    admnistradorId int references usuarios,
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
INSERT INTO materias (titulo, conteudo, views, aprovacao, editorId, admnistradorId)
VALUES
('Turnê Mundial do NewJeans Bate Recordes',
    'O grupo de K-pop NewJeans, sensação global, iniciou sua tão aguardada turnê mundial e já está quebrando recordes de público e vendas. A turnê, intitulada "Bunnyland Tour", estreou em Seul com ingressos esgotados em menos de três minutos. Com performances impecáveis e uma produção grandiosa, o grupo atraiu fãs de todo o mundo para a Coreia do Sul. \n\nA turnê segue para outras cidades da Ásia, Europa e Américas, prometendo conquistar novos marcos. Especialistas apontam que a popularidade do NewJeans é resultado da combinação de músicas cativantes, um estilo único e uma forte conexão com os fãs. A líder do grupo, Minji, emocionou o público ao agradecer pelo apoio contínuo e prometeu surpresas especiais para os próximos shows.', 
    0, 'aprovado', 6, 3),
('NewJeans Lança Álbum Conceitual com Sucesso Estrondoso',
    'O NewJeans lançou recentemente seu álbum conceitual "OMG", e o impacto foi instantâneo. Com letras profundas e uma sonoridade inovadora, o álbum explora temas como identidade, juventude e superação. A faixa-título, acompanhada por um videoclipe cinematográfico, tornou-se viral nas redes sociais, alcançando milhões de visualizações em poucas horas. \n\nCríticos elogiaram a maturidade artística do grupo, destacando como as integrantes conseguem trazer autenticidade e emoção para cada canção. O produtor principal, Min Hee-jin, comentou que o álbum foi projetado para desafiar as normas do K-pop e oferecer uma experiência única aos ouvintes. Fãs ao redor do mundo celebraram o lançamento, levando o álbum ao topo das paradas globais.', 
    0, 'aprovado', 7, 4),
('Documentário Revela os Bastidores da Vida no NewJeans',
    'Um novo documentário intitulado "Behind the Bunny" foi lançado, revelando os bastidores da vida do grupo de K-pop NewJeans. O filme, produzido pela própria gravadora ADOR, mostra os desafios enfrentados pelas integrantes, desde os intensos treinos diários até os momentos de lazer e amizade que fortalecem o grupo. \n\nNo documentário, Haerin compartilha como lida com a pressão de estar sob os holofotes, enquanto Hanni falou sobre a importância do apoio dos fãs para superar os desafios. Os espectadores também têm um vislumbre das dinâmicas entre as integrantes e a equipe de produção. O documentário foi recebido com entusiasmo pelos fãs, que elogiaram a transparência e a proximidade proporcionadas pelo conteúdo.', 
    0, 'pendente', 6, 3),
('Rumores sobre Colaboração do NewJeans com Artistas Globais',
    'A indústria da música foi surpreendida por rumores de uma possível colaboração entre o NewJeans e artistas globais renomados. Fontes próximas à gravadora ADOR indicaram que o grupo estaria negociando uma parceria com cantores como Billie Eilish e Pharrell Williams para seu próximo álbum. \n\nEmbora a gravadora ainda não tenha confirmado oficialmente a colaboração, os rumores já criaram grande expectativa entre os fãs. Especialistas acreditam que essa aliança pode elevar ainda mais o perfil internacional do grupo, consolidando sua posição como um dos maiores fenômenos do K-pop na atualidade. Os fãs estão usando as redes sociais para especular quais estilos musicais podem surgir dessa parceria inusitada.', 
    0, 'pendente', 7, 4),
('NewJeans Encerra Ano com Show Memorável em Seul',
    'Encerrando um ano repleto de conquistas, o NewJeans realizou um show inesquecível em Seul, que foi transmitido ao vivo para fãs de mais de 100 países. O evento, que contou com um cenário futurista e coreografias de tirar o fôlego, foi um presente de fim de ano para o fandom "Bunnies". \n\nDurante o show, a integrante Danielle emocionou a plateia ao expressar sua gratidão pelo amor e apoio recebido ao longo do ano. O grupo apresentou todos os seus grandes sucessos, além de uma faixa inédita que deixou os fãs ansiosos pelo próximo lançamento. Críticos descreveram o evento como "um espetáculo audiovisual que redefine os padrões da indústria musical".', 
    0, 'aprovado', 10, 5),
('Aplicativo Interativo do NewJeans Promete Revolucionar o Fandom',
    'O NewJeans anunciou o lançamento de um aplicativo exclusivo para seus fãs, intitulado "BunnyHub". O app oferece uma experiência interativa única, permitindo que os fãs personalizem avatares, participem de eventos virtuais e acessem conteúdos exclusivos, como bastidores e entrevistas. \n\nAlém disso, o "BunnyHub" conta com uma funcionalidade inovadora de realidade aumentada, que permite que os fãs "interajam" com as integrantes do grupo em tempo real. Desde o anúncio, o aplicativo já foi baixado por milhões de usuários e está recebendo avaliações extremamente positivas. Segundo a gravadora ADOR, o objetivo é aproximar ainda mais o grupo de seus fãs, fortalecendo o laço entre eles.', 
    0, 'aprovado', 8, 2),
('Notícia Falsa sobre o Hiato do NewJeans Circula nas Redes',
    'Nas últimas semanas, uma notícia falsa sobre um possível hiato do NewJeans tomou conta das redes sociais, causando preocupação entre os fãs. A gravadora ADOR rapidamente desmentiu os rumores, afirmando que o grupo está mais ativo do que nunca e tem grandes planos para o futuro. \n\nEspecialistas em mídia apontam que a rápida disseminação de informações falsas é um problema crescente na era digital. Os "Bunnies", como são conhecidos os fãs do grupo, iniciaram uma campanha online para combater boatos e promover fontes confiáveis de informação sobre o NewJeans.', 
    0, 'pendente', 7, 4),
('NewJeans é Indicado a Prêmio Internacional de Música',
    'O NewJeans foi indicado ao prestigioso prêmio Grammy na categoria "Melhor Performance de Grupo ou Duo". Essa é a primeira vez que um grupo de K-pop em ascensão alcança tal reconhecimento tão cedo na carreira. A indicação é um marco histórico, destacando a influência global do grupo e sua capacidade de conectar diferentes culturas por meio da música. \n\nDurante uma entrevista coletiva, Hyein expressou sua empolgação com a indicação e disse estar honrada em representar o K-pop em um evento tão importante. Fãs ao redor do mundo já estão organizando campanhas para apoiar o grupo na premiação, que ocorrerá no início do próximo ano.', 
    0, 'aprovado', 8, 1),
('NewJeans Participa de Evento Beneficente em Tóquio',
    'O NewJeans participou de um evento beneficente em Tóquio para arrecadar fundos para crianças em situação de vulnerabilidade. O grupo apresentou uma versão acústica de seus maiores sucessos, emocionando o público com sua performance intimista. \n\nO evento arrecadou mais de 2 milhões de dólares, que serão destinados a programas educacionais e alimentares. Fãs elogiaram o compromisso social do grupo, que tem usado sua influência para promover causas nobres. As integrantes do NewJeans também destacaram a importância de retribuir o apoio que recebem, inspirando outros artistas a fazerem o mesmo.', 
    0, 'pendente', 9, 1),
('NewJeans Anuncia Reality Show Exclusivo para Fãs',
    'O grupo de K-pop NewJeans anunciou o lançamento de um reality show exclusivo, intitulado "Bunnies Behind the Scenes". O programa, que será transmitido por plataformas digitais, promete mostrar a rotina do grupo, incluindo ensaios, gravações e momentos descontraídos entre as integrantes. \n\nOs fãs terão a oportunidade de conhecer melhor as personalidades de cada integrante e acompanhar de perto os bastidores da produção musical. Segundo a gravadora ADOR, o reality é uma forma de aproximar ainda mais o grupo de seu fandom, oferecendo uma experiência única e autêntica.', 
    0, 'pendente', 6, 3);

INSERT INTO materias (titulo,conteudo,imagem,views,aprovacao,editorId) VALUES("Daniele marca presença no tapete vermelho do evento da Celine","","./db/images/3.png",2000,"aprovado",12);
INSERT INTO materias (titulo,conteudo,imagem,views,aprovacao,editorId) VALUES("NewJeans aciona 'Coletiva de Imprensa de Emergência' a respeito de seu contrato com ADOR","","./db/images/2.png",2005,"aprovado",12);
INSERT INTO materias (titulo,conteudo,imagem,views,aprovacao,editorId) VALUES("NewJeans oficializa o fim de seu contrato com ADOR","","./db/images/1.png",3000,"aprovado",12);

