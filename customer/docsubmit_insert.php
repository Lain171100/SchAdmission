<?php
   session_start();
   include('connect.php');
   include('autoid_functions.php'); 
   include('header_form.php');

    if(isset($_POST['btnsave']))
    {   
      $txtdid=$_POST['txtdid'];
      $studentid=$_POST['txtstudentid'];
      
      //----------   Application Form    ------------//
      if(isset($_FILES['fileToUpload'])){
      $errors= array();
      $file_name = $_FILES['fileToUpload']['name'];
      $file_size = $_FILES['fileToUpload']['size'];
      $file_tmp = $_FILES['fileToUpload']['tmp_name'];
      $file_type = $_FILES['fileToUpload']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));

      //----------   Passport   ------------//
      if(isset($_FILES['PassFile'])){
      $errors= array();
      $file_pass_name = $_FILES['PassFile']['name'];
      $file_pass_size = $_FILES['PassFile']['size'];
      $file_pass_tmp = $_FILES['PassFile']['tmp_name'];
      $file_pass_type = $_FILES['PassFile']['type'];
      $file_pass_ext=strtolower(end(explode('.',$_FILES['PassFile']['name'])));

      //----------   Diploma   ------------//
      if(isset($_FILES['DipFile'])){
      $errors= array();
      $file_dip_name = $_FILES['DipFile']['name'];
      $file_dip_size = $_FILES['DipFile']['size'];
      $file_dip_tmp = $_FILES['DipFile']['tmp_name'];
      $file_dip_type = $_FILES['DipFile']['type'];
      $file_dip_ext=strtolower(end(explode('.',$_FILES['DipFile']['name'])));

      //----------   Transcript   ------------//
      if(isset($_FILES['TranFile'])){
      $errors= array();
      $file_tran_name = $_FILES['TranFile']['name'];
      $file_tran_size = $_FILES['TranFile']['size'];
      $file_tran_tmp = $_FILES['TranFile']['tmp_name'];
      $file_tran_type = $_FILES['TranFile']['type'];
      $file_tran_ext=strtolower(end(explode('.',$_FILES['TranFile']['name'])));

      //----------   Recommendation Letter   ------------//
      if(isset($_FILES['RecomFile'])){
      $errors= array();
      $file_recom_name = $_FILES['RecomFile']['name'];
      $file_recom_size = $_FILES['RecomFile']['size'];
      $file_recom_tmp = $_FILES['RecomFile']['tmp_name'];
      $file_recom_type = $_FILES['RecomFile']['type'];
      $file_recom_ext=strtolower(end(explode('.',$_FILES['RecomFile']['name'])));

      //----------   Autobiography    ------------//
      if(isset($_FILES['AbFile'])){
      $errors= array();
      $file_ab_name = $_FILES['AbFile']['name'];
      $file_ab_size = $_FILES['AbFile']['size'];
      $file_ab_tmp = $_FILES['AbFile']['tmp_name'];
      $file_ab_type = $_FILES['AbFile']['type'];
      $file_ab_ext=strtolower(end(explode('.',$_FILES['AbFile']['name'])));

      //----------   Study Plan    ------------//
      if(isset($_FILES['SpFile'])){
      $errors= array();
      $file_sp_name = $_FILES['SpFile']['name'];
      $file_sp_size = $_FILES['SpFile']['size'];
      $file_sp_tmp = $_FILES['SpFile']['tmp_name'];
      $file_sp_type = $_FILES['SpFile']['type'];
      $file_sp_ext=strtolower(end(explode('.',$_FILES['SpFile']['name'])));

      //----------   Financial Statement    ------------//
      if(isset($_FILES['FsFile'])){
      $errors= array();
      $file_fin_name = $_FILES['FsFile']['name'];
      $file_fin_size = $_FILES['FsFile']['size'];
      $file_fin_tmp = $_FILES['FsFile']['tmp_name'];
      $file_fin_type = $_FILES['FsFile']['type'];
      $file_fin_ext=strtolower(end(explode('.',$_FILES['FsFile']['name'])));

      //----------   Doc Required By Department 1    ------------//
      if(isset($_FILES['DoneFile'])){
      $errors= array();
      $file_done_name = $_FILES['DoneFile']['name'];
      $file_done_size = $_FILES['DoneFile']['size'];
      $file_done_tmp = $_FILES['DoneFile']['tmp_name'];
      $file_done_type = $_FILES['DoneFile']['type'];
      $file_done_ext=strtolower(end(explode('.',$_FILES['DoneFile']['name'])));

      //----------   Doc Required By Department 2    ------------//
      if(isset($_FILES['DtwoFile'])){
      $errors= array();
      $file_dtwo_name = $_FILES['DtwoFile']['name'];
      $file_dtwo_size = $_FILES['DtwoFile']['size'];
      $file_dtwo_tmp = $_FILES['DtwoFile']['tmp_name'];
      $file_dtwo_type = $_FILES['DtwoFile']['type'];
      $file_dtwo_ext=strtolower(end(explode('.',$_FILES['DtwoFile']['name'])));


      
      //----------   Check Extension   ------------//
      //----------   Application Form    ------------//
      $extensions= array("pdf");

      if(in_array($file_ext,$extensions)=== false ){
         $errors[]="extension not allowed, please choose a PDF file.";
      }

      //----------   Passport    ------------//
      $extensions_pass= array("pdf");
      if(in_array($file_pass_ext,$extensions_pass)=== false ){
         $errors_pass[]="extension not allowed, please choose a PDF file.";
      }
      //----------   Diploma    ------------//
      $extensions_dip= array("pdf");
      if(in_array($file_dip_ext,$extensions_dip)=== false ){
         $errors_dip[]="extension not allowed, please choose a PDF file.";
      }
      //----------   Transcript    ------------//
      $extensions_tran= array("pdf");
      if(in_array($file_tran_ext,$extensions_tran)=== false ){
         $errors_tran[]="extension not allowed, please choose a PDF file.";
      }
      //----------   Recommendation Letter    ------------//
      $extensions_recom= array("pdf");
      if(in_array($file_recom_ext,$extensions_recom)=== false ){
         $errors_recom[]="extension not allowed, please choose a PDF file.";
      }
      //----------   Autobiography    ------------//
      $extensions_ab= array("pdf");
      if(in_array($file_ab_ext,$extensions_ab)=== false ){
         $errors_ab[]="extension not allowed, please choose a PDF file.";
      }
      //----------   Study Plan    ------------//
      $extensions_sp= array("pdf");
      if(in_array($file_sp_ext,$extensions_sp)=== false ){
         $errors_sp[]="extension not allowed, please choose a PDF file.";
      }
      //----------   Financial Statement    ------------//
      $extensions_fin= array("pdf");
      if(in_array($file_fin_ext,$extensions_fin)=== false ){
         $errors_fin[]="extension not allowed, please choose a PDF file.";
      }
      //----------   Document Requirement By Dep 1    ------------//
      $extensions_done= array("pdf");
      if(in_array($file_done_ext,$extensions_done)=== false ){
         $errors_done[]="extension not allowed, please choose a PDF file.";
      }
      //----------   Document Requirement By Dep 2    ------------//
      $extensions_dtwo= array("pdf");
      if(in_array($file_dtwo_ext,$extensions_dtwo)=== false ){
         $errors_dtwo[]="extension not allowed, please choose a PDF file.";
      }

      // if($file_size > 2097152) {
      //    $errors[]='File size must be excately 2 MB';
      // }
      
      //----------   File Copy    ------------//
      //----------   Application Form    ------------//
      if(empty($errors)==true) {
         
         move_uploaded_file($file_tmp,"pdf_file/".$file_name);

      }else{
         print_r($errors);
      }

      //----------   Passport    ------------//
      if(empty($errors_pass)==true) {
         
         move_uploaded_file($file_pass_tmp,"pdf_file/".$file_pass_name);

      }else{
         print_r($errors_pass);
      }

      //----------   Diploma    ------------//
      if(empty($errors_dip)==true) {
         
         move_uploaded_file($file_dip_tmp,"pdf_file/".$file_dip_name);

      }else{
         print_r($errors_dip);
      }

      //----------   Transcript    ------------//
      if(empty($errors_tran)==true) {
         
         move_uploaded_file($file_tran_tmp,"pdf_file/".$file_tran_name);

      }else{
         print_r($errors_tran);
      }
      
      //----------   Recommendation Letter    ------------//
      if(empty($errors_recom)==true) {
         
         move_uploaded_file($file_recom_tmp,"pdf_file/".$file_recom_name);

      }else{
         print_r($errors_recom);
      }
      
      //----------   Autobiography    ------------//
      if(empty($errors_ab)==true) {
         
         move_uploaded_file($file_ab_tmp,"pdf_file/".$file_ab_name);

      }else{
         print_r($errors_ab);
      }
      
      //----------   Study Plan    ------------//
      if(empty($errors_sp)==true) {
         
         move_uploaded_file($file_sp_tmp,"pdf_file/".$file_sp_name);

      }else{
         print_r($errors_sp);
      }
      
      //----------   Financial Statement    ------------//
      if(empty($errors_fin)==true) {
         
         move_uploaded_file($file_fin_tmp,"pdf_file/".$file_fin_name);

      }else{
         print_r($errors_fin);
      }
      
      //----------   Doc Requirement By Dep 1   ------------//
      if(empty($errors_done)==true) {
         
         move_uploaded_file($file_done_tmp,"pdf_file/".$file_done_name);

      }else{
         print_r($errors_done);
      }
      
      //----------   Doc Requirement By Dep 2   ------------//
      if(empty($errors_dtwo)==true) {
         
         move_uploaded_file($file_dtwo_tmp,"pdf_file/".$file_dtwo_name);

      }else{
         print_r($errors_dtwo);
      }
      

    //   ================
    if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      
      }
      
    //   if($file_size > 2097152){
    //      $errors[]='File size must be excately 2 MB';
    //   }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"pdf_file/".$file_name);
        //  echo "Success";
      }else{
         print_r($errors);
      }
    //   ===========


      $query="INSERT INTO doc_submit (did, appform, pass, dip, transcript, recom, autobio, studyp, financial, doc1, doc2)
                VALUES ('$txtdid','$file_name','$file_pass_name','$file_dip_name','$file_tran_name','$file_recom_name','$file_ab_name','$file_sp_name','$file_fin_name','$file_done_name','$file_dtwo_name')";
      $result=mysqli_query($connection,$query);

        if($result)
        {   
            $updatesql="UPDATE stu SET did='$txtdid' WHERE sid='$studentid' ";
            $updatedata=mysqli_query($connection,$updatesql);
            if ($updatedata)
            {
                echo "<script>window.alert('Documentation Data Successfully Created.')</script>
                <script>window.location='lastpage.php'</script>";
            }
            // echo "<script>window.alert('Doc Submit Data Successfully Created.')</script>";

        }
        else
        {
            echo "<p>Something went wrong in Doc Upload " . mysqli_error($connection) . "</p>";
        }
   
   // Autobiography
      }
   // Recommendation 
   }
// Transcript
}
// Diploma
}      
// Passport 
}
// Application Form
}
// Study Plan
}
// Financial Statement
}
// Doc By Dep 1
}
// Doc By Dep 2
}


// Condition End
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <!-- Process -->
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Process Status</h2>
            </div>
          </div>
          <div class="col-md-12">
              <img src="assets/images/process_six.jpg" alt="" class="img-fluid" height="200px">
          </div>
        </div>
      </div>
    </div>
   

   <!-- Process End -->

   <div class="container">
   <div class="col-md-12">
    <form action="docsubmit_insert.php" method="POST" enctype="multipart/form-data">
        <legend>Document Submission Form</legend>

        <div>
            <label for="did">Doc Submit ID:</label>
            <input type="text" class="form-control" name="txtdid" value="<?= AutoID('doc_submit','did','DID-',4) ?>" readonly>
            <br>
         </div>

        <!-- Application Form -->
        <div>
           <label for="">Application Form:</label>
           <input type="file" class="" name="fileToUpload"  required>

        </div>
      <br>
        <!-- Passport -->
         <div>
            <label for="">Passport: </label>
            <input type="file" class="" name="PassFile" required>
         </div>
      <br>
         <!-- Highest Level Diploma -->
         <div>
            <label for="">Highest Level Diploma: </label>
            <input type="file" class="" name="DipFile" required>
         </div>
      <br>
         <!-- Highest Level Diploma Transcript -->
         <div>
            <label for="">Highest Level Diploma Transcript: </label>
            <input type="file" class="" name="TranFile" required>
         </div>
      <br>
         <!-- Recommendation Letter -->
         <div>
            <label for="">Recommendation Letter: </label>
            <input type="file" class="" name="RecomFile" required>
         </div>
      <br>
         <!-- Autobiography -->
         <div>
            <label for="">Autobiography: </label>
            <input type="file" class="" name="AbFile" required>
         </div>
      <br>
         <!-- Study Plan -->
         <div>
            <label for="">Study Plan: </label>
            <input type="file" class="" name="SpFile" required>
         </div>
      <br>
         <!-- Financial Statement -->
         <div>
            <label for="">Financial Statement: </label>
            <input type="file" class="" name="FsFile" required>
         </div>
      <br>
         <!-- Documents Required By Department 1 -->
         <div>
            <label for="">Documents Required by Department 1: </label>
            <input type="file" class="" name="DoneFile" required>
         </div>
      <br>
         <!-- Documents Required By Department 2 -->
         <div>
            <label for="">Documents Required by Department 2: </label>
            <input type="file" class="" name="DtwoFile" required>
         </div>
      <br>
         <div>
            <input type="text" name="txtstudentid" value="<?php echo $_SESSION['sid']; ?>" hidden>
            <input class="btn btn-primary" type="submit" name="btnsave" value="Save">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Clear" >
         </div>

    </form>
   </div>
   </div>
</body>
</html>

<?php
   include('footer.php');
?>