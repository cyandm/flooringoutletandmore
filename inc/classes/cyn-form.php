<?php

if (!class_exists('cyn_form')) {
    class cyn_form
    {
        function __construct()
        {
            add_action('wp_ajax_send_form', [$this, 'cyn_send_form']);
            add_action('wp_ajax_nopriv_send_form', [$this, 'cyn_send_form']);
            add_action('admin_menu', [$this, 'cyn_create_menu_admin']);
        }

        public static function cyn_create_form_table()
        {
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            global $wpdb;

            $tName = $wpdb->prefix . 'cyn_form';
            $charset = $wpdb->get_charset_collate();

            $tb = "CREATE TABLE $tName 
            (
                id BIGINT(20) NOT NULL AUTO_INCREMENT,
                user_phone TEXT NOT NULL,
                user_email TEXT NOT NULL,
                user_sub TEXT NOT NULL,
                form_desc LONGTEXT,
                PRIMARY KEY (id)
            )
                $charset;";

            dbDelta($tb);
        }

        public function cyn_save_on_form_table($user_phone, $user_email, $user_sub, $form_desc)
        {
            global $wpdb;
            $tName = $wpdb->prefix . 'cyn_form';

            $wpdb->show_errors();

            $wpdb->insert($tName, [
                'user_phone' => $user_phone,
                'user_email' => $user_email,
                'user_sub' => $user_sub,
                'form_desc' => $form_desc
            ]);

        }

        public function cyn_send_form()
        {

            if (!wp_verify_nonce($_POST['_nonce'], 'ajax-nonce')) {
                echo 'Are you a hacker?';
            } else {
                $data = $_POST['data'];
                $user_phone = esc_html($data['phoneNumber']);
                $user_email = esc_html($data['email']);
                $form_desc = esc_html($data['desc']);

                if ($data['sub'] == 'true') {
                    $user_sub = 'yes';
                } else {
                    $user_sub = 'no';
                }


                $this->cyn_save_on_form_table($user_phone, $user_email, $user_sub, $form_desc);

            }

            die();
        }

        public function cyn_create_menu_admin()
        {
            add_menu_page('Forms', 'Forms', 'edit_posts', 'forms', function () {
                get_template_part('templates/admin/form');
            }, 'dashicons-media-spreadsheet', 5);
        }
    }
}