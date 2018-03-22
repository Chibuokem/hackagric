<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_addTutorialdetails extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        'description' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        'image' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        
                        'video_link' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),

                        'date_added' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        
                ));

                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('tutorials');
        }

        public function down()
        {
                $this->dbforge->drop_table('tutorials');
        }
}