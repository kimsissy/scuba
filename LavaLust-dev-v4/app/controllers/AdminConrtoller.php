<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminController extends Controller {

    public function home() {
        // Check if the user is logged in and has the admin role
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }

        // Load the admin homepage view
        $this->call->view('admin/home');
    }
}
