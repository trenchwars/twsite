<?php    
    class Squad_model extends TW_Model {
        public $tableName = 'squads';
        public $keyName   = 'id';

        public function __construct() {
            parent::__construct();
        }

        public function getIdByName($name) {
            $res = $this->db->query('SELECT fnTeamID FROM tblTeam WHERE fcTeamName LIKE ?', array($name));
            if($row = $res->row_array()) return $row['fnTeamID'];
            else return false;
        }

        public function findById($id) {
            $res = $this->db->query('SELECT 
                    fnTeamID        AS id,
                    fcTeamName      AS name,
                    fcDescription   AS description,
                    fcWebsite       AS website,
                    fcBannerFileExt AS banner,
                    fnFrequency     AS frequency,
                    fnTWL           AS twl,
                    fdCreated       AS date_created,
                    fdDeleted       AS date_deleted,
                    ftUpdated       AS date_updated
                FROM tblTeam WHERE fnTeamId = ?', array($id));
            if(!$row = $res->row_array()) return false;

            $res = $this->db->query('SELECT
                    tu.fnTeamUserID  AS team_user_id,
                    tu.fnUserID      AS user_id,
                    tu.fnTeamID      AS team_id,
                    tu.fnCurrentTeam AS team_active,
                    tu.fdJoined      AS date_joined,
                    tu.fdQuit        AS date_quit,
                    tu.fnApply       AS is_applying,
                    tu.fnTWL         AS is_twl,
                    tu.ftUpdated     AS date_updated,
                    
                    u.fcUserName     AS player_name,

                    up.fcCountryCode AS country_code,
                    up.fcLocation    AS location,
                    up.fnGender      AS gender,
                    up.fdBirthdate   AS birthday,
                    up.fcUrl         AS url,
                    up.fnShip        AS ship_id,
                    up.fcArena       AS arena,
                    up.fcBook        AS book,
                    up.fcMovie       AS movie,
                    up.fcBand        AS band,
                    up.fcSong        AS song,
                    up.fcInfo        AS info,
                    up.fcQuote       AS quote,
                    up.ftUpdated     AS date_profile_updated
                FROM tblTeamUser tu
                LEFT JOIN tblUserProfile up ON up.fnUserID = tu.fnUserID
                LEFT JOIN tblUser        u  ON u.fnUserID  = tu.fnUserID
                WHERE tu.fnTeamID = ?', array((int)$id));
            $row['players'] = $res->result_array();
            return $row;
        }
    }
