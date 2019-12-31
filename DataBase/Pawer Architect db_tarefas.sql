
CREATE TABLE tb_usuarios (
                usuario_id INT AUTO_INCREMENT NOT NULL,
                usuario_senha VARCHAR(12) NOT NULL,
                usuario_nome VARCHAR(45) NOT NULL,
                usuario_email VARCHAR(45) NOT NULL,
                PRIMARY KEY (usuario_id)
);


CREATE TABLE tb_tarefas (
                tarefas_id INT AUTO_INCREMENT NOT NULL,
                id_usuario VARCHAR(45) NOT NULL,
                tarefas_titulo VARCHAR(45) NOT NULL,
                tarefas_finalizada TINYINT NOT NULL,
                usuario_id INT NOT NULL,
                PRIMARY KEY (tarefas_id)
);


ALTER TABLE tb_tarefas ADD CONSTRAINT tb_usuarios_tb_tarefas_fk
FOREIGN KEY (usuario_id)
REFERENCES tb_usuarios (usuario_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
