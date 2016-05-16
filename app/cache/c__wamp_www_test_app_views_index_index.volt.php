

  <?= $this->assets->outputCss() ?>
    <?= $this->assets->outputJs() ?>

<?= $this->partial('partials/nav') ?>
<?= $this->partial('partials/header') ?>



<div class="page-header" >
    <h1>Hello</h1>


<?= $this->tag->linkto('signup', 'Sign Up Here!') ?>

</div>

<div class="footer">
<?= $this->partial('partials/footer') ?>
</div>