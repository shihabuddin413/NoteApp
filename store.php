<?php 
   session_start();
   ob_start();
   include_once('db.php');
   $newURL = 'app.php';
   if (isset($_POST['submit'])){
     $note  = $_POST['note'];
     $author= $_POST['author'];
    // echo $note, $author;
    // exit();
     
// Insert into todos (note, author, status) values ('test', 'test note', 1)

     $query = "INSERT INTO todos (note, author, status) VALUES ( '$note', '$author', 1 )";
      // status `0` means completed `1` means running
      
      if (mysqli_query($conn, $query)){
        $_SESSION['success']='You have recently added a new todo';
      } else {
        $_SESSION['error']='A fail attempt to add a new todo';
      }
      
      
      
      header('Location: ./'.$newURL);
      ob_end_flush();
   }

?>