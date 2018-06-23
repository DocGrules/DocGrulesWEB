
CREATE TABLE aluno (
    aluno_id integer NOT NULL ,
    foto text,
    matricula character varying(9) NOT NULL,
    nome character varying(100) NOT NULL,
    periodo character varying(2) NOT NULL
);


CREATE TABLE alunos_apresentacao (
    aluno_id character varying(255) NOT NULL,
    apresentacao_id character varying(255) NOT NULL
);

CREATE TABLE alunos_evento (
    aluno_id character varying(255) NOT NULL,
    evento_id character varying(255) NOT NULL
);



CREATE TABLE apresentacao (
    apresentacao_id integer PRIMARY KEY,
    datahora timestamp without time zone,
    resumo text,
    titulo character varying(100),
    evento_id integer
);


CREATE TABLE evento (
    evento_id integer PRIMARY KEY,
    semestre character varying(7) NOT NULL,
    tema character varying(50) NOT NULL
);