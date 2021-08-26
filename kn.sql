/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  25/08/2021 22:24:56                      */
/*==============================================================*/


/*==============================================================*/
/* Table : administrateur                                       */
/*==============================================================*/
create table administrateur
(
   idu                  int not NULL,
   idadmin              int not NULL PRIMARY KEY AUTO_INCREMENT
);


alter table administrateur
   add unique ak_identifiant_1 (idadmin);
   
   

/*==============================================================*/
/* Table : article                                              */
/*==============================================================*/
create table article
(
   idarticle            int not NULL PRIMARY KEY AUTO_INCREMENT ,
   idu                  int not null,
   idbailleur           int not null,
   titrearticle         varchar(254),
   descriptionarticle   varchar(254)
);



/*==============================================================*/
/* Table : artisan                                              */
/*==============================================================*/
create table artisan
(
   idartisan            int not null PRIMARY KEY AUTO_INCREMENT,
   idu                  int not null,
   idadmin              int not null,
   nomcompletartisan    varchar(254),
   telephoneartisan     int,
   professionartisan    varchar(254)
);



/*==============================================================*/
/* Table : bailleur                                             */
/*==============================================================*/
create table bailleur
(
   idu                  int not null,
   idbailleur           int not NULL PRIMARY KEY AUTO_INCREMENT ,
   numcnibailleur       int,
   telephonesecbailleur int,
   villebailleur        varchar(254),
   quartierbailleur     varchar(254),
   paysbailleur         varchar(254),
   datenaissbailleur    date,
   lieunaissbailleur    varchar(254),
   nomcompletrep        varchar(254),
   numcnirep            int,
   signaturebailleur    varchar(254)
);



/*==============================================================*/
/* Table : bien                                                 */
/*==============================================================*/
create table bien
(
   idbien               int not null PRIMARY KEY AUTO_INCREMENT,
   idtypebien           int not null,
   idu                  int not null,
   idbailleur           int not null,
   nombien              varchar(254),
   numtitrefoncier      varchar(254),
   numpermisconst       varchar(254),
   descriptionbien      varchar(254),
   imagebien            varchar(254),
   superciebien         numeric(8,0),
   villebien            varchar(254),
   quartierbien         varchar(254),
   paysbien             varchar(254),
   etatbien             bool
);


/*==============================================================*/
/* Table : equipement                                           */
/*==============================================================*/
create table equipement
(
   idequipement         int not NULL PRIMARY KEY AUTO_INCREMENT ,
   idpiece              int not null,
   nomequipement        varchar(254),
   etatequipement       varchar(254),
   prixequipement       numeric(8,0),
   commentaire          varchar(254)
);



/*==============================================================*/
/* Table : etat_des_lieux                                       */
/*==============================================================*/
create table etat_des_lieux
(
   idetatlieu           int not NULL PRIMARY KEY AUTO_INCREMENT ,
   idbien               int not null,
   descriptionetatlieu  varchar(254),
   dateetatlieu         date
);



/*==============================================================*/
/* Table : facture                                              */
/*==============================================================*/
create table facture
(
   idfacture            int not null PRIMARY KEY AUTO_INCREMENT,
   datefacture          date,
   datedebutfacture          date,
   datefinfacture          date,
   datelimitefacture          DATE,
   etatfacture          bool
   
   );



/*==============================================================*/
/* Table : inventaire                                           */
/*==============================================================*/
create table inventaire
(
   idinventaire         int not null PRIMARY KEY AUTO_INCREMENT,
   idbien               int not null,
   descriptioninventaire varchar(254),
   dateinventaire       date
);



/*==============================================================*/
/* Table : locataire                                            */
/*==============================================================*/
create table locataire
(
   idu                  int not null,
   idlocataire          int not null PRIMARY KEY AUTO_INCREMENT,
   numcniloc            int,
   telephonesecloc      int,
   villeloc             varchar(254),
   quartierloc          varchar(254),
   paysloc              varchar(254),
   datenaissloc         date,
   sexeloc              varchar(254),
   lieunaissloc         varchar(254),
   professionloc        varchar(254),
   nomemployeurloc      varchar(254),
   telemployeurloc      int,
   revenumensuelloc     numeric(8,0),
   signatureLocataire varchar(254)
);



/*==============================================================*/
/* Table : package                                              */
/*==============================================================*/
create table package
(
   idpackage            int not NULL PRIMARY KEY AUTO_INCREMENT ,
   nompackage           varchar(254),
   nombrebienmax        varchar(254),
   montantpackage       numeric(8,0)
);



/*==============================================================*/
/* Table : piece                                                */
/*==============================================================*/
create table piece
(
   idpiece              int not null PRIMARY KEY AUTO_INCREMENT,
   idbien               int not null,
   nompiece             varchar(254)
);



/*==============================================================*/
/* Table : quittance                                            */
/*==============================================================*/
create table quittance
(
   idquittance          int not NULL PRIMARY KEY AUTO_INCREMENT ,
   datequittance        date,
   montantquittance     numeric(8,0)
);



/*==============================================================*/
/* Table : renovation                                           */
/*==============================================================*/
create table renovation
(
   idrenovation         int not null PRIMARY KEY AUTO_INCREMENT,
   idbien               int not null,
   motifrenovation      varchar(254),
   domainerenovation    varchar(254),
   descriptionrenovation varchar(254),
   montantrenovation    numeric(8,0),
   priorite             varchar(254),
   statut               varchar(254)
);



/*==============================================================*/
/* Table : type_de_bien                                         */
/*==============================================================*/
create table type_de_bien
(
   idtypebien           int not NULL PRIMARY KEY AUTO_INCREMENT ,
   nomtypebien          varchar(254)
);



/*==============================================================*/
/* Table : type_de_location                                     */
/*==============================================================*/
create table type_de_location
(
   idtl                 int not null PRIMARY KEY AUTO_INCREMENT,
   nomtypelocation      varchar(254)
  
);



/*==============================================================*/
/* Table : utilisateur                                          */
/*==============================================================*/
create table utilisateur
(
   idu                  int not null PRIMARY KEY AUTO_INCREMENT,
   idpackage            int not null,
   nomu                 varchar(254),
   nomcompletu          varchar(254),
   emailu               varchar(254),
   mdpu                 varchar(254),
   telephoneu           int
);



/*==============================================================*/
/* Table : note                                                 */
/*==============================================================*/
create table note
(
   idnote               int not NULL PRIMARY KEY AUTO_INCREMENT ,
   idartisan            int not null,
   nomcompletartisan    varchar(254)
);



/*==============================================================*/
/* Table : photo                                                */
/*==============================================================*/
create table photo
(
   idphoto              int not null PRIMARY KEY AUTO_INCREMENT,
   nomphoto             varchar(254),
 idbien               int not NULL
 
  ); 

 

 
/*==============================================================*/
/* Table : location                                                */
/*==============================================================*/
create table location
(
        idLocation int not null PRIMARY KEY AUTO_INCREMENT, 
        utilisation  varchar(254),
        activiteLocation  varchar(254),
        idU int,
        idLocataire int,
        idTl int,
        idBien int,
        dureeLocation int,
        montantLocation float,
        montantCaution float

 );




   alter table location add constraint fk_association_30_1 foreign key (idu)
      references utilisateur (idu) on delete cascade on update cascade;

      alter table location add constraint fk_association_30_2 foreign key (idLocataire)
      references locataire (idLocataire) on delete cascade on update cascade;


      alter table location add constraint fk_association_30_3 foreign key (idbien)
      references bien (idbien) on delete cascade on update cascade;


      alter table location add constraint fk_association_30_4 foreign key (idtl)
      references type_de_location (idtl) on delete cascade on update cascade;



alter table administrateur add constraint fk_generalisation_3 foreign key (idu)
      references utilisateur (idu) on delete cascade on update cascade;

alter table article add constraint fk_association_8 foreign key (idbailleur)
      references bailleur (idbailleur) on delete cascade on update cascade;

      alter table article add constraint fk_association_8_2 foreign key (idu)
      references utilisateur (idu) on delete cascade on update cascade;

alter table artisan add constraint fk_association_1 foreign key (idadmin)
      references administrateur (idadmin) on delete cascade on update cascade;

      alter table artisan add constraint fk_association_1_2 foreign key (idu)
      references utilisateur (idu) on delete cascade on update cascade;

alter table bailleur add constraint fk_generalisation_1 foreign key (idu)
      references utilisateur (idu) on delete cascade on update cascade;

alter table bien add constraint fk_association_11 foreign key (idtypebien)
      references type_de_bien (idtypebien) on delete cascade on update cascade;


alter table bien add constraint fk_association_9 foreign key (idbailleur)
      references bailleur (idbailleur) on delete cascade on update cascade;


      alter table bien add constraint fk_association_9_1 foreign key (idu)
      references utilisateur (idu) on delete cascade on update cascade;


alter table equipement add constraint fk_association_13 foreign key (idpiece)
      references piece (idpiece) on delete cascade on update cascade;

alter table etat_des_lieux add constraint fk_association_15 foreign key (idbien)
      references bien (idbien) on delete cascade on update cascade;

alter table inventaire add constraint fk_association_14 foreign key (idbien)
      references bien (idbien) on delete cascade on update cascade;

alter table locataire add constraint fk_generalisation_2 foreign key (idu)
      references utilisateur (idu) on delete cascade on update cascade;

alter table piece add constraint fk_association_12 foreign key (idbien)
      references bien (idbien) on delete cascade on update cascade;

alter table renovation add constraint fk_association_16 foreign key (idbien)
      references bien (idbien) on delete cascade on update cascade;

alter table utilisateur add constraint fk_association_3 foreign key (idpackage)
      references package (idpackage) on delete cascade on update cascade;

alter table note add constraint fk_association_18 foreign key (idartisan)
      references artisan (idartisan) on delete cascade on update cascade;

alter table photo add constraint fk_association_10 foreign key (idbien)
      references bien (idbien) on delete cascade on update cascade;
      

