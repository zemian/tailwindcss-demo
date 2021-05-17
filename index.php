<?php
$dir = 'playground';
$files = glob($dir . '/*.html');
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="compiled.css" rel="stylesheet">
</head>

<body>

<div class="flex">
  <div class="flex-grow-0 flex-shrink-0">
    <ul class="border divide-y leading-10 font-mono">
      <li class="px-3"><a href="/">HOME</a></li>

      <?php 
      foreach ($files as $file) { 
        $pathinfo = pathinfo($file);
      ?>
      
      <li class="px-3"><a href="?name=<?php echo "$file"; ?>"><?php echo $pathinfo['basename']; ?></a></li>
      
      <?php 
      } 
      ?>
    </ul>
  </div>
  <div class="flex-auto">
    <div class="p-8 bg-gray-100">
      <?php
      // Display playground example.
      $name = $_GET['name'] ?? "$dir/index.html";
      $example = file_get_contents($name);
      echo $example;
      ?>
    </div>
  </div>
</div>
  
</body>
</html>