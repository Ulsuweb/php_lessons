<?php
$link = mysqli_connect("localhost", "root", "root","DATABASE_TEST");

if ($link == false) {
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
    print("Соединение установлено успешно");



    mysqli_set_charset($link, "utf8");



    /*
    // Create database
    $sql = "CREATE DATABASE DATABASE_TEST";
    if ($link->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $link->error;
    }



    $sql = "CREATE TABLE mywork (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
    )";


    $result = mysqli_query($link, $sql);

    if ($result == false) {
        print("Произошла ошибка при выполнении запроса");
    }





    $sql = 'INSERT INTO mywork SET `firstname` = "misha", lastname = "иванов", email = "test@test.com"';
    $result = mysqli_query($link, $sql);

    if ($result == false) {
        print("Произошла ошибка при выполнении запроса");
    }

     */

}
?>