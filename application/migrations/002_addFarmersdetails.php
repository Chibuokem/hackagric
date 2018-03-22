<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_AddFarmersdetails extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => 11,

                        ),
                          
                       'image' => array(
                                'type' => 'VARCHAR',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('farmers_details');
        }

        public function down()
        {
                $this->dbforge->drop_table('farmers_details');
        }
}