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
-- Name: hstore; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS hstore WITH SCHEMA public;


--
-- Name: EXTENSION hstore; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION hstore IS 'data type for storing sets of (key, value) pairs';


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
    etat_liv character(1) DEFAULT 'N'::bpchar,
    libele character varying(70),
    etat integer DEFAULT 0,
    id_po integer,
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
-- Name: categorie_perso; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.categorie_perso (
    id_cat integer NOT NULL,
    nom_cat character varying(50)
);


ALTER TABLE public.categorie_perso OWNER TO ikone;

--
-- Name: categorie_perso_id_cat_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.categorie_perso_id_cat_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.categorie_perso_id_cat_seq OWNER TO ikone;

--
-- Name: categorie_perso_id_cat_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.categorie_perso_id_cat_seq OWNED BY public.categorie_perso.id_cat;


--
-- Name: categorie_pro; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.categorie_pro (
    id_catpro integer NOT NULL,
    nom_catpro character varying(50)
);


ALTER TABLE public.categorie_pro OWNER TO ikone;

--
-- Name: categorie_prod_id_catpro_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.categorie_prod_id_catpro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.categorie_prod_id_catpro_seq OWNER TO ikone;

--
-- Name: categorie_prod_id_catpro_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.categorie_prod_id_catpro_seq OWNED BY public.categorie_pro.id_catpro;


--
-- Name: contenu_acha; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.contenu_acha (
    id_cac integer NOT NULL,
    id_ac integer,
    prix_acha integer NOT NULL,
    qte_pro integer,
    qte_liv integer DEFAULT 0,
    id_pro integer,
    CONSTRAINT check_qte_ma CHECK ((qte_pro > 0))
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
-- Name: contenu_vente; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.contenu_vente (
    id_cve integer NOT NULL,
    id_ve integer,
    id_pro integer,
    qte_v integer,
    prix_v integer,
    qte_liv integer,
    id_ma integer,
    id_pres integer
);


ALTER TABLE public.contenu_vente OWNER TO ikone;

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

ALTER SEQUENCE public.contenu_ve_id_cve_seq OWNED BY public.contenu_vente.id_cve;


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
-- Name: personnes; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.personnes (
    id_po integer NOT NULL,
    nom character varying(25),
    prenom character varying(25),
    adresse character varying(50),
    tel character varying(25),
    nom_f character varying(25),
    prenom_f character varying(25),
    date date,
    tel2 character varying(25),
    id_cat integer,
    poste character varying(50)
);


ALTER TABLE public.personnes OWNER TO ikone;

--
-- Name: personnes_id_p_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.personnes_id_p_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personnes_id_p_seq OWNER TO ikone;

--
-- Name: personnes_id_p_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.personnes_id_p_seq OWNED BY public.personnes.id_po;


--
-- Name: produits; Type: TABLE; Schema: public; Owner: ikone
--

CREATE TABLE public.produits (
    id_pro integer NOT NULL,
    nom_pro character varying(50),
    prix_vente integer,
    id_catpro integer
);


ALTER TABLE public.produits OWNER TO ikone;

--
-- Name: produits_id_prod_seq; Type: SEQUENCE; Schema: public; Owner: ikone
--

CREATE SEQUENCE public.produits_id_prod_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.produits_id_prod_seq OWNER TO ikone;

--
-- Name: produits_id_prod_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ikone
--

ALTER SEQUENCE public.produits_id_prod_seq OWNED BY public.produits.id_pro;


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
-- Name: id_cat; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.categorie_perso ALTER COLUMN id_cat SET DEFAULT nextval('public.categorie_perso_id_cat_seq'::regclass);


--
-- Name: id_catpro; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.categorie_pro ALTER COLUMN id_catpro SET DEFAULT nextval('public.categorie_prod_id_catpro_seq'::regclass);


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

ALTER TABLE ONLY public.contenu_vente ALTER COLUMN id_cve SET DEFAULT nextval('public.contenu_ve_id_cve_seq'::regclass);


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
-- Name: id_pve; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.pay_vente ALTER COLUMN id_pve SET DEFAULT nextval('public.pay_vente_id_pve_seq'::regclass);


--
-- Name: id_pay; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.payements ALTER COLUMN id_pay SET DEFAULT nextval('public.payements_id_pay_seq'::regclass);


--
-- Name: id_po; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.personnes ALTER COLUMN id_po SET DEFAULT nextval('public.personnes_id_p_seq'::regclass);


--
-- Name: id_pro; Type: DEFAULT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.produits ALTER COLUMN id_pro SET DEFAULT nextval('public.produits_id_prod_seq'::regclass);


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

COPY public.achats (id_ac, date_ac, montant, montant_paye, etat_liv, libele, etat, id_po) FROM stdin;
186	2018-08-27	\N	0	N	hhere	0	28
187	2018-08-27	\N	0	N	Achat de cle USB	0	32
190	2018-08-27	\N	0	N	Carte memeoire	0	29
191	2018-08-28	\N	0	N	dddsz	0	28
\.


--
-- Name: achats_id_ac_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.achats_id_ac_seq', 191, true);


--
-- Data for Name: categorie_perso; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.categorie_perso (id_cat, nom_cat) FROM stdin;
1	client
2	fournisseur
3	personnel
4	mariage
\.


--
-- Name: categorie_perso_id_cat_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.categorie_perso_id_cat_seq', 4, true);


--
-- Data for Name: categorie_pro; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.categorie_pro (id_catpro, nom_catpro) FROM stdin;
1	Article
2	Prestation
\.


--
-- Name: categorie_prod_id_catpro_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.categorie_prod_id_catpro_seq', 2, true);


--
-- Data for Name: contenu_acha; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.contenu_acha (id_cac, id_ac, prix_acha, qte_pro, qte_liv, id_pro) FROM stdin;
268	190	400	10	0	7
269	190	1000	20	0	6
\.


--
-- Name: contenu_acha_id_cac_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.contenu_acha_id_cac_seq', 269, true);


--
-- Data for Name: contenu_liv; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.contenu_liv (id_cliv, id_liv, id_cac, qte_l) FROM stdin;
\.


--
-- Name: contenu_liv_id_cliv_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.contenu_liv_id_cliv_seq', 248, true);


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
-- Name: contenu_ve_id_cve_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.contenu_ve_id_cve_seq', 20, true);


--
-- Data for Name: contenu_vente; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.contenu_vente (id_cve, id_ve, id_pro, qte_v, prix_v, qte_liv, id_ma, id_pres) FROM stdin;
\.


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
\.


--
-- Name: livraisons_id_liv_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.livraisons_id_liv_seq', 99, true);


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
\.


--
-- Name: payements_id_pay_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.payements_id_pay_seq', 113, true);


--
-- Data for Name: personnes; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.personnes (id_po, nom, prenom, adresse, tel, nom_f, prenom_f, date, tel2, id_cat, poste) FROM stdin;
25	Ibrahim	KONE	ssssssssss	sssssss	sssssssss	sssssssssssss	\N	sssssss	3	ssss
26	Sambou	SIDBE					\N		1	
27	Ada	DEMBE	Lafiabougou	99009900	Fanta	DIALLO	\N	88990989	4	
28	Mami	SACKO					\N		3	
29	Hamsa	KONE	Faladiè Socoro	77662232			\N	98987766	1	
30	hhhhhhhh	hhhhhhhhhhh	hhhhhhhhhhh		hhhhhhhhhh	hhhhhhhhhhhhh	\N	hhhhhhhhh	1	hhhhhhhhh
31	BAMA	COULI	Faladiè Socoro	7887789999			\N	999899088	1	
32	SAID	FO	Faladiè Socoro	90909090			\N	60606060	4	
33	SALIF	TOGOLA	Bolibana	20666666	SATA	DIATA	\N	23554455	4	
\.


--
-- Name: personnes_id_p_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.personnes_id_p_seq', 33, true);


--
-- Data for Name: produits; Type: TABLE DATA; Schema: public; Owner: ikone
--

COPY public.produits (id_pro, nom_pro, prix_vente, id_catpro) FROM stdin;
6	Cle usb	\N	1
7	Carte memoire	\N	1
9	Reportage	2000	2
10	Animation	25000	2
11	Reportage	50000	2
12	Sonorisation Grand	20000	2
14	CD-R	500	1
15	Cle USB 32Go	14000	1
16	Carte mémoire 4Go	3000	1
22	Seminaire Kodumani	3000	2
23	Seminaire Tie kura	2000	2
\.


--
-- Name: produits_id_prod_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.produits_id_prod_seq', 23, true);


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
\.


--
-- Name: ventes_id_ve_seq; Type: SEQUENCE SET; Schema: public; Owner: ikone
--

SELECT pg_catalog.setval('public.ventes_id_ve_seq', 22, true);


--
-- Name: achats_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.achats
    ADD CONSTRAINT achats_pkey PRIMARY KEY (id_ac);


--
-- Name: categoriepkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.categorie_pro
    ADD CONSTRAINT categoriepkey PRIMARY KEY (id_catpro);


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
-- Name: fkeycategoriecont1; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.categorie_perso
    ADD CONSTRAINT fkeycategoriecont1 PRIMARY KEY (id_cat);


--
-- Name: livraisons_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.livraisons
    ADD CONSTRAINT livraisons_pkey PRIMARY KEY (id_liv);


--
-- Name: p_key; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_vente
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
-- Name: primary_key1; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT primary_key1 PRIMARY KEY (id_user);


--
-- Name: primarykey1; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.personnes
    ADD CONSTRAINT primarykey1 PRIMARY KEY (id_po);


--
-- Name: produitpkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.produits
    ADD CONSTRAINT produitpkey PRIMARY KEY (id_pro);


--
-- Name: uniq_1; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT uniq_1 UNIQUE (nom_user);


--
-- Name: vente_pkey; Type: CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.ventes
    ADD CONSTRAINT vente_pkey PRIMARY KEY (id_ve);


--
-- Name: contenu_ac_fkey1; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_acha
    ADD CONSTRAINT contenu_ac_fkey1 FOREIGN KEY (id_ac) REFERENCES public.achats(id_ac) ON UPDATE CASCADE ON DELETE CASCADE;


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

ALTER TABLE ONLY public.contenu_vente
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
    ADD CONSTRAINT f_key1 FOREIGN KEY (id_cve) REFERENCES public.contenu_vente(id_cve);


--
-- Name: f_key1; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.pay_vente
    ADD CONSTRAINT f_key1 FOREIGN KEY (id_ve) REFERENCES public.ventes(id_ve);


--
-- Name: f_key2; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_liv_vente
    ADD CONSTRAINT f_key2 FOREIGN KEY (id_liv) REFERENCES public.liv_vente(id_liv);


--
-- Name: fkeypersocategorie; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.personnes
    ADD CONSTRAINT fkeypersocategorie FOREIGN KEY (id_cat) REFERENCES public.categorie_perso(id_cat);


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
-- Name: personne_fkey; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.achats
    ADD CONSTRAINT personne_fkey FOREIGN KEY (id_po) REFERENCES public.personnes(id_po);


--
-- Name: produitfkey; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.contenu_acha
    ADD CONSTRAINT produitfkey FOREIGN KEY (id_pro) REFERENCES public.produits(id_pro);


--
-- Name: produitfkey2; Type: FK CONSTRAINT; Schema: public; Owner: ikone
--

ALTER TABLE ONLY public.produits
    ADD CONSTRAINT produitfkey2 FOREIGN KEY (id_catpro) REFERENCES public.categorie_pro(id_catpro);


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

