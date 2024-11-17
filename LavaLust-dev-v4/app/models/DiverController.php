<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class DiverController extends Controller {

    public function home() {
        $this->call->view('diver/home');  // Diver home view
    }
}
