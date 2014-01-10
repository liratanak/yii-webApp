<div id='m_login'>
	<div class='form'>
        <?php
								
$form = $this->beginWidget('CActiveForm', array (
										'id' => 'login-form' 
								))?>

        <div class='row'>
                <?php echo $form->label($model, 'login')?>
                <?php echo $form->textField($model, 'login', array('autocomplete'=>'off', 'id'=>'input-login'))?>
                <?php echo $form->error($model, 'login')?>
        </div>

		<div class='row'>
                <?php echo $form->label($model, 'password')?>
                <?php echo $form->passwordField($model, 'password')?>
                <?php echo $form->error($model, 'password')?>
        </div>

		<div class='row rememberMe'>
                <?php echo $form->label($model, 'rememberMe')?>
                <?php echo $form->checkBox($model, 'rememberMe')?>
        </div>

		<div class='row buttons'>
                <?php echo CHtml::submitButton(Yii::t("UserAdminModule.LoginForm","Login"),array('class'=>'btn span2'))?>
        </div>

        <?php $this->endWidget()?>
        
</div>
</div>

<script>
        window.onload = function() {
                var input = document.getElementById("input-login").focus();
        }
</script>
