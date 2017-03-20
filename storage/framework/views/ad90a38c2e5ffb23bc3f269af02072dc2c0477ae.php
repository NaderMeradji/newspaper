<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Off Canvas Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/offcanvas/offcanvas.css" rel="stylesheet">
  </head>

  <body>

    <?php echo $__env->make('authors.layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
          <p class="float-right hidden-md-up">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Hello, I am <?php echo e($author->name); ?></h1>
            <p><?php echo e($author->bio); ?></p>
          </div>
          <div class="row">
            <div class="col-6 col-lg-4">
              <h2>Favourite park?</h2>
              <p><?php echo e($author->Q1); ?></p>

            </div><!--/span-->
            <div class="col-6 col-lg-4">
              <h2>Favourite street?</h2>
              <p><?php echo e($author->Q2); ?></p>
            </div><!--/span-->
            <div class="col-6 col-lg-4">
              <h2>Favourite shop to visit?</h2>
              <p><?php echo e($author->Q3); ?></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <?php echo $__env->make('authors.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div><!--/.container-->

  </body>
</html>
