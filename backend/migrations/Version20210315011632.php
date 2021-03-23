<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210315011632 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE depot (id INT AUTO_INCREMENT NOT NULL, cni_emetteur VARCHAR(255) NOT NULL, nom_emetteur VARCHAR(255) NOT NULL, prenom_emetteur VARCHAR(255) NOT NULL, tel_emetteur VARCHAR(255) NOT NULL, montant VARCHAR(255) NOT NULL, frais VARCHAR(255) NOT NULL, total VARCHAR(255) NOT NULL, nom_beneficiaire VARCHAR(255) NOT NULL, prenom_beneficiaire VARCHAR(255) NOT NULL, tel_beneficiaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE retrait (id INT AUTO_INCREMENT NOT NULL, nom_beneficiaire VARCHAR(255) NOT NULL, prenom_beneficiaire VARCHAR(255) NOT NULL, montant VARCHAR(255) NOT NULL, tel_beneficiaire VARCHAR(255) NOT NULL, date_envoie VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte CHANGE solde solde INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE depot');
        $this->addSql('DROP TABLE retrait');
        $this->addSql('ALTER TABLE compte CHANGE solde solde VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
