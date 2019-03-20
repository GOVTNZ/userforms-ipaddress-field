<?php

class EditableIPAddressField extends EditableFormField {

    private static $singular_name = 'Hidden IP-Address Field';

    private static $plural_name = 'Hidden IP-Address Fields';

    public function getFormField()
    {
        $field = HiddenField::create(
            $this->Name,
            $this->EscapedTitle)
            ->setFieldHolderTemplate('UserFormsField_holder')
            ->setTemplate('HiddenField');

        $this->doUpdateFormField($field);

        return $field;
    }

	public function getValueFromData($data) {
    	return $_SERVER['REMOTE_ADDR'];
	}

}
