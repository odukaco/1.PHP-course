<?php
/**
 * User: TheCodeholic
 * Date: 2/18/2020
 * Time: 10:13 AM
 */
$todos=[];
if(file_exists('todo.json')){
  $json=file_get_contents('todo.json');
  $todos = json_decode($json,true);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
	
    <form action="newtodo.php" method="post" >
        <input type="text" name="todo_item" placeholder= "Enter your to do">
        <button> New todo </button>

    </form>
    <?php foreach($todos as $todoName => $todo): ?>
      <div>

        <form style="display: inline-block" action="change_status.php" method="post" >
          <input type="hidden" name="todo_item" value=" <?php echo $todoName ?> ">
          <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : '' ?> >
        </form>
        <?php echo $todoName ?>
        <form style="display: inline-block" action="delete.php" method="post">
          <input type="hidden" name="todo_item" value=<?php echo $todoName ?>>
          <button>Delete</button>


    </form>
      </div>

    <?php endforeach; ?>

    <script>
      const checkboxes = document.querySelectorAll('input[type=checkbox]');
      checkboxes.forEach( ch => {
        ch.onclick = function() {
          this.parentNode.submit();
        }
      } )
    </script>


  </body>
</html>
