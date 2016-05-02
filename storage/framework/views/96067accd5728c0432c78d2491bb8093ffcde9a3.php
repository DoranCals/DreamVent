<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('includes.styles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">

            <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    </nav>

    <div id="main" class="row">
        <div id="sidebar" class="col-md-2">
            <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div id="content" class="col-md-10">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        
    </div>
    <!-- JavaScripts -->
    <?php echo $__env->make('javascript.include_java', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>