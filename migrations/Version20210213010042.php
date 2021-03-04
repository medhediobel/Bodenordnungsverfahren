<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210213010042 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE verfahren ADD dienstsitz_id INT DEFAULT NULL, CHANGE auslage auslage VARCHAR(255) DEFAULT NULL, CHANGE karte karte VARCHAR(255) DEFAULT NULL, CHANGE lat lat DOUBLE PRECISION DEFAULT NULL, CHANGE lng lng DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE verfahren ADD CONSTRAINT FK_E7D4C3F918F740E1 FOREIGN KEY (dienstsitz_id) REFERENCES dienstsitz (id)');
        $this->addSql('CREATE INDEX IDX_E7D4C3F918F740E1 ON verfahren (dienstsitz_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE verfahren DROP FOREIGN KEY FK_E7D4C3F918F740E1');
        $this->addSql('DROP INDEX IDX_E7D4C3F918F740E1 ON verfahren');
        $this->addSql('ALTER TABLE verfahren DROP dienstsitz_id, CHANGE auslage auslage VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE karte karte VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE lat lat DOUBLE PRECISION DEFAULT \'NULL\', CHANGE lng lng DOUBLE PRECISION DEFAULT \'NULL\'');
    }
}
