<?php
//@need pagination
//@need excel export 
//@need delete , Update
//@need location

global $wpdb;
$table = $wpdb->prefix . 'cyn_form';
$forms = $wpdb->get_results("
    SELECT *
    FROM $table
");



?>
<div class="wrap">

    <h1 class="wp-heading-inline">Forms</h1>
    <hr class="wp-header-end">
    <main>

        <table class="wp-list-table widefat fixed striped table-view-list">
            <thead>
                <tr>
                    <th>Form Id</th>
                    <th>User Phone</th>
                    <th>User Email</th>
                    <th>Subscription</th>
                    <th>Desc</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($forms as $form): ?>

                    <tr id="<?php echo $form->id ?>">
                        <td class="form-id">
                            <?php echo $form->id ?>
                        </td>
                        <td class="user-phone">
                            <?php echo $form->user_phone ?>
                        </td>
                        <td class="user-email">
                            <?php echo $form->user_email ?>
                        </td>
                        <td class="user-sub">
                            <?php echo $form->user_sub ?>
                        </td>
                        <td class="form-desc">
                            <?php echo $form->form_desc ?>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</div>