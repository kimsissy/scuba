<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->check_admin(); // Ensure only admin users can access
    }

    // Admin home page
    public function home() {
        $this->call->view('admin/home');  // Admin home view
    }

    // Check if user is admin
    private function check_admin() {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login'); // Redirect to login if not admin
        }
    }
}
