<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180209162058 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE entry DROP FOREIGN KEY FK_2B219D7038B53C32');
        $this->addSql('DROP INDEX IDX_2B219D7038B53C32 ON entry');
        $this->addSql('ALTER TABLE entry CHANGE company_id_id company_id INT NOT NULL');
        $this->addSql('ALTER TABLE entry ADD CONSTRAINT FK_2B219D70979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('CREATE INDEX IDX_2B219D70979B1AD6 ON entry (company_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE entry DROP FOREIGN KEY FK_2B219D70979B1AD6');
        $this->addSql('DROP INDEX IDX_2B219D70979B1AD6 ON entry');
        $this->addSql('ALTER TABLE entry CHANGE company_id company_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE entry ADD CONSTRAINT FK_2B219D7038B53C32 FOREIGN KEY (company_id_id) REFERENCES company (id)');
        $this->addSql('CREATE INDEX IDX_2B219D7038B53C32 ON entry (company_id_id)');
    }
}
