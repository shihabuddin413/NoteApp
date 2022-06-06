<?php
session_start();
include_once('db.php');
include_once('nav.php');
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    table {
      width:100%;
    }
    td, th{
      border: 1px solid lightgrey;
      padding: 4px 6px;
    }
    h2, h4{
      text-align: center;
    }
    
    textarea{
      outline: 0;
      border: 0;
      height:200px;
      padding: 5px ;
    }
    
    input[type=text]{
      border: 0;
      outline: 0;
      padding: 5px ;
    }
    
    button {
      background: white;
      color:grey;
      border:none;
      padding:8px 10px;
      box-shadow: 1px 0px 5px rgb(0,0,0,0.3);
      margin:10px 0;
      margin-left: 38% ;
    }
    
  </style>
</head>
<body>

<h2>Hi,Thanks For using our todo app.
</h2>
<h4>Have a quick look to your 
  <a href="/app.php">todo list</a> wheather your newly created one exist or not?
</h4>

<form action="./store.php" method="post">
<table>
    <tr>
      <td> Author </td>
      <td> 
        <input
        placeholder='Enter author name'
        type="text" name="author">
      </td>
    </tr>

    <tr>
      <td> Note </td>
       <td>
          <textarea 
            name="note" 
            placeholder="Add your note here ... "></textarea>
      </td>
    </tr>
    
    <tr>
      <td colspan="2">
        <button 
          type='submit' 
          name='submit' 
          value="submit"
        >
          Add Todo
        </button>
      </td>
    </tr>
</table>
</form>


</body>
</html>


