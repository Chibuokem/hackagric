<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_addApplications extends CI_Migration {

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
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        'application_id' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                         

                        'date_added' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),

                        
                ));

                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('applications');
        }

        public function down()
        {
                $this->dbforge->drop_table('applications');
        }
}