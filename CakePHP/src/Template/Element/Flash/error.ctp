<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!--<div class="message error" onclick="this.classList.add('hidden');">--><?//= $message ?><!--</div>-->

<div class="alert alert-danger alert-dismissible fade show" onclick="this.classList.add('hidden')" style="margin-left: 250px;" ;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
        <?= $message ?>
</div>

