<?php


/*
 * Highlight preferred columns on this project
 */

use Kanboard\Core\Http\Request;
use Kanboard\Model\Project as highlight_Project;
use Kanboard\Model\ProjectMetadata as highlight_ProjectMetadata;

/*
 * Get project_id
 */
$request = new Request($this->container);
$project_id = $request->request->getIntegerParam('project_id');
$projectModel = new highlight_Project($this->container);
$projectModel = $projectModel->getById($project_id);
$projectMeta = new highlight_ProjectMetadata($this->container);
$projectMeta = $projectMeta->getAll($project_id);

$highlight_column=$projectMeta['done_column_highlight_id'];
$highlight_css=$projectMeta['done_column_highlight_css'];

?>

<style>
    div[data-column-id="<?php echo $highlight_column; ?>"].task-board {
        <?php echo $highlight_css; ?>
    }
</style>
