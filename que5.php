<!--Write a PHP script to sort the following associative array using menu driven-->
<!--programming:-->
<!--array("Ram"=>"19","Pooja"=>"25","Divya"=>"45","Nirmal"=>"53 ")-->
<!--a) return an array in the reverse order-->
<!--b) search an array for the value "25" and return its key-->
<!--c) ascending order sort by value-->
<!--d) ascending order sort by Key-->
<!--e) split an array into chunks of two-->
<!--f) descending order sorting by Value-->
<!--g) descending order sorting by Key-->

<?php
$people = [
    'Ram' => '19',
    'Pooja' => '25',
    'Divya' => '45',
    'Nirmal' => '53'
];

function reverse($array)
{
    return array_reverse($array);
}

function search($array, $value)
{
    return array_search($value, $array);
}

function sortByValue($array)
{
    asort($array);
    return $array;
}

function sortByKey($array)
{
    ksort($array);
    return $array;
}

function chunk($array)
{
    return array_chunk($array, 2);
}

function sortByValueDesc($array)
{
    arsort($array);
    return $array;
}

function sortByKeyDesc($array)
{
    krsort($array);
    return $array;
}

function printArray($array)
{
    foreach ($array as $key => $value) {
        echo $key . ' ' . $value . '<br>';
    }
}

function printArrayChunks($array)
{
    foreach ($array as $chunk) {
        echo implode(' ', $chunk) . '<br>';
    }
}

switch ($_GET['action']) {
    case 'reverse':
        printArray(reverse($people));
        break;
    case 'search':
        echo search($people, '25');
        break;
    case 'sortByValue':
        printArray(sortByValue($people));
        break;
    case 'sortByKey':
        printArray(sortByKey($people));
        break;
    case 'chunk':
        printArrayChunks(chunk($people));
        break;
    case 'sortByValueDesc':
        printArray(sortByValueDesc($people));
        break;
    case 'sortByKeyDesc':
        printArray(sortByKeyDesc($people));
        break;
    default:
        echo 'Invalid action';
}
?>

<form method="get">
    <select name="action">
        <option value="reverse">Reverse</option>
        <option value="search">Search</option>
        <option value="sortByValue">Sort by value</option>
        <option value="sortByKey">Sort by key</option>
        <option value="chunk">Chunk</option>
        <option value="sortByValueDesc">Sort by value desc</option>
        <option value="sortByKeyDesc">Sort by key desc</option>
    </select>
    <input type="submit" value="Submit">
</form>