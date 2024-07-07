<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240618153001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attendance (id INT AUTO_INCREMENT NOT NULL, status_id INT DEFAULT NULL, student_id INT DEFAULT NULL, date DATE NOT NULL, INDEX IDX_6DE30D916BF700BD (status_id), INDEX IDX_6DE30D91CB944F1A (student_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE report (id INT AUTO_INCREMENT NOT NULL, student_id INT DEFAULT NULL, report_status_id INT DEFAULT NULL, date DATE NOT NULL, INDEX IDX_C42F7784CB944F1A (student_id), INDEX IDX_C42F778445436DA5 (report_status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE report_status (id INT AUTO_INCREMENT NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE status (id INT AUTO_INCREMENT NOT NULL, status_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_subject (student_id INT NOT NULL, subject_id INT NOT NULL, INDEX IDX_16F88B82CB944F1A (student_id), INDEX IDX_16F88B8223EDC87 (subject_id), PRIMARY KEY(student_id, subject_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE attendance ADD CONSTRAINT FK_6DE30D916BF700BD FOREIGN KEY (status_id) REFERENCES status (id)');
        $this->addSql('ALTER TABLE attendance ADD CONSTRAINT FK_6DE30D91CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE report ADD CONSTRAINT FK_C42F7784CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE report ADD CONSTRAINT FK_C42F778445436DA5 FOREIGN KEY (report_status_id) REFERENCES report_status (id)');
        $this->addSql('ALTER TABLE student_subject ADD CONSTRAINT FK_16F88B82CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student_subject ADD CONSTRAINT FK_16F88B8223EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student ADD semester INT NOT NULL, ADD section VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attendance DROP FOREIGN KEY FK_6DE30D916BF700BD');
        $this->addSql('ALTER TABLE attendance DROP FOREIGN KEY FK_6DE30D91CB944F1A');
        $this->addSql('ALTER TABLE report DROP FOREIGN KEY FK_C42F7784CB944F1A');
        $this->addSql('ALTER TABLE report DROP FOREIGN KEY FK_C42F778445436DA5');
        $this->addSql('ALTER TABLE student_subject DROP FOREIGN KEY FK_16F88B82CB944F1A');
        $this->addSql('ALTER TABLE student_subject DROP FOREIGN KEY FK_16F88B8223EDC87');
        $this->addSql('DROP TABLE attendance');
        $this->addSql('DROP TABLE report');
        $this->addSql('DROP TABLE report_status');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE student_subject');
        $this->addSql('DROP TABLE subject');
        $this->addSql('ALTER TABLE student DROP semester, DROP section');
    }
}
