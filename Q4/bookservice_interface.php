<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Books Store SOAP Web Service</h1>
    Enter <b>ISBN</b> of Book and click on <b>Fetch Book Information</b> button.
    <br /><br />
    <div class='row'>
        <form class="form-inline" method='post' name='form1'>
            <?php if (isset($error)) { ?>
                <div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Error!</strong>&nbsp;<?php echo $error; ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="email">ISBN:</label>
                <input type="text" class="form-control" name="isbn" id="isbn" placeholder="Enter ISBN">
                <button type="submit" name='sub' class="btn btn-default">Fetch Book
                    Information</button>
            </div>
        </form>
    </div>

    <div>
        <h2>Book Information</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>ISBN</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './bookservice_client.php';

                ?>
                <?php   
                    // echo 'data: '.var_dump($result);
                   // echo 'data: '.count($result);
                    

                if (count($result)) {
                    //foreach ($result as $item) {
                        // for ($i=0; $i < count($result); $i++) {
                        ?>
                            <tr>
                                <td><?php echo $result['title']; ?></td>
                                <td><?php echo $result['author_name']; ?></td>
                                <td><?php echo $result['price']; ?></td>
                                <td><?php echo $result['isbn']; ?></td>
                                <td><?php echo $result['category']; ?></td>
                            </tr>
                        <?php
                        // }
                } else { ?>
                    <tr>
                        <td colspan='5'>Enter ISBN and click on Fetch Book Information button</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>