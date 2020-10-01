<div class="clearfix">
    <ul class="<?= $cssClassValue ?>">
        <?php foreach ($sortMenuArray as $menuItems) { ?>
            <li class="<?= getCssClassActiveSection($menuItems) ?>"><a href="<?= $menuItems['path'] ?>"><?= trimMenu($menuItems['title']) ?></a></li>
        <?php } ?>
    </ul>
</div>