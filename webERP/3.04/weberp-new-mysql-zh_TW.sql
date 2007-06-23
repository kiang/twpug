SET FOREIGN_KEY_CHECKS = 0;
-- MySQL dump 10.9
--
-- Host: localhost    Database: weberp
-- ------------------------------------------------------
-- Server version	4.1.11-standard
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO,MYSQL40' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `weberp`
--

--
-- Table structure for table `accountgroups`
--

CREATE TABLE `accountgroups` (
  `groupname` char(30) NOT NULL default '',
  `sectioninaccounts` int(11) NOT NULL default '0',
  `pandl` tinyint(4) NOT NULL default '1',
  `sequenceintb` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`groupname`),
  KEY `SequenceInTB` (`sequenceintb`),
  KEY `sectioninaccounts` (`sectioninaccounts`),
  CONSTRAINT `accountgroups_ibfk_1` FOREIGN KEY (`sectioninaccounts`) REFERENCES `accountsection` (`sectionid`)
) TYPE=InnoDB;

--
-- Table structure for table `accountsection`
--

CREATE TABLE `accountsection` (
  `sectionid` int(11) NOT NULL default '0',
  `sectionname` text NOT NULL,
  PRIMARY KEY  (`sectionid`)
) TYPE=InnoDB;

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `areacode` char(2) NOT NULL default '',
  `areadescription` varchar(25) NOT NULL default '',
  PRIMARY KEY  (`areacode`)
) TYPE=InnoDB;

--
-- Table structure for table `bankaccounts`
--

CREATE TABLE `bankaccounts` (
  `accountcode` int(11) NOT NULL default '0',
  `bankaccountname` char(50) NOT NULL default '',
  `bankaccountnumber` char(50) NOT NULL default '',
  `bankaddress` char(50) default NULL,
  PRIMARY KEY  (`accountcode`),
  KEY `BankAccountName` (`bankaccountname`),
  KEY `BankAccountNumber` (`bankaccountnumber`),
  CONSTRAINT `bankaccounts_ibfk_1` FOREIGN KEY (`accountcode`) REFERENCES `chartmaster` (`AccountCode`)
) TYPE=InnoDB;

--
-- Table structure for table `banktrans`
--

CREATE TABLE `banktrans` (
  `banktransid` bigint(20) NOT NULL auto_increment,
  `type` smallint(6) NOT NULL default '0',
  `transno` bigint(20) NOT NULL default '0',
  `bankact` int(11) NOT NULL default '0',
  `ref` varchar(50) NOT NULL default '',
  `amountcleared` double NOT NULL default '0',
  `exrate` double NOT NULL default '1',
  `transdate` date NOT NULL default '0000-00-00',
  `banktranstype` varchar(30) NOT NULL default '',
  `amount` double NOT NULL default '0',
  `currcode` char(3) NOT NULL default '',
  PRIMARY KEY  (`banktransid`),
  KEY `BankAct` (`bankact`,`ref`),
  KEY `TransDate` (`transdate`),
  KEY `TransType` (`banktranstype`),
  KEY `Type` (`type`,`transno`),
  KEY `CurrCode` (`currcode`),
  CONSTRAINT `banktrans_ibfk_1` FOREIGN KEY (`type`) REFERENCES `systypes` (`TypeID`),
  CONSTRAINT `banktrans_ibfk_2` FOREIGN KEY (`bankact`) REFERENCES `bankaccounts` (`accountcode`)
) TYPE=InnoDB;

--
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `parent` char(20) NOT NULL default '',
  `component` char(20) NOT NULL default '',
  `workcentreadded` char(5) NOT NULL default '',
  `loccode` char(5) NOT NULL default '',
  `effectiveafter` date NOT NULL default '0000-00-00',
  `effectiveto` date NOT NULL default '9999-12-31',
  `quantity` double NOT NULL default '1',
  PRIMARY KEY  (`parent`,`component`,`workcentreadded`,`loccode`),
  KEY `Component` (`component`),
  KEY `EffectiveAfter` (`effectiveafter`),
  KEY `EffectiveTo` (`effectiveto`),
  KEY `LocCode` (`loccode`),
  KEY `Parent` (`parent`,`effectiveafter`,`effectiveto`,`loccode`),
  KEY `Parent_2` (`parent`),
  KEY `WorkCentreAdded` (`workcentreadded`),
  CONSTRAINT `bom_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `stockmaster` (`StockID`),
  CONSTRAINT `bom_ibfk_2` FOREIGN KEY (`component`) REFERENCES `stockmaster` (`StockID`),
  CONSTRAINT `bom_ibfk_3` FOREIGN KEY (`workcentreadded`) REFERENCES `workcentres` (`Code`),
  CONSTRAINT `bom_ibfk_4` FOREIGN KEY (`loccode`) REFERENCES `locations` (`LocCode`)
) TYPE=InnoDB;

--
-- Table structure for table `buckets`
--

CREATE TABLE `buckets` (
  `workcentre` char(5) NOT NULL default '',
  `availdate` datetime NOT NULL default '0000-00-00 00:00:00',
  `capacity` double NOT NULL default '0',
  PRIMARY KEY  (`workcentre`,`availdate`),
  KEY `WorkCentre` (`workcentre`),
  KEY `AvailDate` (`availdate`),
  CONSTRAINT `buckets_ibfk_1` FOREIGN KEY (`workcentre`) REFERENCES `workcentres` (`Code`)
) TYPE=InnoDB;

--
-- Table structure for table `chartdetails`
--

CREATE TABLE `chartdetails` (
  `accountcode` int(11) NOT NULL default '0',
  `period` smallint(6) NOT NULL default '0',
  `budget` double NOT NULL default '0',
  `actual` double NOT NULL default '0',
  `bfwd` double NOT NULL default '0',
  `bfwdbudget` double NOT NULL default '0',
  PRIMARY KEY  (`accountcode`,`period`),
  KEY `Period` (`period`),
  CONSTRAINT `chartdetails_ibfk_1` FOREIGN KEY (`accountcode`) REFERENCES `chartmaster` (`AccountCode`),
  CONSTRAINT `chartdetails_ibfk_2` FOREIGN KEY (`period`) REFERENCES `periods` (`PeriodNo`)
) TYPE=InnoDB;

--
-- Table structure for table `chartmaster`
--

CREATE TABLE `chartmaster` (
  `accountcode` int(11) NOT NULL default '0',
  `accountname` char(50) NOT NULL default '',
  `group_` char(30) NOT NULL default '',
  PRIMARY KEY  (`accountcode`),
  KEY `AccountCode` (`accountcode`),
  KEY `AccountName` (`accountname`),
  KEY `Group_` (`group_`),
  CONSTRAINT `chartmaster_ibfk_1` FOREIGN KEY (`group_`) REFERENCES `accountgroups` (`groupname`)
) TYPE=InnoDB;

--
-- Table structure for table `cogsglpostings`
--

CREATE TABLE `cogsglpostings` (
  `id` int(11) NOT NULL auto_increment,
  `area` char(2) NOT NULL default '',
  `stkcat` varchar(6) NOT NULL default '',
  `glcode` int(11) NOT NULL default '0',
  `salestype` char(2) NOT NULL default 'AN',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `Area_StkCat` (`area`,`stkcat`,`salestype`),
  KEY `Area` (`area`),
  KEY `StkCat` (`stkcat`),
  KEY `GLCode` (`glcode`),
  KEY `SalesType` (`salestype`)
) TYPE=InnoDB;

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `coycode` int(11) NOT NULL default '1',
  `coyname` varchar(50) NOT NULL default '',
  `gstno` varchar(20) NOT NULL default '',
  `companynumber` varchar(20) NOT NULL default '0',
  `regoffice1` varchar(40) NOT NULL default '',
  `regoffice2` varchar(40) NOT NULL default '',
  `regoffice3` varchar(40) NOT NULL default '',
  `regoffice4` varchar(40) NOT NULL default '',
  `regoffice5` varchar(20) NOT NULL default '',
  `regoffice6` varchar(15) NOT NULL default '',
  `telephone` varchar(25) NOT NULL default '',
  `fax` varchar(25) NOT NULL default '',
  `email` varchar(55) NOT NULL default '',
  `currencydefault` varchar(4) NOT NULL default '',
  `debtorsact` int(11) NOT NULL default '70000',
  `pytdiscountact` int(11) NOT NULL default '55000',
  `creditorsact` int(11) NOT NULL default '80000',
  `payrollact` int(11) NOT NULL default '84000',
  `grnact` int(11) NOT NULL default '72000',
  `exchangediffact` int(11) NOT NULL default '65000',
  `purchasesexchangediffact` int(11) NOT NULL default '0',
  `retainedearnings` int(11) NOT NULL default '90000',
  `gllink_debtors` tinyint(1) default '1',
  `gllink_creditors` tinyint(1) default '1',
  `gllink_stock` tinyint(1) default '1',
  `freightact` int(11) NOT NULL default '0',
  PRIMARY KEY  (`coycode`)
) TYPE=InnoDB;

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `confname` varchar(35) NOT NULL default '',
  `confvalue` text NOT NULL,
  PRIMARY KEY  (`confname`)
) TYPE=InnoDB;

--
-- Table structure for table `contractbom`
--

CREATE TABLE `contractbom` (
  `contractref` char(20) NOT NULL default '',
  `component` char(20) NOT NULL default '',
  `workcentreadded` char(5) NOT NULL default '',
  `loccode` char(5) NOT NULL default '',
  `quantity` double NOT NULL default '1',
  PRIMARY KEY  (`contractref`,`component`,`workcentreadded`,`loccode`),
  KEY `Component` (`component`),
  KEY `LocCode` (`loccode`),
  KEY `ContractRef` (`contractref`),
  KEY `WorkCentreAdded` (`workcentreadded`),
  KEY `WorkCentreAdded_2` (`workcentreadded`),
  CONSTRAINT `contractbom_ibfk_1` FOREIGN KEY (`workcentreadded`) REFERENCES `workcentres` (`Code`),
  CONSTRAINT `contractbom_ibfk_2` FOREIGN KEY (`loccode`) REFERENCES `locations` (`LocCode`),
  CONSTRAINT `contractbom_ibfk_3` FOREIGN KEY (`component`) REFERENCES `stockmaster` (`StockID`)
) TYPE=InnoDB;

--
-- Table structure for table `contractreqts`
--

CREATE TABLE `contractreqts` (
  `contractreqid` int(11) NOT NULL auto_increment,
  `contract` char(20) NOT NULL default '',
  `component` char(40) NOT NULL default '',
  `quantity` double NOT NULL default '1',
  `priceperunit` decimal(20,4) NOT NULL default '0.0000',
  PRIMARY KEY  (`contractreqid`),
  KEY `Contract` (`contract`),
  CONSTRAINT `contractreqts_ibfk_1` FOREIGN KEY (`contract`) REFERENCES `contracts` (`ContractRef`)
) TYPE=InnoDB;

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `contractref` varchar(20) NOT NULL default '',
  `contractdescription` varchar(50) NOT NULL default '',
  `debtorno` varchar(10) NOT NULL default '',
  `branchcode` varchar(10) NOT NULL default '',
  `status` varchar(10) NOT NULL default 'Quotation',
  `categoryid` varchar(6) NOT NULL default '',
  `typeabbrev` char(2) NOT NULL default '',
  `orderno` int(11) NOT NULL default '0',
  `quotedpricefx` decimal(20,4) NOT NULL default '0.0000',
  `margin` double NOT NULL default '1',
  `woref` varchar(20) NOT NULL default '',
  `requireddate` datetime NOT NULL default '0000-00-00 00:00:00',
  `canceldate` datetime NOT NULL default '0000-00-00 00:00:00',
  `quantityreqd` double NOT NULL default '1',
  `specifications` longblob NOT NULL,
  `datequoted` datetime NOT NULL default '0000-00-00 00:00:00',
  `units` varchar(15) NOT NULL default 'Each',
  `drawing` longblob NOT NULL,
  `rate` double NOT NULL default '1',
  PRIMARY KEY  (`contractref`),
  KEY `OrderNo` (`orderno`),
  KEY `CategoryID` (`categoryid`),
  KEY `Status` (`status`),
  KEY `TypeAbbrev` (`typeabbrev`),
  KEY `WORef` (`woref`),
  KEY `DebtorNo` (`debtorno`,`branchcode`),
  CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`debtorno`, `branchcode`) REFERENCES `custbranch` (`DebtorNo`, `BranchCode`),
  CONSTRAINT `contracts_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `stockcategory` (`CategoryID`),
  CONSTRAINT `contracts_ibfk_3` FOREIGN KEY (`typeabbrev`) REFERENCES `salestypes` (`TypeAbbrev`)
) TYPE=InnoDB;

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `currency` char(20) NOT NULL default '',
  `currabrev` char(3) NOT NULL default '',
  `country` char(50) NOT NULL default '',
  `hundredsname` char(15) NOT NULL default 'Cents',
  `rate` double NOT NULL default '1',
  PRIMARY KEY  (`currabrev`),
  KEY `Country` (`country`)
) TYPE=InnoDB;

--
-- Table structure for table `custallocns`
--

CREATE TABLE `custallocns` (
  `id` int(11) NOT NULL auto_increment,
  `amt` decimal(20,4) NOT NULL default '0.0000',
  `datealloc` date NOT NULL default '0000-00-00',
  `transid_allocfrom` int(11) NOT NULL default '0',
  `transid_allocto` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `DateAlloc` (`datealloc`),
  KEY `TransID_AllocFrom` (`transid_allocfrom`),
  KEY `TransID_AllocTo` (`transid_allocto`),
  CONSTRAINT `custallocns_ibfk_1` FOREIGN KEY (`transid_allocfrom`) REFERENCES `debtortrans` (`ID`),
  CONSTRAINT `custallocns_ibfk_2` FOREIGN KEY (`transid_allocto`) REFERENCES `debtortrans` (`ID`)
) TYPE=InnoDB;

--
-- Table structure for table `custbranch`
--

CREATE TABLE `custbranch` (
  `branchcode` varchar(10) NOT NULL default '',
  `debtorno` varchar(10) NOT NULL default '',
  `brname` varchar(40) NOT NULL default '',
  `braddress1` varchar(40) NOT NULL default '',
  `braddress2` varchar(40) NOT NULL default '',
  `braddress3` varchar(40) NOT NULL default '',
  `braddress4` varchar(50) NOT NULL default '',
  `braddress5` varchar(20) NOT NULL default '',
  `braddress6` varchar(15) NOT NULL default '',
  `estdeliverydays` smallint(6) NOT NULL default '1',
  `area` char(2) NOT NULL default '',
  `salesman` varchar(4) NOT NULL default '',
  `fwddate` smallint(6) NOT NULL default '0',
  `phoneno` varchar(20) NOT NULL default '',
  `faxno` varchar(20) NOT NULL default '',
  `contactname` varchar(30) NOT NULL default '',
  `email` varchar(55) NOT NULL default '',
  `defaultlocation` varchar(5) NOT NULL default '',
  `taxgroupid` tinyint(4) NOT NULL default '1',
  `defaultshipvia` int(11) NOT NULL default '1',
  `deliverblind` tinyint(1) default '1',
  `disabletrans` tinyint(4) NOT NULL default '0',
  `brpostaddr1` varchar(40) NOT NULL default '',
  `brpostaddr2` varchar(40) NOT NULL default '',
  `brpostaddr3` varchar(30) NOT NULL default '',
  `brpostaddr4` varchar(20) NOT NULL default '',
  `brpostaddr5` varchar(20) NOT NULL default '',
  `brpostaddr6` varchar(15) NOT NULL default '',
  `custbranchcode` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`branchcode`,`debtorno`),
  KEY `BranchCode` (`branchcode`),
  KEY `BrName` (`brname`),
  KEY `DebtorNo` (`debtorno`),
  KEY `Salesman` (`salesman`),
  KEY `Area` (`area`),
  KEY `DefaultLocation` (`defaultlocation`),
  KEY `DefaultShipVia` (`defaultshipvia`),
  KEY `taxgroupid` (`taxgroupid`),
  CONSTRAINT `custbranch_ibfk_1` FOREIGN KEY (`debtorno`) REFERENCES `debtorsmaster` (`DebtorNo`),
  CONSTRAINT `custbranch_ibfk_2` FOREIGN KEY (`area`) REFERENCES `areas` (`areacode`),
  CONSTRAINT `custbranch_ibfk_3` FOREIGN KEY (`salesman`) REFERENCES `salesman` (`SalesmanCode`),
  CONSTRAINT `custbranch_ibfk_4` FOREIGN KEY (`defaultlocation`) REFERENCES `locations` (`LocCode`),
  CONSTRAINT `custbranch_ibfk_6` FOREIGN KEY (`defaultshipvia`) REFERENCES `shippers` (`Shipper_ID`),
  CONSTRAINT `custbranch_ibfk_7` FOREIGN KEY (`taxgroupid`) REFERENCES `taxgroups` (`taxgroupid`)
) TYPE=InnoDB;

--
-- Table structure for table `debtorsmaster`
--

CREATE TABLE `debtorsmaster` (
  `debtorno` varchar(10) NOT NULL default '',
  `name` varchar(40) NOT NULL default '',
  `address1` varchar(40) NOT NULL default '',
  `address2` varchar(40) NOT NULL default '',
  `address3` varchar(40) NOT NULL default '',
  `address4` varchar(50) NOT NULL default '',
  `address5` varchar(20) NOT NULL default '',
  `address6` varchar(15) NOT NULL default '',
  `currcode` char(3) NOT NULL default '',
  `salestype` char(2) NOT NULL default '',
  `clientsince` datetime NOT NULL default '0000-00-00 00:00:00',
  `holdreason` smallint(6) NOT NULL default '0',
  `paymentterms` char(2) NOT NULL default 'f',
  `discount` double NOT NULL default '0',
  `pymtdiscount` double NOT NULL default '0',
  `lastpaid` double NOT NULL default '0',
  `lastpaiddate` datetime default NULL,
  `creditlimit` double NOT NULL default '1000',
  `invaddrbranch` tinyint(4) NOT NULL default '0',
  `discountcode` char(2) NOT NULL default '',
  `ediinvoices` tinyint(4) NOT NULL default '0',
  `ediorders` tinyint(4) NOT NULL default '0',
  `edireference` varchar(20) NOT NULL default '',
  `editransport` varchar(5) NOT NULL default 'email',
  `ediaddress` varchar(50) NOT NULL default '',
  `ediserveruser` varchar(20) NOT NULL default '',
  `ediserverpwd` varchar(20) NOT NULL default '',
  `taxref` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`debtorno`),
  KEY `Currency` (`currcode`),
  KEY `HoldReason` (`holdreason`),
  KEY `Name` (`name`),
  KEY `PaymentTerms` (`paymentterms`),
  KEY `SalesType` (`salestype`),
  KEY `EDIInvoices` (`ediinvoices`),
  KEY `EDIOrders` (`ediorders`),
  CONSTRAINT `debtorsmaster_ibfk_1` FOREIGN KEY (`holdreason`) REFERENCES `holdreasons` (`ReasonCode`),
  CONSTRAINT `debtorsmaster_ibfk_2` FOREIGN KEY (`currcode`) REFERENCES `currencies` (`currabrev`),
  CONSTRAINT `debtorsmaster_ibfk_3` FOREIGN KEY (`paymentterms`) REFERENCES `paymentterms` (`TermsIndicator`),
  CONSTRAINT `debtorsmaster_ibfk_4` FOREIGN KEY (`salestype`) REFERENCES `salestypes` (`TypeAbbrev`)
) TYPE=InnoDB;

--
-- Table structure for table `debtortrans`
--

CREATE TABLE `debtortrans` (
  `id` int(11) NOT NULL auto_increment,
  `transno` int(11) NOT NULL default '0',
  `type` smallint(6) NOT NULL default '0',
  `debtorno` varchar(10) NOT NULL default '',
  `branchcode` varchar(10) NOT NULL default '',
  `trandate` datetime NOT NULL default '0000-00-00 00:00:00',
  `prd` smallint(6) NOT NULL default '0',
  `settled` tinyint(4) NOT NULL default '0',
  `reference` varchar(20) NOT NULL default '',
  `tpe` char(2) NOT NULL default '',
  `order_` int(11) NOT NULL default '0',
  `rate` double NOT NULL default '0',
  `ovamount` double NOT NULL default '0',
  `ovgst` double NOT NULL default '0',
  `ovfreight` double NOT NULL default '0',
  `ovdiscount` double NOT NULL default '0',
  `diffonexch` double NOT NULL default '0',
  `alloc` double NOT NULL default '0',
  `invtext` text,
  `shipvia` varchar(10) NOT NULL default '',
  `edisent` tinyint(4) NOT NULL default '0',
  `consignment` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `DebtorNo` (`debtorno`,`branchcode`),
  KEY `Order_` (`order_`),
  KEY `Prd` (`prd`),
  KEY `Tpe` (`tpe`),
  KEY `Type` (`type`),
  KEY `Settled` (`settled`),
  KEY `TranDate` (`trandate`),
  KEY `TransNo` (`transno`),
  KEY `Type_2` (`type`,`transno`),
  KEY `EDISent` (`edisent`),
  CONSTRAINT `debtortrans_ibfk_1` FOREIGN KEY (`debtorno`) REFERENCES `custbranch` (`debtorno`),
  CONSTRAINT `debtortrans_ibfk_2` FOREIGN KEY (`type`) REFERENCES `systypes` (`TypeID`),
  CONSTRAINT `debtortrans_ibfk_3` FOREIGN KEY (`prd`) REFERENCES `periods` (`PeriodNo`)
) TYPE=InnoDB;

--
-- Table structure for table `debtortranstaxes`
--

CREATE TABLE `debtortranstaxes` (
  `debtortransid` int(11) NOT NULL default '0',
  `taxauthid` tinyint(4) NOT NULL default '0',
  `taxamount` double NOT NULL default '0',
  PRIMARY KEY  (`debtortransid`,`taxauthid`),
  KEY `taxauthid` (`taxauthid`),
  CONSTRAINT `debtortranstaxes_ibfk_1` FOREIGN KEY (`taxauthid`) REFERENCES `taxauthorities` (`taxid`),
  CONSTRAINT `debtortranstaxes_ibfk_2` FOREIGN KEY (`debtortransid`) REFERENCES `debtortrans` (`id`)
) TYPE=InnoDB;

--
-- Table structure for table `discountmatrix`
--

CREATE TABLE `discountmatrix` (
  `salestype` char(2) NOT NULL default '',
  `discountcategory` char(2) NOT NULL default '',
  `quantitybreak` int(11) NOT NULL default '1',
  `discountrate` double NOT NULL default '0',
  PRIMARY KEY  (`salestype`,`discountcategory`,`quantitybreak`),
  KEY `QuantityBreak` (`quantitybreak`),
  KEY `DiscountCategory` (`discountcategory`),
  KEY `SalesType` (`salestype`),
  CONSTRAINT `discountmatrix_ibfk_1` FOREIGN KEY (`salestype`) REFERENCES `salestypes` (`TypeAbbrev`)
) TYPE=InnoDB;

--
-- Table structure for table `edi_orders_seg_groups`
--

CREATE TABLE `edi_orders_seg_groups` (
  `seggroupno` tinyint(4) NOT NULL default '0',
  `maxoccur` int(4) NOT NULL default '0',
  `parentseggroup` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`seggroupno`)
) TYPE=InnoDB;

--
-- Table structure for table `edi_orders_segs`
--

CREATE TABLE `edi_orders_segs` (
  `id` int(11) NOT NULL auto_increment,
  `segtag` char(3) NOT NULL default '',
  `seggroup` tinyint(4) NOT NULL default '0',
  `maxoccur` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `SegTag` (`segtag`),
  KEY `SegNo` (`seggroup`)
) TYPE=InnoDB;

--
-- Table structure for table `ediitemmapping`
--

CREATE TABLE `ediitemmapping` (
  `supporcust` varchar(4) NOT NULL default '',
  `partnercode` varchar(10) NOT NULL default '',
  `stockid` varchar(20) NOT NULL default '',
  `partnerstockid` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`supporcust`,`partnercode`,`stockid`),
  KEY `PartnerCode` (`partnercode`),
  KEY `StockID` (`stockid`),
  KEY `PartnerStockID` (`partnerstockid`),
  KEY `SuppOrCust` (`supporcust`)
) TYPE=InnoDB;

--
-- Table structure for table `edimessageformat`
--

CREATE TABLE `edimessageformat` (
  `id` int(11) NOT NULL auto_increment,
  `partnercode` varchar(10) NOT NULL default '',
  `messagetype` varchar(6) NOT NULL default '',
  `section` varchar(7) NOT NULL default '',
  `sequenceno` int(11) NOT NULL default '0',
  `linetext` varchar(70) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `PartnerCode` (`partnercode`,`messagetype`,`sequenceno`),
  KEY `Section` (`section`)
) TYPE=InnoDB;

--
-- Table structure for table `freightcosts`
--

CREATE TABLE `freightcosts` (
  `shipcostfromid` int(11) NOT NULL auto_increment,
  `locationfrom` varchar(5) NOT NULL default '',
  `destination` varchar(40) NOT NULL default '',
  `shipperid` int(11) NOT NULL default '0',
  `cubrate` double NOT NULL default '0',
  `kgrate` double NOT NULL default '0',
  `maxkgs` double NOT NULL default '999999',
  `maxcub` double NOT NULL default '999999',
  `fixedprice` double NOT NULL default '0',
  `minimumchg` double NOT NULL default '0',
  PRIMARY KEY  (`shipcostfromid`),
  KEY `Destination` (`destination`),
  KEY `LocationFrom` (`locationfrom`),
  KEY `ShipperID` (`shipperid`),
  KEY `Destination_2` (`destination`,`locationfrom`,`shipperid`),
  CONSTRAINT `freightcosts_ibfk_1` FOREIGN KEY (`locationfrom`) REFERENCES `locations` (`LocCode`),
  CONSTRAINT `freightcosts_ibfk_2` FOREIGN KEY (`shipperid`) REFERENCES `shippers` (`Shipper_ID`)
) TYPE=InnoDB;

--
-- Table structure for table `gltrans`
--

CREATE TABLE `gltrans` (
  `counterindex` int(11) NOT NULL auto_increment,
  `type` smallint(6) NOT NULL default '0',
  `typeno` bigint(16) NOT NULL default '1',
  `chequeno` int(11) NOT NULL default '0',
  `trandate` date NOT NULL default '0000-00-00',
  `periodno` smallint(6) NOT NULL default '0',
  `account` int(11) NOT NULL default '0',
  `narrative` varchar(200) NOT NULL default '',
  `amount` double NOT NULL default '0',
  `posted` tinyint(4) NOT NULL default '0',
  `jobref` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`counterindex`),
  KEY `Account` (`account`),
  KEY `ChequeNo` (`chequeno`),
  KEY `PeriodNo` (`periodno`),
  KEY `Posted` (`posted`),
  KEY `TranDate` (`trandate`),
  KEY `TypeNo` (`typeno`),
  KEY `Type_and_Number` (`type`,`typeno`),
  KEY `JobRef` (`jobref`),
  CONSTRAINT `gltrans_ibfk_1` FOREIGN KEY (`account`) REFERENCES `chartmaster` (`accountcode`),
  CONSTRAINT `gltrans_ibfk_2` FOREIGN KEY (`type`) REFERENCES `systypes` (`TypeID`),
  CONSTRAINT `gltrans_ibfk_3` FOREIGN KEY (`periodno`) REFERENCES `periods` (`PeriodNo`)
) TYPE=InnoDB;

--
-- Table structure for table `grns`
--

CREATE TABLE `grns` (
  `grnbatch` smallint(6) NOT NULL default '0',
  `grnno` int(11) NOT NULL auto_increment,
  `podetailitem` int(11) NOT NULL default '0',
  `itemcode` varchar(20) NOT NULL default '',
  `deliverydate` date NOT NULL default '0000-00-00',
  `itemdescription` varchar(100) NOT NULL default '',
  `qtyrecd` double NOT NULL default '0',
  `quantityinv` double NOT NULL default '0',
  `supplierid` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`grnno`),
  KEY `DeliveryDate` (`deliverydate`),
  KEY `ItemCode` (`itemcode`),
  KEY `PODetailItem` (`podetailitem`),
  KEY `SupplierID` (`supplierid`),
  CONSTRAINT `grns_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `suppliers` (`SupplierID`),
  CONSTRAINT `grns_ibfk_2` FOREIGN KEY (`podetailitem`) REFERENCES `purchorderdetails` (`PODetailItem`)
) TYPE=InnoDB;

--
-- Table structure for table `holdreasons`
--

CREATE TABLE `holdreasons` (
  `reasoncode` smallint(6) NOT NULL default '1',
  `reasondescription` char(30) NOT NULL default '',
  `dissallowinvoices` tinyint(4) NOT NULL default '-1',
  PRIMARY KEY  (`reasoncode`),
  KEY `ReasonCode` (`reasoncode`),
  KEY `ReasonDescription` (`reasondescription`)
) TYPE=InnoDB;

--
-- Table structure for table `lastcostrollup`
--

CREATE TABLE `lastcostrollup` (
  `stockid` char(20) NOT NULL default '',
  `totalonhand` double NOT NULL default '0',
  `matcost` decimal(20,4) NOT NULL default '0.0000',
  `labcost` decimal(20,4) NOT NULL default '0.0000',
  `oheadcost` decimal(20,4) NOT NULL default '0.0000',
  `categoryid` char(6) NOT NULL default '',
  `stockact` int(11) NOT NULL default '0',
  `adjglact` int(11) NOT NULL default '0',
  `newmatcost` decimal(20,4) NOT NULL default '0.0000',
  `newlabcost` decimal(20,4) NOT NULL default '0.0000',
  `newoheadcost` decimal(20,4) NOT NULL default '0.0000'
) TYPE=InnoDB;

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `loccode` varchar(5) NOT NULL default '',
  `locationname` varchar(50) NOT NULL default '',
  `deladd1` varchar(40) NOT NULL default '',
  `deladd2` varchar(40) NOT NULL default '',
  `deladd3` varchar(40) NOT NULL default '',
  `deladd4` varchar(40) NOT NULL default '',
  `deladd5` varchar(20) NOT NULL default '',
  `deladd6` varchar(15) NOT NULL default '',
  `tel` varchar(30) NOT NULL default '',
  `fax` varchar(30) NOT NULL default '',
  `email` varchar(55) NOT NULL default '',
  `contact` varchar(30) NOT NULL default '',
  `taxprovinceid` tinyint(4) NOT NULL default '1',
  `managed` int(11) default '0',
  PRIMARY KEY  (`loccode`),
  KEY `taxprovinceid` (`taxprovinceid`),
  CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`taxprovinceid`) REFERENCES `taxprovinces` (`taxprovinceid`)
) TYPE=InnoDB;

--
-- Table structure for table `locstock`
--

CREATE TABLE `locstock` (
  `loccode` varchar(5) NOT NULL default '',
  `stockid` varchar(20) NOT NULL default '',
  `quantity` double NOT NULL default '0',
  `reorderlevel` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`loccode`,`stockid`),
  KEY `StockID` (`stockid`),
  CONSTRAINT `locstock_ibfk_1` FOREIGN KEY (`loccode`) REFERENCES `locations` (`loccode`),
  CONSTRAINT `locstock_ibfk_2` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`StockID`)
) TYPE=InnoDB;

--
-- Table structure for table `loctransfers`
--

CREATE TABLE `loctransfers` (
  `reference` int(11) NOT NULL default '0',
  `stockid` varchar(20) NOT NULL default '',
  `shipqty` int(11) NOT NULL default '0',
  `recqty` int(11) NOT NULL default '0',
  `shipdate` date NOT NULL default '0000-00-00',
  `recdate` date NOT NULL default '0000-00-00',
  `shiploc` varchar(7) NOT NULL default '',
  `recloc` varchar(7) NOT NULL default '',
  KEY `Reference` (`reference`,`stockid`),
  KEY `ShipLoc` (`shiploc`),
  KEY `RecLoc` (`recloc`),
  KEY `StockID` (`stockid`),
  CONSTRAINT `loctransfers_ibfk_1` FOREIGN KEY (`shiploc`) REFERENCES `locations` (`loccode`),
  CONSTRAINT `loctransfers_ibfk_2` FOREIGN KEY (`recloc`) REFERENCES `locations` (`loccode`),
  CONSTRAINT `loctransfers_ibfk_3` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`StockID`)
) TYPE=InnoDB COMMENT='Stores Shipments To And From Locations';

--
-- Table structure for table `orderdeliverydifferenceslog`
--

CREATE TABLE `orderdeliverydifferenceslog` (
  `orderno` int(11) NOT NULL default '0',
  `invoiceno` int(11) NOT NULL default '0',
  `stockid` varchar(20) NOT NULL default '',
  `quantitydiff` double NOT NULL default '0',
  `debtorno` varchar(10) NOT NULL default '',
  `branch` varchar(10) NOT NULL default '',
  `can_or_bo` char(3) NOT NULL default 'CAN',
  PRIMARY KEY  (`orderno`,`invoiceno`,`stockid`),
  KEY `StockID` (`stockid`),
  KEY `DebtorNo` (`debtorno`,`branch`),
  KEY `Can_or_BO` (`can_or_bo`),
  KEY `OrderNo` (`orderno`),
  CONSTRAINT `orderdeliverydifferenceslog_ibfk_1` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`StockID`),
  CONSTRAINT `orderdeliverydifferenceslog_ibfk_2` FOREIGN KEY (`debtorno`, `branch`) REFERENCES `custbranch` (`debtorno`, `branchcode`),
  CONSTRAINT `orderdeliverydifferenceslog_ibfk_3` FOREIGN KEY (`orderno`) REFERENCES `salesorders` (`OrderNo`)
) TYPE=InnoDB;

--
-- Table structure for table `paymentmethods`
--

CREATE TABLE `paymentmethods` (
  `paymentid` tinyint(4) NOT NULL auto_increment,
  `paymentname` varchar(15) NOT NULL default '',
  `paymenttype` int(11) NOT NULL default '1',
  `receipttype` int(11) NOT NULL default '1',
  PRIMARY KEY  (`paymentid`)
) TYPE=InnoDB;

--
-- Table structure for table `paymentterms`
--

CREATE TABLE `paymentterms` (
  `termsindicator` char(2) NOT NULL default '',
  `terms` char(40) NOT NULL default '',
  `daysbeforedue` smallint(6) NOT NULL default '0',
  `dayinfollowingmonth` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`termsindicator`),
  KEY `DaysBeforeDue` (`daysbeforedue`),
  KEY `DayInFollowingMonth` (`dayinfollowingmonth`)
) TYPE=InnoDB;

--
-- Table structure for table `periods`
--

CREATE TABLE `periods` (
  `periodno` smallint(6) NOT NULL default '0',
  `lastdate_in_period` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`periodno`),
  KEY `LastDate_in_Period` (`lastdate_in_period`)
) TYPE=InnoDB;

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `stockid` varchar(20) NOT NULL default '',
  `typeabbrev` char(2) NOT NULL default '',
  `currabrev` char(3) NOT NULL default '',
  `debtorno` varchar(10) NOT NULL default '',
  `price` decimal(20,4) NOT NULL default '0.0000',
  `branchcode` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`stockid`,`typeabbrev`,`currabrev`,`debtorno`),
  KEY `CurrAbrev` (`currabrev`),
  KEY `DebtorNo` (`debtorno`),
  KEY `StockID` (`stockid`),
  KEY `TypeAbbrev` (`typeabbrev`),
  CONSTRAINT `prices_ibfk_1` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`StockID`),
  CONSTRAINT `prices_ibfk_2` FOREIGN KEY (`currabrev`) REFERENCES `currencies` (`currabrev`),
  CONSTRAINT `prices_ibfk_3` FOREIGN KEY (`typeabbrev`) REFERENCES `salestypes` (`TypeAbbrev`)
) TYPE=InnoDB;

--
-- Table structure for table `purchdata`
--

CREATE TABLE `purchdata` (
  `supplierno` char(10) NOT NULL default '',
  `stockid` char(20) NOT NULL default '',
  `price` decimal(20,4) NOT NULL default '0.0000',
  `suppliersuom` char(50) NOT NULL default '',
  `conversionfactor` double NOT NULL default '1',
  `supplierdescription` char(50) NOT NULL default '',
  `leadtime` smallint(6) NOT NULL default '1',
  `preferred` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`supplierno`,`stockid`),
  KEY `StockID` (`stockid`),
  KEY `SupplierNo` (`supplierno`),
  KEY `Preferred` (`preferred`),
  CONSTRAINT `purchdata_ibfk_1` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`StockID`),
  CONSTRAINT `purchdata_ibfk_2` FOREIGN KEY (`supplierno`) REFERENCES `suppliers` (`SupplierID`)
) TYPE=InnoDB;

--
-- Table structure for table `purchorderdetails`
--

CREATE TABLE `purchorderdetails` (
  `podetailitem` int(11) NOT NULL auto_increment,
  `orderno` int(11) NOT NULL default '0',
  `itemcode` varchar(20) NOT NULL default '',
  `deliverydate` date NOT NULL default '0000-00-00',
  `itemdescription` varchar(100) NOT NULL default '',
  `glcode` int(11) NOT NULL default '0',
  `qtyinvoiced` double NOT NULL default '0',
  `unitprice` double NOT NULL default '0',
  `actprice` double NOT NULL default '0',
  `stdcostunit` double NOT NULL default '0',
  `quantityord` double NOT NULL default '0',
  `quantityrecd` double NOT NULL default '0',
  `shiptref` int(1) NOT NULL default '0',
  `jobref` varchar(20) NOT NULL default '',
  `completed` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`podetailitem`),
  KEY `DeliveryDate` (`deliverydate`),
  KEY `GLCode` (`glcode`),
  KEY `ItemCode` (`itemcode`),
  KEY `JobRef` (`jobref`),
  KEY `OrderNo` (`orderno`),
  KEY `ShiptRef` (`shiptref`),
  KEY `Completed` (`completed`),
  CONSTRAINT `purchorderdetails_ibfk_1` FOREIGN KEY (`orderno`) REFERENCES `purchorders` (`OrderNo`)
) TYPE=InnoDB;

--
-- Table structure for table `purchorders`
--

CREATE TABLE `purchorders` (
  `orderno` int(11) NOT NULL auto_increment,
  `supplierno` varchar(10) NOT NULL default '',
  `comments` longblob,
  `orddate` datetime NOT NULL default '0000-00-00 00:00:00',
  `rate` double NOT NULL default '1',
  `dateprinted` datetime default NULL,
  `allowprint` tinyint(4) NOT NULL default '1',
  `initiator` varchar(10) default NULL,
  `requisitionno` varchar(15) default NULL,
  `intostocklocation` varchar(5) NOT NULL default '',
  `deladd1` varchar(40) NOT NULL default '',
  `deladd2` varchar(40) NOT NULL default '',
  `deladd3` varchar(40) NOT NULL default '',
  `deladd4` varchar(40) NOT NULL default '',
  `deladd5` varchar(20) NOT NULL default '',
  `deladd6` varchar(15) NOT NULL default '',
  `contact` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`orderno`),
  KEY `OrdDate` (`orddate`),
  KEY `SupplierNo` (`supplierno`),
  KEY `IntoStockLocation` (`intostocklocation`),
  KEY `AllowPrintPO` (`allowprint`),
  CONSTRAINT `purchorders_ibfk_1` FOREIGN KEY (`supplierno`) REFERENCES `suppliers` (`SupplierID`),
  CONSTRAINT `purchorders_ibfk_2` FOREIGN KEY (`intostocklocation`) REFERENCES `locations` (`loccode`)
) TYPE=InnoDB;

--
-- Table structure for table `recurringsalesorders`
--

CREATE TABLE `recurringsalesorders` (
  `recurrorderno` int(11) NOT NULL auto_increment,
  `debtorno` varchar(10) NOT NULL default '',
  `branchcode` varchar(10) NOT NULL default '',
  `customerref` varchar(50) NOT NULL default '',
  `buyername` varchar(50) default NULL,
  `comments` longblob,
  `orddate` date NOT NULL default '0000-00-00',
  `ordertype` char(2) NOT NULL default '',
  `shipvia` int(11) NOT NULL default '0',
  `deladd1` varchar(40) NOT NULL default '',
  `deladd2` varchar(40) NOT NULL default '',
  `deladd3` varchar(40) NOT NULL default '',
  `deladd4` varchar(40) default NULL,
  `deladd5` varchar(20) NOT NULL default '',
  `deladd6` varchar(15) NOT NULL default '',
  `contactphone` varchar(25) default NULL,
  `contactemail` varchar(25) default NULL,
  `deliverto` varchar(40) NOT NULL default '',
  `freightcost` double NOT NULL default '0',
  `fromstkloc` varchar(5) NOT NULL default '',
  `lastrecurrence` date NOT NULL default '0000-00-00',
  `stopdate` date NOT NULL default '0000-00-00',
  `frequency` tinyint(4) NOT NULL default '1',
  `autoinvoice` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`recurrorderno`),
  KEY `debtorno` (`debtorno`),
  KEY `orddate` (`orddate`),
  KEY `ordertype` (`ordertype`),
  KEY `locationindex` (`fromstkloc`),
  KEY `branchcode` (`branchcode`,`debtorno`),
  CONSTRAINT `recurringsalesorders_ibfk_1` FOREIGN KEY (`branchcode`, `debtorno`) REFERENCES `custbranch` (`branchcode`, `debtorno`)
) TYPE=InnoDB;

--
-- Table structure for table `recurrsalesorderdetails`
--

CREATE TABLE `recurrsalesorderdetails` (
  `recurrorderno` int(11) NOT NULL default '0',
  `stkcode` varchar(20) NOT NULL default '',
  `unitprice` double NOT NULL default '0',
  `quantity` double NOT NULL default '0',
  `discountpercent` double NOT NULL default '0',
  `narrative` text NOT NULL,
  PRIMARY KEY  (`recurrorderno`,`stkcode`),
  KEY `orderno` (`recurrorderno`),
  KEY `stkcode` (`stkcode`),
  CONSTRAINT `recurrsalesorderdetails_ibfk_1` FOREIGN KEY (`recurrorderno`) REFERENCES `recurringsalesorders` (`recurrorderno`),
  CONSTRAINT `recurrsalesorderdetails_ibfk_2` FOREIGN KEY (`stkcode`) REFERENCES `stockmaster` (`stockid`)
) TYPE=InnoDB;

--
-- Table structure for table `reportcolumns`
--

CREATE TABLE `reportcolumns` (
  `reportid` smallint(6) NOT NULL default '0',
  `colno` smallint(6) NOT NULL default '0',
  `heading1` varchar(15) NOT NULL default '',
  `heading2` varchar(15) default NULL,
  `calculation` tinyint(1) NOT NULL default '0',
  `periodfrom` smallint(6) default NULL,
  `periodto` smallint(6) default NULL,
  `datatype` varchar(15) default NULL,
  `colnumerator` tinyint(4) default NULL,
  `coldenominator` tinyint(4) default NULL,
  `calcoperator` char(1) default NULL,
  `budgetoractual` tinyint(1) NOT NULL default '0',
  `valformat` char(1) NOT NULL default 'N',
  `constant` double NOT NULL default '0',
  PRIMARY KEY  (`reportid`,`colno`),
  CONSTRAINT `reportcolumns_ibfk_1` FOREIGN KEY (`reportid`) REFERENCES `reportheaders` (`ReportID`)
) TYPE=InnoDB;

--
-- Table structure for table `reportfields`
--

CREATE TABLE `reportfields` (
  `id` int(8) NOT NULL auto_increment,
  `reportid` int(5) NOT NULL default '0',
  `entrytype` varchar(15) NOT NULL default '',
  `seqnum` int(3) NOT NULL default '0',
  `fieldname` varchar(35) NOT NULL default '',
  `displaydesc` varchar(25) NOT NULL default '',
  `visible` enum('1','0') NOT NULL default '1',
  `columnbreak` enum('1','0') NOT NULL default '1',
  `params` text,
  PRIMARY KEY  (`id`),
  KEY `reportid` (`reportid`)
) TYPE=MyISAM;

--
-- Table structure for table `reportheaders`
--

CREATE TABLE `reportheaders` (
  `reportid` smallint(6) NOT NULL auto_increment,
  `reportheading` varchar(80) NOT NULL default '',
  `groupbydata1` varchar(15) NOT NULL default '',
  `newpageafter1` tinyint(1) NOT NULL default '0',
  `lower1` varchar(10) NOT NULL default '',
  `upper1` varchar(10) NOT NULL default '',
  `groupbydata2` varchar(15) default NULL,
  `newpageafter2` tinyint(1) NOT NULL default '0',
  `lower2` varchar(10) default NULL,
  `upper2` varchar(10) default NULL,
  `groupbydata3` varchar(15) default NULL,
  `newpageafter3` tinyint(1) NOT NULL default '0',
  `lower3` varchar(10) default NULL,
  `upper3` varchar(10) default NULL,
  `groupbydata4` varchar(15) NOT NULL default '',
  `newpageafter4` tinyint(1) NOT NULL default '0',
  `upper4` varchar(10) NOT NULL default '',
  `lower4` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`reportid`),
  KEY `ReportHeading` (`reportheading`)
) TYPE=InnoDB;

--
-- Table structure for table `reportlinks`
--

CREATE TABLE `reportlinks` (
  `table1` varchar(25) NOT NULL default '',
  `table2` varchar(25) NOT NULL default '',
  `equation` varchar(75) NOT NULL default ''
) TYPE=InnoDB;

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(5) NOT NULL auto_increment,
  `reportname` varchar(30) NOT NULL default '',
  `reporttype` char(3) NOT NULL default 'rpt',
  `groupname` varchar(9) NOT NULL default 'misc',
  `defaultreport` enum('1','0') NOT NULL default '0',
  `papersize` varchar(15) NOT NULL default 'A4,210,297',
  `paperorientation` enum('P','L') NOT NULL default 'P',
  `margintop` int(3) NOT NULL default '10',
  `marginbottom` int(3) NOT NULL default '10',
  `marginleft` int(3) NOT NULL default '10',
  `marginright` int(3) NOT NULL default '10',
  `coynamefont` varchar(20) NOT NULL default 'Helvetica',
  `coynamefontsize` int(3) NOT NULL default '12',
  `coynamefontcolor` varchar(11) NOT NULL default '0,0,0',
  `coynamealign` enum('L','C','R') NOT NULL default 'C',
  `coynameshow` enum('1','0') NOT NULL default '1',
  `title1desc` varchar(50) NOT NULL default '%reportname%',
  `title1font` varchar(20) NOT NULL default 'Helvetica',
  `title1fontsize` int(3) NOT NULL default '10',
  `title1fontcolor` varchar(11) NOT NULL default '0,0,0',
  `title1fontalign` enum('L','C','R') NOT NULL default 'C',
  `title1show` enum('1','0') NOT NULL default '1',
  `title2desc` varchar(50) NOT NULL default 'Report Generated %date%',
  `title2font` varchar(20) NOT NULL default 'Helvetica',
  `title2fontsize` int(3) NOT NULL default '10',
  `title2fontcolor` varchar(11) NOT NULL default '0,0,0',
  `title2fontalign` enum('L','C','R') NOT NULL default 'C',
  `title2show` enum('1','0') NOT NULL default '1',
  `filterfont` varchar(10) NOT NULL default 'Helvetica',
  `filterfontsize` int(3) NOT NULL default '8',
  `filterfontcolor` varchar(11) NOT NULL default '0,0,0',
  `filterfontalign` enum('L','C','R') NOT NULL default 'L',
  `datafont` varchar(10) NOT NULL default 'Helvetica',
  `datafontsize` int(3) NOT NULL default '10',
  `datafontcolor` varchar(10) NOT NULL default 'black',
  `datafontalign` enum('L','C','R') NOT NULL default 'L',
  `totalsfont` varchar(10) NOT NULL default 'Helvetica',
  `totalsfontsize` int(3) NOT NULL default '10',
  `totalsfontcolor` varchar(11) NOT NULL default '0,0,0',
  `totalsfontalign` enum('L','C','R') NOT NULL default 'L',
  `col1width` int(3) NOT NULL default '25',
  `col2width` int(3) NOT NULL default '25',
  `col3width` int(3) NOT NULL default '25',
  `col4width` int(3) NOT NULL default '25',
  `col5width` int(3) NOT NULL default '25',
  `col6width` int(3) NOT NULL default '25',
  `col7width` int(3) NOT NULL default '25',
  `col8width` int(3) NOT NULL default '25',
  `table1` varchar(25) NOT NULL default '',
  `table2` varchar(25) default NULL,
  `table2criteria` varchar(75) default NULL,
  `table3` varchar(25) default NULL,
  `table3criteria` varchar(75) default NULL,
  `table4` varchar(25) default NULL,
  `table4criteria` varchar(75) default NULL,
  `table5` varchar(25) default NULL,
  `table5criteria` varchar(75) default NULL,
  `table6` varchar(25) default NULL,
  `table6criteria` varchar(75) default NULL,
  PRIMARY KEY  (`id`),
  KEY `name` (`reportname`,`groupname`)
) TYPE=MyISAM;

--
-- Table structure for table `salesanalysis`
--

CREATE TABLE `salesanalysis` (
  `typeabbrev` char(2) NOT NULL default '',
  `periodno` smallint(6) NOT NULL default '0',
  `amt` double NOT NULL default '0',
  `cost` double NOT NULL default '0',
  `cust` varchar(10) NOT NULL default '',
  `custbranch` varchar(10) NOT NULL default '',
  `qty` double NOT NULL default '0',
  `disc` double NOT NULL default '0',
  `stockid` varchar(20) NOT NULL default '',
  `area` char(2) NOT NULL default '',
  `budgetoractual` tinyint(1) NOT NULL default '0',
  `salesperson` char(3) NOT NULL default '',
  `stkcategory` varchar(6) NOT NULL default '',
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`),
  KEY `CustBranch` (`custbranch`),
  KEY `Cust` (`cust`),
  KEY `PeriodNo` (`periodno`),
  KEY `StkCategory` (`stkcategory`),
  KEY `StockID` (`stockid`),
  KEY `TypeAbbrev` (`typeabbrev`),
  KEY `Area` (`area`),
  KEY `BudgetOrActual` (`budgetoractual`),
  KEY `Salesperson` (`salesperson`),
  CONSTRAINT `salesanalysis_ibfk_1` FOREIGN KEY (`periodno`) REFERENCES `periods` (`periodno`)
) TYPE=InnoDB;

--
-- Table structure for table `salescat`
--

CREATE TABLE `salescat` (
  `salescatid` tinyint(4) NOT NULL auto_increment,
  `parentcatid` tinyint(4) default NULL,
  `salescatname` varchar(30) default NULL,
  PRIMARY KEY  (`salescatid`)
) TYPE=InnoDB;

--
-- Table structure for table `salescatprod`
--

CREATE TABLE `salescatprod` (
  `salescatid` tinyint(4) NOT NULL default '0',
  `stockid` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`salescatid`,`stockid`),
  KEY `salescatid` (`salescatid`),
  KEY `stockid` (`stockid`),
  CONSTRAINT `salescatprod_ibfk_1` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`stockid`),
  CONSTRAINT `salescatprod_ibfk_2` FOREIGN KEY (`salescatid`) REFERENCES `salescat` (`salescatid`)
) TYPE=InnoDB;

--
-- Table structure for table `salesglpostings`
--

CREATE TABLE `salesglpostings` (
  `id` int(11) NOT NULL auto_increment,
  `area` char(2) NOT NULL default '',
  `stkcat` varchar(6) NOT NULL default '',
  `discountglcode` int(11) NOT NULL default '0',
  `salesglcode` int(11) NOT NULL default '0',
  `salestype` char(2) NOT NULL default 'AN',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `Area_StkCat` (`area`,`stkcat`,`salestype`),
  KEY `Area` (`area`),
  KEY `StkCat` (`stkcat`),
  KEY `SalesType` (`salestype`)
) TYPE=InnoDB;

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman` (
  `salesmancode` char(3) NOT NULL default '',
  `salesmanname` char(30) NOT NULL default '',
  `smantel` char(20) NOT NULL default '',
  `smanfax` char(20) NOT NULL default '',
  `commissionrate1` double NOT NULL default '0',
  `breakpoint` decimal(10,0) NOT NULL default '0',
  `commissionrate2` double NOT NULL default '0',
  PRIMARY KEY  (`salesmancode`)
) TYPE=InnoDB;

--
-- Table structure for table `salesorderdetails`
--

CREATE TABLE `salesorderdetails` (
  `orderlineno` int(11) NOT NULL default '0',
  `orderno` int(11) NOT NULL default '0',
  `stkcode` varchar(20) NOT NULL default '',
  `qtyinvoiced` double NOT NULL default '0',
  `unitprice` double NOT NULL default '0',
  `quantity` double NOT NULL default '0',
  `estimate` tinyint(4) NOT NULL default '0',
  `discountpercent` double NOT NULL default '0',
  `actualdispatchdate` datetime NOT NULL default '0000-00-00 00:00:00',
  `completed` tinyint(1) NOT NULL default '0',
  `narrative` text NOT NULL,
  PRIMARY KEY  (`orderlineno`,`orderno`),
  KEY `OrderNo` (`orderno`),
  KEY `StkCode` (`stkcode`),
  KEY `Completed` (`completed`),
  CONSTRAINT `salesorderdetails_ibfk_1` FOREIGN KEY (`orderno`) REFERENCES `salesorders` (`OrderNo`),
  CONSTRAINT `salesorderdetails_ibfk_2` FOREIGN KEY (`stkcode`) REFERENCES `stockmaster` (`StockID`)
) TYPE=InnoDB;

--
-- Table structure for table `salesorders`
--

CREATE TABLE `salesorders` (
  `orderno` int(11) NOT NULL auto_increment,
  `debtorno` varchar(10) NOT NULL default '',
  `branchcode` varchar(10) NOT NULL default '',
  `customerref` varchar(50) NOT NULL default '',
  `buyername` varchar(50) default NULL,
  `comments` longblob,
  `orddate` date NOT NULL default '0000-00-00',
  `ordertype` char(2) NOT NULL default '',
  `shipvia` int(11) NOT NULL default '0',
  `deladd1` varchar(40) NOT NULL default '',
  `deladd2` varchar(40) NOT NULL default '',
  `deladd3` varchar(40) NOT NULL default '',
  `deladd4` varchar(40) default NULL,
  `deladd5` varchar(20) NOT NULL default '',
  `deladd6` varchar(15) NOT NULL default '',
  `contactphone` varchar(25) default NULL,
  `contactemail` varchar(25) default NULL,
  `deliverto` varchar(40) NOT NULL default '',
  `deliverblind` tinyint(1) default '1',
  `freightcost` double NOT NULL default '0',
  `fromstkloc` varchar(5) NOT NULL default '',
  `deliverydate` date NOT NULL default '0000-00-00',
  `printedpackingslip` tinyint(4) NOT NULL default '0',
  `datepackingslipprinted` date NOT NULL default '0000-00-00',
  `quotation` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`orderno`),
  KEY `DebtorNo` (`debtorno`),
  KEY `OrdDate` (`orddate`),
  KEY `OrderType` (`ordertype`),
  KEY `LocationIndex` (`fromstkloc`),
  KEY `BranchCode` (`branchcode`,`debtorno`),
  KEY `ShipVia` (`shipvia`),
  KEY `quotation` (`quotation`),
  CONSTRAINT `salesorders_ibfk_1` FOREIGN KEY (`branchcode`, `debtorno`) REFERENCES `custbranch` (`branchcode`, `debtorno`),
  CONSTRAINT `salesorders_ibfk_2` FOREIGN KEY (`shipvia`) REFERENCES `shippers` (`Shipper_ID`),
  CONSTRAINT `salesorders_ibfk_3` FOREIGN KEY (`fromstkloc`) REFERENCES `locations` (`loccode`)
) TYPE=InnoDB;

--
-- Table structure for table `salestypes`
--

CREATE TABLE `salestypes` (
  `typeabbrev` char(2) NOT NULL default '',
  `sales_type` char(20) NOT NULL default '',
  PRIMARY KEY  (`typeabbrev`),
  KEY `Sales_Type` (`sales_type`)
) TYPE=InnoDB;

--
-- Table structure for table `scripts`
--

CREATE TABLE `scripts` (
  `pageid` smallint(4) NOT NULL auto_increment,
  `filename` varchar(50) NOT NULL default '',
  `pagedescription` text NOT NULL,
  PRIMARY KEY  (`pageid`),
  KEY `FileName` (`filename`)
) TYPE=InnoDB COMMENT='Index of all scripts';

--
-- Table structure for table `securitygroups`
--

CREATE TABLE `securitygroups` (
  `secroleid` int(11) NOT NULL default '0',
  `tokenid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`secroleid`,`tokenid`),
  KEY `secroleid` (`secroleid`),
  KEY `tokenid` (`tokenid`),
  CONSTRAINT `securitygroups_secroleid_fk` FOREIGN KEY (`secroleid`) REFERENCES `securityroles` (`secroleid`),
  CONSTRAINT `securitygroups_tokenid_fk` FOREIGN KEY (`tokenid`) REFERENCES `securitytokens` (`tokenid`)
) TYPE=InnoDB;

--
-- Table structure for table `securityroles`
--

CREATE TABLE `securityroles` (
  `secroleid` int(11) NOT NULL auto_increment,
  `secrolename` text NOT NULL,
  PRIMARY KEY  (`secroleid`)
) TYPE=InnoDB;

--
-- Table structure for table `securitytokens`
--

CREATE TABLE `securitytokens` (
  `tokenid` int(11) NOT NULL default '0',
  `tokenname` text NOT NULL,
  PRIMARY KEY  (`tokenid`)
) TYPE=InnoDB;

--
-- Table structure for table `shipmentcharges`
--

CREATE TABLE `shipmentcharges` (
  `shiptchgid` int(11) NOT NULL auto_increment,
  `shiptref` int(11) NOT NULL default '0',
  `transtype` smallint(6) NOT NULL default '0',
  `transno` int(11) NOT NULL default '0',
  `stockid` varchar(20) NOT NULL default '',
  `value` double NOT NULL default '0',
  PRIMARY KEY  (`shiptchgid`),
  KEY `TransType` (`transtype`,`transno`),
  KEY `ShiptRef` (`shiptref`),
  KEY `StockID` (`stockid`),
  KEY `TransType_2` (`transtype`),
  CONSTRAINT `shipmentcharges_ibfk_1` FOREIGN KEY (`shiptref`) REFERENCES `shipments` (`ShiptRef`),
  CONSTRAINT `shipmentcharges_ibfk_2` FOREIGN KEY (`transtype`) REFERENCES `systypes` (`TypeID`)
) TYPE=InnoDB;

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `shiptref` int(11) NOT NULL default '0',
  `voyageref` varchar(20) NOT NULL default '0',
  `vessel` varchar(50) NOT NULL default '',
  `eta` datetime NOT NULL default '0000-00-00 00:00:00',
  `accumvalue` double NOT NULL default '0',
  `supplierid` varchar(10) NOT NULL default '',
  `closed` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`shiptref`),
  KEY `ETA` (`eta`),
  KEY `SupplierID` (`supplierid`),
  KEY `ShipperRef` (`voyageref`),
  KEY `Vessel` (`vessel`),
  CONSTRAINT `shipments_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `suppliers` (`SupplierID`)
) TYPE=InnoDB;

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `shipper_id` int(11) NOT NULL auto_increment,
  `shippername` char(40) NOT NULL default '',
  `mincharge` double NOT NULL default '0',
  PRIMARY KEY  (`shipper_id`)
) TYPE=InnoDB;

--
-- Table structure for table `stockcategory`
--

CREATE TABLE `stockcategory` (
  `categoryid` char(6) NOT NULL default '',
  `categorydescription` char(20) NOT NULL default '',
  `stocktype` char(1) NOT NULL default 'F',
  `stockact` int(11) NOT NULL default '0',
  `adjglact` int(11) NOT NULL default '0',
  `purchpricevaract` int(11) NOT NULL default '80000',
  `materialuseagevarac` int(11) NOT NULL default '80000',
  `wipact` int(11) NOT NULL default '0',
  PRIMARY KEY  (`categoryid`),
  KEY `CategoryDescription` (`categorydescription`),
  KEY `StockType` (`stocktype`)
) TYPE=InnoDB;

--
-- Table structure for table `stockcheckfreeze`
--

CREATE TABLE `stockcheckfreeze` (
  `stockid` varchar(20) NOT NULL default '',
  `loccode` varchar(5) NOT NULL default '',
  `qoh` double NOT NULL default '0',
  PRIMARY KEY  (`stockid`),
  KEY `LocCode` (`loccode`),
  CONSTRAINT `stockcheckfreeze_ibfk_1` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`StockID`),
  CONSTRAINT `stockcheckfreeze_ibfk_2` FOREIGN KEY (`loccode`) REFERENCES `locations` (`loccode`)
) TYPE=InnoDB;

--
-- Table structure for table `stockcounts`
--

CREATE TABLE `stockcounts` (
  `id` int(11) NOT NULL auto_increment,
  `stockid` varchar(20) NOT NULL default '',
  `loccode` varchar(5) NOT NULL default '',
  `qtycounted` double NOT NULL default '0',
  `reference` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `StockID` (`stockid`),
  KEY `LocCode` (`loccode`),
  CONSTRAINT `stockcounts_ibfk_1` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`StockID`),
  CONSTRAINT `stockcounts_ibfk_2` FOREIGN KEY (`loccode`) REFERENCES `locations` (`loccode`)
) TYPE=InnoDB;

--
-- Table structure for table `stockmaster`
--

CREATE TABLE `stockmaster` (
  `stockid` varchar(20) NOT NULL default '',
  `categoryid` varchar(6) NOT NULL default '',
  `description` varchar(50) NOT NULL default '',
  `longdescription` text NOT NULL,
  `units` varchar(20) NOT NULL default 'each',
  `mbflag` char(1) NOT NULL default 'B',
  `lastcurcostdate` date NOT NULL default '1800-01-01',
  `actualcost` decimal(20,4) NOT NULL default '0.0000',
  `lastcost` decimal(20,4) NOT NULL default '0.0000',
  `materialcost` decimal(20,4) NOT NULL default '0.0000',
  `labourcost` decimal(20,4) NOT NULL default '0.0000',
  `overheadcost` decimal(20,4) NOT NULL default '0.0000',
  `lowestlevel` smallint(6) NOT NULL default '0',
  `discontinued` tinyint(4) NOT NULL default '0',
  `controlled` tinyint(4) NOT NULL default '0',
  `eoq` double NOT NULL default '0',
  `volume` decimal(20,4) NOT NULL default '0.0000',
  `kgs` decimal(20,4) NOT NULL default '0.0000',
  `barcode` varchar(50) NOT NULL default '',
  `discountcategory` char(2) NOT NULL default '',
  `taxcatid` tinyint(4) NOT NULL default '1',
  `serialised` tinyint(4) NOT NULL default '0',
  `decimalplaces` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`stockid`),
  KEY `CategoryID` (`categoryid`),
  KEY `Description` (`description`),
  KEY `LastCurCostDate` (`lastcurcostdate`),
  KEY `MBflag` (`mbflag`),
  KEY `StockID` (`stockid`,`categoryid`),
  KEY `Controlled` (`controlled`),
  KEY `DiscountCategory` (`discountcategory`),
  KEY `taxcatid` (`taxcatid`),
  CONSTRAINT `stockmaster_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `stockcategory` (`categoryid`),
  CONSTRAINT `stockmaster_ibfk_2` FOREIGN KEY (`taxcatid`) REFERENCES `taxcategories` (`taxcatid`)
) TYPE=InnoDB;

--
-- Table structure for table `stockmoves`
--

CREATE TABLE `stockmoves` (
  `stkmoveno` int(11) NOT NULL auto_increment,
  `stockid` varchar(20) NOT NULL default '',
  `type` smallint(6) NOT NULL default '0',
  `transno` int(11) NOT NULL default '0',
  `loccode` varchar(5) NOT NULL default '',
  `trandate` date NOT NULL default '0000-00-00',
  `debtorno` varchar(10) NOT NULL default '',
  `branchcode` varchar(10) NOT NULL default '',
  `price` decimal(20,4) NOT NULL default '0.0000',
  `prd` smallint(6) NOT NULL default '0',
  `reference` varchar(40) NOT NULL default '',
  `qty` double NOT NULL default '1',
  `discountpercent` double NOT NULL default '0',
  `standardcost` double NOT NULL default '0',
  `show_on_inv_crds` tinyint(4) NOT NULL default '1',
  `newqoh` double NOT NULL default '0',
  `hidemovt` tinyint(4) NOT NULL default '0',
  `narrative` text NOT NULL,
  PRIMARY KEY  (`stkmoveno`),
  KEY `DebtorNo` (`debtorno`),
  KEY `LocCode` (`loccode`),
  KEY `Prd` (`prd`),
  KEY `StockID` (`stockid`,`loccode`),
  KEY `StockID_2` (`stockid`),
  KEY `TranDate` (`trandate`),
  KEY `TransNo` (`transno`),
  KEY `Type` (`type`),
  KEY `Show_On_Inv_Crds` (`show_on_inv_crds`),
  KEY `Hide` (`hidemovt`),
  CONSTRAINT `stockmoves_ibfk_1` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`stockid`),
  CONSTRAINT `stockmoves_ibfk_2` FOREIGN KEY (`type`) REFERENCES `systypes` (`TypeID`),
  CONSTRAINT `stockmoves_ibfk_3` FOREIGN KEY (`loccode`) REFERENCES `locations` (`loccode`),
  CONSTRAINT `stockmoves_ibfk_4` FOREIGN KEY (`prd`) REFERENCES `periods` (`periodno`)
) TYPE=InnoDB;

--
-- Table structure for table `stockmovestaxes`
--

CREATE TABLE `stockmovestaxes` (
  `stkmoveno` int(11) NOT NULL default '0',
  `taxauthid` tinyint(4) NOT NULL default '0',
  `taxrate` double NOT NULL default '0',
  `taxontax` tinyint(4) NOT NULL default '0',
  `taxcalculationorder` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`stkmoveno`,`taxauthid`),
  KEY `taxauthid` (`taxauthid`),
  KEY `calculationorder` (`taxcalculationorder`),
  CONSTRAINT `stockmovestaxes_ibfk_1` FOREIGN KEY (`taxauthid`) REFERENCES `taxauthorities` (`taxid`)
) TYPE=InnoDB;

--
-- Table structure for table `stockserialitems`
--

CREATE TABLE `stockserialitems` (
  `stockid` varchar(20) NOT NULL default '',
  `loccode` varchar(5) NOT NULL default '',
  `serialno` varchar(30) NOT NULL default '',
  `quantity` double NOT NULL default '0',
  PRIMARY KEY  (`stockid`,`serialno`,`loccode`),
  KEY `StockID` (`stockid`),
  KEY `LocCode` (`loccode`),
  CONSTRAINT `stockserialitems_ibfk_1` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`stockid`),
  CONSTRAINT `stockserialitems_ibfk_2` FOREIGN KEY (`loccode`) REFERENCES `locations` (`loccode`)
) TYPE=InnoDB;

--
-- Table structure for table `stockserialmoves`
--

CREATE TABLE `stockserialmoves` (
  `stkitmmoveno` int(11) NOT NULL auto_increment,
  `stockmoveno` int(11) NOT NULL default '0',
  `stockid` varchar(20) NOT NULL default '',
  `serialno` varchar(30) NOT NULL default '',
  `moveqty` double NOT NULL default '0',
  PRIMARY KEY  (`stkitmmoveno`),
  KEY `StockMoveNo` (`stockmoveno`),
  KEY `StockID_SN` (`stockid`,`serialno`),
  CONSTRAINT `stockserialmoves_ibfk_1` FOREIGN KEY (`stockmoveno`) REFERENCES `stockmoves` (`stkmoveno`),
  CONSTRAINT `stockserialmoves_ibfk_2` FOREIGN KEY (`stockid`, `serialno`) REFERENCES `stockserialitems` (`stockid`, `serialno`)
) TYPE=InnoDB;

--
-- Table structure for table `suppallocs`
--

CREATE TABLE `suppallocs` (
  `id` int(11) NOT NULL auto_increment,
  `amt` double NOT NULL default '0',
  `datealloc` date NOT NULL default '0000-00-00',
  `transid_allocfrom` int(11) NOT NULL default '0',
  `transid_allocto` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `TransID_AllocFrom` (`transid_allocfrom`),
  KEY `TransID_AllocTo` (`transid_allocto`),
  KEY `DateAlloc` (`datealloc`),
  CONSTRAINT `suppallocs_ibfk_1` FOREIGN KEY (`transid_allocfrom`) REFERENCES `supptrans` (`ID`),
  CONSTRAINT `suppallocs_ibfk_2` FOREIGN KEY (`transid_allocto`) REFERENCES `supptrans` (`ID`)
) TYPE=InnoDB;

--
-- Table structure for table `suppliercontacts`
--

CREATE TABLE `suppliercontacts` (
  `supplierid` varchar(10) NOT NULL default '',
  `contact` varchar(30) NOT NULL default '',
  `position` varchar(30) NOT NULL default '',
  `tel` varchar(30) NOT NULL default '',
  `fax` varchar(30) NOT NULL default '',
  `mobile` varchar(30) NOT NULL default '',
  `email` varchar(55) NOT NULL default '',
  `ordercontact` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`supplierid`,`contact`),
  KEY `Contact` (`contact`),
  KEY `SupplierID` (`supplierid`),
  CONSTRAINT `suppliercontacts_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `suppliers` (`SupplierID`)
) TYPE=InnoDB;

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierid` varchar(10) NOT NULL default '',
  `suppname` varchar(40) NOT NULL default '',
  `address1` varchar(40) NOT NULL default '',
  `address2` varchar(40) NOT NULL default '',
  `address3` varchar(40) NOT NULL default '',
  `address4` varchar(50) NOT NULL default '',
  `address5` varchar(20) NOT NULL default '',
  `address6` varchar(15) NOT NULL default '',
  `currcode` char(3) NOT NULL default '',
  `suppliersince` date NOT NULL default '0000-00-00',
  `paymentterms` char(2) NOT NULL default '',
  `lastpaid` double NOT NULL default '0',
  `lastpaiddate` datetime default NULL,
  `bankact` varchar(30) NOT NULL default '',
  `bankref` varchar(12) NOT NULL default '',
  `bankpartics` varchar(12) NOT NULL default '',
  `remittance` tinyint(4) NOT NULL default '1',
  `taxgroupid` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`supplierid`),
  KEY `CurrCode` (`currcode`),
  KEY `PaymentTerms` (`paymentterms`),
  KEY `SupplierID` (`supplierid`),
  KEY `SuppName` (`suppname`),
  KEY `taxgroupid` (`taxgroupid`),
  CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`currcode`) REFERENCES `currencies` (`currabrev`),
  CONSTRAINT `suppliers_ibfk_2` FOREIGN KEY (`paymentterms`) REFERENCES `paymentterms` (`termsindicator`),
  CONSTRAINT `suppliers_ibfk_3` FOREIGN KEY (`taxgroupid`) REFERENCES `taxgroups` (`taxgroupid`)
) TYPE=InnoDB;

--
-- Table structure for table `supptrans`
--

CREATE TABLE `supptrans` (
  `transno` int(11) NOT NULL default '0',
  `type` smallint(6) NOT NULL default '0',
  `supplierno` varchar(10) NOT NULL default '',
  `suppreference` varchar(20) NOT NULL default '',
  `trandate` date NOT NULL default '0000-00-00',
  `duedate` date NOT NULL default '0000-00-00',
  `settled` tinyint(4) NOT NULL default '0',
  `rate` double NOT NULL default '1',
  `ovamount` double NOT NULL default '0',
  `ovgst` double NOT NULL default '0',
  `diffonexch` double NOT NULL default '0',
  `alloc` double NOT NULL default '0',
  `transtext` longblob,
  `hold` tinyint(4) NOT NULL default '0',
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `TypeTransNo` (`transno`,`type`),
  KEY `DueDate` (`duedate`),
  KEY `Hold` (`hold`),
  KEY `SupplierNo` (`supplierno`),
  KEY `Settled` (`settled`),
  KEY `SupplierNo_2` (`supplierno`,`suppreference`),
  KEY `SuppReference` (`suppreference`),
  KEY `TranDate` (`trandate`),
  KEY `TransNo` (`transno`),
  KEY `Type` (`type`),
  CONSTRAINT `supptrans_ibfk_1` FOREIGN KEY (`type`) REFERENCES `systypes` (`TypeID`),
  CONSTRAINT `supptrans_ibfk_2` FOREIGN KEY (`supplierno`) REFERENCES `suppliers` (`supplierid`)
) TYPE=InnoDB;

--
-- Table structure for table `supptranstaxes`
--

CREATE TABLE `supptranstaxes` (
  `supptransid` int(11) NOT NULL default '0',
  `taxauthid` tinyint(4) NOT NULL default '0',
  `taxamount` double NOT NULL default '0',
  PRIMARY KEY  (`supptransid`,`taxauthid`),
  KEY `taxauthid` (`taxauthid`),
  CONSTRAINT `supptranstaxes_ibfk_1` FOREIGN KEY (`taxauthid`) REFERENCES `taxauthorities` (`taxid`),
  CONSTRAINT `supptranstaxes_ibfk_2` FOREIGN KEY (`supptransid`) REFERENCES `supptrans` (`id`)
) TYPE=InnoDB;

--
-- Table structure for table `systypes`
--

CREATE TABLE `systypes` (
  `typeid` smallint(6) NOT NULL default '0',
  `typename` char(50) NOT NULL default '',
  `typeno` int(11) NOT NULL default '1',
  PRIMARY KEY  (`typeid`),
  KEY `TypeNo` (`typeno`)
) TYPE=InnoDB;

--
-- Table structure for table `taxauthorities`
--

CREATE TABLE `taxauthorities` (
  `taxid` tinyint(4) NOT NULL auto_increment,
  `description` varchar(20) NOT NULL default '',
  `taxglcode` int(11) NOT NULL default '0',
  `purchtaxglaccount` int(11) NOT NULL default '0',
  `bank` varchar(50) NOT NULL default '',
  `bankacctype` varchar(20) NOT NULL default '',
  `bankacc` varchar(50) NOT NULL default '',
  `bankswift` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`taxid`),
  KEY `TaxGLCode` (`taxglcode`),
  KEY `PurchTaxGLAccount` (`purchtaxglaccount`),
  CONSTRAINT `taxauthorities_ibfk_1` FOREIGN KEY (`taxglcode`) REFERENCES `chartmaster` (`accountcode`),
  CONSTRAINT `taxauthorities_ibfk_2` FOREIGN KEY (`purchtaxglaccount`) REFERENCES `chartmaster` (`accountcode`)
) TYPE=InnoDB;

--
-- Table structure for table `taxauthrates`
--

CREATE TABLE `taxauthrates` (
  `taxauthority` tinyint(4) NOT NULL default '1',
  `dispatchtaxprovince` tinyint(4) NOT NULL default '1',
  `taxcatid` tinyint(4) NOT NULL default '0',
  `taxrate` double NOT NULL default '0',
  PRIMARY KEY  (`taxauthority`,`dispatchtaxprovince`,`taxcatid`),
  KEY `TaxAuthority` (`taxauthority`),
  KEY `dispatchtaxprovince` (`dispatchtaxprovince`),
  KEY `taxcatid` (`taxcatid`),
  CONSTRAINT `taxauthrates_ibfk_1` FOREIGN KEY (`taxauthority`) REFERENCES `taxauthorities` (`taxid`),
  CONSTRAINT `taxauthrates_ibfk_2` FOREIGN KEY (`taxcatid`) REFERENCES `taxcategories` (`taxcatid`),
  CONSTRAINT `taxauthrates_ibfk_3` FOREIGN KEY (`dispatchtaxprovince`) REFERENCES `taxprovinces` (`taxprovinceid`)
) TYPE=InnoDB;

--
-- Table structure for table `taxcategories`
--

CREATE TABLE `taxcategories` (
  `taxcatid` tinyint(4) NOT NULL auto_increment,
  `taxcatname` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`taxcatid`)
) TYPE=InnoDB;

--
-- Table structure for table `taxgroups`
--

CREATE TABLE `taxgroups` (
  `taxgroupid` tinyint(4) NOT NULL auto_increment,
  `taxgroupdescription` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`taxgroupid`)
) TYPE=InnoDB;

--
-- Table structure for table `taxgrouptaxes`
--

CREATE TABLE `taxgrouptaxes` (
  `taxgroupid` tinyint(4) NOT NULL default '0',
  `taxauthid` tinyint(4) NOT NULL default '0',
  `calculationorder` tinyint(4) NOT NULL default '0',
  `taxontax` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`taxgroupid`,`taxauthid`),
  KEY `taxgroupid` (`taxgroupid`),
  KEY `taxauthid` (`taxauthid`),
  CONSTRAINT `taxgrouptaxes_ibfk_1` FOREIGN KEY (`taxgroupid`) REFERENCES `taxgroups` (`taxgroupid`),
  CONSTRAINT `taxgrouptaxes_ibfk_2` FOREIGN KEY (`taxauthid`) REFERENCES `taxauthorities` (`taxid`)
) TYPE=InnoDB;

--
-- Table structure for table `taxprovinces`
--

CREATE TABLE `taxprovinces` (
  `taxprovinceid` tinyint(4) NOT NULL auto_increment,
  `taxprovincename` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`taxprovinceid`)
) TYPE=InnoDB;

--
-- Table structure for table `unitsofmeasure`
--

CREATE TABLE `unitsofmeasure` (
  `unitid` tinyint(4) NOT NULL auto_increment,
  `unitname` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`unitid`)
) TYPE=InnoDB;

--
-- Table structure for table `workcentres`
--

CREATE TABLE `workcentres` (
  `code` char(5) NOT NULL default '',
  `location` char(5) NOT NULL default '',
  `description` char(20) NOT NULL default '',
  `capacity` double NOT NULL default '1',
  `overheadperhour` decimal(10,0) NOT NULL default '0',
  `overheadrecoveryact` int(11) NOT NULL default '0',
  `setuphrs` decimal(10,0) NOT NULL default '0',
  PRIMARY KEY  (`code`),
  KEY `Description` (`description`),
  KEY `Location` (`location`),
  CONSTRAINT `workcentres_ibfk_1` FOREIGN KEY (`location`) REFERENCES `locations` (`loccode`)
) TYPE=InnoDB;

--
-- Table structure for table `worksorders`
--

CREATE TABLE `worksorders` (
  `woref` char(20) NOT NULL default '',
  `loccode` char(5) NOT NULL default '',
  `unitsreqd` smallint(6) NOT NULL default '1',
  `unitsrecd` double NOT NULL default '0',
  `stockid` char(20) NOT NULL default '',
  `stdcost` decimal(20,4) NOT NULL default '0.0000',
  `requiredby` date NOT NULL default '0000-00-00',
  `releaseddate` date NOT NULL default '1800-01-01',
  `accumvalueissued` decimal(20,4) NOT NULL default '0.0000',
  `accumvaluetrfd` decimal(20,4) NOT NULL default '0.0000',
  `closed` tinyint(4) NOT NULL default '0',
  `released` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`woref`),
  KEY `StockID` (`stockid`),
  KEY `LocCode` (`loccode`),
  KEY `ReleasedDate` (`releaseddate`),
  KEY `RequiredBy` (`requiredby`),
  KEY `WORef` (`woref`,`loccode`),
  CONSTRAINT `worksorders_ibfk_1` FOREIGN KEY (`loccode`) REFERENCES `locations` (`loccode`),
  CONSTRAINT `worksorders_ibfk_2` FOREIGN KEY (`stockid`) REFERENCES `stockmaster` (`stockid`)
) TYPE=InnoDB;

--
-- Table structure for table `www_users`
--

CREATE TABLE `www_users` (
  `userid` varchar(20) NOT NULL default '',
  `password` text NOT NULL,
  `realname` varchar(35) NOT NULL default '',
  `customerid` varchar(10) NOT NULL default '',
  `phone` varchar(30) NOT NULL default '',
  `email` varchar(55) default NULL,
  `defaultlocation` varchar(5) NOT NULL default '',
  `fullaccess` int(11) NOT NULL default '1',
  `lastvisitdate` datetime default NULL,
  `branchcode` varchar(10) NOT NULL default '',
  `pagesize` varchar(20) NOT NULL default 'A4',
  `modulesallowed` varchar(20) NOT NULL default '',
  `blocked` tinyint(4) NOT NULL default '0',
  `displayrecordsmax` int(11) NOT NULL default '0',
  `theme` varchar(30) NOT NULL default 'fresh',
  `language` varchar(11) NOT NULL default 'en_GB',
  PRIMARY KEY  (`userid`),
  KEY `CustomerID` (`customerid`),
  KEY `DefaultLocation` (`defaultlocation`),
  CONSTRAINT `www_users_ibfk_1` FOREIGN KEY (`defaultlocation`) REFERENCES `locations` (`loccode`)
) TYPE=InnoDB;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- MySQL dump 10.9
--
-- Host: localhost    Database: weberp
-- ------------------------------------------------------
-- Server version	4.1.11-standard
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO,MYSQL40' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `accountgroups`
--

INSERT INTO `accountgroups` VALUES ('流動資產',1,0,1100);
INSERT INTO `accountgroups` VALUES ('基金及長期投資',1,0,1300);
INSERT INTO `accountgroups` VALUES ('固定資產',1,0,1400);
INSERT INTO `accountgroups` VALUES ('遞耗資產',1,0,1600);
INSERT INTO `accountgroups` VALUES ('無形資產',1,0,1700);
INSERT INTO `accountgroups` VALUES ('其他資產',1,0,1800);
INSERT INTO `accountgroups` VALUES ('流動負債',2,0,2100);
INSERT INTO `accountgroups` VALUES ('長期負債',2,0,2300);
INSERT INTO `accountgroups` VALUES ('其他負債',2,0,2800);
INSERT INTO `accountgroups` VALUES ('資本',3,0,3100);
INSERT INTO `accountgroups` VALUES ('資本公積',3,0,3200);
INSERT INTO `accountgroups` VALUES ('保留盈餘(或累積虧損)',3,0,3300);
INSERT INTO `accountgroups` VALUES ('權益調整',3,0,3400);
INSERT INTO `accountgroups` VALUES ('庫藏股',3,0,3500);
INSERT INTO `accountgroups` VALUES ('少數股權',3,0,3600);
INSERT INTO `accountgroups` VALUES ('銷貨收入',4,1,4100);
INSERT INTO `accountgroups` VALUES ('勞務收入',4,1,4600);
INSERT INTO `accountgroups` VALUES ('業務收入',4,1,4700);
INSERT INTO `accountgroups` VALUES ('其他營業收入',4,1,4800);
INSERT INTO `accountgroups` VALUES ('銷貨成本',5,1,5100);
INSERT INTO `accountgroups` VALUES ('勞務成本',5,1,5600);
INSERT INTO `accountgroups` VALUES ('業務成本',5,1,5700);
INSERT INTO `accountgroups` VALUES ('其他營業成本',5,1,5800);
INSERT INTO `accountgroups` VALUES ('推銷費用',6,1,6100);
INSERT INTO `accountgroups` VALUES ('管理及總務費用',6,1,6200);
INSERT INTO `accountgroups` VALUES ('研究發展費用',6,1,6300);
INSERT INTO `accountgroups` VALUES ('營業外收入',7,1,7100);
INSERT INTO `accountgroups` VALUES ('營業外費用',7,1,7500);
INSERT INTO `accountgroups` VALUES ('所得稅費用(或利益)',8,1,8100);
INSERT INTO `accountgroups` VALUES ('停業部門損益',9,1,9100);
INSERT INTO `accountgroups` VALUES ('非常損益',9,1,9200);
INSERT INTO `accountgroups` VALUES ('會計原則變動累積影響數',9,1,9300);
INSERT INTO `accountgroups` VALUES ('少數股權淨利',9,1,9400);

--
-- Dumping data for table `bankaccounts`
--

INSERT INTO `bankaccounts` VALUES (1131,'支票存款','','');
INSERT INTO `bankaccounts` VALUES (1113,'一般存款','','');

--
-- Dumping data for table `chartmaster`
--

INSERT INTO `chartmaster` VALUES (1111,'庫存現金','流動資產');
INSERT INTO `chartmaster` VALUES (1112,'零用金/週轉金','流動資產');
INSERT INTO `chartmaster` VALUES (1113,'銀行存款','流動資產');
INSERT INTO `chartmaster` VALUES (1116,'在途現金','流動資產');
INSERT INTO `chartmaster` VALUES (1117,'約當現金','流動資產');
INSERT INTO `chartmaster` VALUES (1118,'其他現金及 約當現金','流動資產');
INSERT INTO `chartmaster` VALUES (1121,'短期投資—股票','流動資產');
INSERT INTO `chartmaster` VALUES (1122,'短期投資—短期票券','流動資產');
INSERT INTO `chartmaster` VALUES (1123,'短期投資—政府債券','流動資產');
INSERT INTO `chartmaster` VALUES (1124,'短期投資—受益憑證','流動資產');
INSERT INTO `chartmaster` VALUES (1125,'短期投資—公司債','流動資產');
INSERT INTO `chartmaster` VALUES (1128,'短期投資—其他','流動資產');
INSERT INTO `chartmaster` VALUES (1129,'備抵短期投資跌價損失','流動資產');
INSERT INTO `chartmaster` VALUES (1131,'應收票據','流動資產');
INSERT INTO `chartmaster` VALUES (1132,'應收票據貼現','流動資產');
INSERT INTO `chartmaster` VALUES (1137,'應收票據—關係人','流動資產');
INSERT INTO `chartmaster` VALUES (1138,'其他應收票據','流動資產');
INSERT INTO `chartmaster` VALUES (1139,'備抵呆帳—應收票據','流動資產');
INSERT INTO `chartmaster` VALUES (1141,'應收帳款','流動資產');
INSERT INTO `chartmaster` VALUES (1142,'應收分期帳款','流動資產');
INSERT INTO `chartmaster` VALUES (1147,'應收帳款—關係人','流動資產');
INSERT INTO `chartmaster` VALUES (1149,'備抵呆帳—應收帳款','流動資產');
INSERT INTO `chartmaster` VALUES (1181,'應收出售遠匯款','流動資產');
INSERT INTO `chartmaster` VALUES (1182,'應收遠匯款—外幣','流動資產');
INSERT INTO `chartmaster` VALUES (1183,'買賣遠匯折價','流動資產');
INSERT INTO `chartmaster` VALUES (1184,'應收收益','流動資產');
INSERT INTO `chartmaster` VALUES (1185,'應收退稅款','流動資產');
INSERT INTO `chartmaster` VALUES (1187,'其他應收款—關係人','流動資產');
INSERT INTO `chartmaster` VALUES (1188,'其他應收款—其他','流動資產');
INSERT INTO `chartmaster` VALUES (1189,'備抵呆帳—其他應收款','流動資產');
INSERT INTO `chartmaster` VALUES (1211,'商品存貨','流動資產');
INSERT INTO `chartmaster` VALUES (1212,'寄銷商品','流動資產');
INSERT INTO `chartmaster` VALUES (1213,'在途商品','流動資產');
INSERT INTO `chartmaster` VALUES (1219,'備抵存貨跌價損失','流動資產');
INSERT INTO `chartmaster` VALUES (1221,'製成品','流動資產');
INSERT INTO `chartmaster` VALUES (1222,'寄銷製成品','流動資產');
INSERT INTO `chartmaster` VALUES (1223,'副產品','流動資產');
INSERT INTO `chartmaster` VALUES (1224,'在製品','流動資產');
INSERT INTO `chartmaster` VALUES (1225,'委外加工','流動資產');
INSERT INTO `chartmaster` VALUES (1226,'原料','流動資產');
INSERT INTO `chartmaster` VALUES (1227,'物料','流動資產');
INSERT INTO `chartmaster` VALUES (1228,'在途原物料','流動資產');
INSERT INTO `chartmaster` VALUES (1229,'備抵存貨跌價損失','流動資產');
INSERT INTO `chartmaster` VALUES (1251,'預付薪資','流動資產');
INSERT INTO `chartmaster` VALUES (1252,'預付租金','流動資產');
INSERT INTO `chartmaster` VALUES (1253,'預付保險費','流動資產');
INSERT INTO `chartmaster` VALUES (1254,'用品盤存','流動資產');
INSERT INTO `chartmaster` VALUES (1255,'預付所得稅','流動資產');
INSERT INTO `chartmaster` VALUES (1258,'其他預付費用','流動資產');
INSERT INTO `chartmaster` VALUES (1261,'預付貨款','流動資產');
INSERT INTO `chartmaster` VALUES (1268,'其他預付款項','流動資產');
INSERT INTO `chartmaster` VALUES (1281,'進項稅額','流動資產');
INSERT INTO `chartmaster` VALUES (1282,'留抵稅額','流動資產');
INSERT INTO `chartmaster` VALUES (1283,'暫付款','流動資產');
INSERT INTO `chartmaster` VALUES (1284,'代付款','流動資產');
INSERT INTO `chartmaster` VALUES (1285,'員工借支','流動資產');
INSERT INTO `chartmaster` VALUES (1286,'存出保證金','流動資產');
INSERT INTO `chartmaster` VALUES (1287,'受限制存款','流動資產');
INSERT INTO `chartmaster` VALUES (1291,'遞延所得稅資產','流動資產');
INSERT INTO `chartmaster` VALUES (1292,'遞延兌換損失','流動資產');
INSERT INTO `chartmaster` VALUES (1293,'業主(股東)往來','流動資產');
INSERT INTO `chartmaster` VALUES (1294,'同業往來','流動資產');
INSERT INTO `chartmaster` VALUES (1298,'其他流動資產—其他','流動資產');
INSERT INTO `chartmaster` VALUES (1311,'償債基金','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1312,'改良及擴充基金','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1313,'意外損失準備基金','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1314,'退休基金','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1318,'其他基金','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1321,'長期股權投資','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1322,'長期債券投資','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1323,'長期不動產投資','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1324,'人壽保險現金解約價值','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1328,'其他長期投資','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1329,'備抵長期投資跌價損失','基金及長期投資');
INSERT INTO `chartmaster` VALUES (1411,'土地','固定資產');
INSERT INTO `chartmaster` VALUES (1418,'土地—重估增值','固定資產');
INSERT INTO `chartmaster` VALUES (1421,'土地改良物','固定資產');
INSERT INTO `chartmaster` VALUES (1428,'土地改良物—重估增值','固定資產');
INSERT INTO `chartmaster` VALUES (1429,'累積折舊—土地改良物','固定資產');
INSERT INTO `chartmaster` VALUES (1431,'房屋及建物','固定資產');
INSERT INTO `chartmaster` VALUES (1438,'房屋及建物—重估增值','固定資產');
INSERT INTO `chartmaster` VALUES (1439,'累積折舊—房屋及建物','固定資產');
INSERT INTO `chartmaster` VALUES (1441,'機(器)具','固定資產');
INSERT INTO `chartmaster` VALUES (1448,'機(器)具—重估增值','固定資產');
INSERT INTO `chartmaster` VALUES (1449,'累積折舊—機(器)具','固定資產');
INSERT INTO `chartmaster` VALUES (1511,'租賃資產','固定資產');
INSERT INTO `chartmaster` VALUES (1519,'累積折舊—租賃資產','固定資產');
INSERT INTO `chartmaster` VALUES (1521,'租賃權益改良','固定資產');
INSERT INTO `chartmaster` VALUES (1529,'累積折舊— 租賃權益改良','固定資產');
INSERT INTO `chartmaster` VALUES (1561,'未完工程','固定資產');
INSERT INTO `chartmaster` VALUES (1562,'預付購置設備款','固定資產');
INSERT INTO `chartmaster` VALUES (1581,'雜項固定資產','固定資產');
INSERT INTO `chartmaster` VALUES (1588,'雜項固定資產—重估增值','固定資產');
INSERT INTO `chartmaster` VALUES (1589,'累積折舊— 雜項固定資產','固定資產');
INSERT INTO `chartmaster` VALUES (1611,'天然資源','遞耗資產');
INSERT INTO `chartmaster` VALUES (1618,'天然資源—重估增值','遞耗資產');
INSERT INTO `chartmaster` VALUES (1619,'累積折耗—天然資源','遞耗資產');
INSERT INTO `chartmaster` VALUES (1711,'商標權','無形資產');
INSERT INTO `chartmaster` VALUES (1721,'專利權','無形資產');
INSERT INTO `chartmaster` VALUES (1731,'特許權','無形資產');
INSERT INTO `chartmaster` VALUES (1741,'著作權','無形資產');
INSERT INTO `chartmaster` VALUES (1751,'電腦軟體','無形資產');
INSERT INTO `chartmaster` VALUES (1761,'商譽','無形資產');
INSERT INTO `chartmaster` VALUES (1771,'開辦費','無形資產');
INSERT INTO `chartmaster` VALUES (1781,'遞延退休金成本','無形資產');
INSERT INTO `chartmaster` VALUES (1782,'租賃權益改良','無形資產');
INSERT INTO `chartmaster` VALUES (1788,'其他無形資產—其他','無形資產');
INSERT INTO `chartmaster` VALUES (1811,'債券發行成本','其他資產');
INSERT INTO `chartmaster` VALUES (1812,'長期預付租金','其他資產');
INSERT INTO `chartmaster` VALUES (1813,'長期預付保險費','其他資產');
INSERT INTO `chartmaster` VALUES (1814,'遞延所得稅資產','其他資產');
INSERT INTO `chartmaster` VALUES (1815,'預付退休金','其他資產');
INSERT INTO `chartmaster` VALUES (1818,'其他遞延資產','其他資產');
INSERT INTO `chartmaster` VALUES (1821,'閒置資產','其他資產');
INSERT INTO `chartmaster` VALUES (1841,'長期應收票據','其他資產');
INSERT INTO `chartmaster` VALUES (1842,'長期應收帳款','其他資產');
INSERT INTO `chartmaster` VALUES (1843,'催收帳款','其他資產');
INSERT INTO `chartmaster` VALUES (1847,'長期應收票據及款項與催收帳款—關係人','其他資產');
INSERT INTO `chartmaster` VALUES (1848,'其他長期應收款項','其他資產');
INSERT INTO `chartmaster` VALUES (1849,'備抵呆帳—長期應收票據及款項與催收帳款','其他資產');
INSERT INTO `chartmaster` VALUES (1851,'出租資產','其他資產');
INSERT INTO `chartmaster` VALUES (1858,'出租資產—重估增值','其他資產');
INSERT INTO `chartmaster` VALUES (1859,'累積折舊—出租資產','其他資產');
INSERT INTO `chartmaster` VALUES (1861,'存出保證金','其他資產');
INSERT INTO `chartmaster` VALUES (1881,'受限制存款','其他資產');
INSERT INTO `chartmaster` VALUES (1888,'雜項資產—其他','其他資產');
INSERT INTO `chartmaster` VALUES (2111,'銀行透支','流動負債');
INSERT INTO `chartmaster` VALUES (2112,'銀行借款','流動負債');
INSERT INTO `chartmaster` VALUES (2114,'短期借款—業主','流動負債');
INSERT INTO `chartmaster` VALUES (2115,'短期借款—員工','流動負債');
INSERT INTO `chartmaster` VALUES (2117,'短期借款—關係人','流動負債');
INSERT INTO `chartmaster` VALUES (2118,'短期借款—其他','流動負債');
INSERT INTO `chartmaster` VALUES (2121,'應付商業本票','流動負債');
INSERT INTO `chartmaster` VALUES (2122,'銀行承兌匯票','流動負債');
INSERT INTO `chartmaster` VALUES (2128,'其他應付短期票券','流動負債');
INSERT INTO `chartmaster` VALUES (2129,'應付短期票券折價','流動負債');
INSERT INTO `chartmaster` VALUES (2131,'應付票據','流動負債');
INSERT INTO `chartmaster` VALUES (2137,'應付票據—關係人','流動負債');
INSERT INTO `chartmaster` VALUES (2138,'其他應付票據','流動負債');
INSERT INTO `chartmaster` VALUES (2141,'應付帳款','流動負債');
INSERT INTO `chartmaster` VALUES (2147,'應付帳款—關係人','流動負債');
INSERT INTO `chartmaster` VALUES (2161,'應付所得稅','流動負債');
INSERT INTO `chartmaster` VALUES (2171,'應付薪工','流動負債');
INSERT INTO `chartmaster` VALUES (2172,'應付租金','流動負債');
INSERT INTO `chartmaster` VALUES (2173,'應付利息','流動負債');
INSERT INTO `chartmaster` VALUES (2174,'應付營業稅','流動負債');
INSERT INTO `chartmaster` VALUES (2175,'應付稅捐—其他','流動負債');
INSERT INTO `chartmaster` VALUES (2178,'其他應付費用','流動負債');
INSERT INTO `chartmaster` VALUES (2181,'應付購入遠匯款','流動負債');
INSERT INTO `chartmaster` VALUES (2182,'應付遠匯款—外幣','流動負債');
INSERT INTO `chartmaster` VALUES (2183,'買賣遠匯溢價','流動負債');
INSERT INTO `chartmaster` VALUES (2184,'應付土地房屋款','流動負債');
INSERT INTO `chartmaster` VALUES (2185,'應付設備款','流動負債');
INSERT INTO `chartmaster` VALUES (2187,'其他應付款—關係人','流動負債');
INSERT INTO `chartmaster` VALUES (2191,'應付股利','流動負債');
INSERT INTO `chartmaster` VALUES (2192,'應付紅利','流動負債');
INSERT INTO `chartmaster` VALUES (2193,'應付董監事酬勞','流動負債');
INSERT INTO `chartmaster` VALUES (2198,'其他應付款—其他','流動負債');
INSERT INTO `chartmaster` VALUES (2261,'預收貨款','流動負債');
INSERT INTO `chartmaster` VALUES (2262,'預收收入','流動負債');
INSERT INTO `chartmaster` VALUES (2268,'其他預收款','流動負債');
INSERT INTO `chartmaster` VALUES (2271,'一年或一營業週期內到期公司債','流動負債');
INSERT INTO `chartmaster` VALUES (2272,'一年或一營業週期內到期長期借款','流動負債');
INSERT INTO `chartmaster` VALUES (2273,'一年或一營業週期內到期長期應付票據及款項','流動負債');
INSERT INTO `chartmaster` VALUES (2277,'一年或一營業週期內到期長期應付票據及款項—關係人','流動負債');
INSERT INTO `chartmaster` VALUES (2278,'其他一年或一營業週期內到期長期負債','流動負債');
INSERT INTO `chartmaster` VALUES (2281,'銷項稅額','流動負債');
INSERT INTO `chartmaster` VALUES (2283,'暫收款','流動負債');
INSERT INTO `chartmaster` VALUES (2284,'代收款','流動負債');
INSERT INTO `chartmaster` VALUES (2285,'估計售後服務/保固負債','流動負債');
INSERT INTO `chartmaster` VALUES (2291,'遞延所得稅負債','流動負債');
INSERT INTO `chartmaster` VALUES (2292,'遞延兌換利益','流動負債');
INSERT INTO `chartmaster` VALUES (2293,'業主(股東)往來','流動負債');
INSERT INTO `chartmaster` VALUES (2294,'同業往來','流動負債');
INSERT INTO `chartmaster` VALUES (2298,'其他流動負債—其他','流動負債');
INSERT INTO `chartmaster` VALUES (2311,'應付公司債','長期負債');
INSERT INTO `chartmaster` VALUES (2319,'應付公司債溢(折)價','長期負債');
INSERT INTO `chartmaster` VALUES (2321,'長期銀行借款','長期負債');
INSERT INTO `chartmaster` VALUES (2324,'長期借款—業主','長期負債');
INSERT INTO `chartmaster` VALUES (2325,'長期借款—員工','長期負債');
INSERT INTO `chartmaster` VALUES (2327,'長期借款—關係人','長期負債');
INSERT INTO `chartmaster` VALUES (2328,'長期借款—其他','長期負債');
INSERT INTO `chartmaster` VALUES (2331,'長期應付票據','長期負債');
INSERT INTO `chartmaster` VALUES (2332,'長期應付帳款','長期負債');
INSERT INTO `chartmaster` VALUES (2333,'長期應付租賃負債','長期負債');
INSERT INTO `chartmaster` VALUES (2337,'長期應付票據及款項—關係人','長期負債');
INSERT INTO `chartmaster` VALUES (2338,'其他長期應付款項','長期負債');
INSERT INTO `chartmaster` VALUES (2341,'估計應付土地增值稅','長期負債');
INSERT INTO `chartmaster` VALUES (2351,'應計退休金負債','長期負債');
INSERT INTO `chartmaster` VALUES (2388,'其他長期負債—其他','長期負債');
INSERT INTO `chartmaster` VALUES (2811,'遞延收入','其他負債');
INSERT INTO `chartmaster` VALUES (2814,'遞延所得稅負債','其他負債');
INSERT INTO `chartmaster` VALUES (2818,'其他遞延負債','其他負債');
INSERT INTO `chartmaster` VALUES (2861,'存入保證金','其他負債');
INSERT INTO `chartmaster` VALUES (2888,'雜項負債—其他','其他負債');
INSERT INTO `chartmaster` VALUES (3111,'普通股股本','資本');
INSERT INTO `chartmaster` VALUES (3112,'特別股股本','資本');
INSERT INTO `chartmaster` VALUES (3113,'預收股本','資本');
INSERT INTO `chartmaster` VALUES (3114,'待分配股票股利','資本');
INSERT INTO `chartmaster` VALUES (3115,'資本','資本');
INSERT INTO `chartmaster` VALUES (3211,'普通股股票溢價','資本公積');
INSERT INTO `chartmaster` VALUES (3212,'特別股股票溢價','資本公積');
INSERT INTO `chartmaster` VALUES (3231,'資產重估增值準備','資本公積');
INSERT INTO `chartmaster` VALUES (3241,'處分資產溢價公積','資本公積');
INSERT INTO `chartmaster` VALUES (3251,'合併公積','資本公積');
INSERT INTO `chartmaster` VALUES (3261,'受贈公積','資本公積');
INSERT INTO `chartmaster` VALUES (3281,'權益法長期股權投資資本公積','資本公積');
INSERT INTO `chartmaster` VALUES (3282,'資本公積— 庫藏股票交易','資本公積');
INSERT INTO `chartmaster` VALUES (3311,'法定盈餘公積','保留盈餘(或累積虧損)');
INSERT INTO `chartmaster` VALUES (3321,'意外損失準備','保留盈餘(或累積虧損)');
INSERT INTO `chartmaster` VALUES (3322,'改良擴充準備','保留盈餘(或累積虧損)');
INSERT INTO `chartmaster` VALUES (3323,'償債準備','保留盈餘(或累積虧損)');
INSERT INTO `chartmaster` VALUES (3328,'其他特別盈餘公積','保留盈餘(或累積虧損)');
INSERT INTO `chartmaster` VALUES (3351,'累積盈虧','保留盈餘(或累積虧損)');
INSERT INTO `chartmaster` VALUES (3352,'前期損益調整','保留盈餘(或累積虧損)');
INSERT INTO `chartmaster` VALUES (3353,'本期損益','保留盈餘(或累積虧損)');
INSERT INTO `chartmaster` VALUES (3411,'長期股權投資未實現跌價損失','權益調整');
INSERT INTO `chartmaster` VALUES (3421,'累積換算調整數','權益調整');
INSERT INTO `chartmaster` VALUES (3431,'未認列為退休金成本之淨損失','權益調整');
INSERT INTO `chartmaster` VALUES (3511,'庫藏股','庫藏股');
INSERT INTO `chartmaster` VALUES (3611,'少數股權','少數股權');
INSERT INTO `chartmaster` VALUES (4111,'銷貨收入','銷貨收入');
INSERT INTO `chartmaster` VALUES (4112,'分期付款銷貨收入','銷貨收入');
INSERT INTO `chartmaster` VALUES (4171,'銷貨退回','銷貨收入');
INSERT INTO `chartmaster` VALUES (4191,'銷貨折讓','銷貨收入');
INSERT INTO `chartmaster` VALUES (4611,'勞務收入','勞務收入');
INSERT INTO `chartmaster` VALUES (4711,'業務收入','業務收入');
INSERT INTO `chartmaster` VALUES (4888,'其他營業收入—其他','其他營業收入');
INSERT INTO `chartmaster` VALUES (5111,'銷貨成本','銷貨成本');
INSERT INTO `chartmaster` VALUES (5112,'分期付款銷貨成本','銷貨成本');
INSERT INTO `chartmaster` VALUES (5121,'進貨','銷貨成本');
INSERT INTO `chartmaster` VALUES (5122,'進貨費用','銷貨成本');
INSERT INTO `chartmaster` VALUES (5123,'進貨退出','銷貨成本');
INSERT INTO `chartmaster` VALUES (5124,'進貨折讓','銷貨成本');
INSERT INTO `chartmaster` VALUES (5131,'進料','銷貨成本');
INSERT INTO `chartmaster` VALUES (5132,'進料費用','銷貨成本');
INSERT INTO `chartmaster` VALUES (5133,'進料退出','銷貨成本');
INSERT INTO `chartmaster` VALUES (5134,'進料折讓','銷貨成本');
INSERT INTO `chartmaster` VALUES (5141,'直接人工','銷貨成本');
INSERT INTO `chartmaster` VALUES (5151,'間接人工','銷貨成本');
INSERT INTO `chartmaster` VALUES (5152,'租金支出','銷貨成本');
INSERT INTO `chartmaster` VALUES (5153,'文具用品','銷貨成本');
INSERT INTO `chartmaster` VALUES (5154,'旅費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5155,'運費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5156,'郵電費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5157,'修繕費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5158,'包裝費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5161,'水電瓦斯費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5162,'保險費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5163,'加工費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5166,'稅捐','銷貨成本');
INSERT INTO `chartmaster` VALUES (5168,'折舊','銷貨成本');
INSERT INTO `chartmaster` VALUES (5169,'各項耗竭及攤提','銷貨成本');
INSERT INTO `chartmaster` VALUES (5172,'伙食費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5173,'職工福利','銷貨成本');
INSERT INTO `chartmaster` VALUES (5176,'訓練費','銷貨成本');
INSERT INTO `chartmaster` VALUES (5177,'間接材料','銷貨成本');
INSERT INTO `chartmaster` VALUES (5188,'其他製造費用','銷貨成本');
INSERT INTO `chartmaster` VALUES (5611,'勞務成本','勞務成本製');
INSERT INTO `chartmaster` VALUES (5711,'業務成本','業務成本');
INSERT INTO `chartmaster` VALUES (5888,'其他營業成本—其他','其他營業成本');
INSERT INTO `chartmaster` VALUES (6151,'薪資支出','推銷費用');
INSERT INTO `chartmaster` VALUES (6152,'租金支出','推銷費用');
INSERT INTO `chartmaster` VALUES (6153,'文具用品','推銷費用');
INSERT INTO `chartmaster` VALUES (6154,'旅費','推銷費用');
INSERT INTO `chartmaster` VALUES (6155,'運費','推銷費用');
INSERT INTO `chartmaster` VALUES (6156,'郵電費','推銷費用');
INSERT INTO `chartmaster` VALUES (6157,'修繕費','推銷費用');
INSERT INTO `chartmaster` VALUES (6159,'廣告費','推銷費用');
INSERT INTO `chartmaster` VALUES (6161,'水電瓦斯費','推銷費用');
INSERT INTO `chartmaster` VALUES (6162,'保險費','推銷費用');
INSERT INTO `chartmaster` VALUES (6164,'交際費','推銷費用');
INSERT INTO `chartmaster` VALUES (6165,'捐贈','推銷費用');
INSERT INTO `chartmaster` VALUES (6166,'稅捐','推銷費用');
INSERT INTO `chartmaster` VALUES (6167,'呆帳損失','推銷費用');
INSERT INTO `chartmaster` VALUES (6168,'折舊','推銷費用');
INSERT INTO `chartmaster` VALUES (6169,'各項耗竭及攤提','推銷費用');
INSERT INTO `chartmaster` VALUES (6172,'伙食費','推銷費用');
INSERT INTO `chartmaster` VALUES (6173,'職工福利','推銷費用');
INSERT INTO `chartmaster` VALUES (6175,'佣金支出','推銷費用');
INSERT INTO `chartmaster` VALUES (6176,'訓練費','推銷費用');
INSERT INTO `chartmaster` VALUES (6188,'其他推銷費用','推銷費用');
INSERT INTO `chartmaster` VALUES (6251,'薪資支出','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6252,'租金支出','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6253,'文具用品','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6254,'旅費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6255,'運費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6256,'郵電費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6257,'修繕費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6259,'廣告費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6261,'水電瓦斯費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6262,'保險費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6264,'交際費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6265,'捐贈','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6266,'稅捐','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6267,'呆帳損失','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6268,'折舊','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6269,'各項耗竭及攤提','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6271,'外銷損失','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6272,'伙食費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6273,'職工福利','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6274,'研究發展費用','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6275,'佣金支出','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6276,'訓練費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6278,'勞務費','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6288,'其他管理及總務費用','管理及總務費用');
INSERT INTO `chartmaster` VALUES (6351,'薪資支出','研究發展費用');
INSERT INTO `chartmaster` VALUES (6352,'租金支出','研究發展費用');
INSERT INTO `chartmaster` VALUES (6353,'文具用品','研究發展費用');
INSERT INTO `chartmaster` VALUES (6354,'旅費','研究發展費用');
INSERT INTO `chartmaster` VALUES (6355,'運費','研究發展費用');
INSERT INTO `chartmaster` VALUES (6356,'郵電費','研究發展費用');
INSERT INTO `chartmaster` VALUES (6357,'修繕費','研究發展費用');
INSERT INTO `chartmaster` VALUES (6361,'水電瓦斯費','研究發展費用');
INSERT INTO `chartmaster` VALUES (6362,'保險費','研究發展費用');
INSERT INTO `chartmaster` VALUES (6364,'交際費','研究發展費用');
INSERT INTO `chartmaster` VALUES (6366,'稅捐','研究發展費用');
INSERT INTO `chartmaster` VALUES (6368,'折舊','研究發展費用');
INSERT INTO `chartmaster` VALUES (6369,'各項耗竭及攤提','研究發展費用');
INSERT INTO `chartmaster` VALUES (6372,'伙食費','研究發展費用');
INSERT INTO `chartmaster` VALUES (6373,'職工福利','研究發展費用');
INSERT INTO `chartmaster` VALUES (6376,'訓練費','研究發展費用');
INSERT INTO `chartmaster` VALUES (6378,'其他研究發展費用','研究發展費用');
INSERT INTO `chartmaster` VALUES (7111,'利息收入','營業外收入');
INSERT INTO `chartmaster` VALUES (7121,'權益法認列之投資收益','營業外收入');
INSERT INTO `chartmaster` VALUES (7122,'股利收入','營業外收入');
INSERT INTO `chartmaster` VALUES (7123,'短期投資市價回升利益','營業外收入');
INSERT INTO `chartmaster` VALUES (7131,'兌換利益','營業外收入');
INSERT INTO `chartmaster` VALUES (7141,'處分投資收益','營業外收入');
INSERT INTO `chartmaster` VALUES (7151,'處分資產溢價收入','營業外收入');
INSERT INTO `chartmaster` VALUES (7481,'捐贈收入','營業外收入');
INSERT INTO `chartmaster` VALUES (7482,'租金收入','營業外收入');
INSERT INTO `chartmaster` VALUES (7483,'佣金收入','營業外收入');
INSERT INTO `chartmaster` VALUES (7484,'出售下腳及廢料收入','營業外收入');
INSERT INTO `chartmaster` VALUES (7485,'存貨盤盈','營業外收入');
INSERT INTO `chartmaster` VALUES (7486,'存貨跌價回升利益','營業外收入');
INSERT INTO `chartmaster` VALUES (7487,'壞帳轉回利益','營業外收入');
INSERT INTO `chartmaster` VALUES (7488,'其他營業外收入—其他','營業外收入');
INSERT INTO `chartmaster` VALUES (7511,'利息費用','營業外費用');
INSERT INTO `chartmaster` VALUES (7521,'權益法認列之投資損失','營業外費用');
INSERT INTO `chartmaster` VALUES (7523,'短期投資未實現跌價損失','營業外費用');
INSERT INTO `chartmaster` VALUES (7531,'兌換損失','營業外費用');
INSERT INTO `chartmaster` VALUES (7541,'處分投資損失','營業外費用');
INSERT INTO `chartmaster` VALUES (7551,'處分資產損失','營業外費用');
INSERT INTO `chartmaster` VALUES (7881,'停工損失','營業外費用');
INSERT INTO `chartmaster` VALUES (7882,'災害損失','營業外費用');
INSERT INTO `chartmaster` VALUES (7885,'存貨盤損','營業外費用');
INSERT INTO `chartmaster` VALUES (7886,'存貨跌價及呆滯損失','營業外費用');
INSERT INTO `chartmaster` VALUES (7888,'其他營業外費用—其他','營業外費用');
INSERT INTO `chartmaster` VALUES (8111,'所得稅費用（或利益）','所得稅費用(或利益)');
INSERT INTO `chartmaster` VALUES (9111,'停業部門損益—停業前營業損益','停業部門損益');
INSERT INTO `chartmaster` VALUES (9121,'停業部門損益—處分損益','停業部門損益');
INSERT INTO `chartmaster` VALUES (9211,'非常損益','非常損益');
INSERT INTO `chartmaster` VALUES (9311,'會計原則變動累積影響數','會計原則變動累積影響數');
INSERT INTO `chartmaster` VALUES (9411,'少數股權淨利','少數股權淨利');

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` VALUES (1,'展示系統','not entered yet','','PO Box 1000','The White House','Washnington DC','USA','','','','','info@weberp.org','USD',1100,4900,2100,2400,2150,4200,5200,3500,1,1,1,5600);

--
-- Dumping data for table `cogsglpostings`
--

INSERT INTO `cogsglpostings` VALUES (3,'AN','ANY',5000,'AN');

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` VALUES ('新台幣','TWD','台灣','Cents',1);
INSERT INTO `currencies` VALUES ('Australian Dollars','AUD','Australia','cents',1.7);
INSERT INTO `currencies` VALUES ('Pounds','GBP','England','Pence',0.8);
INSERT INTO `currencies` VALUES ('US Dollars','USD','United States','Cents',1);

--
-- Dumping data for table `holdreasons`
--

INSERT INTO `holdreasons` VALUES (1,'紀錄良好',0);
INSERT INTO `holdreasons` VALUES (20,'觀察中',0);
INSERT INTO `holdreasons` VALUES (51,'清算中',1);

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` VALUES ('DEN','Denver','532-536 Wentworth Street','Denver','Colorado','','','','233 5532 216','233 5532 215','g.bovert@weberp.com','Graham Bouvert',1,0);
INSERT INTO `locations` VALUES ('TOR','Toronto Distribution Centre','','','','','','','','','','Clive Contrary',1,1);

--
-- Dumping data for table `paymentterms`
--

INSERT INTO `paymentterms` VALUES ('30','月結三十天',0,30);
INSERT INTO `paymentterms` VALUES ('7','七天內付款',7,0);
INSERT INTO `paymentterms` VALUES ('CA','現金交易',1,0);

--
-- Dumping data for table `salesglpostings`
--

INSERT INTO `salesglpostings` VALUES (1,'AN','ANY',4900,4100,'AN');

--
-- Dumping data for table `systypes`
--

INSERT INTO `systypes` VALUES (0,'Journal - GL',0);
INSERT INTO `systypes` VALUES (1,'Payment - GL',0);
INSERT INTO `systypes` VALUES (2,'Receipt - GL',0);
INSERT INTO `systypes` VALUES (3,'Standing Journal',0);
INSERT INTO `systypes` VALUES (10,'Sales Invoice',7);
INSERT INTO `systypes` VALUES (11,'Credit Note',1);
INSERT INTO `systypes` VALUES (12,'Receipt',2);
INSERT INTO `systypes` VALUES (15,'Journal - Debtors',0);
INSERT INTO `systypes` VALUES (16,'Location Transfer',4);
INSERT INTO `systypes` VALUES (17,'Stock Adjustment',8);
INSERT INTO `systypes` VALUES (18,'Purchase Order',0);
INSERT INTO `systypes` VALUES (20,'Purchase Invoice',8);
INSERT INTO `systypes` VALUES (21,'Debit Note',3);
INSERT INTO `systypes` VALUES (22,'Creditors Payment',0);
INSERT INTO `systypes` VALUES (23,'Creditors Journal',0);
INSERT INTO `systypes` VALUES (25,'Purchase Order Delivery',7);
INSERT INTO `systypes` VALUES (26,'Work Order Receipt',0);
INSERT INTO `systypes` VALUES (28,'Work Order Issue',0);
INSERT INTO `systypes` VALUES (29,'Work Order Variance',0);
INSERT INTO `systypes` VALUES (30,'Sales Order',0);
INSERT INTO `systypes` VALUES (31,'Shipment Close',25);
INSERT INTO `systypes` VALUES (35,'Cost Update',2);
INSERT INTO `systypes` VALUES (50,'Opening Balance',0);
INSERT INTO `systypes` VALUES (500,'Auto Debtor Number',0);

--
-- Dumping data for table `taxauthorities`
--

INSERT INTO `taxauthorities` VALUES (1,'Australian GST',2300,2310,'','','','');
INSERT INTO `taxauthorities` VALUES (5,'Sales Tax',2300,2310,'','','','');
INSERT INTO `taxauthorities` VALUES (11,'Canadian GST',2300,2310,'','','','');
INSERT INTO `taxauthorities` VALUES (12,'Ontario PST',2300,2310,'','','','');
INSERT INTO `taxauthorities` VALUES (13,'UK VAT',2300,2310,'','','','');

--
-- Dumping data for table `taxgroups`
--

INSERT INTO `taxgroups` VALUES (1,'Default tax group');
INSERT INTO `taxgroups` VALUES (2,'Ontario');
INSERT INTO `taxgroups` VALUES (3,'UK Inland Revenue');

--
-- Dumping data for table `taxauthrates`
--

INSERT INTO `taxauthrates` VALUES (1,1,1,0.1);
INSERT INTO `taxauthrates` VALUES (1,1,2,0);
INSERT INTO `taxauthrates` VALUES (5,1,1,0.2);
INSERT INTO `taxauthrates` VALUES (5,1,2,0.35);
INSERT INTO `taxauthrates` VALUES (11,1,1,0.07);
INSERT INTO `taxauthrates` VALUES (11,1,2,0.12);
INSERT INTO `taxauthrates` VALUES (12,1,1,0.05);
INSERT INTO `taxauthrates` VALUES (12,1,2,0.075);
INSERT INTO `taxauthrates` VALUES (13,1,1,0);
INSERT INTO `taxauthrates` VALUES (13,1,2,0);

--
-- Dumping data for table `taxcategories`
--

INSERT INTO `taxcategories` VALUES (1,'Taxable supply');
INSERT INTO `taxcategories` VALUES (2,'Luxury Items');
INSERT INTO `taxcategories` VALUES (4,'Exempt');

--
-- Dumping data for table `taxprovinces`
--

INSERT INTO `taxprovinces` VALUES (1,'Default Tax province');

--
-- Dumping data for table `www_users`
--

INSERT INTO `www_users` VALUES ('demo','weberp','Demonstration user','','','','DEN',8,'2005-04-29 21:34:05','','A4','1,1,1,1,1,1,1,1,',0,50,'professional','zh_TW.UTF-8');

--
-- Dumping data for table `edi_orders_segs`
--

INSERT INTO `edi_orders_segs` VALUES (1,'UNB',0,1);
INSERT INTO `edi_orders_segs` VALUES (2,'UNH',0,1);
INSERT INTO `edi_orders_segs` VALUES (3,'BGM',0,1);
INSERT INTO `edi_orders_segs` VALUES (4,'DTM',0,35);
INSERT INTO `edi_orders_segs` VALUES (5,'PAI',0,1);
INSERT INTO `edi_orders_segs` VALUES (6,'ALI',0,5);
INSERT INTO `edi_orders_segs` VALUES (7,'FTX',0,99);
INSERT INTO `edi_orders_segs` VALUES (8,'RFF',1,1);
INSERT INTO `edi_orders_segs` VALUES (9,'DTM',1,5);
INSERT INTO `edi_orders_segs` VALUES (10,'NAD',2,1);
INSERT INTO `edi_orders_segs` VALUES (11,'LOC',2,99);
INSERT INTO `edi_orders_segs` VALUES (12,'FII',2,5);
INSERT INTO `edi_orders_segs` VALUES (13,'RFF',3,1);
INSERT INTO `edi_orders_segs` VALUES (14,'CTA',5,1);
INSERT INTO `edi_orders_segs` VALUES (15,'COM',5,5);
INSERT INTO `edi_orders_segs` VALUES (16,'TAX',6,1);
INSERT INTO `edi_orders_segs` VALUES (17,'MOA',6,1);
INSERT INTO `edi_orders_segs` VALUES (18,'CUX',7,1);
INSERT INTO `edi_orders_segs` VALUES (19,'DTM',7,5);
INSERT INTO `edi_orders_segs` VALUES (20,'PAT',8,1);
INSERT INTO `edi_orders_segs` VALUES (21,'DTM',8,5);
INSERT INTO `edi_orders_segs` VALUES (22,'PCD',8,1);
INSERT INTO `edi_orders_segs` VALUES (23,'MOA',9,1);
INSERT INTO `edi_orders_segs` VALUES (24,'TDT',10,1);
INSERT INTO `edi_orders_segs` VALUES (25,'LOC',11,1);
INSERT INTO `edi_orders_segs` VALUES (26,'DTM',11,5);
INSERT INTO `edi_orders_segs` VALUES (27,'TOD',12,1);
INSERT INTO `edi_orders_segs` VALUES (28,'LOC',12,2);
INSERT INTO `edi_orders_segs` VALUES (29,'PAC',13,1);
INSERT INTO `edi_orders_segs` VALUES (30,'PCI',14,1);
INSERT INTO `edi_orders_segs` VALUES (31,'RFF',14,1);
INSERT INTO `edi_orders_segs` VALUES (32,'DTM',14,5);
INSERT INTO `edi_orders_segs` VALUES (33,'GIN',14,10);
INSERT INTO `edi_orders_segs` VALUES (34,'EQD',15,1);
INSERT INTO `edi_orders_segs` VALUES (35,'ALC',19,1);
INSERT INTO `edi_orders_segs` VALUES (36,'ALI',19,5);
INSERT INTO `edi_orders_segs` VALUES (37,'DTM',19,5);
INSERT INTO `edi_orders_segs` VALUES (38,'QTY',20,1);
INSERT INTO `edi_orders_segs` VALUES (39,'RNG',20,1);
INSERT INTO `edi_orders_segs` VALUES (40,'PCD',21,1);
INSERT INTO `edi_orders_segs` VALUES (41,'RNG',21,1);
INSERT INTO `edi_orders_segs` VALUES (42,'MOA',22,1);
INSERT INTO `edi_orders_segs` VALUES (43,'RNG',22,1);
INSERT INTO `edi_orders_segs` VALUES (44,'RTE',23,1);
INSERT INTO `edi_orders_segs` VALUES (45,'RNG',23,1);
INSERT INTO `edi_orders_segs` VALUES (46,'TAX',24,1);
INSERT INTO `edi_orders_segs` VALUES (47,'MOA',24,1);
INSERT INTO `edi_orders_segs` VALUES (48,'LIN',28,1);
INSERT INTO `edi_orders_segs` VALUES (49,'PIA',28,25);
INSERT INTO `edi_orders_segs` VALUES (50,'IMD',28,99);
INSERT INTO `edi_orders_segs` VALUES (51,'MEA',28,99);
INSERT INTO `edi_orders_segs` VALUES (52,'QTY',28,99);
INSERT INTO `edi_orders_segs` VALUES (53,'ALI',28,5);
INSERT INTO `edi_orders_segs` VALUES (54,'DTM',28,35);
INSERT INTO `edi_orders_segs` VALUES (55,'MOA',28,10);
INSERT INTO `edi_orders_segs` VALUES (56,'GIN',28,127);
INSERT INTO `edi_orders_segs` VALUES (57,'QVR',28,1);
INSERT INTO `edi_orders_segs` VALUES (58,'FTX',28,99);
INSERT INTO `edi_orders_segs` VALUES (59,'PRI',32,1);
INSERT INTO `edi_orders_segs` VALUES (60,'CUX',32,1);
INSERT INTO `edi_orders_segs` VALUES (61,'DTM',32,5);
INSERT INTO `edi_orders_segs` VALUES (62,'RFF',33,1);
INSERT INTO `edi_orders_segs` VALUES (63,'DTM',33,5);
INSERT INTO `edi_orders_segs` VALUES (64,'PAC',34,1);
INSERT INTO `edi_orders_segs` VALUES (65,'QTY',34,5);
INSERT INTO `edi_orders_segs` VALUES (66,'PCI',36,1);
INSERT INTO `edi_orders_segs` VALUES (67,'RFF',36,1);
INSERT INTO `edi_orders_segs` VALUES (68,'DTM',36,5);
INSERT INTO `edi_orders_segs` VALUES (69,'GIN',36,10);
INSERT INTO `edi_orders_segs` VALUES (70,'LOC',37,1);
INSERT INTO `edi_orders_segs` VALUES (71,'QTY',37,1);
INSERT INTO `edi_orders_segs` VALUES (72,'DTM',37,5);
INSERT INTO `edi_orders_segs` VALUES (73,'TAX',38,1);
INSERT INTO `edi_orders_segs` VALUES (74,'MOA',38,1);
INSERT INTO `edi_orders_segs` VALUES (75,'NAD',39,1);
INSERT INTO `edi_orders_segs` VALUES (76,'CTA',42,1);
INSERT INTO `edi_orders_segs` VALUES (77,'COM',42,5);
INSERT INTO `edi_orders_segs` VALUES (78,'ALC',43,1);
INSERT INTO `edi_orders_segs` VALUES (79,'ALI',43,5);
INSERT INTO `edi_orders_segs` VALUES (80,'DTM',43,5);
INSERT INTO `edi_orders_segs` VALUES (81,'QTY',44,1);
INSERT INTO `edi_orders_segs` VALUES (82,'RNG',44,1);
INSERT INTO `edi_orders_segs` VALUES (83,'PCD',45,1);
INSERT INTO `edi_orders_segs` VALUES (84,'RNG',45,1);
INSERT INTO `edi_orders_segs` VALUES (85,'MOA',46,1);
INSERT INTO `edi_orders_segs` VALUES (86,'RNG',46,1);
INSERT INTO `edi_orders_segs` VALUES (87,'RTE',47,1);
INSERT INTO `edi_orders_segs` VALUES (88,'RNG',47,1);
INSERT INTO `edi_orders_segs` VALUES (89,'TAX',48,1);
INSERT INTO `edi_orders_segs` VALUES (90,'MOA',48,1);
INSERT INTO `edi_orders_segs` VALUES (91,'TDT',49,1);
INSERT INTO `edi_orders_segs` VALUES (92,'UNS',50,1);
INSERT INTO `edi_orders_segs` VALUES (93,'MOA',50,1);
INSERT INTO `edi_orders_segs` VALUES (94,'CNT',50,1);
INSERT INTO `edi_orders_segs` VALUES (95,'UNT',50,1);

--
-- Dumping data for table `edi_orders_seg_groups`
--

INSERT INTO `edi_orders_seg_groups` VALUES (0,1,0);
INSERT INTO `edi_orders_seg_groups` VALUES (1,9999,0);
INSERT INTO `edi_orders_seg_groups` VALUES (2,99,0);
INSERT INTO `edi_orders_seg_groups` VALUES (3,99,2);
INSERT INTO `edi_orders_seg_groups` VALUES (5,5,2);
INSERT INTO `edi_orders_seg_groups` VALUES (6,5,0);
INSERT INTO `edi_orders_seg_groups` VALUES (7,5,0);
INSERT INTO `edi_orders_seg_groups` VALUES (8,10,0);
INSERT INTO `edi_orders_seg_groups` VALUES (9,9999,8);
INSERT INTO `edi_orders_seg_groups` VALUES (10,10,0);
INSERT INTO `edi_orders_seg_groups` VALUES (11,10,10);
INSERT INTO `edi_orders_seg_groups` VALUES (12,5,0);
INSERT INTO `edi_orders_seg_groups` VALUES (13,99,0);
INSERT INTO `edi_orders_seg_groups` VALUES (14,5,13);
INSERT INTO `edi_orders_seg_groups` VALUES (15,10,0);
INSERT INTO `edi_orders_seg_groups` VALUES (19,99,0);
INSERT INTO `edi_orders_seg_groups` VALUES (20,1,19);
INSERT INTO `edi_orders_seg_groups` VALUES (21,1,19);
INSERT INTO `edi_orders_seg_groups` VALUES (22,2,19);
INSERT INTO `edi_orders_seg_groups` VALUES (23,1,19);
INSERT INTO `edi_orders_seg_groups` VALUES (24,5,19);
INSERT INTO `edi_orders_seg_groups` VALUES (28,200000,0);
INSERT INTO `edi_orders_seg_groups` VALUES (32,25,28);
INSERT INTO `edi_orders_seg_groups` VALUES (33,9999,28);
INSERT INTO `edi_orders_seg_groups` VALUES (34,99,28);
INSERT INTO `edi_orders_seg_groups` VALUES (36,5,34);
INSERT INTO `edi_orders_seg_groups` VALUES (37,9999,28);
INSERT INTO `edi_orders_seg_groups` VALUES (38,10,28);
INSERT INTO `edi_orders_seg_groups` VALUES (39,999,28);
INSERT INTO `edi_orders_seg_groups` VALUES (42,5,39);
INSERT INTO `edi_orders_seg_groups` VALUES (43,99,28);
INSERT INTO `edi_orders_seg_groups` VALUES (44,1,43);
INSERT INTO `edi_orders_seg_groups` VALUES (45,1,43);
INSERT INTO `edi_orders_seg_groups` VALUES (46,2,43);
INSERT INTO `edi_orders_seg_groups` VALUES (47,1,43);
INSERT INTO `edi_orders_seg_groups` VALUES (48,5,43);
INSERT INTO `edi_orders_seg_groups` VALUES (49,10,28);
INSERT INTO `edi_orders_seg_groups` VALUES (50,1,0);

--
-- Dumping data for table `config`
--

INSERT INTO `config` VALUES ('AllowSalesOfZeroCostItems','0');
INSERT INTO `config` VALUES ('AutoDebtorNo','0');
INSERT INTO `config` VALUES ('CheckCreditLimits','0');
INSERT INTO `config` VALUES ('Check_Price_Charged_vs_Order_Price','1');
INSERT INTO `config` VALUES ('Check_Qty_Charged_vs_Del_Qty','1');
INSERT INTO `config` VALUES ('CountryOfOperation','USD');
INSERT INTO `config` VALUES ('CreditingControlledItems_MustExist','0');
INSERT INTO `config` VALUES ('DB_Maintenance','1');
INSERT INTO `config` VALUES ('DB_Maintenance_LastRun','2005-12-22');
INSERT INTO `config` VALUES ('DefaultBlindPackNote','1');
INSERT INTO `config` VALUES ('DefaultCreditLimit','1000');
INSERT INTO `config` VALUES ('DefaultDateFormat','d/m/Y');
INSERT INTO `config` VALUES ('DefaultDisplayRecordsMax','50');
INSERT INTO `config` VALUES ('DefaultPriceList','DE');
INSERT INTO `config` VALUES ('DefaultTaxCategory','1');
INSERT INTO `config` VALUES ('DefaultTheme','fresh');
INSERT INTO `config` VALUES ('Default_Shipper','1');
INSERT INTO `config` VALUES ('DispatchCutOffTime','14');
INSERT INTO `config` VALUES ('DoFreightCalc','0');
INSERT INTO `config` VALUES ('EDIHeaderMsgId','D:01B:UN:EAN010');
INSERT INTO `config` VALUES ('EDIReference','WEBERP');
INSERT INTO `config` VALUES ('EDI_Incoming_Orders','companies/weberp/EDI_Incoming_Orders');
INSERT INTO `config` VALUES ('EDI_MsgPending','companies/weberp/EDI_MsgPending');
INSERT INTO `config` VALUES ('EDI_MsgSent','companies/weberp/EDI_Sent');
INSERT INTO `config` VALUES ('FreightChargeAppliesIfLessThan','1000');
INSERT INTO `config` VALUES ('FreightTaxCategory','1');
INSERT INTO `config` VALUES ('HTTPS_Only','0');
INSERT INTO `config` VALUES ('MaxImageSize','300');
INSERT INTO `config` VALUES ('NumberOfPeriodsOfStockUsage','12');
INSERT INTO `config` VALUES ('OverChargeProportion','30');
INSERT INTO `config` VALUES ('OverReceiveProportion','20');
INSERT INTO `config` VALUES ('PackNoteFormat','1');
INSERT INTO `config` VALUES ('PageLength','48');
INSERT INTO `config` VALUES ('part_pics_dir','companies/weberp/part_pics');
INSERT INTO `config` VALUES ('PastDueDays1','30');
INSERT INTO `config` VALUES ('PastDueDays2','60');
INSERT INTO `config` VALUES ('PO_AllowSameItemMultipleTimes','1');
INSERT INTO `config` VALUES ('QuickEntries','10');
INSERT INTO `config` VALUES ('RadioBeaconFileCounter','/home/RadioBeacon/FileCounter');
INSERT INTO `config` VALUES ('RadioBeaconFTP_user_name','RadioBeacon ftp server user name');
INSERT INTO `config` VALUES ('RadioBeaconHomeDir','/home/RadioBeacon');
INSERT INTO `config` VALUES ('RadioBeaconStockLocation','BL');
INSERT INTO `config` VALUES ('RadioBraconFTP_server','192.168.2.2');
INSERT INTO `config` VALUES ('RadioBreaconFilePrefix','ORDXX');
INSERT INTO `config` VALUES ('RadionBeaconFTP_user_pass','Radio Beacon remote ftp server password');
INSERT INTO `config` VALUES ('reports_dir','companies/weberp/reports');
INSERT INTO `config` VALUES ('RomalpaClause','Ownership will not pass to the buyer until the goods have been paid for in full.');
INSERT INTO `config` VALUES ('Show_Settled_LastMonth','1');
INSERT INTO `config` VALUES ('SO_AllowSameItemMultipleTimes','1');
INSERT INTO `config` VALUES ('TaxAuthorityReferenceName','Tax Ref');
INSERT INTO `config` VALUES ('WackoWiki','1');
INSERT INTO `config` VALUES ('WikiPath','wiki');
INSERT INTO `config` VALUES ('YearEnd','3');

--
-- Dumping data for table `unitsofmeasure`
--

INSERT INTO `unitsofmeasure` VALUES (1,'件');
INSERT INTO `unitsofmeasure` VALUES (2,'公尺');
INSERT INTO `unitsofmeasure` VALUES (3,'公斤');
INSERT INTO `unitsofmeasure` VALUES (4,'公升');
INSERT INTO `unitsofmeasure` VALUES (5,'長度');
INSERT INTO `unitsofmeasure` VALUES (6,'組');

--
-- Dumping data for table `paymentmethods`
--

INSERT INTO `paymentmethods` VALUES (1,'支票',1,1);
INSERT INTO `paymentmethods` VALUES (2,'現金',1,1);
INSERT INTO `paymentmethods` VALUES (3,'信用交易',1,1);

--
-- Dumping data for table `securitygroups`
--

INSERT INTO `securitygroups` VALUES (1,1);
INSERT INTO `securitygroups` VALUES (1,2);
INSERT INTO `securitygroups` VALUES (2,1);
INSERT INTO `securitygroups` VALUES (2,2);
INSERT INTO `securitygroups` VALUES (2,11);
INSERT INTO `securitygroups` VALUES (3,1);
INSERT INTO `securitygroups` VALUES (3,2);
INSERT INTO `securitygroups` VALUES (3,3);
INSERT INTO `securitygroups` VALUES (3,4);
INSERT INTO `securitygroups` VALUES (3,5);
INSERT INTO `securitygroups` VALUES (3,11);
INSERT INTO `securitygroups` VALUES (4,1);
INSERT INTO `securitygroups` VALUES (4,2);
INSERT INTO `securitygroups` VALUES (4,5);
INSERT INTO `securitygroups` VALUES (5,1);
INSERT INTO `securitygroups` VALUES (5,2);
INSERT INTO `securitygroups` VALUES (5,3);
INSERT INTO `securitygroups` VALUES (5,11);
INSERT INTO `securitygroups` VALUES (6,1);
INSERT INTO `securitygroups` VALUES (6,2);
INSERT INTO `securitygroups` VALUES (6,3);
INSERT INTO `securitygroups` VALUES (6,4);
INSERT INTO `securitygroups` VALUES (6,5);
INSERT INTO `securitygroups` VALUES (6,6);
INSERT INTO `securitygroups` VALUES (6,7);
INSERT INTO `securitygroups` VALUES (6,8);
INSERT INTO `securitygroups` VALUES (6,9);
INSERT INTO `securitygroups` VALUES (6,10);
INSERT INTO `securitygroups` VALUES (6,11);
INSERT INTO `securitygroups` VALUES (7,1);
INSERT INTO `securitygroups` VALUES (8,1);
INSERT INTO `securitygroups` VALUES (8,2);
INSERT INTO `securitygroups` VALUES (8,3);
INSERT INTO `securitygroups` VALUES (8,4);
INSERT INTO `securitygroups` VALUES (8,5);
INSERT INTO `securitygroups` VALUES (8,6);
INSERT INTO `securitygroups` VALUES (8,7);
INSERT INTO `securitygroups` VALUES (8,8);
INSERT INTO `securitygroups` VALUES (8,9);
INSERT INTO `securitygroups` VALUES (8,10);
INSERT INTO `securitygroups` VALUES (8,11);
INSERT INTO `securitygroups` VALUES (8,12);
INSERT INTO `securitygroups` VALUES (8,13);
INSERT INTO `securitygroups` VALUES (8,14);
INSERT INTO `securitygroups` VALUES (8,15);

--
-- Dumping data for table `securitytokens`
--

INSERT INTO `securitytokens` VALUES (1,'輸入訂單、查詢客戶資料');
INSERT INTO `securitytokens` VALUES (2,'基本報表與指定項目查詢');
INSERT INTO `securitytokens` VALUES (3,'貸方傳票與收款簿記');
INSERT INTO `securitytokens` VALUES (4,'採購資料、輸入採購單、再訂購水平');
INSERT INTO `securitytokens` VALUES (5,'付款簿記');
INSERT INTO `securitytokens` VALUES (6,'尚未使用');
INSERT INTO `securitytokens` VALUES (7,'銀行對帳');
INSERT INTO `securitytokens` VALUES (8,'一般會計報表查詢');
INSERT INTO `securitytokens` VALUES (9,'尚未使用');
INSERT INTO `securitytokens` VALUES (10,'一般會計工作、庫存盤點與設定');
INSERT INTO `securitytokens` VALUES (11,'庫存與價格管理');
INSERT INTO `securitytokens` VALUES (12,'尚未使用');
INSERT INTO `securitytokens` VALUES (13,'尚未使用');
INSERT INTO `securitytokens` VALUES (14,'尚未使用');
INSERT INTO `securitytokens` VALUES (15,'使用者與系統管理');

--
-- Dumping data for table `securityroles`
--

INSERT INTO `securityroles` VALUES (1,'查詢/輸入訂單');
INSERT INTO `securityroles` VALUES (2,'製造/庫存管理');
INSERT INTO `securityroles` VALUES (3,'採購經理');
INSERT INTO `securityroles` VALUES (4,'付款簿記員');
INSERT INTO `securityroles` VALUES (5,'收款簿記員');
INSERT INTO `securityroles` VALUES (6,'會計人員');
INSERT INTO `securityroles` VALUES (7,'客戶資料輸入');
INSERT INTO `securityroles` VALUES (8,'系統管理員');

--
-- Dumping data for table `accountsection`
--

INSERT INTO `accountsection` VALUES (1,'資產');
INSERT INTO `accountsection` VALUES (2,'負債');
INSERT INTO `accountsection` VALUES (3,'業主權益');
INSERT INTO `accountsection` VALUES (4,'營業收入');
INSERT INTO `accountsection` VALUES (5,'營業成本');
INSERT INTO `accountsection` VALUES (6,'營業費用');
INSERT INTO `accountsection` VALUES (7,'營業外收入及費用');
INSERT INTO `accountsection` VALUES (8,'所得稅費用(或利益)');
INSERT INTO `accountsection` VALUES (9,'非經常營業損益');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

SET FOREIGN_KEY_CHECKS = 1;
UPDATE systypes SET typeno=0;
INSERT INTO shippers VALUES (1,'Default Shipper',0);
UPDATE config SET confvalue='1' WHERE confname='Default_Shipper';
