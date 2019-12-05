<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191205131518 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE personnages (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, role VARCHAR(255) NOT NULL, surname VARCHAR(255) DEFAULT NULL, genre VARCHAR(255) DEFAULT NULL, age INT DEFAULT NULL, residence VARCHAR(255) DEFAULT NULL, place_born VARCHAR(255) DEFAULT NULL, profession VARCHAR(255) DEFAULT NULL, taille VARCHAR(255) DEFAULT NULL, poids INT DEFAULT NULL, description LONGTEXT DEFAULT NULL, accessoires VARCHAR(255) DEFAULT NULL, tenue VARCHAR(255) DEFAULT NULL, croyances VARCHAR(255) DEFAULT NULL, secrets VARCHAR(255) DEFAULT NULL, tique_parole VARCHAR(255) DEFAULT NULL, education VARCHAR(255) DEFAULT NULL, richesse VARCHAR(255) DEFAULT NULL, qualites VARCHAR(255) DEFAULT NULL, defauts VARCHAR(255) DEFAULT NULL, addictions VARCHAR(255) DEFAULT NULL, weakness VARCHAR(255) DEFAULT NULL, INDEX IDX_286738A6C18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personnages ADD CONSTRAINT FK_286738A6C18272 FOREIGN KEY (projet_id) REFERENCES projets (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE personnages');
    }
}
