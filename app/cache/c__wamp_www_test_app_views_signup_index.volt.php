
  <?= $this->assets->outputCss() ?>
    <?= $this->assets->outputJs() ?>
<?= $this->partial('partials/nav') ?>
<div class="page-header" >
<h2>Sign up using this form</h2>

<?php echo $this->tag->form("signup/register"); ?>

 <p>
    <label for="name">Name</label>
    <?php echo $this->tag->textField("name") ?>
 </p>

 <p>
    <label for="email">E-Mail</label>
    <?php echo $this->tag->textField("email") ?>
 </p>

 <p>
    <?php echo $this->tag->submitButton("Register") ?>
 </p>

</form>
</div>

<div class="footer">
<?= $this->partial('partials/footer') ?>
</div>