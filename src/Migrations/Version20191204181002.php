<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191204181002 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE highconcept (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, user_id INT DEFAULT NULL, protagoniste VARCHAR(255) NOT NULL, antagoniste VARCHAR(255) NOT NULL, contexte VARCHAR(255) NOT NULL, event_start VARCHAR(255) NOT NULL, stake VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_ED480166C18272 (projet_id), INDEX IDX_ED480166A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE highconcept ADD CONSTRAINT FK_ED480166C18272 FOREIGN KEY (projet_id) REFERENCES projets (id)');
        $this->addSql('ALTER TABLE highconcept ADD CONSTRAINT FK_ED480166A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE highconcept');
    }
}
