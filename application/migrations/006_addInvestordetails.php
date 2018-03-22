<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_AddInvestordetails extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment'=>TRUE
                        ),
                        'farms_invested_in' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,


                        ),
                        'interests' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

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
                        
                        'state' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        
                        'date_added' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        'password' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

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
                                'constraint' => '255',

                        ),

                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('investors');
        }

        public function down()
        {
                $this->dbforge->drop_table('investors');
        }
}