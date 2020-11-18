<?php
class Migration_Add_mycolumn_to_mytable extends CI_Migration {

    public function __construct()
    {   
        parent::__construct();
    }

    // アップデート処理
    public function up()
    {   
        $fields = array(
            'mycolumn' => array (
                'type' => 'VARCHAR',
                'constraint' => '100'
            )   
        );  
        $this->dbforge->add_column('mytable', $fields);
    }   

    // ロールバック処理
    public function down()
    {   
        $this->dbforge->drop_column('mytable', 'mycolumn');
    }

}
