<?php 

// This file is part of the Garbi theme for moodle
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package    moodlecore
 * @subpackage block
 * @copyright  2013 Fernando Acedo - 3bits elearning solutions  
 * @author     2013 Fernando Acedo <info@3-bits.com>
 * @version    0.2
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

       
if ($this->content !== NULL) {
    return $this->content;
}

$this->content = new stdClass;
$this->content->text = '';

require_once($CFG->dirroot.'/message/lib.php');

global $USER, $CFG, $SESSION;
$wwwroot = '';
$signup = '';

        
// User logged        
if (isloggedin()) {
            $this->content->text.= '<div class="userinfo">';
            $this->content->text.= '<div class="userinfodata">';
            
            // Picture
            $this->content->text.= $OUTPUT->user_picture($USER, array('size' => 100, 'class' => 'userinfoimg'));
            
            // Username
            $this->content->text.= 
                        '&nbsp;<a href="'.$CFG->wwwroot.'/user/profile.php?id=$USER->id">'.$USER->firstname.'</a>';

                         
            $this->content->text.= '</div><div class="userinfodata">';
            
            // Edit profile
            $this->content->text.= 
                        '<div class="userinfolink"><a href="'.$CFG->wwwroot.'/user/edit.php?id='.$USER->id.'&course='.$COURSE->id.'">'
                        .'<img class="icon" src="'.$OUTPUT->pix_url('i/edit').'" /></a></div>';
                        
            // Messages            
            $this->content->text.= 
                        '<div class="userinfolink">'
                        .'<span class="unreadmessages">'.message_count_unread_messages($USER).'</span><a href="'.$CFG->wwwroot.'/message/index.php">'
                        .'<img class="icon" src="'.$OUTPUT->pix_url('t/message').'" /></a></div>';

            //My Courses        
            $this->content->text.= 
                     '<div class="userinfolink"><a href="'.$CFG->wwwroot.'/course/index.php">'
                    .'<img class="icon" src="'.$OUTPUT->pix_url('i/course').'" /></a></div>';

            // Logout            
            $this->content->text.= 
                        '<div class="userinfolinkno"><a href="'.$CFG->wwwroot.'/login/logout.php?sesskey='.sesskey().'">'
                        .'<img class="icon" src="'.$OUTPUT->pix_url('logout', 'theme').'" />'
                        .'</a></div>';
                    
            $this->content->text.= '</div></div>';
        
      
        echo $this->content->text;
} else {
// User not logged

        if (empty($CFG->loginhttps)) {
            $wwwroot = $CFG->wwwroot;
        } else {
            // This actually is not so secure ;-), 'cause we're
            // in unencrypted connection...
            $wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
        }

        if (!empty($CFG->registerauth)) {
            $authplugin = get_auth_plugin($CFG->registerauth);
            if ($authplugin->can_signup()) {
                $signup = $wwwroot . '/login/signup.php';
            }
        }
        // TODO: now that we have multiauth it is hard to find out if there is a way to change password
        $forgot = $wwwroot . '/login/forgot_password.php';

        if (!empty($CFG->loginpasswordautocomplete)) {
            $autocomplete = 'autocomplete="off"';
        } else {
            $autocomplete = '';
        }

        $username = get_moodle_cookie();

        echo '<form class="userinfoform" id="login" method="post" action="'.get_login_url().'" '.$autocomplete.'>';
        echo '<div class="userinfousername">';
        echo '<input type="text" size="8" placeholder="'.get_string('username').'" name="username" id="login_username" value="'.s($username).'" /></div>';

        echo '<div class="userinfopassword">';
        echo '<input type="password" name="password" placeholder="'.get_string('password').'" id="login_password" value="" '.$autocomplete.' /></div>';

        echo '<input type="submit" value="'.get_string('login').'" /><br />';

        
        // Remember username link
        if (isset($CFG->rememberusername) and $CFG->rememberusername == 2) {
            $checked = $username ? 'checked="checked"' : '';
            echo '<div class="rememberusername"><input type="checkbox" name="rememberusername" id="rememberusername" value="1" '.$checked.'/>';
            echo '<label for="rememberusername">'.get_string('rememberusername', 'admin').'</label></div>';
        }

        
        //Registration link
        if (!empty($signup)) {
            echo '<div class="userinforegister"><a href="'.$signup.'">'.get_string('startsignup').'</a></div>';
        }

        //Forgot password link
        if (!empty($forgot)) {
            echo '<div class="userinfoforgot"><a href="'.$forgot.'">'.get_string('forgotaccount').'</a></div>';
        }
        
        echo '</form>';

        
        
}        
             
?>                    