<?php

/*declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
/*final class Version20231130101107 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE image image VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DBB1A0722');
        $this->addSql('DROP INDEX IDX_6EEAA67DBB1A0722 ON commande');
        $this->addSql('ALTER TABLE commande DROP details_id');
        $this->addSql('ALTER TABLE detail ADD commande_id INT NOT NULL');
        $this->addSql('ALTER TABLE detail ADD CONSTRAINT FK_2E067F9382EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('CREATE INDEX IDX_2E067F9382EA2E54 ON detail (commande_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail DROP FOREIGN KEY FK_2E067F9382EA2E54');
        $this->addSql('DROP INDEX IDX_2E067F9382EA2E54 ON detail');
        $this->addSql('ALTER TABLE detail DROP commande_id');
        $this->addSql('ALTER TABLE categorie CHANGE image image VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE commande ADD details_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DBB1A0722 FOREIGN KEY (details_id) REFERENCES detail (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67DBB1A0722 ON commande (details_id)');
    }
}*/
