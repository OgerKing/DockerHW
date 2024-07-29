<?php
/**
 * English language file
 *
 * @author Chris Smith <chris@jalakai.co.uk>
 */

$lang['menu'] = 'User Manager';

// custom language strings for the plugin
$lang['noauth']      = '(user authentication not available)';
$lang['nosupport']   = '(user management not supported)';

$lang['badauth']     = 'invalid auth mechanism';     // should never be displayed!

$lang['user_id']     = 'User';
$lang['user_pass']   = 'Password';
$lang['user_name']   = 'Real Name';
$lang['user_mail']   = 'Email';
$lang['user_groups'] = 'Groups';

$lang['field']       = 'Field';
$lang['value']       = 'Value';
$lang['add']         = 'Add';
$lang['delete']      = 'Delete';
$lang['delete_selected'] = 'Delete Selected';
$lang['edit']        = 'Edit';
$lang['edit_prompt'] = 'Edit this user';
$lang['modify']      = 'Save Changes';
$lang['search']      = 'Search';
$lang['search_prompt'] = 'Perform search';
$lang['clear']       = 'Reset Search Filter';
$lang['filter']      = 'Filter';
$lang['export_all']  = 'Export All Users (CSV)';
$lang['export_filtered'] = 'Export Filtered User list (CSV)';
$lang['import']      = 'Import New Users';
$lang['line']        = 'Line no.';
$lang['error']       = 'Error message';

$lang['summary']     = 'Displaying users %1$d-%2$d of %3$d found. %4$d users total.';
$lang['nonefound']   = 'No users found. %d users total.';
$lang['delete_ok']   = '%d users deleted';
$lang['delete_fail'] = '%d failed deleting.';
$lang['update_ok']   = 'User updated successfully';
$lang['update_fail'] = 'User update failed';
$lang['update_exists'] = 'User name change failed, the specified user name (%s) already exists (any other changes will be applied).';

$lang['start']  = 'start';
$lang['prev']   = 'previous';
$lang['next']   = 'next';
$lang['last']   = 'last';

// added after 2006-03-09 release
$lang['edit_usermissing'] = 'Selected user not found, the specified user name may have been deleted or changed elsewhere.';
$lang['user_notify'] = 'Notify user';
$lang['note_notify'] = 'Notification emails are only sent if the user is given a new password.';
$lang['note_group'] = 'New users will be added to the default group (%s) if no group is specified.';
$lang['note_pass'] = 'The password will be autogenerated if the field is left empty and notification of the user is enabled.';
$lang['add_ok'] = 'User added successfully';
$lang['add_fail'] = 'User addition failed';
$lang['notify_ok'] = 'Notification email sent';
$lang['notify_fail'] = 'Notification email could not be sent';

// import & errors
$lang['import_userlistcsv'] = 'User list file (CSV):  ';
$lang['import_header'] = 'Most Recent Import - Failures';
$lang['import_success_count'] = 'User Import: %d users found, %d imported successfully.';
$lang['import_failure_count'] = 'User Import: %d failed. Failures are listed below.';
$lang['import_error_fields']  = "Insufficient fields, found %d, require 4.";
$lang['import_error_baduserid'] = "User-id missing";
$lang['import_error_badname'] = 'Bad name';
$lang['import_error_badmail'] = 'Bad email address';
$lang['import_error_upload']  = 'Import Failed. The csv file could not be uploaded or is empty.';
$lang['import_error_readfail'] = 'Import Failed. Unable to read uploaded file.';
$lang['import_error_create']  = 'Unable to create the user';
$lang['import_notify_fail']   = 'Notification message could not be sent for imported user, %s with email %s.';
$lang['import_downloadfailures'] = 'Download Failures as CSV for correction';

$lang['addUser_error_missing_pass'] = 'Please either set a password or activate user notification to enable password generation.';
$lang['addUser_error_pass_not_identical'] = 'The entered passwords were not identical.';
$lang['addUser_error_modPass_disabled'] = 'Modifing passwords is currently disabled';
$lang['addUser_error_name_missing'] = 'Please enter a name for the new user.';
$lang['addUser_error_modName_disabled'] = 'Modifing names is currently disabled.';
$lang['addUser_error_mail_missing'] = 'Please enter an Email-Adress for the new user.';
$lang['addUser_error_modMail_disabled'] = 'Modifing Email-Adresses is currently disabled.';
$lang['addUser_error_create_event_failed'] = 'A plugin prevented the new user being added. Review possible other messages for more information.';
