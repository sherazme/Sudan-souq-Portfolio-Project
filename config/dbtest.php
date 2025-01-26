 <?php
 include('db_func.php');
 $var = new DataBaseImplementation();
 $id = $var->add_store(1, 1, "awad", 1, "uae","0523106943","sheraz@gmail.com");
 echo "id is ", $id;
 ?>