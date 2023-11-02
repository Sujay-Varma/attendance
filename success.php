<?php 
    $title = 'Submission Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        $fn = $_POST['firstname'];
        $ln = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $role = $_POST['role'];

        $isSuccess = $crud->insert($fn,$ln,$dob,$email,$contact,$role);

        if($isSuccess){
            echo '<h1 class="text-center  text-primary">You have been registered successfully </h1>';
        }
        else{
            echo '<h1 class="text-center  text-danger">There is an error </h1>';
        }
    }
?> 



<!-- This printout values that were passed to the action page using method 'get' -->
<!--<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
    <?php //echo $_GET['firstname']. ' ' .$_GET['lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
        <?php //echo $_GET['role']; ?>
    </h6>
    <p class="card-text">
        DOB: <?php //echo $_GET['dob']; ?>
    </p>
    <p class="card-text">
        Email Address: <?php //echo $_GET['email']; ?>
    </p>
    <p class="card-text">
        Contact Number: <?php //echo $_GET['phone']; ?>
    </p>
    
  </div>
</div> -->

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
    <?php echo $_POST['firstname']. ' ' .$_POST['lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
        <?php echo $_POST['role']; ?>
    </h6>
    <p class="card-text">
        DOB: <?php echo $_POST['dob']; ?>
    </p>
    <p class="card-text">
        Email Address: <?php echo $_POST['email']; ?>
    </p>
    <p class="card-text">
        Contact Number: <?php echo $_POST['phone']; ?>
    </p>
    
  </div>
</div>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>