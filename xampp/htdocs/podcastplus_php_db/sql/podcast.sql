CREATE TABLE podcast (
  id INT AUTO_INCREMENT PRIMARY KEY,
  tema VARCHAR(50),
  criado_por VARCHAR(100),
  titulo VARCHAR(100),
  descricao VARCHAR(200),
  audio VARCHAR(100),
  data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO podcast (tema, criado_por, titulo, descricao, audio) 
            VALUES ('TECNOLOGIA','Carlos Silva','Tech Talks: O Futuro da IA','Discussões profundas sobre inteligência artificial, machine learning e como essas tecnologias estão moldando nosso futuro. Episódio especial com CEOs do Vale do Silício.','../audio/Kainbeats - mindscapes (Sad Lofi Hiphop EP) [iuT8KImN-Rk].mp3')
INSERT INTO podcast (tema, criado_por, titulo, descricao, audio) 
            VALUES ('TECNOLOGIA','Carlos Silva','Tech Talks: O Futuro da IA','Discussões profundas sobre inteligência artificial, machine learning e como essas tecnologias estão moldando nosso futuro. Episódio especial com CEOs do Vale do Silício.','../audio/Kainbeats - mindscapes (Sad Lofi Hiphop EP) [iuT8KImN-Rk].mp3')
INSERT INTO podcast (tema, criado_por, titulo, descricao, audio) 
            VALUES ('TECNOLOGIA','Carlos Silva','Tech Talks: O Futuro da IA','Discussões profundas sobre inteligência artificial, machine learning e como essas tecnologias estão moldando nosso futuro. Episódio especial com CEOs do Vale do Silício.','../audio/Kainbeats - mindscapes (Sad Lofi Hiphop EP) [iuT8KImN-Rk].mp3')