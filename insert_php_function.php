<?php
require_once 'db.php';
$connectionObj = new db(); // OBJECT 
$tname = 'function_description';
$get_defined_functions = get_defined_functions(true);
$internal_function = $get_defined_functions['internal'];
$key =array_search('_dyuweyrj4', $internal_function); 
unset($internal_function[$key]);
$key =array_search('_dyuweyrj4r', $internal_function); 
unset($internal_function[$key]);
sort($internal_function);
$internal_function_arr = implode('\'),(\'',$internal_function);
$sql_query = "INSERT INTO `function_description` (`function_name`) VALUES ('$internal_function_arr')";
// INSERT INTO function_description (function_name)
// SELECT * FROM (SELECT 'abs') AS tmp
// WHERE NOT EXISTS (
//     SELECT function_name FROM function_description WHERE function_name = 'abs'
// ) LIMIT 1;


echo '<br>'.basename(__FILE__).' '.__LINE__.'<pre> data :: '; print_r($result); echo '</pre>'; exit;
$result = $connectionObj->custom_query($sql_query);
if($result){
    echo "done";
}else{
    echo "fail...";
}
?>
