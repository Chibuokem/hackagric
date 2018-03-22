<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_FarmersDetails extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'phone' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '20',

                        ),
                        'crop_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        'state' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        'local_govt' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        'identification_number' => array(
                                'type' => 'TEXT',
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