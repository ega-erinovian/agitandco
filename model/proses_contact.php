<?php
    include 'connect.php';
    date_default_timezone_get();
    $kelola = htmlspecialchars($_POST['kelola']);
    $id_pesan = htmlspecialchars($_POST['id_pesan']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']); 
    $message = htmlspecialchars($_POST['message']);

    switch($kelola){

    case 'tambah':
            $query = "INSERT INTO pesan VALUE('$id_pesan', '$name', '$email', '$message')";
                if(mysqli_query($connect, $query)){
                    // send message to table log_activities
                    echo "Data Added Successfully";
                }else{
                    unlink($uploaded_path);
                    echo "Failed Adding Data: ".mysqli_error($connect);
                }
                header('Location: ../contact.php');
        break;
    case 'hapus':
        $query = "DELETE FROM pesan WHERE `id_pesan` = '$_POST[id_pesan]'";
        if(mysqli_query($connect, $query)){
            // send message to table log_activities
            echo "Data Added Successfully";
        }else{
            unlink($uploaded_path);
            echo "Failed Adding Data: ".mysqli_error($connect);
        }
        header('Location: ../profile/pesan.php');
        
    
        break;
    }