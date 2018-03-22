<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_addChat extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'reciever_id' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => 11,

                        ),
                        'sender_id' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => 11,

                        ),
                        'message_time' => array(
                                'type' => 'TEXT',
                                'constraint' => '255',
                        ),
                        
                        

                        'message_status' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => 2,

                        ),

                        'recieved_time' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                        
                        
                ));

                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('chats');
        }

        public function down()
        {
                $this->dbforge->drop_table('chats');
        }
}