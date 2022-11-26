<html>
    <body>
        Welcome <?php echo $_POST["nama"];?><br>
        Your Email Addres is: <?php echo $_POST["email"];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydb";
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed:".$conn->connect_error);
    }
    
    $sql = "INSERT INTO myguests (id, nama, nim, email, komentar)
    VALUES ('$id', '$nama', '$nim', '$email', '$komentar');";
    
    if($conn->query($sql) === TRUE) {
        echo "New records created succesfully";
    } else{
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    
    $conn = new mysqli ($servername, $username, $password, $dbname);
    $sql=  "SELECT id, nama, nim, email, komentar FROM myguests";
    ?>
    </body>
</html>