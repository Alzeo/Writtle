<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191205143627 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE chapitre (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, number INT DEFAULT NULL, date DATETIME DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, resume VARCHAR(255) DEFAULT NULL, intrigue_principale LONGTEXT DEFAULT NULL, intrigure_secondaire LONGTEXT DEFAULT NULL, character_revel VARCHAR(255) DEFAULT NULL, INDEX IDX_8C62B025C18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chapitre_personnages (chapitre_id INT NOT NULL, personnages_id INT NOT NULL, INDEX IDX_FCB07F251FBEEF7B (chapitre_id), INDEX IDX_FCB07F257FFDACCA (personnages_id), PRIMARY KEY(chapitre_id, personnages_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT FK_8C62B025C18272 FOREIGN KEY (projet_id) REFERENCES projets (id)');
        $this->addSql('ALTER TABLE chapitre_personnages ADD CONSTRAINT FK_FCB07F251FBEEF7B FOREIGN KEY (chapitre_id) REFERENCES chapitre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chapitre_personnages ADD CONSTRAINT FK_FCB07F257FFDACCA FOREIGN KEY (personnages_id) REFERENCES personnages (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chapitre_personnages DROP FOREIGN KEY FK_FCB07F251FBEEF7B');
        $this->addSql('DROP TABLE chapitre');
        $this->addSql('DROP TABLE chapitre_personnages');
    }
}
