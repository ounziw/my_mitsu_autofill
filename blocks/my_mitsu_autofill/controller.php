<?php 
namespace Concrete\Package\MyMitsuAutofill\Block\MyMitsuAutofill;

use \Concrete\Core\Block\BlockController;
use Core;

class Controller extends BlockController {

    protected $btTable = 'btMyMitsuAutofill';
    protected $btInterfaceWidth = '500';
    protected $btInterfaceHeight = '600';
    protected $btDefaultSet = 'form';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = false;
    protected $btCacheBlockOutputLifetime = 0; //until manually updated or cleared

    public function getBlockTypeDescription()
    {
        return t("When logged-in visitors view a page with a form, this addon autofills his/her info into the form");
    }

    public function getBlockTypeName()
    {
        return t("Autofill");
    }

    public function registerViewAssets($outputContent = '')
    {
        $this->requireAsset('javascript', 'jquery');
    }
    
    public function view()
    {

        if ($this->validate_id_class($this->optionname)) {
            $this->set('optionname', $this->escape_bracket_for_js($this->optionname));
        }
        if ($this->validate_id_class($this->optionmail)) {
            $this->set('optionmail', $this->escape_bracket_for_js($this->optionmail));
        }
        if ($this->validate_id_class($this->option1j)) {
            $this->set('option1j', $this->escape_bracket_for_js($this->option1j));
        }
        if ($this->validate_id_class($this->option2j)) {
            $this->set('option2j', $this->escape_bracket_for_js($this->option2j));
        }
        if ($this->validate_id_class($this->option3j)) {
            $this->set('option3j', $this->escape_bracket_for_js($this->option3j));
        }
        if ($this->validate_id_class($this->option4j)) {
            $this->set('option4j', $this->escape_bracket_for_js($this->option4j));
        }
        if ($this->validate_id_class($this->option5j)) {
            $this->set('option5j', $this->escape_bracket_for_js($this->option5j));
        }
        if ($this->validate_custom_fields($this->option1m)) {
            $this->set('option1m', $this->option1m);
        }
        if ($this->validate_custom_fields($this->option2m)) {
            $this->set('option2m', $this->option2m);
        }
        if ($this->validate_custom_fields($this->option3m)) {
            $this->set('option3m', $this->option3m);
        }
        if ($this->validate_custom_fields($this->option4m)) {
            $this->set('option4m', $this->option4m);
        }
        if ($this->validate_custom_fields($this->option5m)) {
            $this->set('option5m', $this->option5m);
        }

    }


    public function escape_bracket_for_js($input) {
        $before = array('[',']');
        $after = array('\\\\[','\\\\]'); // \\ escaped to \. We need 4 \\\\ to add 2 \\.
        return str_replace($before, $after, $input);
    }
    public function validate_id_class($input) {
        if(!$input) {
            return true;
        }
        $start = substr($input,0,1);
        $item = substr($input,1);
        $allowed_string_attr = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ-_[]';
        if (strlen($start) === strspn($start,'#.') && strlen($item) === strspn($item,$allowed_string_attr) ) {
            return true;
        } else {
            return false;
        }
    }


    public function validate_custom_fields($input) {
        $allowed_string_attr = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
        if (strlen($input) === strspn($input,$allowed_string_attr) ) {
            return true;
        } else {
            return false;
        }
    }

    public function validate($args)
    {
        $e = Core::make('helper/validation/error');


        if(!$this->validate_id_class($args['optionname'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('Form ID/class for NAME')));
        }
        if(!$this->validate_id_class($args['optionmail'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('Form ID/class for EMAIL')));
        }
        if(!$this->validate_id_class($args['option1m'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('Form ID/class 1')));
        }
        if(!$this->validate_id_class($args['option2m'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('Form ID/class 2')));
        }
        if(!$this->validate_id_class($args['option3m'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('Form ID/class 3')));
        }
        if(!$this->validate_id_class($args['option4m'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('Form ID/class 4')));
        }
        if(!$this->validate_id_class($args['option5m'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('Form ID/class 5')));
        }

        if(!$this->validate_custom_fields($args['option1j'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('UserAttribute Field 1')));
        }
        if(!$this->validate_custom_fields($args['option2j'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('UserAttribute Field 2')));
        }
        if(!$this->validate_custom_fields($args['option3j'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('UserAttribute Field 3')));
        }
        if(!$this->validate_custom_fields($args['option4j'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('UserAttribute Field 4')));
        }
        if(!$this->validate_custom_fields($args['option5j'])) {
            $e->add(t('%s should be alphanumeric characters with a preceding sharp(#) or dot(.)', t('UserAttribute Field 5')));
        }

        return $e;
    }
}
