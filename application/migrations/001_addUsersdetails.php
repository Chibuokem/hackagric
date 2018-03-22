<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_AddUsersdetails extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                

                        ),
                          
                       'bio' => array(
                                'type' => 'VARCHAR',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                       'email' => array(
                                'type' => 'VARCHAR',
                                'null' => TRUE,
                                'constraint' => '100',

                        ),
                       'phone' => array(
                                'type' => 'VARCHAR',
                                'null' => TRUE,
                                'constraint' => '20',

                        ),
                       'state' => array(
                                'type' => 'VARCHAR',
                                'null' => TRUE,
                                'constraint' => '100',

                        ),
                       'date_added' => array(
                                'type' => 'VARCHAR',
                                'null' => TRUE,
                                'constraint' => '100',

                        ),
                       'password' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                
                        ),
                       'gender' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                
                        ),
                       'address' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                
                        ),
                       'type' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}