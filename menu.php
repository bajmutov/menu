<!doctype html public "-//w3c//dtd html 4.01 transitional//en"
"http://www.w3.org/tr/html4/loose.dtd">

<html>

<head>
<title>MENU function</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="">
<meta name="description" content="">

</head>

<body>
    <pre>
<?php

//function menu()
//{
//    $mas = array('');
//    echo '<ol>';
//    foreach ($mas as $val){
//    echo '<li><a href="'.$val.'"> Раздел' .$val. '</a></li>';
//    }
//    echo '</ol>';
//    
//}
//$a = array ('Раздел 1','Раздел 2','Раздел 3');
//menu ($a);

//$mas = array('1'=>array('1.1','1.2'),
//             '2'=>array('2.1','2.2'),
//             '3'=>array('3.1')
//            );
//print_r($mas);

function spisok($m){
echo '<ul>';
$m=array();
    foreach ($m as $k=>$val)
    {
    echo '<li><a href="#'.$k.'"> Раздел ' .$k. '</a></li>';
      echo '<ul>';
        foreach($val as $val2)
         {
        echo '<li><a href="#'.$val2.'"> Раздел ' .$val2. '</a></li>';
         } 
      echo '</ul>';
    }
echo '</ul>'; 
}

$mas = array('1'=>array('1.1','1.2'),
             '2'=>array('2.1','2.2'),
             '3'=>array('3.1')
            );

spisok($mas);


?>
</pre>
    
    
</body>
</html>