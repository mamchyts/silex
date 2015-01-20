<?php

use Phpmig\Migration\Migration;

class Test extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $sql = <<<SQL
CREATE TABLE so_skd_profile_shipping_address (
  id INT AUTO_INCREMENT NOT NULL,
  profile_id INT NOT NULL,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  address1 VARCHAR(255) NOT NULL,
  address2 VARCHAR(255) DEFAULT NULL,
  city VARCHAR(100) NOT NULL,
  country VARCHAR(100) NOT NULL,
  state VARCHAR(100) NOT NULL,
  zip_code VARCHAR(10) NOT NULL,
  PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
SQL;

        $container = $this->getContainer(); 
        $container['db']->query($sql);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
