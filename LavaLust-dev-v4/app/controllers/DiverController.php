<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class DiverController extends Controller {

    public function home() {
        // Check if the user is logged in and has the diver role
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'diver') {
            redirect('login');
        }

        // Load the diver homepage view
        $this->call->view('diver/home');
    }
}
