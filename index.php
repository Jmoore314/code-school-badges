<?php 
  $data = file_get_contents('https://www.codeschool.com/users/110833.json');
  $json_data = json_decode($data, true);
  $courses = $json_data['courses']['completed'];
  // var_dump($json_data['courses']['completed']);
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $json_data['user']['username']; ?>'s Badges</title>
  <link rel="stylesheet" type="text/css" href="application.css">
</head>
<body>
  <h1>Courses Completed:</h1>
  <?php 
    foreach($courses as $course) {
      echo '<div>';
      echo '<a href="' . $course["url"] . '"><img src="' . $course["badge"] . '"></a></br>';
      echo '<a href="' . $course["url"] . '">' . $course['title'] . '</a>';
      echo '</div>';
    } 
  ?>
</body>
</html>