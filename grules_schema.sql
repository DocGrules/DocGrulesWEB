--
-- PostgreSQL database dump
--

-- Dumped from database version 10.1
-- Dumped by pg_dump version 10.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: aluno; Type: TABLE; Schema: public; Owner: grules
--

CREATE TABLE aluno (
    aluno_id integer NOT NULL,
    foto text,
    matricula character varying(9) NOT NULL,
    nome character varying(100) NOT NULL,
    periodo character varying(2) NOT NULL
);


ALTER TABLE aluno OWNER TO grules;

--
-- Name: alunos_apresentacao; Type: TABLE; Schema: public; Owner: grules
--

CREATE TABLE alunos_apresentacao (
    apresentacao_id integer NOT NULL,
    aluno_id integer NOT NULL
);


ALTER TABLE alunos_apresentacao OWNER TO grules;

--
-- Name: alunos_evento; Type: TABLE; Schema: public; Owner: grules
--

CREATE TABLE alunos_evento (
    evento_id integer NOT NULL,
    aluno_id integer NOT NULL
);


ALTER TABLE alunos_evento OWNER TO grules;

--
-- Name: apresentacao; Type: TABLE; Schema: public; Owner: grules
--

CREATE TABLE apresentacao (
    apresentacao_id integer NOT NULL,
    datahora timestamp without time zone,
    resumo text,
    titulo character varying(100),
    evento_id integer
);


ALTER TABLE apresentacao OWNER TO grules;

--
-- Name: evento; Type: TABLE; Schema: public; Owner: grules
--

CREATE TABLE evento (
    evento_id integer NOT NULL,
    semestre character varying(7) NOT NULL,
    tema character varying(50) NOT NULL
);


ALTER TABLE evento OWNER TO grules;

--
-- Name: sequence; Type: TABLE; Schema: public; Owner: grules
--

CREATE TABLE sequence (
    seq_name character varying(50) NOT NULL,
    seq_count numeric(38,0)
);


ALTER TABLE sequence OWNER TO grules;

--
-- Data for Name: aluno; Type: TABLE DATA; Schema: public; Owner: grules
--

INSERT INTO aluno (aluno_id, foto, matricula, nome, periodo) VALUES (1, 'lkjadshf', '1', 'Gustavo', '7');
INSERT INTO aluno (aluno_id, foto, matricula, nome, periodo) VALUES (2, 'lkjadshf', '2', 'Alisson', '5');
INSERT INTO aluno (aluno_id, foto, matricula, nome, periodo) VALUES (3, 'lkjadshf', '3', 'Thayrone', '5');
INSERT INTO aluno (aluno_id, foto, matricula, nome, periodo) VALUES (4, 'lkjadshf', '4', 'Vinicius', '5');


--
-- Data for Name: alunos_apresentacao; Type: TABLE DATA; Schema: public; Owner: grules
--

INSERT INTO alunos_apresentacao (apresentacao_id, aluno_id) VALUES (1, 1);
INSERT INTO alunos_apresentacao (apresentacao_id, aluno_id) VALUES (1, 2);


--
-- Data for Name: alunos_evento; Type: TABLE DATA; Schema: public; Owner: grules
--

INSERT INTO alunos_evento (evento_id, aluno_id) VALUES (1, 1);
INSERT INTO alunos_evento (evento_id, aluno_id) VALUES (1, 2);
INSERT INTO alunos_evento (evento_id, aluno_id) VALUES (2, 3);
INSERT INTO alunos_evento (evento_id, aluno_id) VALUES (2, 4);


--
-- Data for Name: apresentacao; Type: TABLE DATA; Schema: public; Owner: grules
--

INSERT INTO apresentacao (apresentacao_id, datahora, resumo, titulo, evento_id) VALUES (1, '2018-01-01 00:00:00', 'bla bla bla', 'Evento A', 1);
INSERT INTO apresentacao (apresentacao_id, datahora, resumo, titulo, evento_id) VALUES (2, '2018-01-01 00:00:00', 'bla bla bla', 'Evento B', 1);
INSERT INTO apresentacao (apresentacao_id, datahora, resumo, titulo, evento_id) VALUES (3, '2018-01-02 00:00:00', 'bla bla bla', 'Evento C', 1);
INSERT INTO apresentacao (apresentacao_id, datahora, resumo, titulo, evento_id) VALUES (4, '2018-01-02 00:00:00', 'bla bla bla', 'Evento D', 1);


--
-- Data for Name: evento; Type: TABLE DATA; Schema: public; Owner: grules
--

INSERT INTO evento (evento_id, semestre, tema) VALUES (1, '2018/2', 'Morma‡o');
INSERT INTO evento (evento_id, semestre, tema) VALUES (2, '2018/1', 'Sol do 12:00');


--
-- Data for Name: sequence; Type: TABLE DATA; Schema: public; Owner: grules
--

INSERT INTO sequence (seq_name, seq_count) VALUES ('apresentacao_id', 0);
INSERT INTO sequence (seq_name, seq_count) VALUES ('aluno_id', 0);
INSERT INTO sequence (seq_name, seq_count) VALUES ('evento_id', 18);


--
-- Name: aluno aluno_pkey; Type: CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY aluno
    ADD CONSTRAINT aluno_pkey PRIMARY KEY (aluno_id);


--
-- Name: alunos_apresentacao alunos_apresentacao_pkey; Type: CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY alunos_apresentacao
    ADD CONSTRAINT alunos_apresentacao_pkey PRIMARY KEY (apresentacao_id, aluno_id);


--
-- Name: alunos_evento alunos_evento_pkey; Type: CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY alunos_evento
    ADD CONSTRAINT alunos_evento_pkey PRIMARY KEY (evento_id, aluno_id);


--
-- Name: apresentacao apresentacao_pkey; Type: CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY apresentacao
    ADD CONSTRAINT apresentacao_pkey PRIMARY KEY (apresentacao_id);


--
-- Name: evento evento_pkey; Type: CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY evento
    ADD CONSTRAINT evento_pkey PRIMARY KEY (evento_id);


--
-- Name: sequence sequence_pkey; Type: CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY sequence
    ADD CONSTRAINT sequence_pkey PRIMARY KEY (seq_name);


--
-- Name: alunos_apresentacao fk_alunos_apresentacao_aluno_id; Type: FK CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY alunos_apresentacao
    ADD CONSTRAINT fk_alunos_apresentacao_aluno_id FOREIGN KEY (aluno_id) REFERENCES aluno(aluno_id);


--
-- Name: alunos_apresentacao fk_alunos_apresentacao_apresentacao_id; Type: FK CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY alunos_apresentacao
    ADD CONSTRAINT fk_alunos_apresentacao_apresentacao_id FOREIGN KEY (apresentacao_id) REFERENCES apresentacao(apresentacao_id);


--
-- Name: alunos_evento fk_alunos_evento_aluno_id; Type: FK CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY alunos_evento
    ADD CONSTRAINT fk_alunos_evento_aluno_id FOREIGN KEY (aluno_id) REFERENCES aluno(aluno_id);


--
-- Name: alunos_evento fk_alunos_evento_evento_id; Type: FK CONSTRAINT; Schema: public; Owner: grules
--

ALTER TABLE ONLY alunos_evento
    ADD CONSTRAINT fk_alunos_evento_evento_id FOREIGN KEY (evento_id) REFERENCES evento(evento_id);


--
-- PostgreSQL database dump complete
--

