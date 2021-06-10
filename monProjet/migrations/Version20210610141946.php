<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210610141946 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artist (id INT AUTO_INCREMENT NOT NULL, artist_name VARCHAR(255) NOT NULL, artist_url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE disc (id INT AUTO_INCREMENT NOT NULL, artist_id_id INT NOT NULL, disc_title VARCHAR(255) NOT NULL, disc_year INT NOT NULL, disc_picture VARCHAR(255) NOT NULL, disc_label VARCHAR(255) NOT NULL, disc_genre VARCHAR(255) NOT NULL, disc_price NUMERIC(10, 2) NOT NULL, INDEX IDX_2AF55301F48AE04 (artist_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE disc ADD CONSTRAINT FK_2AF55301F48AE04 FOREIGN KEY (artist_id_id) REFERENCES artist (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE disc DROP FOREIGN KEY FK_2AF55301F48AE04');
        $this->addSql('DROP TABLE artist');
        $this->addSql('DROP TABLE disc');
    }
}
