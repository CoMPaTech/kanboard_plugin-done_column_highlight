<h3><img src="<?= $this->url->dir() ?>plugins/Done_column_highlight/ticked-off.png"/>&nbsp;Highlight which column?</h3>
<div class="listing">
<?php
    use Kanboard\Model\Column;
    $columnModel = new Column($this->container);
    $columns_list = $columnModel->getList($project['id']);
?>
    <?= $this->form->label(t('Column to highlight'), 'done_column_highlight_id') ?>
    <?= $this->form->select('done_column_highlight_id', $columns_list, $values) ?>

    <?= $this->form->label(t('CSS to apply'), 'done_column_highlight_css') ?>
    <?= $this->form->textarea('done_column_highlight_css', $values) ?>

    <p>Example:<br>
        &nbsp;&nbsp;&nbsp;&nbsp;background-color:#c00;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;text-decoration: line-through;<br>
    </p>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
    </div>
</div>

