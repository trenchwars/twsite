<?php
	// key for stats table is game_id, stat_id, target_id, round_id
	// target_id can represent a player, squad, team, channel, etc.
	// round_id is actually unique, and is linked with the round details in rounds
	// subtable is stat_names containing the text descriptor for stat_id (language specific)
	// referenced tables are games which is linked with game_id and rounds wich is linked with round_id
    // o)-<|

	class Stats extends TW_Model {
		public $tableName = 'stats';

		public function __construct() {
			parent::__construct();
		}

		public function createSchema($dropTable=false) {
			if($dropTable) $this->db->query('DROP TABLE IF EXISTS `'.$this->tableName.'`');

			$this->db->query('CREATE TABLE `'.$this->tableName.'` BLAHBLAH');
		}

		// custom save function, this class is compound key
		public function save($data) {
			if(!isset($data['game_id']) || !isset($data['stat_id']) || !isset($data['target_id']) || !isset($data['round_id'])) {
				return false; // we need all of these keys to make a valid record.
			}

			if((int)$data['game_id'] < 1 || (int)$data['stat_id'] < 1 || (int)$data['targeT_id'] < 1 || (int)$data['round_id'] < 1) {
				return false; // all the keys must be a positive integer to be valid.
			}

			if(!isset($data['value'])) $data['value'] = ''; // we will assume a blank value was wanted if no value was passed.

			$this->db->where(array('game_id' => $data['game_id'], 'stat_id' => $data['stat_id'], 'target_id' => $data['target_id'], 'round_id' => $data['round_id']));
			$this->db->insert($this->tableName);
		}
	}
