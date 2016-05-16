
  <?= $this->assets->outputCss() ?>
    <?= $this->assets->outputJs() ?>

 <?= $this->partial('partials/nav') ?>
<div class="page-header" >

<h2>Add New Menu Items</h2>

<?php echo $this->tag->form("menu_items/update"); ?>

 <p>
    <label for="name">Name</label>
    <?php echo $this->tag->textField("name") ?>
 </p>

 <p>
    <label for="link">Link</label>
    <?php echo $this->tag->textField("link") ?>
 </p>

 <p>
    <?php echo $this->tag->submitButton("Update") ?>
 </p>

</form>
</div>

<div class="footer">
<?= $this->partial('partials/footer') ?>
</div>