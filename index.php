<?php include_once 'prime-numbers.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prime numbers in range</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h3>Произволни прости числа</h3>
            <p class="text-muted credit">
                Сорс код <a href="https://github.com/milen-vm/prime-numbers" target="_blank">тук</a>.
            </p>
            <form method="POST" action="" class="form-inline" role="form">
                <div class="form-group">
                    <label for="count">Желан брои прости числа:</label>
                    <input type="text" name="count" class="form-control" id="count">
                </div>
                <div class="form-group">
                    <label for="max">Горна граница:</label>
                    <input type="text" name="max" class="form-control" id="max">
                </div>
                <button type="submit" name="submit" class="btn btn-default">
                    Submit
                </button>
            </form>
            <?php if (isset($errorMessage)) : ?>
            <h4 class="text-danger"><?php echo $errorMessage; ?></h4>
            <?php endif ?>
            <?php if(isset($primes)) : ?>
            <table class="table table-striped">
                <thead>
                  <tr>
                      <th>N</th>
                      <th>Просто число</th>
                      <th>Брой срещания</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $row = 0;
                    foreach ($primes as $key => $value) :
                    $row++;
                    ?>
                    <tr>
                        <td><?php echo $row; ?></td>
                        <td><?php echo $key; ?></td>
                        <td><?php echo $value; ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php endif ?>
        </div>
    </body>
</html>
