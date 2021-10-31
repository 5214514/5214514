<html>
<head>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 40%;
        }
        tr:nth-child(even) {
            background-color: #D6E2E4;
        }
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            border: 1px solid #ddd;
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #633974;
            color: #000000;
        }
        .greentd {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<?php

$students = array(
    array('name' => 'Ahmad Asaaf', 'major' => 'IT', 'average' => '3000'),
    array('name' => 'Nader Saleh', 'major' => 'Sales', 'average' => '2200'),
    array('name' => 'Noor Hussien', 'major' => 'Marketing', 'average' => '1800'),
    array('name' => 'Wael Hussien', 'major' => 'HR', 'average' => '2800'),
    
);

function getMaxAverage($stdArr)
{
    $max = 0;
    foreach ($stdArr as $std)
        if ($std['average'] > $max) 
            $max = $std['average'];
    return $max;
}
function getMaxInMajor($stdArr, $major)
{
    $max =0;
    foreach ($stdArr as $std)
        
        if ($std['major'] == $major && $std['average'] > $max)
            $max = $std['average'];
    return $max;
}
?>
<body>
    <h2>Group H  </h2>
    <table style="border: 1px solid #ddd;">
        <tr>
            <th>  Name</th>
            <th> Department</th>
            <th> Salary</th>
        </tr>
        <?php
        foreach ($students as $std) {
            echo '<tr>';
            echo '<td>' . $std['name'] . '</td>';
            echo '<td>' . $std['major'] . '</td>';
            echo '<td>' . $std['average'] . '</td>';
            echo '</tr>';
        }
        ?>
 </table>
    <h3> Max Salary: <?= getMaxAverage($students) ?></h3>
  
    
</body>
</html>
