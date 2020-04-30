<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Tarifangkot extends CI_Migration {
	public function up() {
        // Add column in table tracks
        $fields = array(
            'tarifPerKm' => array('type' => 'INT'),
            'tarifMinimal' => array('type' => 'INT')
        );
        $this->dbforge->add_column('tracks', $fields); 
        $this->db->set('tarifPerKm', 1000);
        $this->db->set('tarifMinimal', 2000);
        $this->db->update('tracks');
	}

	public function down() {
		// void
	}
}