

CREATE TABLE IF NOT EXISTS `administrateur` (
  `idu` int(11) NOT NULL REFERENCES `utilisateur` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idadmin` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
  
) ;


CREATE TABLE IF NOT EXISTS `article` (
  `idarticle` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idbailleur` int(11) NOT NULL REFERENCES `bailleur` (`idbailleur`) ON DELETE CASCADE ON UPDATE CASCADE,
  `titre` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `idtb` int(11) DEFAULT NULL REFERENCES `type_de_bien` (`idtb`) ON DELETE CASCADE ON UPDATE CASCADE)
;


CREATE TABLE IF NOT EXISTS `artisan` (
  `idartisan` int(11) NOT NULL  PRIMARY KEY  AUTO_INCREMENT,
  `nomcomplet` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `profession` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartier` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
);


CREATE TABLE IF NOT EXISTS `bailleur` (
  `idu` int(11) NOT NULL REFERENCES `utilisateur` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idbailleur` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `numcni` int(11) DEFAULT NULL,
  `ville` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartier` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datenaiss` date DEFAULT NULL,
  `nomrep` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telrep` int(11) DEFAULT NULL,
  `signature` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL
);



CREATE TABLE IF NOT EXISTS `bien` (
  `idbien` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idtb` int(11) NOT NULL REFERENCES `type_de_bien` (`idtb`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idbailleur` int(11) NOT NULL REFERENCES `bailleur` (`idbailleur`) ON DELETE CASCADE ON UPDATE CASCADE,
  `nom` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numtitrefoncier` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numpermisconst` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `superficie` decimal(8,0) DEFAULT NULL,
  `ville` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartier` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `etat` tinyint(4) DEFAULT '0'
);


CREATE TABLE IF NOT EXISTS `equipement` (
  `idequipement` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idpiece` int(11) NOT NULL REFERENCES `piece` (`idpiece`) ON DELETE CASCADE ON UPDATE CASCADE,
  `nom` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` decimal(8,0) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL
) ;


CREATE TABLE IF NOT EXISTS `etatequipement` (
  `idee` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `valeur` tinyint(4) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci,
  `idequipement` int(11) DEFAULT NULL REFERENCES `equipement` (`idequipement`) ON DELETE CASCADE ON UPDATE CASCADE

) ;


CREATE TABLE IF NOT EXISTS `etatpiece` (
  `idep` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idpiece` int(11) NOT NULL DEFAULT '0' REFERENCES `piece` (`idpiece`) ON DELETE CASCADE ON UPDATE CASCADE,
  `valeur` tinyint(4) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci
);


CREATE TABLE IF NOT EXISTS `etat_des_lieux` (
  `idetatlieu` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idbien` int(11) NOT NULL REFERENCES `bien` (`idbien`) ON DELETE CASCADE ON UPDATE CASCADE,
  `description` text COLLATE utf8mb4_unicode_ci,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `signbailleur` tinyint(1) DEFAULT NULL,
  `signlocataire` tinyint(1) DEFAULT NULL
) ;


CREATE TABLE IF NOT EXISTS `facture` (
  `idfacture` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idlocation` int(11) NOT NULL REFERENCES `location` (`idlocation`) ON DELETE CASCADE ON UPDATE CASCADE,
  `date` date DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `datelimite` date DEFAULT NULL,
  `etat` tinyint(1) DEFAULT NULL
);


CREATE TABLE IF NOT EXISTS `inventaire` (
  `idinventaire` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idbien` int(11) NOT NULL REFERENCES `bien` (`idbien`) ON DELETE CASCADE ON UPDATE CASCADE,
  `description` text COLLATE utf8mb4_unicode_ci,
  `signbailleur` tinyint(1) DEFAULT '0',
  `signlocataire` tinyint(1) DEFAULT '0',
  `date` date DEFAULT NULL
);


CREATE TABLE IF NOT EXISTS `invitation` (
  `idinvitation` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `date` date NOT NULL,
  `etat` int(11) DEFAULT NULL,
  `idbailleur` int(11) DEFAULT NULL REFERENCES `bailleur` (`idbailleur`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idlocataire` int(11) DEFAULT NULL REFERENCES `locataire` (`idlocataire`) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE IF NOT EXISTS `locataire` (
  `idu` int(11) NOT NULL REFERENCES `utilisateur` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idlocataire` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `numcni` int(11) DEFAULT NULL,
  `ville` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartier` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datenaiss` date DEFAULT NULL,
  `sexe` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telemployeur` int(11) DEFAULT NULL,
  `nomemployeur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL 
) ;


CREATE TABLE IF NOT EXISTS `location` (
  `idlocation` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `utilisation` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activite` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idlocataire` int(11) DEFAULT NULL REFERENCES `locataire` (`idlocataire`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idtl` int(11) DEFAULT NULL REFERENCES `type_de_location` (`idtl`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idbien` int(11) DEFAULT NULL REFERENCES `bien` (`idbien`) ON DELETE CASCADE ON UPDATE CASCADE,
  `duree` int(11) DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `montantcaution` float DEFAULT NULL,
  `signlocataire` tinyint(4) DEFAULT '0',
  `signbailleur` tinyint(4) DEFAULT '0' 
);


CREATE TABLE IF NOT EXISTS `mesomb_deposits` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL ,
  `service` enum('MTN','ORANGE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `redirect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('FAIL','SUCCESS') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depositable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depositable_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mesomb_deposits_depositable_type_depositable_id_index` (`depositable_type`,`depositable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. mesomb_payments
DROP TABLE IF EXISTS `mesomb_payments`;
CREATE TABLE IF NOT EXISTS `mesomb_payments` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` enum('MTN','ORANGE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` tinyint(1) NOT NULL DEFAULT '1',
  `payer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `currency` enum('XAF','XOF') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'XAF',
  `redirect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('FAIL','SUCCESS') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payable_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mesomb_payments_payable_type_payable_id_index` (`payable_type`,`payable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. mesomb_transactions
DROP TABLE IF EXISTS `mesomb_transactions`;
CREATE TABLE IF NOT EXISTS `mesomb_transactions` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pk` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `type` enum('COLLECT','REFILL','INIT','WITHDRAWAL','PAYMENT','DEPOSIT','TRANSFER','SendMoney','ReceiveMoney','P2PTransfer','AccountBalance','CashIn','CashOut','ENEOBill','FloatTransfer','SellAirtime','PayWithCoupon','PostpaidBill','AirtimePurchase','ENEOPrepaid','CDEBill') COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `b_party` text COLLATE utf8mb4_unicode_ci,
  `fees` double(8,2) NOT NULL,
  `external_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ts` timestamp NOT NULL,
  `transacable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transacable_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direction` enum('0','-1','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mesomb_transactions_transacable_type_transacable_id_index` (`transacable_type`,`transacable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. note
DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `idnote` int(11) NOT NULL AUTO_INCREMENT,
  `idartisan` int(11) NOT NULL REFERENCES `artisan` (`idartisan`) ON DELETE CASCADE ON UPDATE CASCADE,
  `valeur` int(11) DEFAULT NULL,
  `idu` int(11) DEFAULT NULL REFERENCES `utilisateur` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (`idnote`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. package
DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `idpackage` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombrebienmax` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` decimal(8,0) DEFAULT NULL,
  PRIMARY KEY (`idpackage`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. photo
DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `idphoto` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idbien` int(11) NOT NULL REFERENCES `bien` (`idbien`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (`idphoto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. piece
DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `idpiece` int(11) NOT NULL AUTO_INCREMENT,
  `idbien` int(11) NOT NULL REFERENCES `bien` (`idbien`) ON DELETE CASCADE ON UPDATE CASCADE,
  `nom` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idpiece`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. quittance
DROP TABLE IF EXISTS `quittance`;
CREATE TABLE IF NOT EXISTS `quittance` (
  `idquittance` int(11) NOT NULL AUTO_INCREMENT,
  `idfacture` int(11) NOT NULL REFERENCES `facture` (`idfacture`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (`idquittance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. renovation
DROP TABLE IF EXISTS `renovation`;
CREATE TABLE IF NOT EXISTS `renovation` (
  `idrenovation` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `montant` decimal(8,0) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `statut` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idartisan` int(11) DEFAULT NULL REFERENCES `artisan` (`idartisan`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idbien` int(11) DEFAULT NULL REFERENCES `bien` (`idbien`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idu` int(11) DEFAULT NULL REFERENCES `utilisateur` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (`idrenovation`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. transaction
DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `idtransaction` int(11) NOT NULL AUTO_INCREMENT,
  `motif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `recepteur` int(11) DEFAULT NULL,
  `idu` int(11) DEFAULT NULL REFERENCES `utilisateur` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`idtransaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `type_de_bien` (
  `idtb` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idtb`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `type_de_location` (
  `idtl` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idtl`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `nomcomplet` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table immoasis. validitepackage
DROP TABLE IF EXISTS `validitepackage`;
CREATE TABLE IF NOT EXISTS `validitepackage` (
  `idvp` int(11) NOT NULL AUTO_INCREMENT,
  `datesous` date DEFAULT NULL,
  `dateexp` date DEFAULT NULL,
  `idpackage` int(11) DEFAULT NULL REFERENCES `package` (`idpackage`) ON DELETE CASCADE ON UPDATE CASCADE,
  `idu` int(11) DEFAULT NULL REFERENCES `utilisateur` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (`idvp`) 
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

