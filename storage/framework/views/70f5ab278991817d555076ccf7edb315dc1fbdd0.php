<!DOCTYPE html>
<html>
<head>

<title></title>

</head>


<body>
<h1>
<li>
  Authors
<ul>

  <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($author->name); ?></li>
  <li><?php echo e($author->email); ?></li>
  <li><?php echo e($author->created_at); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</li>
</h1>
</body>
</html>
