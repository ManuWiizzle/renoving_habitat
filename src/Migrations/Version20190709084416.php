<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190709084416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO `customer_review` VALUES (5,'Sylvain','Blondeau','J\'adore le tarvail effectué par l\'équipe, merci !')");
        $this->addSql("INSERT INTO `good_deal` VALUES (2,'-20% sur la menuiserie','Pour cette fin d\'année TVA OFFERTES pour tout travaux d\'isolation thermique et nettoyage toiture 9.99€/m2');");
        $this->addSql('INSERT INTO `user` VALUES (5,\'toitureetfacade\',\'[\"ROLE_ADMIN\"]\',\'$argon2i$v=19$m=1024,t=2,p=2$TzU1R2dISDk2UFdLeVgzNg$pJXVrEOzl7pT6UJ0tnsqVugjcKOnMBuCpNix/9LQlD4\',\'renoving3a@gmail.com\');');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('TRUNCATE TABLE user; TRUNCATE TABLE customer_review; TRUNCATE TABLE good_deal;');
    }
}
