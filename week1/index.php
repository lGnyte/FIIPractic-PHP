<pre>
<?php
  // class test{
  //   function do_test(){
  //     echo "test function";
  //   }
  // }

  // $a = new test();
  // print_r($a);
  // echo "<br>";
  // $a->do_test();

  // print_r($_SERVER);
  // print_r($_GET);

  // $a = 'ion';
  // $ion = 'test';
  // echo $$a;

    // $a = "Hello ";
    // $a .= "World";
    // echo $a;


  // var_dump($_GET);

  //exista elseif

  $arr_1 = array("a", "b", "c");
  $arr_2 = ["1", "2", "3"];
  $arr_3 = array("a" => ["one", "two"], "b" => "2", "c" => 3);

  echo "Array 1:";
  foreach($arr_1 as $value){
    echo "<br>".$value;
  }

  echo "<br><br>Array 2:";
  foreach($arr_2 as $key => $value){
    echo "<br>At key ".$key." there is: ".$value;
  }
  
  echo "<br><br>Array 3:";
  foreach($arr_3 as $key => $value){
    print_r("<br>At key ".$key." there is: ");
    print_r($value);
  }


  echo "<br><br>Array 4 with immutable value";
  $arr_4 = array("one", "two", "three");
  foreach($arr_4 as $k => $v) {
    $v = $k."asd";    
  }

  print_r($arr_4);
  echo "<br><br>Array 4 with mutable value";
  foreach($arr_4 as $k => &$v) {
    $v = $k + 10;
  }
  unset($v); // ramane referinta daca nu dam unset
  $v = 'x';
  print_r($arr_4);

  echo "<br>";
  echo "<br>";

  // function test($var1, $var2, int $var3){
  //   echo "Function arguments:<br>";
  //   print_r(func_get_args());
  // }
  // test(1, 2, "asd");

  echo isset($_GET['a']) ? $_GET['a'] : "no a query param";