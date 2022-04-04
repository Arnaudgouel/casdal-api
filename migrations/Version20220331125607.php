<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220331125607 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE cart_item ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE cart_item ALTER session_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE cart_item ALTER product_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE company ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE company ALTER category_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE company ALTER owner_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE company_address ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE company_address ALTER company_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE company_category ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE credit DROP CONSTRAINT credit_user_id_fkey');
        // $this->addSql('ALTER TABLE credit ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE credit ALTER user_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE credit ADD CONSTRAINT FK_1CC16EFEA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE "order" ADD user_id_id INT DEFAULT NULL');
        // $this->addSql('ALTER TABLE "order" ADD reference VARCHAR(50) NOT NULL');
        // $this->addSql('ALTER TABLE "order" ADD user_id INT DEFAULT NULL');
        // $this->addSql('ALTER TABLE "order" ADD total INT NOT NULL');
        // $this->addSql('ALTER TABLE "order" ADD status VARCHAR(50) NOT NULL');
        // $this->addSql('ALTER TABLE "order" ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        // $this->addSql('ALTER TABLE "order" ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        // $this->addSql('ALTER TABLE "order" ADD deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        // $this->addSql('COMMENT ON COLUMN "order".created_at IS \'(DC2Type:datetime_immutable)\'');
        // $this->addSql('COMMENT ON COLUMN "order".updated_at IS \'(DC2Type:datetime_immutable)\'');
        // $this->addSql('COMMENT ON COLUMN "order".deactivated_at IS \'(DC2Type:datetime_immutable)\'');
        // $this->addSql('ALTER TABLE "order" ADD CONSTRAINT FK_F52993989D86650F FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('CREATE INDEX IDX_F52993989D86650F ON "order" (user_id)');
        // $this->addSql('ALTER TABLE order_item ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE order_item ALTER order_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE order_item ALTER product_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE product ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE product ALTER category_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE product ALTER company_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE product_category ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE product_category ALTER company_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE shopping_session DROP CONSTRAINT shopping_session_user_id_fkey');
        // $this->addSql('ALTER TABLE shopping_session ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE shopping_session ADD CONSTRAINT FK_CECE98A6A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE "user" ADD last_address_id INT DEFAULT NULL');
        // $this->addSql('ALTER TABLE "user" ADD first_name VARCHAR(100) NOT NULL');
        // $this->addSql('ALTER TABLE "user" ADD last_name VARCHAR(100) NOT NULL');
        // $this->addSql('ALTER TABLE "user" ADD is_company_owner BOOLEAN DEFAULT NULL');
        // $this->addSql('ALTER TABLE "user" ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        // $this->addSql('ALTER TABLE "user" ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        // $this->addSql('ALTER TABLE "user" ADD deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        // $this->addSql('ALTER TABLE "user" ALTER email TYPE VARCHAR(180)');
        // $this->addSql('COMMENT ON COLUMN "user".created_at IS \'(DC2Type:datetime_immutable)\'');
        // $this->addSql('COMMENT ON COLUMN "user".updated_at IS \'(DC2Type:datetime_immutable)\'');
        // $this->addSql('COMMENT ON COLUMN "user".deactivated_at IS \'(DC2Type:datetime_immutable)\'');
        // $this->addSql('ALTER TABLE "user" ADD CONSTRAINT FK_8D93D6491CC3C59F FOREIGN KEY (last_address_id) REFERENCES user_address (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6491CC3C59F ON "user" (last_address_id)');
        // $this->addSql('ALTER TABLE user_address DROP CONSTRAINT user_address_user_id_fkey');
        // $this->addSql('ALTER TABLE user_address ALTER id DROP DEFAULT');
        // $this->addSql('ALTER TABLE user_address ALTER user_id DROP NOT NULL');
        // $this->addSql('ALTER TABLE user_address ADD CONSTRAINT FK_5543718BA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        // $this->addSql('CREATE SCHEMA IF NOT EXISTS public');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS product_category_id_seq');
        // $this->addSql('SELECT setval(\'product_category_id_seq\', (SELECT MAX(id) FROM product_category))');
        // $this->addSql('ALTER TABLE product_category ALTER id SET DEFAULT nextval(\'product_category_id_seq\')');
        // $this->addSql('ALTER TABLE product_category ALTER company_id SET NOT NULL');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS cart_item_id_seq');
        // $this->addSql('SELECT setval(\'cart_item_id_seq\', (SELECT MAX(id) FROM cart_item))');
        // $this->addSql('ALTER TABLE cart_item ALTER id SET DEFAULT nextval(\'cart_item_id_seq\')');
        // $this->addSql('ALTER TABLE cart_item ALTER product_id SET NOT NULL');
        // $this->addSql('ALTER TABLE cart_item ALTER session_id SET NOT NULL');
        // $this->addSql('ALTER TABLE credit DROP CONSTRAINT FK_1CC16EFEA76ED395');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS credit_id_seq');
        // $this->addSql('SELECT setval(\'credit_id_seq\', (SELECT MAX(id) FROM credit))');
        // $this->addSql('ALTER TABLE credit ALTER id SET DEFAULT nextval(\'credit_id_seq\')');
        // $this->addSql('ALTER TABLE credit ALTER user_id SET NOT NULL');
        // $this->addSql('ALTER TABLE credit ADD CONSTRAINT credit_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS order_item_id_seq');
        // $this->addSql('SELECT setval(\'order_item_id_seq\', (SELECT MAX(id) FROM order_item))');
        // $this->addSql('ALTER TABLE order_item ALTER id SET DEFAULT nextval(\'order_item_id_seq\')');
        // $this->addSql('ALTER TABLE order_item ALTER order_id SET NOT NULL');
        // $this->addSql('ALTER TABLE order_item ALTER product_id SET NOT NULL');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS product_id_seq');
        // $this->addSql('SELECT setval(\'product_id_seq\', (SELECT MAX(id) FROM product))');
        // $this->addSql('ALTER TABLE product ALTER id SET DEFAULT nextval(\'product_id_seq\')');
        // $this->addSql('ALTER TABLE product ALTER category_id SET NOT NULL');
        // $this->addSql('ALTER TABLE product ALTER company_id SET NOT NULL');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS company_id_seq');
        // $this->addSql('SELECT setval(\'company_id_seq\', (SELECT MAX(id) FROM company))');
        // $this->addSql('ALTER TABLE company ALTER id SET DEFAULT nextval(\'company_id_seq\')');
        // $this->addSql('ALTER TABLE company ALTER category_id SET NOT NULL');
        // $this->addSql('ALTER TABLE company ALTER owner_id SET NOT NULL');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS company_category_id_seq');
        // $this->addSql('SELECT setval(\'company_category_id_seq\', (SELECT MAX(id) FROM company_category))');
        // $this->addSql('ALTER TABLE company_category ALTER id SET DEFAULT nextval(\'company_category_id_seq\')');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS company_address_id_seq');
        // $this->addSql('SELECT setval(\'company_address_id_seq\', (SELECT MAX(id) FROM company_address))');
        // $this->addSql('ALTER TABLE company_address ALTER id SET DEFAULT nextval(\'company_address_id_seq\')');
        // $this->addSql('ALTER TABLE company_address ALTER company_id SET NOT NULL');
        // $this->addSql('ALTER TABLE shopping_session DROP CONSTRAINT FK_CECE98A6A76ED395');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS shopping_session_id_seq');
        // $this->addSql('SELECT setval(\'shopping_session_id_seq\', (SELECT MAX(id) FROM shopping_session))');
        // $this->addSql('ALTER TABLE shopping_session ALTER id SET DEFAULT nextval(\'shopping_session_id_seq\')');
        // $this->addSql('ALTER TABLE shopping_session ADD CONSTRAINT shopping_session_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE user_address DROP CONSTRAINT FK_5543718BA76ED395');
        // $this->addSql('CREATE SEQUENCE IF NOT EXISTS user_address_id_seq');
        // $this->addSql('SELECT setval(\'user_address_id_seq\', (SELECT MAX(id) FROM user_address))');
        // $this->addSql('ALTER TABLE user_address ALTER id SET DEFAULT nextval(\'user_address_id_seq\')');
        // $this->addSql('ALTER TABLE user_address ALTER user_id SET NOT NULL');
        // $this->addSql('ALTER TABLE user_address ADD CONSTRAINT user_address_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE "order" DROP CONSTRAINT FK_F52993989D86650F');
        // $this->addSql('DROP INDEX IDX_F52993989D86650F');
        // $this->addSql('ALTER TABLE "order" DROP user_id_id');
        // $this->addSql('ALTER TABLE "order" DROP reference');
        // $this->addSql('ALTER TABLE "order" DROP user_id');
        // $this->addSql('ALTER TABLE "order" DROP total');
        // $this->addSql('ALTER TABLE "order" DROP status');
        // $this->addSql('ALTER TABLE "order" DROP created_at');
        // $this->addSql('ALTER TABLE "order" DROP updated_at');
        // $this->addSql('ALTER TABLE "order" DROP deactivated_at');
        // $this->addSql('ALTER TABLE "user" DROP CONSTRAINT FK_8D93D6491CC3C59F');
        // $this->addSql('DROP INDEX UNIQ_8D93D6491CC3C59F');
        // $this->addSql('ALTER TABLE "user" DROP last_address_id');
        // $this->addSql('ALTER TABLE "user" DROP first_name');
        // $this->addSql('ALTER TABLE "user" DROP last_name');
        // $this->addSql('ALTER TABLE "user" DROP is_company_owner');
        // $this->addSql('ALTER TABLE "user" DROP created_at');
        // $this->addSql('ALTER TABLE "user" DROP updated_at');
        // $this->addSql('ALTER TABLE "user" DROP deactivated_at');
        // $this->addSql('ALTER TABLE "user" ALTER email TYPE VARCHAR(100)');
    }
}
