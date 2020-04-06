<?php

return array(

    'does_not_exist' => 'IT asset/licence does not exist.',
    'user_does_not_exist' => 'User does not exist.',
    // 'asset_does_not_exist' 	=> 'The asset you are trying to associate with this license does not exist.',
    // 'owner_doesnt_match_asset' => 'The asset you are trying to associate with this license is owned by somene other than the person selected in the assigned to dropdown.',
    'assoc_users'	 => 'This IT asset/licence is currently checked out to a user and cannot be deleted. Please check the IT asset/licence in first, and then try deleting again. ',
    'select_asset_or_person' => 'You must select an asset or a user, but not both.',


    'create' => array(
        'error'   => 'IT asset/licence was not created, please try again.',
        'success' => 'IT asset/licence created successfully.'
    ),

    'deletefile' => array(
        'error'   => 'File not deleted. Please try again.',
        'success' => 'File successfully deleted.',
    ),

    'upload' => array(
        'error'   => 'File(s) not uploaded. Please try again.',
        'success' => 'File(s) successfully uploaded.',
        'nofiles' => 'You did not select any files for upload, or the file you are trying to upload is too large',
        'invalidfiles' => 'One or more of your files is too large or is a filetype that is not allowed. Allowed filetypes are png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml, and lic.',
    ),

    'update' => array(
        'error'   => 'IT asset/licence was not updated, please try again',
        'success' => 'IT asset/licence updated successfully.'
    ),

    'delete' => array(
        'confirm'   => 'Are you sure you wish to delete this IT asset/licence?',
        'error'   => 'There was an issue deleting the IT asset/licence. Please try again.',
        'success' => 'The IT asset/licence was deleted successfully.'
    ),

    'checkout' => array(
        'error'   => 'There was an issue checking out the IT asset/licence. Please try again.',
        'success' => 'The IT asset/licence was checked out successfully'
    ),

    'checkin' => array(
        'error'   => 'There was an issue checking in the IT asset/licence. Please try again.',
        'success' => 'The IT asset/licence was checked in successfully'
    ),

);
