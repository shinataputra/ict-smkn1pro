<?php
class Visitor extends Model {

    public function todayCount() {
        $stmt = $this->db->query("SELECT COUNT(*) FROM visitors WHERE DATE(created_at)=CURDATE()");
        return $stmt->fetchColumn();
    }
}
