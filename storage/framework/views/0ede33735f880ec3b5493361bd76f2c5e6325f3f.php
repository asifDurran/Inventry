<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Items Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    h2{
      text-align:center;
      color:steelblue;
    }
    body{
      width:100%;
    }
    #category_form{
      margin:30px;
      padding:10px;
      align:center;
    }
    </style>
</head>
<body> 
<h2>Edit Items</h2>   
<div id="category_form">   						
<form method="post" action="<?php echo e(route('stockitems.update',['id'=>$items_edit->id])); ?>">
 
  <div class="form-group">
    <label for="formGroupExampleInput2">Stock Category</label>
   
      <select class="form-control" name="stock_category_id">
      <?php $__currentLoopData = $stock_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>    
                            
     </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Title</label>
    <input type="text" class="form-control" name ="title"  value="<?php echo e($items_edit->title); ?>"  placeholder="Title">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Descreption</label>
    <input type="text" class="form-control" name ="description" value="<?php echo e($items_edit->description); ?>"  placeholder="Descreption">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Purchase Price</label>
    <input type="number" class="form-control" name ="purchase_price" value="<?php echo e($items_edit->purchase_price); ?>"  placeholder="Purchase Price">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Sale Price</label>
    <input type="number" class="form-control" name ="sale_price"  value="<?php echo e($items_edit->sale_price); ?>"id="formGroupExampleInput2" placeholder="Sale Price">
  </div>
  
  <?php echo e(csrf_field()); ?>

  <input type="hidden" name="_method" value="PATCH">
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
</body>
</html>

	
	