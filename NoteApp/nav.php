<?php
?>
<style>
  body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
    box-sizing: border-box;
    
    
  }


  .links *{
    box-sizing: border-box;
  }

  .links{
    height:80px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .logo{
     width:40px;
     height:40px;
     border-radius: 50%;
     border: 2px solid grey;
     color:grey;
     display: flex;
     justify-content: center;
     align-items: center;
     font-size: 30px;
  }
  .nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    border-bottom: 1px solid grey;
    margin: 0;
    background: #f6f6f6;
  }
  .links a, .links a:visited{
    color:grey;
    margin: 16px;
  }
  
  .links a:hover{
    color:coral;
  }
</style>
<div class='nav'>
  <div class="logo">T</div>
  <div class='links'>
      <a href="app.php">Home</a>
      <a href="create.php">Create</a>
  </div>

</div>