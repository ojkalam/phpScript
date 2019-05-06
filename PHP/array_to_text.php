<?php 


	$langs = [
        'required'                      => 'This field is required.',
        'email'                         => 'Please enter a valid email address.',
        'maxlength255'                  => 'Please enter no more than 255 characters.',
        'maxlength30'                   => 'Please enter no more than 30 characters.',
        'maxlength500'                  => 'Please enter no more than 500 characters.',
        'minlength6'                    => 'Please enter at least 6 characters.',
        'max99'                         => 'Please enter a value less than or equal to 99.',
        'min0'                          => 'Please enter a value greater than or equal to 0.',
        'min5'                          => 'Please enter a value greater than or equal to 5.',
        'url'                           => 'Please enter a valid URL.',
        'date'                          => 'Please enter a valid date.',
        'dateISO'                       => 'Please enter a valid date ( ISO ).',
        'number'                        => 'Please enter a valid number.',
        'digits'                        => 'Please enter only digits.',
        'equalTo'                       => 'Please enter the same value again.',
        'age_greater_than_18'           => 'Age must be greater than 18.',
        'email_existed'                 => 'Email address is already Existed.',
        'image_accept'                  => 'The file must be an image (jpg, jpeg, png or gif)',
        'old_password_different'        => 'Old Password and New Password must be different.',
    ];

    foreach ($langs as $lang) {
    	echo $lang."<br>";
    }






 ?>