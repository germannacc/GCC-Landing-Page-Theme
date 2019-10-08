<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * New Year Contact
 * Template for WPForms.
 */
class WPForms_Template_new_year_contact extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'New Year Contact';

		// Template slug
		$this->slug = 'new_year_contact';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => '5',
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter first name',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Last name',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter last name',
		),
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter email',
		),
		4 => array (
			'id' => '4',
			'type' => 'select',
			'label' => 'Tell me more about:',
			'choices' => array (
				1 => array (
					'label' => 'First Choice',
				),
				2 => array (
					'label' => 'Second Choice',
				),
				3 => array (
					'label' => 'Third Choice',
				),
			),
			'size' => 'large',
			'placeholder' => '--Select an interest--',
		),
	),
	'settings' => array (
		'form_title' => 'New Year Contact',
		'form_class' => 'form-group',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'submit_class' => 'btn btn-primary',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'marketing@germanna.edu',
				'subject' => 'New Entry: New Year Contact',
				'sender_name' => 'New Year New You',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => 'Thanks for contacting us! We will be in touch with you shortly.',
				'message_scroll' => '1',
				'page' => '5',
			),
		),
	),
	'meta' => array (
		'template' => 'new_year_contact',
	),
);
	}
}
new WPForms_Template_new_year_contact;
endif;