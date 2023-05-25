<?php
//@need pagination
//@need excel export 
//@need delete , Update
//@need location

if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
;


$formsClass = new WP_List_Table();

$example_data = array(
	array(
		'ID' => 1,
		'booktitle' => 'Quarter Share',
		'author' => 'Nathan Lowell',
		'isbn' => '978-0982514542'
	),
	array(
		'ID' => 2,
		'booktitle' => '7th Son: Descent',
		'author' => 'J. C. Hutchins',
		'isbn' => '0312384378'
	),
	array(
		'ID' => 3,
		'booktitle' => 'Shadowmagic',
		'author' => 'John Lenahan',
		'isbn' => '978-1905548927'
	),
	array(
		'ID' => 4,
		'booktitle' => 'The Crown Conspiracy',
		'author' => 'Michael J. Sullivan',
		'isbn' => '978-0979621130'
	),
	array(
		'ID' => 5,
		'booktitle' => 'Max Quick: The Pocket and the Pendant',
		'author' => 'Mark Jeffrey',
		'isbn' => '978-0061988929'
	),
	array(
		'ID' => 6,
		'booktitle' => 'Jack Wakes Up: A Novel',
		'author' => 'Seth Harwood',
		'isbn' => '978-0307454355'
	)
);

function get_columns() {
	$columns = array(
		'booktitle' => 'Title',
		'author' => 'Author',
		'isbn' => 'ISBN'
	);
	return $columns;
}

function prepare_items() {
	$columns = $this->get_columns();
	$hidden = array();
	$sortable = array();
	$this->_column_headers = array( $columns, $hidden, $sortable );
	$this->items = $this->example_data;
	;
}


global $wpdb;
$table = $wpdb->prefix . 'cyn_form';
$forms = $wpdb->get_results( "
    SELECT *
    FROM $table
" );

$n = 1;






echo '<pre>';
var_dump( $formsClass );
echo '</pre>';






?>
<div class="wrap">

	<h1 class="wp-heading-inline">Forms</h1>
	<hr class="wp-header-end">
	<main>

		<table class="wp-list-table widefat fixed striped table-view-list">
			<thead>
				<tr>
					<th>Count</th>
					<th>Form Id</th>
					<th>User Phone</th>
					<th>User Email</th>
					<th>Subscription</th>
					<th>Desc</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $forms as $form ) : ?>

					<tr id="<?php echo $form->id ?>">
						<td class="form-id">
							<?php echo $n;
							$n++ ?>
						</td>
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