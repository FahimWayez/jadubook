<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["adminAuthenticated"]) || $_SESSION["adminAuthenticated"] !== true) {
    header("location: landingPage.php");
    exit(); 
}

require_once("../Model/bookManagementModel.php");
$bookDetails = viewBook();

?>

<html>

<head>
    <title>Book Management</title>
    <link rel="stylesheet" href="../CSS/bookManagementStyle.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <form align="center" method="post" action="../Controller/bookManagementProcess.php" enctype="multipart/form-data">
        <a href=""><video class="logo" src="Images/logo.mp4" muted autoplay id="logoVideo"></video></a>
        <legend align="center">
            <h3>Manage Books</h3>
        </legend>
        <table align="center" width=80% border=0>
            <tr>
                <td width=25% align="center"><textarea rows="1" cols="100" class="name" name="name" id="name"
                        placeholder="Book Name"></textarea></td>
                <td width=25% align="center"><input type="File" class="bookCoverPhoto" id="bookCoverPhoto"
                        name="bookCoverPhoto"></td>
            </tr>
            <tr>
                <td width=25% align="center"><textarea rows="10" cols="100" class="page1Text" id="page1Text"
                        name="page1Text" placeholder="Page 1 Text"></textarea></td>
                <td width=25% align="center"><input type="File" class="page1Video" id="page1Video" name="page1Video"
                        placeholder="Page 1 Video"><br><br><br><br><br>Page 1 Video</td>
                <td width=25% align="center"><input type="File" class="page1Audio" id="page1Audio" name="page1Audio"
                        placeholder="Page 1 Audio"><br><br><br><br><br>Page 1 Audio</td>
            </tr>
            <tr>
                <td width=25% align="center"><textarea rows="10" cols="100" class="page2Text" id="page2Text"
                        name="page2Text" placeholder="Page 2 Text"></textarea></td>
                <td width=25% align="center"><input type="File" class="page2Video" id="page2Video" name="page2Video"
                        placeholder="Page 2 Video"><br><br><br><br><br>Page 2 Video</td>
                <td width=25% align="center"><input type="File" class="page2Audio" id="page2Audio" name="page2Audio"
                        placeholder="Page 2 Audio"><br><br><br><br><br>Page 2 Audio</td>
            </tr>
            <tr>
                <td width=25% align="center"><textarea rows="10" cols="100" class="page3Text" id="page3Text"
                        name="page3Text" placeholder="Page 3 Text"></textarea></td>
                <td width=25% align="center"><input type="File" class="page3Video" id="page3Video" name="page3Video"
                        placeholder="Page 3 Video"><br><br><br><br><br>Page 3 Video</td>
                <td width=25% align="center"><input type="File" class="page3Audio" id="page3Audio" name="page3Audio"
                        placeholder="Page 3 Audio"><br><br><br><br><br>Page 3 Audio</td>
            </tr>
        </table>
        <table align="center" width=100% border=0>
            <tr>
                <td width=100% align="center"><br><br><br><input type="submit" class="addBook" id="addBook"
                        name="addBook" value="Add Book"></td>
            </tr>
        </table>
    </form>

    <fieldset align="center">
        <legend align="center">
            <h3>Book Details</h3>
        </legend>
        <table width=100% border=1>
            <tr>
                <th>Book ID</th>
                <th>Name</th>
                <th>Cover Photo</th>
                <th>Page 1 Video</th>
                <th>Page 1 Audio</th>
                <th>Page 2 Video</th>
                <th>Page 2 Audio</th>
                <th>Page 3 Video</th>
                <th>Page 3 Audio</th>
            </tr>
            <?php foreach ($bookDetails as $book): ?>
            <tr>
                <td align="center"><?php echo $book['bookId']?></td>
                <td align="center"><?php echo $book['name']?></td>
                <td align="center"><?php echo $book['bookCoverPhoto']?></td>
                <td align="center"><?php echo $book['page1Video']?></td>
                <td align="center"><?php echo $book['page1Audio']?></td>
                <td align="center"><?php echo $book['page2Video']?></td>
                <td align="center"><?php echo $book['page2Audio']?></td>
                <td align="center"><?php echo $book['page3Video']?></td>
                <td align="center"><?php echo $book['page3Audio']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </fieldset>
</body>

</html>