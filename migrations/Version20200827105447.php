<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200827105447 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ressources_humaines (id INT AUTO_INCREMENT NOT NULL, prenoms VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, matricule VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, diplome LONGTEXT DEFAULT NULL, date_de_naissance DATE NOT NULL, lieu_de_naissance VARCHAR(255) NOT NULL, cni INT NOT NULL, photo VARCHAR(255) DEFAULT NULL, statut_dans_l_entreprise VARCHAR(255) NOT NULL, situation_matrimoniale VARCHAR(255) NOT NULL, type_de_contrat VARCHAR(255) NOT NULL, ipres DOUBLE PRECISION DEFAULT NULL, css DOUBLE PRECISION DEFAULT NULL, declaration_fiscale DOUBLE PRECISION DEFAULT NULL, impots DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE ressources_humaines');
    }
}
