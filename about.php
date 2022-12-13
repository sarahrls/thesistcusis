<head>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>


<style type="text/css">
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
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #780000;
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

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #780000;
  text-align: center;
  cursor: pointer;
  width: 100%;
    border-radius: 5px;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


</style>


<div class="about-section">
    
    <span style="" class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#fff; float:left; font-size:30px;"><ion-icon name="arrow-back-outline"></ion-icon></a>
  <h1>Our Team</h1>
  
</div>

<h2 style="text-align:center"></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/Picture2.png" alt="Jane" style="width:50%; display: block;
  margin-left: auto; margin-right: auto;">
      <div class="container">
        <h2 style="text-align:center;">John Michael Macabante</h2>
        <p class="title" style="text-align:center;">Researcher</p>
        <p style="text-align:center;">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p style="text-align:center;">johnmichaelmacabante@gmail.com</p>
        <p style="text-align:center;"><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/Picture1.png" alt="Mike" style="width:50%; display: block;
  margin-left: auto; margin-right: auto;">
      <div class="container">
        <h2 style="text-align:center;">Mary Jane Bayod</h2>
        <p class="title" style="text-align:center;">Web Designer</p>
        <p style="text-align:center;">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p style="text-align:center;">bayodmaryjane@gmail.com</p>
        <p style="text-align:center;"><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">  
    <div class="card">
      <img src="img/Picture4.png" alt="John" style="width:50%; display: block;
  margin-left: auto; margin-right: auto;">
      <div class="container">
        <h2 style="text-align:center;">Sarah Rose Sisom</h2>
        <p class="title" style="text-align:center;">Web Developer</p>
        <p style="text-align:center;">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p style="text-align:center;">sarahroselmsn@gmail.com</p>
        <p style="text-align:center;"><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
    
     <div class="column">
    <div class="card">
      <img src="img/Picture3.png" alt="John" style="width:50%; display: block;
  margin-left: auto; margin-right: auto;">
      <div class="container">
        <h2 style="text-align:center;">Ma. Antonette Mendiola</h2>
        <p style="text-align:center;" class="title">Database Analyst</p>
        <p style="text-align:center;">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p style="text-align:center;">antonettemendiola@gmail.com</p>
        <p style="text-align:center; background-color:#780000;"><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>