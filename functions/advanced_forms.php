<?php


function test_form_submission( $form ) {
    // echo '<pre>';
    // echo print_r($form,1);
    // echo '</pre>';

    // echo 'submission';
}
add_action( 'af/form/submission/key=form_5922f6bb4dfaa', 'test_form_submission' );



function test_form_format_repeater( $content, $email, $form, $fields ) {
    // Add information in repeater as table

    // echo '<pre>';
    // echo print_r($_FILES,1);
    // echo '</pre>';

    $imagesEachProduct = array();
    foreach ($_FILES['acf']['name']['field_5922f754a5989'] as $key_name) {
        $temparray = array();
        foreach ($key_name as $key => $value) {
            $temparray[] = $value;
        }
        $imagesEachProduct[] = array($temparray);
    }

    $nice_products = '';
    $product_details = af_get_field('product_details');
    if($product_details) {
        $i = 0;
        $nice_products .= '<table border="1" cellpadding="0" cellspacing="0" width="80%">';
        foreach ($product_details as $product) {
            $nice_products .= '<tr>';
                $nice_products .= '<td align="center" valign="top">'.$product['make'].'</td>';
                $nice_products .= '<td align="center" valign="top">'.$product['model'].'</td>';
                $nice_products .= '<td align="center" valign="top">'.$product['manufactured'].'</td>';
                $nice_products .= '<td align="center" valign="top">'.$product['condition'].'</td>';
                $nice_products .= '<td>';
                foreach ($imagesEachProduct[$i] as $img) {
                    foreach ($img as $iname) {
                        $nice_products .= $iname.'<br/>';
                    }
                }
                $nice_products .= '</td>';
            $nice_products .= '</tr>';
            $i++;
        }
        $nice_products .= '</table>';
    }

    $content = str_replace('{field:product_details}', $nice_products, $content);
    // echo $content;
    return $content;
}
add_filter( 'af/form/email/content/key=form_5922f6bb4dfaa', 'test_form_format_repeater', 10, 4);



function test_form_attachments( $attachments, $email, $form, $fields ) {
    // Add a file as an attachment

    $filenames   = array();
    $tempnames   = array();
    $filestosend = array();

    foreach ($_FILES['acf']['name']['field_5922f754a5989'] as $key_name) {
        foreach ($key_name as $key => $value) {
            if($value) {
                $filenames[] = $value;
            }
        }
    }
    foreach ($_FILES['acf']['tmp_name']['field_5922f754a5989'] as $key_tmp_name) {
        foreach ($key_tmp_name as $key => $value) {
            if($value) {
                $tempnames[] = $value;
            }
        }
    }

    $uploaddir  = __DIR__ . '/../../../email-attachments/';
    $i = 0;
    foreach ($filenames as $filename) {
        $uploadfile = $uploaddir . date("YmdHis-") . $filename;
        if (move_uploaded_file($tempnames[$i], $uploadfile)) {
            // echo 'file uploaded: '.$uploadfile. '<br/>';
            $filestosend[] = $uploadfile;
        } else {
            // echo 'sumting went wong with: '.$uploadfile. '<br/>';
        }
        $i++;
    }

    // echo '<pre>';
    // echo print_r($filenames,1);
    // echo print_r($tempnames,1);
    // echo print_r($filestosend,1);
    // echo '</pre>';

    foreach ($filestosend as $sendfile) {
        $attachments[] = $sendfile;
    }
    return $attachments;


    /*
    
    NEW IDEA, Once Alun has setup the codeigniter part - form data will be uploaded
    email will show a link to the form, with photos.

    use function above to hanel all this, will also need to send email to percy martin.

    */
}
add_filter( 'af/form/email/attachments/key=form_5922f6bb4dfaa', 'test_form_attachments', 10, 4 );

