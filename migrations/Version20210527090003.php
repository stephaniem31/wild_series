<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210527090003 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE program DROP FOREIGN KEY FK_92ED7784A21214B7');
        $this->addSql('DROP INDEX IDX_92ED7784A21214B7 ON program');
        $this->addSql('ALTER TABLE program DROP categories_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE program ADD categories_id INT NOT NULL');
        $this->addSql('ALTER TABLE program ADD CONSTRAINT FK_92ED7784A21214B7 FOREIGN KEY (categories_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_92ED7784A21214B7 ON program (categories_id)');
    }
}
