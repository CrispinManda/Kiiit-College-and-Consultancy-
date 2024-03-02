<?php
/*
Template Name: Student Dashboard
*/

?>
<!-- <style>
    .container{
        margin-top:100px;
    }
</style> -->

<?php get_header(); ?>

<section id="home" class="w3l-banner py-5">

  <div class="row">
      <h1 class="mb-4">Student Dashboard</h1>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Courses</h5>
          <p class="card-text">View and enroll in courses.</p>
          <a href="#" class="btn btn-primary">View Courses</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Grades</h5>
          <p class="card-text">View your grades for enrolled courses.</p>
          <a href="#" class="btn btn-primary">View Grades</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Profile</h5>
          <p class="card-text">View and update your profile information.</p>
          <a href="#" class="btn btn-primary">View Profile</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
