<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220331112123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'create tables, fk and indexes';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE order_item DROP CONSTRAINT order_item_product_id_fkey');
        // $this->addSql('ALTER TABLE cart_item DROP CONSTRAINT cart_item_product_id_fkey');
        // $this->addSql('ALTER TABLE product DROP CONSTRAINT product_company_id_fkey');
        // $this->addSql('ALTER TABLE product_category DROP CONSTRAINT product_category_company_id_fkey');
        // $this->addSql('ALTER TABLE company_address DROP CONSTRAINT company_address_company_id_fkey');
        // $this->addSql('ALTER TABLE company DROP CONSTRAINT company_category_id_fkey');
        // $this->addSql('ALTER TABLE cart_item DROP CONSTRAINT cart_item_session_id_fkey');
        // $this->addSql('ALTER TABLE product DROP CONSTRAINT product_category_id_fkey');
        // $this->addSql('DROP SEQUENCE shopping_session_id_seq CASCADE');
        // $this->addSql('DROP SEQUENCE user_address_id_seq CASCADE');
        // $this->addSql('DROP SEQUENCE cart_item_id_seq CASCADE');
        // $this->addSql('DROP SEQUENCE credit_id_seq CASCADE');
        // $this->addSql('DROP SEQUENCE order_item_id_seq CASCADE');
        // $this->addSql('DROP SEQUENCE product_id_seq CASCADE');
        // $this->addSql('DROP SEQUENCE product_category_id_seq CASCADE');
        // $this->addSql('DROP SEQUENCE company_id_seq CASCADE');
        // $this->addSql('DROP SEQUENCE company_address_id_seq CASCADE');
        // $this->addSql('DROP SEQUENCE company_category_id_seq CASCADE');

        // $this->addSql('CREATE SEQUENCE "order_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');

        $this->addSql('CREATE TABLE "order" (id SERIAL PRIMARY KEY, reference VARCHAR(50) UNIQUE NOT NULL, user_id INT, total INT NOT NULL, amount INT NOT NULL, status VARCHAR(50) DEFAULT (\'Waiting payment\') NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE "user" (id SERIAL PRIMARY KEY, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, "first_name" VARCHAR(50) NOT NULL, "last_name" VARCHAR(50) NOT NULL, "last_address" INT NOT NULL, "is_company_owner" BOOLEAN DEFAULT NULL, "created_at" TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), "updated_at" TIMESTAMP(0) WITHOUT TIME ZONE, "deactivated_at" TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE order_item (id SERIAL PRIMARY KEY, order_id INT NOT NULL, product_id INT NOT NULL, quantity INT DEFAULT (1) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE product (id SERIAL PRIMARY KEY, name VARCHAR(100) NOT NULL, image VARCHAR(255), description VARCHAR(255), category_id INT NOT NULL, price INT NOT NULL, disponibility BOOLEAN NOT NULL, company_id INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE product_category (id SERIAL PRIMARY KEY, name VARCHAR(50) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE company ( id SERIAL PRIMARY KEY, name VARCHAR(100) NOT NULL, image VARCHAR(255) NOT NULL, country_code INT NOT NULL, category_id INT NOT NULL, owner_id INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE company_address (id SERIAL PRIMARY KEY, company_id INT NOT NULL, name VARCHAR(100) NOT NULL, address_line1 VARCHAR(255) NOT NULL, address_line2 VARCHAR(255), city VARCHAR(255) NOT NULL, postal_code VARCHAR(20) NOT NULL, country VARCHAR(50) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE company_category (id SERIAL PRIMARY KEY, title VARCHAR(50) NOT NULL, image VARCHAR(255), created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE cart_item (id SERIAL PRIMARY KEY, session_id INT NOT NULL, product_id INT NOT NULL, quantity INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE shopping_session (id SERIAL PRIMARY KEY, user_id INT NOT NULL, total INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE user_address (id SERIAL PRIMARY KEY, user_id INT NOT NULL, name VARCHAR(50), address_line1 VARCHAR(255) NOT NULL, address_line2 VARCHAR(255), city VARCHAR(255) NOT NULL, postal_code VARCHAR(20) NOT NULL, country VARCHAR(255) NOT NULL, mobile VARCHAR(20) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('CREATE TABLE credit (id SERIAL PRIMARY KEY, user_id INT NOT NULL, reference VARCHAR(50) UNIQUE NOT NULL, amount_price INT NOT NULL, expiry date, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT (NOW()), updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE )');
        $this->addSql('ALTER TABLE order_item ADD CONSTRAINT order_item_order_id_fkey FOREIGN KEY (order_id) REFERENCES "order" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE order_item ADD CONSTRAINT order_item_product_id_fkey FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT product_category_id_fkey FOREIGN KEY (category_id) REFERENCES product_category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT company_category_id_fkey FOREIGN KEY (category_id) REFERENCES company_category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT company_owner_id_fkey FOREIGN KEY (owner_id) REFERENCES "user" (id)');
        $this->addSql('ALTER TABLE company_address ADD CONSTRAINT company_address_company_id_fkey FOREIGN KEY (company_id) REFERENCES company (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT product_company_id_fkey FOREIGN KEY (company_id) REFERENCES company (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "user" ADD CONSTRAINT user_last_address_fkey FOREIGN KEY (last_address) REFERENCES user_address (id) ON DELETE SET NULL NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "order" ADD CONSTRAINT order_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE SET NULL NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cart_item ADD CONSTRAINT cart_item_session_id_fkey FOREIGN KEY (session_id) REFERENCES shopping_session (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cart_item ADD CONSTRAINT cart_item_product_id_fkey FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE shopping_session ADD CONSTRAINT shopping_session_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_address ADD CONSTRAINT user_address_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE credit ADD CONSTRAINT credit_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('CREATE INDEX idx_order_user_id ON "order" (user_id)');
        $this->addSql('CREATE INDEX idx_order_reference ON "order" (reference)');
        $this->addSql('CREATE INDEX idx_order_item_order_id ON order_item (order_id)');
        $this->addSql('CREATE INDEX idx_order_item_product_id ON order_item (product_id)');
        $this->addSql('CREATE INDEX idx_product_company_id ON product (company_id)');
        $this->addSql('CREATE INDEX idx_company_category_id ON company (category_id)');
        $this->addSql('CREATE INDEX idx_company_owner_id ON company (owner_id)');
        $this->addSql('CREATE INDEX idx_company_address_company_id ON company_address (company_id)');
        $this->addSql('CREATE INDEX idx_company_category_title ON company_category (title)');
        $this->addSql('CREATE INDEX idx_cart_item_session_id ON cart_item (session_id)');
        $this->addSql('CREATE UNIQUE INDEX idx_shopping_session_user_id ON shopping_session (user_id)');
        $this->addSql('CREATE INDEX idx_user_address_user_id ON user_address (user_id)');
        $this->addSql('CREATE INDEX idx_credit_user_id ON credit (user_id)');

        // $this->addSql('DROP TABLE user_address');
        // $this->addSql('DROP TABLE credit');
        // $this->addSql('DROP TABLE product');
        // $this->addSql('DROP TABLE order_item');
        // $this->addSql('DROP TABLE company');
        // $this->addSql('DROP TABLE company_category');
        // $this->addSql('DROP TABLE shopping_session');
        // $this->addSql('DROP TABLE cart_item');
        // $this->addSql('DROP TABLE product_category');
        // $this->addSql('DROP TABLE company_address');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        // $this->addSql('CREATE SCHEMA public');
        // $this->addSql('DROP SEQUENCE "order_id_seq" CASCADE');
        // $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        // $this->addSql('CREATE SEQUENCE shopping_session_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE user_address_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE cart_item_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE credit_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE order_item_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE product_category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE company_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE company_address_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE SEQUENCE company_category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE TABLE user_address (id SERIAL NOT NULL, user_id INT NOT NULL, name VARCHAR(50) DEFAULT NULL, address_line1 VARCHAR(255) NOT NULL, address_line2 VARCHAR(255) DEFAULT NULL, city VARCHAR(255) NOT NULL, postal_code VARCHAR(20) NOT NULL, country VARCHAR(255) NOT NULL, mobile VARCHAR(20) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE TABLE credit (id SERIAL NOT NULL, user_id INT NOT NULL, reference VARCHAR(50) NOT NULL, amount_price INT NOT NULL, expiry DATE DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE UNIQUE INDEX credit_reference_key ON credit (reference)');
        // $this->addSql('CREATE TABLE product (id SERIAL NOT NULL, category_id INT NOT NULL, company_id INT NOT NULL, name VARCHAR(100) NOT NULL, image VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, price INT NOT NULL, disponibility BOOLEAN NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE INDEX IDX_D34A04AD12469DE2 ON product (category_id)');
        // $this->addSql('CREATE INDEX IDX_D34A04AD979B1AD6 ON product (company_id)');
        // $this->addSql('CREATE TABLE order_item (id SERIAL NOT NULL, product_id INT NOT NULL, order_id INT NOT NULL, quantity INT DEFAULT 1 NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE INDEX IDX_52EA1F094584665A ON order_item (product_id)');
        // $this->addSql('CREATE TABLE company (id SERIAL NOT NULL, category_id INT NOT NULL, name VARCHAR(100) NOT NULL, image VARCHAR(255) NOT NULL, country_code INT NOT NULL, owner_id INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE INDEX IDX_4FBF094F12469DE2 ON company (category_id)');
        // $this->addSql('CREATE TABLE company_category (id SERIAL NOT NULL, title VARCHAR(50) NOT NULL, image VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE TABLE shopping_session (id SERIAL NOT NULL, user_id INT DEFAULT NULL, total INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE TABLE cart_item (id SERIAL NOT NULL, session_id INT NOT NULL, product_id INT NOT NULL, quantity INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE INDEX IDX_F0FE2527613FECDF ON cart_item (session_id)');
        // $this->addSql('CREATE INDEX IDX_F0FE25274584665A ON cart_item (product_id)');
        // $this->addSql('CREATE TABLE product_category (id SERIAL NOT NULL, company_id INT NOT NULL, name VARCHAR(50) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE INDEX IDX_CDFC7356979B1AD6 ON product_category (company_id)');
        // $this->addSql('CREATE TABLE company_address (id SERIAL NOT NULL, company_id INT NOT NULL, name VARCHAR(100) NOT NULL, address_line1 VARCHAR(255) NOT NULL, address_line2 VARCHAR(255) DEFAULT NULL, city VARCHAR(255) NOT NULL, postal_code VARCHAR(20) NOT NULL, country VARCHAR(50) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT \'NOW()\', updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, deactivated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        // $this->addSql('CREATE INDEX IDX_2D1C7556979B1AD6 ON company_address (company_id)');
        // $this->addSql('ALTER TABLE product ADD CONSTRAINT product_category_id_fkey FOREIGN KEY (category_id) REFERENCES product_category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE product ADD CONSTRAINT product_company_id_fkey FOREIGN KEY (company_id) REFERENCES company (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE order_item ADD CONSTRAINT order_item_product_id_fkey FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE company ADD CONSTRAINT company_category_id_fkey FOREIGN KEY (category_id) REFERENCES company_category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE cart_item ADD CONSTRAINT cart_item_session_id_fkey FOREIGN KEY (session_id) REFERENCES shopping_session (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE cart_item ADD CONSTRAINT cart_item_product_id_fkey FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE product_category ADD CONSTRAINT product_category_company_id_fkey FOREIGN KEY (company_id) REFERENCES company (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('ALTER TABLE company_address ADD CONSTRAINT company_address_company_id_fkey FOREIGN KEY (company_id) REFERENCES company (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('DROP TABLE "order" CASCADE');
        $this->addSql('DROP TABLE "user" CASCADE');
        $this->addSql('DROP TABLE order_item CASCADE');
        $this->addSql('DROP TABLE product CASCADE');
        $this->addSql('DROP TABLE product_category CASCADE');
        $this->addSql('DROP TABLE company CASCADE');
        $this->addSql('DROP TABLE company_address CASCADE');
        $this->addSql('DROP TABLE company_category CASCADE');
        $this->addSql('DROP TABLE cart_item CASCADE');
        $this->addSql('DROP TABLE shopping_session CASCADE');
        $this->addSql('DROP TABLE user_address CASCADE');
        $this->addSql('DROP TABLE credit CASCADE');
    }
}
