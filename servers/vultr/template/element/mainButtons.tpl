<div class="row">
    <div class="btn-group btn-group-justified col-sm-12">
        <a href="clientarea.php?action=productdetails&id={$serviceid}" class="btn btn-{if $controller=='Main' || $controller=='Graphs'}info{else}primary{/if}" type="button">{$_LANG.elements.buttons.main_page}</a>
        <a href="clientarea.php?action=productdetails&id={$serviceid}&cloudController=Backups" class="btn btn-{if $controller=='Backups'}info{else}primary{/if}" type="button" >{$_LANG.elements.buttons.backups}</a>
    </div>
</div>