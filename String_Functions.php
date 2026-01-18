<!-- 
Louisse Ken W. Tiosejo
WD-202 
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Built-in String Functions</title>
<link rel="stylesheet" href="css/styles.css">
</head>

<body>

<?php
$school = "HOLY ANGEL UNIVERSITY";
$name   = "Louisse Tiosejo";
$removeReplace = "Valorant on top";
$other  = "I'm the best";
?>

<div class="container">


<section>
<h2>Changing the Case of Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Output</th>
    </tr>
    <tr>
        <td>strtolower($string)</td>
        <td><?= strtolower($school); ?></td>
    </tr>
    <tr>
        <td>strtoupper($string)</td>
        <td><?= strtoupper($school); ?></td>
    </tr>
    <tr>
        <td>ucwords($string)</td>
        <td><?= ucwords(strtolower($school)); ?></td>
    </tr>
</table>
</section>

<!-- count -->
<section>
<h2>Counting Characters and Words</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Output</th>
    </tr>
    <tr>
        <td>strlen($string)</td>
        <td><?= strlen($name); ?></td>
    </tr>
    <tr>
        <td>str_word_count($string)</td>
        <td><?= str_word_count($name); ?></td>
    </tr>
</table>
</section>

<!-- remove/replace -->
<section>
<h2>Removing and Replacing Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Output</th>
    </tr>
    <tr>
        <td>ltrim($string)</td>
        <td><?= ltrim($removeReplace); ?></td>
    </tr>
    <tr>
        <td>rtrim($string)</td>
        <td><?= rtrim($removeReplace); ?></td>
    </tr>
    <tr>
        <td>trim($string)</td>
        <td><?= trim($removeReplace); ?></td>
    </tr>
    <tr>
        <td>str_replace($old, $new, $string)</td>
        <td><?= str_replace("Valorant", "I'm", $removeReplace); ?></td>
    </tr>
    <tr>
        <td>str_ireplace($old, $new, $string)</td>
        <td><?= str_ireplace("TOP", "PC", $removeReplace); ?></td>
    </tr>
</table>
</section>

<!-- other -->
<section>
<h2>Other Built-in String Functions (9)</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Output</th>
    </tr>
    <tr>
        <td>mstrpos($string, $substring)</td>
        <td><?= strpos($other, "best"); ?></td>
    </tr>
    <tr>
        <td>stripos($string, $substring)</td>
        <td><?= stripos($other, "THE"); ?></td>
    </tr>
    <tr>
        <td>strrpos($string, $substring])</td>
        <td><?= strrpos($other, "t"); ?></td>
    </tr>
    <tr>
        <td>substr($string, $start)</td>
        <td><?= substr($other, 0, 5); ?></td>
    </tr>
    <tr>
        <td> str_contains($string, $substring)</td>
        <td><?= str_contains($other, "best") ? "True" : "False"; ?></td>
    </tr>
    <tr>
        <td>str_starts_with($string, $substring)</td>
        <td><?= str_starts_with($other, "I'm") ? "True" : "False"; ?></td>
    </tr>
    <tr>
        <td> str_ends_with($string, $substring)</td>
        <td><?= str_ends_with($other, "best") ? "True" : "False"; ?></td>
    </tr>
    <tr>
        <td>strstr($string, $substring)</td>
        <td><?= strstr($other, "the"); ?></td>
    </tr>
    <tr>
        <td>str_repeat($string, $repeats)</td>
        <td><?= str_repeat("★", 5); ?></td>
    </tr>
</table>
</section>

</div>

</body>
</html>
