<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="form-group">
    <p><?php echo t('Association');?></p>

    <div class="form-group">
        <label><?php echo t('Form ID/class for NAME') ?></label>
        <?php echo $form->text('optionname', $optionname); ?>
    </div>
    <div class="form-group">
        <label><?php echo t('Form ID/class for EMAIL') ?></label>
        <?php echo $form->text('optionmail', $optionmail); ?>
    </div>

    <div class="form-group">
        <label><?php echo t('Form ID/class 1') ?></label>
        <?php echo $form->text('option1m', $option1m); ?>
        <label><?php echo t('User Attribute 1') ?></label>
        <?php echo $form->text('option1j', $option1j); ?>
    </div>
    <div class="form-group">
        <label><?php echo t('Form ID/class 2') ?></label>
        <?php echo $form->text('option2m', $option2m); ?>
        <label><?php echo t('User Attribute 2') ?></label>
        <?php echo $form->text('option2j', $option2j); ?>
    </div>
    <div class="form-group">
        <label><?php echo t('Form ID/class 3') ?></label>
        <?php echo $form->text('option3m', $option3m); ?>
        <label><?php echo t('User Attribute 3') ?></label>t
        <?php echo $form->text('option3j', $option3j); ?>
    </div>
    <div class="form-group">
        <label><?php echo t('Form ID/class 4') ?></label>
        <?php echo $form->text('option4m', $option4m); ?>
        <label><?php echo t('User Attribute 4') ?></label>
        <?php echo $form->text('option4j', $option4j); ?>
    </div>
    <div class="form-group">
        <label><?php echo t('Form ID/class 5') ?></label>
        <?php echo $form->text('option5m', $option5m); ?>
        <label><?php echo t('User Attribute 5') ?></label>
        <?php echo $form->text('option5j', $option5j); ?>
    </div>

</div>