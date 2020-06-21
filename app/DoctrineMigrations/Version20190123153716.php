<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20190123153716 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE audit_associations (id INT AUTO_INCREMENT NOT NULL, typ VARCHAR(128) NOT NULL, tbl VARCHAR(128) DEFAULT NULL, label VARCHAR(255) DEFAULT NULL, fk VARCHAR(255) NOT NULL, class VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE audit_logs (id INT AUTO_INCREMENT NOT NULL, source_id INT NOT NULL, target_id INT DEFAULT NULL, blame_id INT DEFAULT NULL, action VARCHAR(12) NOT NULL, tbl VARCHAR(128) NOT NULL, diff LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json_array)\', logged_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_D62F2858953C1C61 (source_id), UNIQUE INDEX UNIQ_D62F2858158E0B66 (target_id), UNIQUE INDEX UNIQ_D62F28588C082A2E (blame_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE audit_logs ADD CONSTRAINT FK_D62F2858953C1C61 FOREIGN KEY (source_id) REFERENCES audit_associations (id)');
        $this->addSql('ALTER TABLE audit_logs ADD CONSTRAINT FK_D62F2858158E0B66 FOREIGN KEY (target_id) REFERENCES audit_associations (id)');
        $this->addSql('ALTER TABLE audit_logs ADD CONSTRAINT FK_D62F28588C082A2E FOREIGN KEY (blame_id) REFERENCES audit_associations (id)');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE convention_proprietaire');
        $this->addSql('DROP TABLE zone_sante');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE audit_logs DROP FOREIGN KEY FK_D62F2858953C1C61');
        $this->addSql('ALTER TABLE audit_logs DROP FOREIGN KEY FK_D62F2858158E0B66');
        $this->addSql('ALTER TABLE audit_logs DROP FOREIGN KEY FK_D62F28588C082A2E');
        $this->addSql('CREATE TABLE commune (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE convention_proprietaire (convention_id INT NOT NULL, proprietaire_id INT NOT NULL, INDEX IDX_537C4571A2ACEBCC (convention_id), INDEX IDX_537C457176C50E4A (proprietaire_id), PRIMARY KEY(convention_id, proprietaire_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zone_sante (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE audit_associations');
        $this->addSql('DROP TABLE audit_logs');
    }
}
