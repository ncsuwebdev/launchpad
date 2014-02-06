<?php

class Db_017_otframework_launchpad_init extends Ot_Migrate_Migration_Abstract
{
    public function up($dba)
    {
        // create launchpad applications table
        $dba->query("
            CREATE TABLE IF NOT EXISTS `" . $this->tablePrefix . "tbl_launchpad_applications` (
            `id` INT NOT NULL,
            `url` TEXT NOT NULL,
            `title` VARCHAR(255) NOT NULL,
            `graphic` TEXT NOT NULL,
            `adaptive` TINYINT NOT NULL DEFAULT 0,
            PRIMARY KEY (`id`),
            UNIQUE INDEX `title_UNIQUE` (`title` ASC))
            ENGINE = InnoDB
        ");
        
        // creat application status table
        $dba->query("
            CREATE TABLE IF NOT EXISTS `" . $this->tablePrefix . "tbl_launchpad_status` (
                `id` INT NOT NULL,
                `status` ENUM('active', 'inactive', 'maintenance', 'down') NOT NULL DEFAULT 'inactive',
            PRIMARY KEY (`id`),
            CONSTRAINT `ot_tbl_launchpad_status`
            FOREIGN KEY (`id`)
            REFERENCES `launchpad_local`.`ot_tbl_launchpad_applications` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB
        ");
    }
    
    public function down($dba)
    {
        
    }
}

?>