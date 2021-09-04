/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  24/08/2021 13:38:39                      */
/*==============================================================*/


/*==============================================================*/
/* Table : Administrateur                                       */
/*==============================================================*/
create table Administrateur
(
   idU                     int not null,
   idAdmin              int primary key not null

);

/*==============================================================*/
/* Table : Article                                              */
/*==============================================================*/
create table Article
(
   idArticle            int primary key  not null AUTO_INCREMENT,
   idU                   int NOT  NULL,
   idBailleur            int not NULL,
   titreArticle         varchar(254),
   descriptionArticle   varchar(254)
  )
;

/*==============================================================*/
/* Table : Artisan                                              */
/*==============================================================*/
create table Artisan
(
   idArtisan            int primary key  not null AUTO_INCREMENT,
   idU                   int not null ,
   idAdmin                int not NULL,
   nomCompletArtisan    varchar(254),
   telephoneArtisan     int,
   professionArtisan    varchar(254)
   
);

/*==============================================================*/
/* Table : Bailleur                                             */
/*==============================================================*/
create table Bailleur
(
   idU                  int not null,
   idBailleur           int primary key  not null AUTO_INCREMENT,
   numCniBailleur       int,
   telephoneSecBailleur int,
   villeBailleur        varchar(254),
   quartierBailleur     varchar(254),
   paysBailleur         varchar(254),
   dateNaissBailleur    datetime,
   lieuNaissBailleur    varchar(254),
   nomCompletRep        varchar(254),
   numCniRep            int,
   SignatureBailleur    varchar(254)
   
);

/*==============================================================*/
/* Table : Bien                                                 */
/*==============================================================*/
create table Bien
(
   idBien               int primary key not null AUTO_INCREMENT,
   idTypeBien           int not null,
   idU                  int not null,
   idBailleur           int not null,
   nomBien              varchar(254),
   numTitreFoncier      varchar(254),
   numPermisConst       varchar(254),
   descriptionBien      varchar(254),
   imageBien            varchar(254),
   supercieBien         numeric(8,0),
   villeBien            varchar(254),
   quartierBien         varchar(254),
   paysBien             varchar(254),
   etatBien             bool
);

/*==============================================================*/
/* Table : Equipement                                           */
/*==============================================================*/
create table Equipement
(
   idEquipement         int primary key  not null AUTO_INCREMENT,
   idPiece              int not null,
   nomEquipement        varchar(254),
   etatEquipement       varchar(254),
   prixEquipement       numeric(8,0),
   commentaire          varchar(254)

);

/*==============================================================*/
/* Table : Etat_des_lieux                                       */
/*==============================================================*/
create table Etat_des_lieux
(
   idEtatLieu           int primary key  not null AUTO_INCREMENT,
   idBien               int not null,
   descriptionEtatLieu  varchar(254),
   dateEtatLieu         datetime
   
);

/*==============================================================*/
/* Table : Facture                                              */
/*==============================================================*/
create table Facture
(
   idFacture            int primary key  not null AUTO_INCREMENT,
   idLocation           int not null,
   dateFacture          datetime,
   montantFacture       numeric(8,0),
   etatFacture          bool
);

/*==============================================================*/
/* Table : Inventaire                                           */
/*==============================================================*/
create table Inventaire
(
   idInventaire         int primary key not null AUTO_INCREMENT,
   idBien               int not null,
   descriptionInventaire varchar(254),
   dateInventaire       datetime
   
);

/*==============================================================*/
/* Table : Locataire                                            */
/*==============================================================*/
create table Locataire
(
   idU                  int  not null,
   idLocataire          int primary KEY  not null AUTO_INCREMENT,
   numCniLoc            int,
   telephoneSecLoc      int,
   villeLoc             varchar(254),
   quartierLoc          varchar(254),
   paysLoc              varchar(254),
   dateNaissLoc         datetime,
   sexeLoc              varchar(254),
   lieuNaissLoc         varchar(254),
   professionLoc        varchar(254),
   nomEmployeurLoc      varchar(254),
   telEmployeurLoc      int,
   revenuMensuelLoc     numeric(8,0)
  
);

/*==============================================================*/
/* Table : Location                                             */
/*==============================================================*/
create table Location
(
   idLocation           int primary key  not null AUTO_INCREMENT,
   idU                  int not null,
   idLocataire          int not null,
   idTl                 int not null,
   idBien               int not null,
   utilisation          varchar(254),
   activiteLocation     varchar(254),
   dateDebutLocation    datetime,
   dureeLocation        int,
   dateLimitePaiement   datetime,
   dateFacturation      datetime,
   montantLocation      numeric(8,0),
   tauxChargeLocation   int,
   montantCaution       numeric(8,0),
   tauxRetard           int,
   MinimumAPayer        int
   
);

/*==============================================================*/
/* Table : Package                                              */
/*==============================================================*/
create table Package
(
   idPackage            int primary key  not null AUTO_INCREMENT,
   nomPackage           varchar(254),
   nombreBienMax        varchar(254),
   montantPackage       numeric(8,0)
  
);

/*==============================================================*/
/* Table : Piece                                                */
/*==============================================================*/
create table Piece
(
   idPiece              int primary key  not null AUTO_INCREMENT,
   idBien               int not null,
   nomPiece             varchar(254)
  
);

/*==============================================================*/
/* Table : Quittance                                            */
/*==============================================================*/
create table Quittance
(
   idQuittance          int primary key  not null AUTO_INCREMENT,
   idLocation           int not null,
   dateQuittance        datetime,
   montantQuittance     numeric(8,0)
  
);

/*==============================================================*/
/* Table : Renovation                                           */
/*==============================================================*/
create table Renovation
(
   idRenovation         int primary key  not null AUTO_INCREMENT,
   idBien               int not null,
   motifRenovation      varchar(254),
   domaineRenovation    varchar(254),
   descriptionRenovation varchar(254),
   montantRenovation    numeric(8,0),
   priorite             varchar(254),
   statut               varchar(254)
 
);

/*==============================================================*/
/* Table : Type_de_bien                                         */
/*==============================================================*/
create table Type_de_bien
(
   idTypeBien           int primary key not null AUTO_INCREMENT,
   nomTypeBien          varchar(254)
   
);

/*==============================================================*/
/* Table : Type_de_location                                     */
/*==============================================================*/
create table Type_de_location
(
   idTl                 int primary key not null AUTO_INCREMENT,
   nomTypeLocation      varchar(254)
  
);

/*==============================================================*/
/* Table : Utilisateur                                          */
/*==============================================================*/
create table Utilisateur
(
   idU                  int primary key  not null AUTO_INCREMENT,
   idPackage            int not null,
   nomU                 varchar(254),
   nomCompletU          varchar(254),
   emailU               varchar(254),
   mdpU                 varchar(254),
   telephoneU           int

);

/*==============================================================*/
/* Table : note                                                 */
/*==============================================================*/
create table note
(
   idNote               int primary key  not null AUTO_INCREMENT,
   idArtisan            int not null,
   valeur               int

);

/*==============================================================*/
/* Table : photo                                                */
/*==============================================================*/
create table photo
(
   idPhoto              int primary key not null AUTO_INCREMENT,
   idBien               int not null,
   nomPhoto             varchar(254)
);

alter table Administrateur add constraint FK_Generalisation_3 foreign key (idU)
      references Utilisateur (idU)  on delete cascade  on update cascade;

alter table Article add constraint FK_Association_8 foreign key (idU)
       references Utilisateur (idU)  on delete cascade  on update cascade;
       
       alter table Article add constraint FK_Association_8_2 foreign key (idBailleur)
       references Bailleur (idBailleur)  on delete cascade  on update cascade;
       
       

alter table Artisan add constraint FK_Association_1 foreign key (idU)
     references Utilisateur (idU)  on delete cascade  on update cascade;
     
 
 alter table Artisan add constraint FK_Association_1_2 foreign key (idAdmin)
     references Administrateur (idAdmin)  on delete cascade  on update cascade;     
      

alter table Bailleur add constraint FK_Generalisation_1 foreign key (idU)
      references Utilisateur (idU) on delete cascade on update cascade;
      

alter table Bien add constraint FK_Association_11 foreign key (idTypeBien)
      references Type_de_bien (idTypeBien) on delete cascade on update cascade;
      
      
      
      

alter table Bien add constraint FK_Association_9 foreign key (idU)
      references Utilisateur (idU) on delete cascade on update cascade;
      
      
      alter table Bien add constraint FK_Association_9_2 foreign key (idBailleur)
      references Bailleur (idBailleur) on delete cascade on update cascade;
      
      
      

alter table Equipement add constraint FK_Association_13 foreign key (idPiece)
      references Piece (idPiece) on delete cascade on update cascade;

alter table Etat_des_lieux add constraint FK_Association_15 foreign key (idBien)
      references Bien (idBien) on delete cascade on update cascade;

alter table Facture add constraint FK_Association_7 foreign key (idLocation)
      references Location (idLocation) on delete cascade on update cascade;

alter table Inventaire add constraint FK_Association_14 foreign key (idBien)
      references Bien (idBien) on delete cascade on update cascade;

alter table Locataire add constraint FK_Generalisation_2 foreign key (idU)
      references Utilisateur (idU) on delete cascade on update cascade;

alter table Location add constraint FK_Association_17 foreign key (idBien)
      references Bien (idBien) on delete cascade on update cascade;
      
      

alter table Location add constraint FK_Association_4 foreign key (idU)
       references Utilisateur (idU) on delete cascade on update cascade;
       
       
       alter table Location add constraint FK_Association_4_1 foreign key (idLocataire)
       references Locataire (idLocataire) on delete cascade on update cascade;
      
      
      

alter table Location add constraint FK_Association_6 foreign key (idTl)
      references Type_de_location (idTl) on delete cascade on update cascade;

alter table Piece add constraint FK_Association_12 foreign key (idBien)
      references Bien (idBien) on delete cascade on update cascade;

alter table Quittance add constraint FK_Association_5 foreign key (idLocation)
      references Location (idLocation) on delete cascade on update cascade;

alter table Renovation add constraint FK_Association_16 foreign key (idBien)
      references Bien (idBien) on delete cascade on update cascade;

alter table Utilisateur add constraint FK_Association_3 foreign key (idPackage)
      references Package (idPackage) on delete cascade on update cascade;

alter table note add constraint FK_Association_18 foreign key (idArtisan)
      references Artisan (idArtisan) on delete cascade on update cascade;

alter table photo add constraint FK_Association_10 foreign key (idBien)
      references Bien (idBien) on delete cascade on update cascade;

