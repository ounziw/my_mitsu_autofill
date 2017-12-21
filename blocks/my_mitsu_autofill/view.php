<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php
$c = Page::getCurrentPage();
if ($c->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item"><?php  echo t('My Mitsu Autofill Block is disabled in edit mode.')?></div>
<?php  } else {?>
    <?php
    $u = new User();
    if ($u->isLoggedIn()) :

        $ui = UserInfo::getByID($u->getUserID());
        ?>

        <script>
            $(function() {

                if(CCM_EDIT_MODE){
                    return;
                }

                $(document).ready(function (e) {

                    <?php if ($optionname) :?>
                    var optionname = '<?php echo h($u->getUserName()); ?>';
                    $('<?php echo h($optionname);?>').val(optionname);
                    <?php endif; // $optionname ?>

                    <?php if ($optionmail) :?>
                    var optionmail = '<?php echo h($u->getUserEmail()); ?>';
                    $('<?php echo h($optionmail);?>').val(optionmail);
                    <?php endif; // $optionmail ?>

                    <?php if ($option1m && $option1j) :?>
                    var option1 = '<?php echo h($ui->getAttribute($option1j)); ?>';
                    $('<?php echo h($option1m);?>').val(option1);
                    <?php endif; // $option1 ?>
                    <?php if ($option2m && $option2j) :?>
                    var option2 = '<?php echo h($ui->getAttribute($option2j)); ?>';
                    $('<?php echo h($option2m);?>').val(option2);
                    <?php endif; // $option2 ?>
                    <?php if ($option3m && $option3j) :?>
                    var option3 = '<?php echo h($ui->getAttribute($option3j)); ?>';
                    $('<?php echo h($option3m);?>').val(option3);
                    <?php endif; // $option3 ?>
                    <?php if ($option4m && $option4j) :?>
                    var option4 = '<?php echo h($ui->getAttribute($option4j)); ?>';
                    $('<?php echo h($option4m);?>').val(option4);
                    <?php endif; // $option4 ?>
                    <?php if ($option5m && $option5j) :?>
                    var option5 = '<?php echo h($ui->getAttribute($option5j)); ?>';
                    $('<?php echo h($option5m);?>').val(option5);
                    <?php endif; // $option5 ?>

                });
            });
        </script>
    <?php endif; // $u->isLoggedIn() ?>
<?php  }
