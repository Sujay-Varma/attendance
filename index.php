<?php 
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?> 
<!--
    - First name
    - Last name
    - DOB (Use DatePicker)
    - Speciality (DB Admin, Software Dev, Web Admin, Other)
    - Email Address
    - Contact number
-->
<h1 class="text-center">Registration for IT Conference </h1>

<form method='post' action='success.php'>
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" >
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" >
    </div>
    <div class="form-group">
        <label for="dob">DOB</label>
        <input type="date" class="form-control" id="dob" name="dob" >
    </div>
    <div class="form-group">
        <label for="role">Area of Expertise</label>
        <select class="form-control" id="role" name="role" placeholder="Enter role">
            <option value = '3'>DB Admin</option>
            <option>Software Dev</option>
            <option>Web Admin</option>
            <option>Other</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form> 
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>
    