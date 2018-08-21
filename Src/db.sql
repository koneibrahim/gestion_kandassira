--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.12
-- Dumped by pg_dump version 9.5.12

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
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


--
-- Name: f_somme(integer, integer); Type: FUNCTION; Schema: public; Owner: ikone
--

CREATE FUNCTION public.f_somme(integer, integer) RETURNS integer
    LANGUAGE plpgsql
    AS $_$begin
return ($1+$2);
end$_$;


ALTER FUNCTION public.f_somme(integer, integer) OWNER TO ikone;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: achats; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.achats (
    id_ac integer NOT NULL,
    date_ac date DEFAULT now() NOT NULL,
    montant integer,
    montant_paye integer DEFAULT 0 NOT NULL,
    id_fo integer,
    etat_liv character(1) DEFAULT 'N'::bpchar,
    libele character varying(70),
    etat integer DEFAULT 0,
    CONSTRAINT check_montant CHECK ((montant > 0)),
    CONSTRAINT etat_liv_check CHECK (((etat_liv = 'N'::bpchar) OR (etat_liv = 'P'::bpchar) OR (etat_liv = 'T'::bpchar))),
    CONSTRAINT montant_pay_check CHECK (((montant_paye >= 0) AND (montant_paye <= montant)))
);


ALTER TABLE public.achats OWNER TO ikone;

--
-- Name: achats_id_ac_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.achats_id_ac_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.achats_id_ac_seq OWNER TO ikone;

--
-- Name: achats_id_ac_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.achats_id_ac_seq OWNED BY public.achats.id_ac;


--
-- Name: clients; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.clients (
    id_cli integer NOT NULL,
    nom_cli character varying(50),
    tel character varying(25),
    adresse_cli character varying(70),
    pre_cli character varying(25),
    tel2 character varying(50)
);


ALTER TABLE public.clients OWNER TO ikone;

--
-- Name: clients_id_cli_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.clients_id_cli_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.clients_id_cli_seq OWNER TO ikone;

--
-- Name: clients_id_cli_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.clients_id_cli_seq OWNED BY public.clients.id_cli;


--
-- Name: contenu_acha; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.contenu_acha (
    id_cac integer NOT NULL,
    id_ac integer,
    id_ma integer,
    prix integer NOT NULL,
    qte_ma integer,
    qte_liv integer DEFAULT 0,
    CONSTRAINT check_qte_liv CHECK (((qte_liv >= 0) AND (qte_liv <= qte_ma))),
    CONSTRAINT check_qte_ma CHECK ((qte_ma > 0))
);


ALTER TABLE public.contenu_acha OWNER TO ikone;

--
-- Name: contenu_acha_id_cac_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.contenu_acha_id_cac_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contenu_acha_id_cac_seq OWNER TO ikone;

--
-- Name: contenu_acha_id_cac_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.contenu_acha_id_cac_seq OWNED BY public.contenu_acha.id_cac;


--
-- Name: contenu_liv; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.contenu_liv (
    id_cliv integer NOT NULL,
    id_liv integer NOT NULL,
    id_cac integer,
    qte_l integer DEFAULT 0,
    CONSTRAINT check_qliv CHECK ((qte_l >= 0))
);


ALTER TABLE public.contenu_liv OWNER TO ikone;

--
-- Name: contenu_liv_id_cliv_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.contenu_liv_id_cliv_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contenu_liv_id_cliv_seq OWNER TO ikone;

--
-- Name: contenu_liv_id_cliv_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.contenu_liv_id_cliv_seq OWNED BY public.contenu_liv.id_cliv;


--
-- Name: contenu_liv_vente; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.contenu_liv_vente (
    id_cliv integer NOT NULL,
    id_liv integer,
    id_cve integer,
    qte_liv integer
);


ALTER TABLE public.contenu_liv_vente OWNER TO ikone;

--
-- Name: contenu_liv_vente_id_cliv_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.contenu_liv_vente_id_cliv_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contenu_liv_vente_id_cliv_seq OWNER TO ikone;

--
-- Name: contenu_liv_vente_id_cliv_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.contenu_liv_vente_id_cliv_seq OWNED BY public.contenu_liv_vente.id_cliv;


--
-- Name: contenu_ve; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.contenu_ve (
    id_cve integer NOT NULL,
    id_ve integer,
    id_pro integer,
    qte_v integer,
    prix integer,
    qte_liv integer
);


ALTER TABLE public.contenu_ve OWNER TO ikone;

--
-- Name: contenu_ve_id_cve_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.contenu_ve_id_cve_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contenu_ve_id_cve_seq OWNER TO ikone;

--
-- Name: contenu_ve_id_cve_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.contenu_ve_id_cve_seq OWNED BY public.contenu_ve.id_cve;


--
-- Name: fournisseurs; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.fournisseurs (
    id_fo integer NOT NULL,
    nom_fo character varying(25) NOT NULL,
    telephone character varying(50),
    addresse character varying(50)
);


ALTER TABLE public.fournisseurs OWNER TO ikone;

--
-- Name: fournisseurs_id_fo_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.fournisseurs_id_fo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.fournisseurs_id_fo_seq OWNER TO ikone;

--
-- Name: fournisseurs_id_fo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.fournisseurs_id_fo_seq OWNED BY public.fournisseurs.id_fo;


--
-- Name: group_users; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.group_users (
    id_g integer NOT NULL,
    nom_g character varying(20),
    id_user integer
);


ALTER TABLE public.group_users OWNER TO ikone;

--
-- Name: group_users_id_g_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.group_users_id_g_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.group_users_id_g_seq OWNER TO ikone;

--
-- Name: group_users_id_g_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.group_users_id_g_seq OWNED BY public.group_users.id_g;


--
-- Name: liv_vente; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.liv_vente (
    id_liv integer NOT NULL,
    id_ve integer,
    date_liv date,
    libele character varying(25)
);


ALTER TABLE public.liv_vente OWNER TO ikone;

--
-- Name: liv_vente_id_liv_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.liv_vente_id_liv_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.liv_vente_id_liv_seq OWNER TO ikone;

--
-- Name: liv_vente_id_liv_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.liv_vente_id_liv_seq OWNED BY public.liv_vente.id_liv;


--
-- Name: livraisons; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.livraisons (
    id_liv integer NOT NULL,
    id_ac integer,
    date_liv date DEFAULT now() NOT NULL,
    libele character varying(70)
);


ALTER TABLE public.livraisons OWNER TO ikone;

--
-- Name: livraisons_id_liv_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.livraisons_id_liv_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.livraisons_id_liv_seq OWNER TO ikone;

--
-- Name: livraisons_id_liv_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.livraisons_id_liv_seq OWNED BY public.livraisons.id_liv;


--
-- Name: matieres; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.matieres (
    id_ma integer NOT NULL,
    nom_ma character varying(25) NOT NULL,
    prix_ma integer,
    unite character varying(25),
    CONSTRAINT check1 CHECK ((prix_ma > 0))
);


ALTER TABLE public.matieres OWNER TO ikone;

--
-- Name: matieres_id_ma_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.matieres_id_ma_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.matieres_id_ma_seq OWNER TO ikone;

--
-- Name: matieres_id_ma_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.matieres_id_ma_seq OWNED BY public.matieres.id_ma;


--
-- Name: pay_vente; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.pay_vente (
    id_pve integer NOT NULL,
    id_ve integer,
    date_pve date,
    montant_pve integer,
    libele character varying(50)
);


ALTER TABLE public.pay_vente OWNER TO ikone;

--
-- Name: pay_vente_id_pve_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.pay_vente_id_pve_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pay_vente_id_pve_seq OWNER TO ikone;

--
-- Name: pay_vente_id_pve_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.pay_vente_id_pve_seq OWNED BY public.pay_vente.id_pve;


--
-- Name: payements; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.payements (
    id_pay integer NOT NULL,
    id_ac integer,
    date_pay date DEFAULT now() NOT NULL,
    montant integer DEFAULT 0,
    libele character varying(70),
    CONSTRAINT montant_check CHECK ((montant >= 0))
);


ALTER TABLE public.payements OWNER TO ikone;

--
-- Name: payements_id_pay_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.payements_id_pay_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.payements_id_pay_seq OWNER TO ikone;

--
-- Name: payements_id_pay_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.payements_id_pay_seq OWNED BY public.payements.id_pay;


--
-- Name: personnels; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.personnels (
    id_p integer NOT NULL,
    nom_p character varying(25),
    prenom_p character varying(25),
    fonction character varying(50),
    tel character varying(50),
    adresse character varying(50)
);


ALTER TABLE public.personnels OWNER TO ikone;

--
-- Name: personnels_id_p_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.personnels_id_p_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personnels_id_p_seq OWNER TO ikone;

--
-- Name: personnels_id_p_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.personnels_id_p_seq OWNED BY public.personnels.id_p;


--
-- Name: prestations; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.prestations (
    id_pres integer NOT NULL,
    nom_pres character varying(50),
    prix integer
);


ALTER TABLE public.prestations OWNER TO ikone;

--
-- Name: prestations_id_pre_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.prestations_id_pre_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.prestations_id_pre_seq OWNER TO ikone;

--
-- Name: prestations_id_pre_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.prestations_id_pre_seq OWNED BY public.prestations.id_pres;


--
-- Name: produits; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.produits (
    id_pro integer NOT NULL,
    nom_pro character varying(15) NOT NULL,
    qte_pro integer NOT NULL,
    prix_pro integer,
    qte_reel integer,
    qte_vir integer,
    CONSTRAINT check1 CHECK ((qte_pro > 0)),
    CONSTRAINT check_qtep CHECK ((qte_pro > 0))
);


ALTER TABLE public.produits OWNER TO ikone;

--
-- Name: produits_id_pro_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.produits_id_pro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.produits_id_pro_seq OWNER TO ikone;

--
-- Name: produits_id_pro_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.produits_id_pro_seq OWNED BY public.produits.id_pro;


--
-- Name: users; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.users (
    id_user integer NOT NULL,
    nom_user character varying(20) NOT NULL,
    password character varying(100) NOT NULL,
    id_g integer
);


ALTER TABLE public.users OWNER TO ikone;

--
-- Name: users_id_user_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.users_id_user_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_user_seq OWNER TO ikone;

--
-- Name: users_id_user_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.users_id_user_seq OWNED BY public.users.id_user;


--
-- Name: ventes; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.ventes (
    id_ve integer NOT NULL,
    date_ve date,
    libele character varying(70),
    id_cli integer,
    montant integer,
    montant_paye integer,
    montant_res integer DEFAULT 0,
    etat integer DEFAULT 0
);


ALTER TABLE public.ventes OWNER TO ikone;

--
-- Name: ventes_id_ve_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.ventes_id_ve_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ventes_id_ve_seq OWNER TO ikone;

--
-- Name: ventes_id_ve_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.ventes_id_ve_seq OWNED BY public.ventes.id_ve;


--
-- Name: id_ac; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.achats ALTER COLUMN id_ac SET DEFAULT nextval('public.achats_id_ac_seq'::regclass);


--
-- Name: id_cli; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.clients ALTER COLUMN id_cli SET DEFAULT nextval('public.clients_id_cli_seq'::regclass);


--
-- Name: id_cac; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_acha ALTER COLUMN id_cac SET DEFAULT nextval('public.contenu_acha_id_cac_seq'::regclass);


--
-- Name: id_cliv; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_liv ALTER COLUMN id_cliv SET DEFAULT nextval('public.contenu_liv_id_cliv_seq'::regclass);


--
-- Name: id_cliv; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_liv_vente ALTER COLUMN id_cliv SET DEFAULT nextval('public.contenu_liv_vente_id_cliv_seq'::regclass);


--
-- Name: id_cve; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_ve ALTER COLUMN id_cve SET DEFAULT nextval('public.contenu_ve_id_cve_seq'::regclass);


--
-- Name: id_fo; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.fournisseurs ALTER COLUMN id_fo SET DEFAULT nextval('public.fournisseurs_id_fo_seq'::regclass);


--
-- Name: id_g; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.group_users ALTER COLUMN id_g SET DEFAULT nextval('public.group_users_id_g_seq'::regclass);


--
-- Name: id_liv; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.liv_vente ALTER COLUMN id_liv SET DEFAULT nextval('public.liv_vente_id_liv_seq'::regclass);


--
-- Name: id_liv; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.livraisons ALTER COLUMN id_liv SET DEFAULT nextval('public.livraisons_id_liv_seq'::regclass);


--
-- Name: id_ma; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.matieres ALTER COLUMN id_ma SET DEFAULT nextval('public.matieres_id_ma_seq'::regclass);


--
-- Name: id_pve; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.pay_vente ALTER COLUMN id_pve SET DEFAULT nextval('public.pay_vente_id_pve_seq'::regclass);


--
-- Name: id_pay; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.payements ALTER COLUMN id_pay SET DEFAULT nextval('public.payements_id_pay_seq'::regclass);


--
-- Name: id_p; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.personnels ALTER COLUMN id_p SET DEFAULT nextval('public.personnels_id_p_seq'::regclass);


--
-- Name: id_pres; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.prestations ALTER COLUMN id_pres SET DEFAULT nextval('public.prestations_id_pre_seq'::regclass);


--
-- Name: id_pro; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.produits ALTER COLUMN id_pro SET DEFAULT nextval('public.produits_id_pro_seq'::regclass);


--
-- Name: id_user; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.users ALTER COLUMN id_user SET DEFAULT nextval('public.users_id_user_seq'::regclass);


--
-- Name: id_ve; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.ventes ALTER COLUMN id_ve SET DEFAULT nextval('public.ventes_id_ve_seq'::regclass);


--
-- Data for Name: achats; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.achats (id_ac, date_ac, montant, montant_paye, id_fo, etat_liv, libele, etat) FROM stdin;
171	2018-08-21	60000	60000	97	T	Achat Duniya	1
\.


--
-- Name: achats_id_ac_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.achats_id_ac_seq', 171, true);


--
-- Data for Name: clients; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.clients (id_cli, nom_cli, tel, adresse_cli, pre_cli, tel2) FROM stdin;
19	Siakka	20000111	Sotuba	SANGARE	9900999
22	Salif	90909090	Hamdallaye ACI	COULIBALY	70706060
12	 Mahamadou	60876110	Djicoroni Coura	CAMARA	20990022
23	Moussa	667776667	Bolobana	SANOGO	88898989
24	Boucar	76667766	Banconi	DIGUE	90905544
25	Bakole	656565544	Golf	DJIGUE	9888877
26	Mariam	90909090	Niamakoro	COULIBALY	76761313
20	Khalifa	 66160123	Hamdallaye	KEITA	000000000
27	Oumou	77661111	Daoudabougou	SIDIBE	60887766
17	Sambou	66161616	Lafiabougou koda	DOUCOURE	9999911
\.


--
-- Name: clients_id_cli_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.clients_id_cli_seq', 27, true);


--
-- Data for Name: contenu_acha; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.contenu_acha (id_cac, id_ac, id_ma, prix, qte_ma, qte_liv) FROM stdin;
263	171	135	6000	10	10
\.


--
-- Name: contenu_acha_id_cac_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.contenu_acha_id_cac_seq', 263, true);


--
-- Data for Name: contenu_liv; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.contenu_liv (id_cliv, id_liv, id_cac, qte_l) FROM stdin;
246	97	263	10
\.


--
-- Name: contenu_liv_id_cliv_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.contenu_liv_id_cliv_seq', 246, true);


--
-- Data for Name: contenu_liv_vente; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.contenu_liv_vente (id_cliv, id_liv, id_cve, qte_liv) FROM stdin;
\.


--
-- Name: contenu_liv_vente_id_cliv_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.contenu_liv_vente_id_cliv_seq', 1, false);


--
-- Data for Name: contenu_ve; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.contenu_ve (id_cve, id_ve, id_pro, qte_v, prix, qte_liv) FROM stdin;
\.


--
-- Name: contenu_ve_id_cve_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.contenu_ve_id_cve_seq', 20, true);


--
-- Data for Name: fournisseurs; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.fournisseurs (id_fo, nom_fo, telephone, addresse) FROM stdin;
98	WAGADOUGOU	77 99 00 00	Dabanani
97	DUNIYA ELECTRONICS	90 90 90 90	Marché Dibidani
96	STALLION INFORMATIQUE	66 77 79 99	Dabanani Marché
\.


--
-- Name: fournisseurs_id_fo_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.fournisseurs_id_fo_seq', 98, true);


--
-- Data for Name: group_users; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.group_users (id_g, nom_g, id_user) FROM stdin;
2	gerance	2
3	administration	3
1	comptabilite	1
4	production	4
\.


--
-- Name: group_users_id_g_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.group_users_id_g_seq', 4, true);


--
-- Data for Name: liv_vente; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.liv_vente (id_liv, id_ve, date_liv, libele) FROM stdin;
\.


--
-- Name: liv_vente_id_liv_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.liv_vente_id_liv_seq', 1, true);


--
-- Data for Name: livraisons; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.livraisons (id_liv, id_ac, date_liv, libele) FROM stdin;
97	171	2018-08-21	qq
\.


--
-- Name: livraisons_id_liv_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.livraisons_id_liv_seq', 97, true);


--
-- Data for Name: matieres; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.matieres (id_ma, nom_ma, prix_ma, unite) FROM stdin;
135	CARTE MEMOIRE sd16	6000	16Go
136	CLE USB T16	7000	16Go
137	CARTE MEMOIRE sd4	2000	4Go
138	CLE USB T8	5000	8Go
139	CLE USB T32	9000	32Go
140	CLE USB T64	15000	64Go
141	CARTE MEMOIRE sd8	4000	8Go
143	TAFSIR mp3	100	Audio
144	TAFSIR vidéo	300	Video
\.


--
-- Name: matieres_id_ma_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.matieres_id_ma_seq', 144, true);


--
-- Data for Name: pay_vente; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.pay_vente (id_pve, id_ve, date_pve, montant_pve, libele) FROM stdin;
\.


--
-- Name: pay_vente_id_pve_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.pay_vente_id_pve_seq', 1, true);


--
-- Data for Name: payements; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.payements (id_pay, id_ac, date_pay, montant, libele) FROM stdin;
110	171	2018-08-21	50000	
111	171	2018-08-21	10000	
\.


--
-- Name: payements_id_pay_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.payements_id_pay_seq', 111, true);


--
-- Data for Name: personnels; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.personnels (id_p, nom_p, prenom_p, fonction, tel, adresse) FROM stdin;
6	Mahamadou	SOUKOUNA	Secretaire	99 00 66 77	Banakabougou
7	Ibrahim	KONE	Directeur 	66 16 01 23	Faladiè Socoro
10	Bonkana	MAÎGA	Agent Marketing	69 59  89 53	Sébénicoro
9	Sambou	SIDIBE	Directeur Adjoint	66 44 29 30	Lafiabougou
\.


--
-- Name: personnels_id_p_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.personnels_id_p_seq', 11, true);


--
-- Data for Name: prestations; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.prestations (id_pres, nom_pres, prix) FROM stdin;
11	Luminosite	10000
10	Reportage matinale	35000
12	Reportage soirée	25000
13	Reportage nuit	35000
9	Sonorisation grand	20000
14	Sonorisation moyen	15000
\.


--
-- Name: prestations_id_pre_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.prestations_id_pre_seq', 14, true);


--
-- Data for Name: produits; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.produits (id_pro, nom_pro, qte_pro, prix_pro, qte_reel, qte_vir) FROM stdin;
\.


--
-- Name: produits_id_pro_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.produits_id_pro_seq', 30, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.users (id_user, nom_user, password, id_g) FROM stdin;
3	admin	0c6b67d1216f3739ff0971d32ef7679e	3
2	gerant	bad8527ef81368cb87760ad3ac428d96	2
4	producteur	68f8898e295d0a300b7d3929157b142b	4
1	comptable	965b18a1baca384994214a8078254da1	1
\.


--
-- Name: users_id_user_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.users_id_user_seq', 4, true);


--
-- Data for Name: ventes; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.ventes (id_ve, date_ve, libele, id_cli, montant, montant_paye, montant_res, etat) FROM stdin;
16	2018-08-21	Vente test	26	\N	\N	0	0
\.


--
-- Name: ventes_id_ve_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.ventes_id_ve_seq', 16, true);


--
-- Name: achats_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.achats
    ADD CONSTRAINT achats_pkey PRIMARY KEY (id_ac);


--
-- Name: client_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.clients
    ADD CONSTRAINT client_pkey PRIMARY KEY (id_cli);


--
-- Name: contenu_acha_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_acha
    ADD CONSTRAINT contenu_acha_pkey PRIMARY KEY (id_cac);


--
-- Name: contenu_liv_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_liv
    ADD CONSTRAINT contenu_liv_pkey PRIMARY KEY (id_cliv);


--
-- Name: fournisseurs_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.fournisseurs
    ADD CONSTRAINT fournisseurs_pkey PRIMARY KEY (id_fo);


--
-- Name: fournisseurs_uniq; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.fournisseurs
    ADD CONSTRAINT fournisseurs_uniq UNIQUE (nom_fo);


--
-- Name: livraisons_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.livraisons
    ADD CONSTRAINT livraisons_pkey PRIMARY KEY (id_liv);


--
-- Name: matieres_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.matieres
    ADD CONSTRAINT matieres_pkey PRIMARY KEY (id_ma);


--
-- Name: matieres_uniq; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.matieres
    ADD CONSTRAINT matieres_uniq UNIQUE (nom_ma);


--
-- Name: p_key; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_ve
    ADD CONSTRAINT p_key PRIMARY KEY (id_cve);


--
-- Name: p_key1; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.liv_vente
    ADD CONSTRAINT p_key1 PRIMARY KEY (id_liv);


--
-- Name: payements_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.payements
    ADD CONSTRAINT payements_pkey PRIMARY KEY (id_pay);


--
-- Name: prestations_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.prestations
    ADD CONSTRAINT prestations_pkey PRIMARY KEY (id_pres);


--
-- Name: prestations_unique; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.prestations
    ADD CONSTRAINT prestations_unique UNIQUE (nom_pres);


--
-- Name: primary_key1; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT primary_key1 PRIMARY KEY (id_user);


--
-- Name: pro_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.produits
    ADD CONSTRAINT pro_pkey PRIMARY KEY (id_pro);


--
-- Name: produits_uniq; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.produits
    ADD CONSTRAINT produits_uniq UNIQUE (nom_pro);


--
-- Name: uniq_1; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT uniq_1 UNIQUE (nom_user);


--
-- Name: unique_id; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_acha
    ADD CONSTRAINT unique_id UNIQUE (id_ma, id_ac);


--
-- Name: vente_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.ventes
    ADD CONSTRAINT vente_pkey PRIMARY KEY (id_ve);


--
-- Name: achats_fkey; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.achats
    ADD CONSTRAINT achats_fkey FOREIGN KEY (id_fo) REFERENCES public.fournisseurs(id_fo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: contenu_ac_fkey1; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_acha
    ADD CONSTRAINT contenu_ac_fkey1 FOREIGN KEY (id_ac) REFERENCES public.achats(id_ac) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: contenu_ac_fkey2; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_acha
    ADD CONSTRAINT contenu_ac_fkey2 FOREIGN KEY (id_ma) REFERENCES public.matieres(id_ma) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: contenu_liv_fkey; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_liv
    ADD CONSTRAINT contenu_liv_fkey FOREIGN KEY (id_liv) REFERENCES public.livraisons(id_liv) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: contenu_liv_fkey2; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_liv
    ADD CONSTRAINT contenu_liv_fkey2 FOREIGN KEY (id_cac) REFERENCES public.contenu_acha(id_cac) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: f_key1; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_ve
    ADD CONSTRAINT f_key1 FOREIGN KEY (id_ve) REFERENCES public.ventes(id_ve);


--
-- Name: f_key1; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.liv_vente
    ADD CONSTRAINT f_key1 FOREIGN KEY (id_ve) REFERENCES public.ventes(id_ve);


--
-- Name: f_key1; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_liv_vente
    ADD CONSTRAINT f_key1 FOREIGN KEY (id_cve) REFERENCES public.contenu_ve(id_cve);


--
-- Name: f_key1; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.pay_vente
    ADD CONSTRAINT f_key1 FOREIGN KEY (id_ve) REFERENCES public.ventes(id_ve);


--
-- Name: f_key2; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_ve
    ADD CONSTRAINT f_key2 FOREIGN KEY (id_pro) REFERENCES public.produits(id_pro);


--
-- Name: f_key2; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_liv_vente
    ADD CONSTRAINT f_key2 FOREIGN KEY (id_liv) REFERENCES public.liv_vente(id_liv);


--
-- Name: livraisons_fkey; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.livraisons
    ADD CONSTRAINT livraisons_fkey FOREIGN KEY (id_ac) REFERENCES public.achats(id_ac) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: payements_fkey; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.payements
    ADD CONSTRAINT payements_fkey FOREIGN KEY (id_ac) REFERENCES public.achats(id_ac) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: vente_fkey2; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.ventes
    ADD CONSTRAINT vente_fkey2 FOREIGN KEY (id_cli) REFERENCES public.clients(id_cli) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

