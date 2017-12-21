<?php 
namespace Concrete\Package\MyMitsuAutofill;

use BlockType;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends \Concrete\Core\Package\Package {

    protected $pkgHandle = 'my_mitsu_autofill';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '0.8.1';

    public function getPackageDescription() {
        return t("When logged-in visitors view a page with a form, this addon autofills his/her info into the form");
    }

    public function getPackageName() {
        return t("My Mitsu Autofill");
    }

    public function install() {
        $pkg = parent::install();
        BlockType::installBlockType('my_mitsu_autofill', $pkg);
    }

}