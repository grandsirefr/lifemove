<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200918193000 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, customer_firstname VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', customer_lastname VARCHAR(255) NOT NULL, customer_birthdate DATETIME DEFAULT NULL, customer_email VARCHAR(255) NOT NULL, customer_password VARCHAR(255) NOT NULL, customer_address VARCHAR(255) NOT NULL, customer_postal_code VARCHAR(35) NOT NULL, customer_city VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE family_home (id INT AUTO_INCREMENT NOT NULL, family_home_person1 VARCHAR(30) DEFAULT NULL, family_home_person2 VARCHAR(255) DEFAULT NULL, family_home_person3 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax (id INT AUTO_INCREMENT NOT NULL, tax_number VARCHAR(255) NOT NULL, tax_password VARCHAR(255) NOT NULL, tax_family_home_number VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE family_home');
        $this->addSql('DROP TABLE tax');
    }
}
