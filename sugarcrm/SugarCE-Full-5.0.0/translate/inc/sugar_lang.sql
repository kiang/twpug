-- phpMyAdmin SQL Dump
-- version 2.6.4-pl1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 21, 2006 at 04:54 PM
-- Server version: 4.1.11
-- PHP Version: 5.0.4
-- 
-- Database: `sugar_lang`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `sugar_lang_dico`
-- 

CREATE TABLE `sugar_lang_dico` (
  `id` int(11) NOT NULL auto_increment,
  `ref` text NOT NULL,
  `trx` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

-- 
-- Table structure for table `sugar_lang_trx`
-- 

CREATE TABLE `sugar_lang_trx` (
  `id` int(11) NOT NULL auto_increment,
  `ref` text NOT NULL,
  `trx` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

-- 
-- Table structure for table `sugar_mnf`
-- 

CREATE TABLE `sugar_mnf` (
  `version_id` smallint(6) NOT NULL default '0',
  `lang` varchar(3) NOT NULL default '',
  `name` varchar(40) NOT NULL default '',
  `value` varchar(200) default NULL,
  PRIMARY KEY  (`version_id`,`lang`,`name`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

-- 
-- Table structure for table `sugar_terms`
-- 

CREATE TABLE `sugar_terms` (
  `id` int(11) NOT NULL auto_increment,
  `version_id` smallint(6) NOT NULL default '0',
  `file` varchar(100) NOT NULL default '',
  `array_id` varchar(20) NOT NULL default '',
  `sub_array_id` varchar(50) NOT NULL default '',
  `label_id` varchar(50) NOT NULL default '',
  `lang` varchar(3) NOT NULL default '',
  `text` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `LANG_INDEX` (`lang`),
  KEY `TERM_INDEX` (`version_id`,`file`,`array_id`,`sub_array_id`,`label_id`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

-- 
-- Table structure for table `sugar_versions`
-- 

CREATE TABLE `sugar_versions` (
  `id` smallint(6) NOT NULL auto_increment,
  `descr` text NOT NULL,
  `added` timestamp NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `sugar_mnf`
-- 
ALTER TABLE `sugar_mnf`
  ADD CONSTRAINT `sugar_mnf_ibfk_1` FOREIGN KEY (`version_id`) REFERENCES `sugar_versions` (`id`) ON DELETE CASCADE;

-- 
-- Constraints for table `sugar_terms`
-- 
ALTER TABLE `sugar_terms`
  ADD CONSTRAINT `sugar_terms_ibfk_1` FOREIGN KEY (`version_id`) REFERENCES `sugar_versions` (`id`) ON DELETE CASCADE;

