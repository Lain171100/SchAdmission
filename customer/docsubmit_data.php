<?php

    include('connect.php');
    include('autoid_functions.php'); 
    include('../admin/teacher_header.php');

     if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   
    


?>

<html>
    <body>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="../admin/css/style.css">

        <!-- Data Table -->
        <script type="text/javascript" src="js/jquery-3.1.1.slim.min.js"></script>
	    <script type="text/javascript" src="DataTable/datatables.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="DataTable/datatables.min.css"/>

        <legend align="center">Documentation Upload Data Lists</legend>
    
        
        <script>
		$(document).ready( function ()
		{
		    $('#tableid').DataTable();
		} );
	    </script>   

        <div class="table-responsive">
        <table align="center" id="tableid" cellspacing="5px" cellpadding="5px" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Documentation ID</th>
                    <th scope="col">Personal Savings</th>
                    <th scope="col">Parent's Savings</th>
                    <th scope="col">Scholarship's Money</th>
                    <!-- <th scope="col">Staff Email Password</th> -->
                    <th scope="col">Scholarship Organization</th>
                    <th scope="col">Health Condition</th>
                    <th scope="col">Health Problem</th>
                    <th scope="col">Apply Scholarship Status</th>
                    <?php
                     if ($stafftype=="Staff")
                    {
                    ?>
                    <th scope="col">Actions</th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>

            <tbody>
                <?php   
                    $sql="SELECT * FROM doc_submit";
                    
                    $query=mysqli_query($connection,$sql);
                    $count=mysqli_num_rows($query);

                    for($i=0; $i<$count; $i++)
                    {
                        $rows=mysqli_fetch_array($query);

                        $did=$rows['did'];
                        $appform=$rows['appform'];
                        $pass=$rows['pass'];
                        $dip=$rows['dip'];
                        $transcript=$rows['transcript'];
                        $recom=$rows['recom'];
                        $autobio=$rows['autobio'];
                        $studyp=$rows['studyp'];
                        $financial=$rows['financial'];
                        $doc1=$rows['doc1'];
                        $doc2=$rows['doc2'];

                      

                        echo "<tr>";
                        echo "<th scope='row'>". ($i+1).  "</th>";
                        echo "<td>$did</td>";
                        echo "<td><a href='<?php echo $appform; ?>'>$appform</a></td>";
                        echo "<td>$pass</td>";
                        echo "<td>$dip</td>";
                        echo "<td>$transcript</td>";
                        echo "<td>$recom</td>";
                        echo "<td>$autobio</td>";
                        echo "<td>$studyp</td>";
                        echo "<td>$doc1</td>";
                        echo "<td>$doc2</td>";

                        echo "<td>
                                <a href='docsubmit_insert.php?did=$did' class='btn btn-outline-info'>Insert New Data</a> <br><br>                                
                                <a href='docsubmit_delete.php?did=$did' class='btn btn-outline-danger'>Delete</a>
                              </td>";
                        
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
       
    </body>
</html>

<?php
    // include('footer.php');

?>

 