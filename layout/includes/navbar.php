<?php
// This file is part of Moodle - http://moodle.org/
//
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
 * This is built using the Clean template to allow for new theme's using
 * UIKit framework
 *
 *
 * @package   theme_uikit
 * @copyright 2014 Eduardo Ramos
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$displaysitename = isset($PAGE->theme->settings->displaysitename) ? $PAGE->theme->settings->displaysitename : true;
$displayloggedusermode = isset($PAGE->theme->settings->displayloggedusermode) ? $PAGE->theme->settings->displayloggedusermode : 0;

?>
               <?php
$context = $PAGE->context;
$contextsystem = context_system::instance();
if ($context->id != $contextsystem->id 
    and (($context instanceof context_course and $context->id != 2) or $context instanceof context_module)) {
$coursecontext = $context->get_course_context();
// current course id
$courseid = $coursecontext->instanceid;
//$modinfo = get_fast_modinfo($courseid);        
//$sections = $modinfo->get_section_info_all();
$course = get_course($courseid);
$thecourseshortname = $course->shortname;
}               
?>
 



<header id="page-navigation" role="navigation">
    <nav id="navbar-uikit-theme" role="navigation" class="uk-navbar" data-uk-sticky>
        <div id="navbar-uikit-theme-content">
            <div class="uk-visible-large">
                <?php if(false && $displaysitename){ ?>
                    <a class="uk-navbar-brand sitename" href="<?php echo $CFG->wwwroot; ?>"><i class="uk-icon-home"></i>&nbsp;<?php echo $SITE->shortname; ?></a>
                <?php } ?>
                    
                <?php //echo $OUTPUT->custom_menu(); ?>
                <div class="uk-navbar-flip">
                    <div class="uk-navbar-content">
                        <?php  // echo $OUTPUT->login_info(null, $displayloggedusermode) ?>
                    </div>
                </div>

               <a class="uk-navbar-toggle" href="#menu-offcanvas" data-uk-offcanvas></a>
<?php  
            if (!empty($thecourseshortname)) { 
?>     
         <a class="uk-navbar-toggle coursemenulabel" href="#menu-right-offcanvas" data-uk-offcanvas> <?php echo $thecourseshortname ?> </a>
<?php
}
?>
                <div class="uk-navbar-content uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <li><?php //echo $OUTPUT->page_heading_menu(); ?></li>
                    </ul>
                </div>
            </div>
            <!-- Off-canvas menu for small devices -->
            <div class="uk-hidden-large">
                <?php if(false && $displaysitename){ ?>
                    <a class="uk-navbar-brand uk-hidden-small sitename" href="<?php echo $CFG->wwwroot; ?>"><i class="uk-icon-home"></i>&nbsp;<?php echo $SITE->shortname; ?></a>
                <?php } ?>
                
                <!-- This is a button toggling the off-canvas sidebar -->
                <a class="uk-navbar-toggle" href="#menu-offcanvas" data-uk-offcanvas></a>
<?php  
            if (!empty($thecourseshortname)) { 
?>     
         <a class="uk-navbar-toggle coursemenulabel" href="#menu-right-offcanvas" data-uk-offcanvas> <?php echo $thecourseshortname ?> </a>
<?php
}
?>
                 <div class="uk-navbar-flip uk-hidden-small">
                    <div class="uk-navbar-content">
                        <?php //echo $OUTPUT->login_info(null, $displayloggedusermode); ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- This is the off-canvas sidebar -->
<div id="menu-offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <div class="uk-panel">
            <a href="<?php echo $CFG->wwwroot; ?>" style="text-decoration: none;"><h3 class="uk-panel-title"><i class="uk-icon-home"></i> <?php echo $SITE->shortname; ?></h3></a>
            <?php echo $OUTPUT->login_info(null, $displayloggedusermode); ?>
        </div>
        <?php echo $OUTPUT->custom_menu('', true); ?>
<?php if(false && !empty($hassidepre)){echo $OUTPUT->uikitblocks($pre, $preClass);} ?>

    </div>
</div>

<!-- This is theright  off-canvas sidebar -->
<div id="menu-right-offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
        <div class="uk-panel">
        <?php if(!empty($hassidepost)){echo $OUTPUT->uikitblocks($post, $postClass);} ?>


        </div>

    </div>
</div>

