<?php
class DashboardController extends Controller {

    public function index() {
        $visitor = $this->model("Visitor");

        $data = [
            "visitors" => $visitor->todayCount(),
            "status"   => "Online"
        ];

        $this->view("dashboard", $data);
    }
}
