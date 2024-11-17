<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {

    protected $table = 'users';

    public function __construct() {
        parent::__construct();
    }

    // Check if user exists by email
    public function user_exists($email) {
        return $this->db->table($this->table)
                        ->where('email', $email)
                        ->get()
                        ->num_rows() > 0;
    }

    // Create new user
    public function create_user($data) {
        return $this->db->table($this->table)
                        ->insert($data);
    }

    // Retrieve user by email
    public function get_user_by_email($email) {
        return $this->db->table($this->table)
                        ->where('email', $email)
                        ->get()
                        ->row_array(); // Returns a user with 'id', 'email', 'password', and 'role'
    }
}
