<?php

if (!class_exists('cyn_form')) {
    class cyn_form
    {
        function __construct()
        {
            add_action('wp_ajax_send_contactus_form', [$this, 'cyn_send_form']);
            add_action('wp_ajax_nopriv_send_contactus_form', [$this, 'cyn_send_form']);
        }

        public function cyn_send_form()
        {
            if (!wp_verify_nonce($_POST['_nonce'], 'ajax-nonce'))
                return wp_send_json_error(['verify_nonce' => false], 403);

            $data = $_POST['data'];
            $dbData = array(
                'user_email'    => sanitize_email($data['email']),
                'user_phone'    => sanitize_text_field($data['phone-number']),
                'user_describe' => sanitize_textarea_field($data['describe']),
                'agreement'     => sanitize_text_field($data['agreement'])
            );

            $msgContent = "
                <p>Email: " . $dbData['user_email'] . "</p>
                <p>Phone: " . $dbData['user_phone'] . "</p>
                <p>agreement: " . $dbData['agreement'] . "</p>
                <p>Message: " . $dbData['user_describe'] . "</p>
            ";
            $newPost = array(
                'post_type'    => $GLOBALS["contact-form-post-type"],
                'post_title'   => $dbData['user_email'],
                'post_content' => $msgContent,
                'post_status'  => 'publish',
                'post_author'  => 1,
            );

            $insetPost = wp_insert_post($newPost);

            if (is_wp_error($insetPost))
                return wp_send_json_error(['insert_row' => false], 500);

            $emailTo = ["sales@foandmore.com" , "hooman@fmdcompanies.com"];
            $subject = "Contact Us";

            $sendEmail = wp_mail(
                $emailTo,
                $subject,
                $msgContent
            );

            if ($sendEmail == false)
                return wp_send_json_error(['send_email' => false], 500);

            return wp_send_json(['success' => true], 201);
        }
    }
}
