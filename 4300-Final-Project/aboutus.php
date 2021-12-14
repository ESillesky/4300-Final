<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="about-section">
  <h1>About Us!</h1>
</div>

<h2 style="text-align:center">Dr. Mario's Music Central Dev Team</h2>
<div class="row" style="text-align:center">
  <div class="column">
    <div class="card">
      <img src="localImages/us/letter_h_PNG40.png" alt="Harini" width="200" height="200">
      <div class="container">
        <h2>Harini Chander</h2>
        <p class="title">Web Developer</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="localImages/us/letter_d_PNG34.png" alt="Daniel" width="200" height="200">
      <div class="container">
        <h2>Daniel Figiel</h2>
        <p class="title">Web Developer</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="localImages/us/letter_c_PNG47.png" alt="Cedric" width="200" height="200">
      <div class="container">
        <h2>Cedric Johnson II</h2>
        <p class="title">Web Developer</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="localImages/us/letter_e_PNG33.png" alt="Eliza" width="200" height="200">
      <div class="container">
        <h2>Eliza Sillesky</h2>
        <p class="title">Web Developer</p>
      </div>
    </div>
   </div>

  <div class="column">
    <div class="card">
      <img src="localImages/us/letter_k_PNG51.png" alt="Kel" width="200" height="200">
      <div class="container">
        <h2>Kel Timbrook</h2>
        <p class="title">Web Developer</p>
      </div>
    </div>
   </div>
</div>
</body>
</html>

<head>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.ticket {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 5px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>
</head>
