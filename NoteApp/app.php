<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    td,
    th {
        border: 1px solid lightgrey;
        padding: 4px 6px;

    }

    h2,
    h4 {
        text-align: center;
    }

    .msg {
        background: #efefbe;
        color: #903805;
        padding: 4px 8px;
        display: flex;

        justify-content: space-between;
        align-items: center;
        border-bottom: 20px;
        border: none;
        cursor: pointer;
        user-select: none;
    }

    .green {
        color: #0eb881;
        border: 1px solid #0eb881;
    }

    .red {
        color: #e62d00;
        border: 1px solid #e62d00;
    }

    .cross {
        font-size: 20px;
    }

    .scroll {
        overflow-y: scroll;
        overflow-x: hidden;
        height: 45vh;
    }

    table {
        width: 100%;

    }
    </style>
</head>

<body>
    <?php
    include_once('db.php');
    include_once('nav.php');
    
    $query = 'SELECT * FROM todos';
    $store = mysqli_query($conn, $query);
    $data  = mysqli_fetch_all($store, 1);
    mysqli_close($conn);
    //print_r( $data);
?>



    <h2>Hi,Thanks For using our todo app.
    </h2>
    <h4>Go Straight forward and follow this link to
        <a href="/create.php">create your next</a>
        todo
    </h4>

    <?php if (isset($_SESSION['success'])): ?>
    <div class='msg'>
        <span>
            <?=  $_SESSION['success']; ?>
        </span>
        <span class='cross'>×</span>
    </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['error'])): ?>
    <div class='msg' colspan="4">
        <span>
            <?=  $_SESSION['error']; ?>
        </span>
        <span>×</span>
    </div>
    <?php endif; ?>

    <div class='scroll'>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Author</th>
                    <th>Text</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($data)>0): ?>
                <?php foreach ($data as $row): ?>
                <tr>
                    <td>
                        <?= $row['created_at'] ?>
                    </td>
                    <td> <?= $row['author'] ?> </td>
                    <td> <?= $row['note'] ?> </td>
                    <td class="<?= $row['status'] == '1' ? 'green' : 'red' ?> ">
                        <?= $row['status'] == '1' ? 'Running' : 'Completed' ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan='4'>
                        No Todo found in the database.Try create one first?
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
    cross = document.querySelector('.cross')
    msg = document.querySelector('.msg')
    cross.addEventListener("click", () => {
        msg.style.display = 'none';
    })
    </script>



</body>

</html>

<?php 
unset($_SESSION['success']);
unset($_SESSION['error']); 
?>