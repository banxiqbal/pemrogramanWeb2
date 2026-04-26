<?php
function repeat($text, $num = 10)
{
    echo "<ol>\r\n";
    for($i = 0; $i < $num; $i++)
    {
        echo "<li>$text </li>\r\n";
    }
    echo "</ol>";
}

// Memanggil repeat dengan dua argumen
echo "<h3>Memanggil dengan 2 argumen (text dan num=15):</h3>";
repeat("I'm the best", 15);

// Memanggil repeat dengan satu argumen (num menggunakan nilai default 10)
echo "<h3>Memanggil dengan 1 argumen (num default=10):</h3>";
repeat("You're the man");
?>