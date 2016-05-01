<!DOCTYPE html>
<html lang="en">
<head>
  <title>DreamVents</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<?php $__env->startSection('content'); ?>
<body>

<div class="container">
    <?php foreach($frontpages as $frontpage): ?>
        <img src="<?php echo $frontpage->picture_link; ?>">
        <a href="<?php echo e(url('/viewPost/'.$frontpage->picture_id)); ?>">
            <button 
                class="btn btn-primary">View Post Page
            </button>
        </a>
        <a href="<?php echo e(url('/uploadStory/'.$frontpage->picture_id)); ?>">
            <button 
                class="btn btn-primary">Make your Story
            </button>
        </a>
    <?php endforeach; ?>
</div>
<?php echo $frontpages->links(); ?>


</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>