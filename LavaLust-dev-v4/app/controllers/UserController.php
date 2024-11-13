<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {
    
    public function __construct() {
        parent::__construct();
        $this->call->library('session');  // Load session library
        $this->call->model('User_model'); // Load User model
    }

    // Show the sign-up form
    public function showSignUpForm() {
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
        $this->call->view('auth/signup', $data);
    }

    // Handle user registration
    public function signUp() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validation
            $username = $this->io->post('username');
            $email = $this->io->post('email');
            $password = $this->io->post('password');
            $passwordConfirmation = $this->io->post('password_confirmation');

            // Check for empty fields and matching passwords
            if (!$username || !$email || !$password || !$passwordConfirmation || $password !== $passwordConfirmation) {
                $this->session->set_flashdata('error', 'All fields are required and passwords must match.');
                redirect('signup');
            }

            // Check if email already exists
            if ($this->User_model->user_exists($email)) {
                $this->session->set_flashdata('error', 'Email is already registered.');
                redirect('signup');
            }

            // Encrypt password and create user
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);
            $userData = [
                'username' => $username,
                'email' => $email,
                'password' => $passwordHash,
                'role' => 'diver'  // Default role
            ];

            // Create the user in the database
            $this->User_model->create_user($userData);
            $this->session->set_flashdata('success', 'Account created successfully. Please log in.');
            redirect('login');
        } else {
            show_404();
        }
    }

    // Show the login form
    public function showLoginForm() {
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
        $this->call->view('auth/login', $data);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $this->io->post('email');
            $password = $this->io->post('password');
    
            // Retrieve user by email
            $user = $this->User_model->get_user_by_email($email);
    
            // Verify the password
            if ($user && password_verify($password, $user['password'])) {
                $this->session->set_userdata('user_id', $user['id']); // Store user ID in session
                $this->session->set_userdata('role', $user['role']); // Store user role in session
                $this->session->set_flashdata('success', 'Welcome back!');
    
                // Redirect based on user role (admin or diver)
                if ($user['role'] == 'admin') {
                    redirect('admin/home'); // Redirect to admin homepage
                } else {
                    redirect('diver/home'); // Redirect to diver homepage
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password.');
                redirect('login');
            }
        } else {
            show_404();
        }
    }

    // Log user out
    public function logout() {
        $this->session->unset_userdata('user_id'); // Clear user session
        $this->session->unset_userdata('role'); // Clear user role session
        $this->session->set_flashdata('success', 'You have been logged out.');
        redirect('login');
    }
}
