<?php

class ContactInquiryController Extends Extension {

    private static $allowed_actions = array(
        'ContactInquiryForm'
    );

	public function ContactInquiryForm() {
		return ContactInquiryForm::create($this->owner, 'ContactInquiryForm');
	}

}
