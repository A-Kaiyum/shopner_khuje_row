<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  margin:auto;
  width: 800px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
  
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-75">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
        <div class="row">
      <div class="col-75">
        <label for="location">Location</label>
        <input type="text" id="location" name="location" placeholder="Your location..">
      </div>
    </div>
        <div class="row">
      <div class="col-75">
        <label for="amount">Amount</label>
        <input type="text" id="amount" name="amount" placeholder="Need Amount">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <label for="country">Blood Group</label>
        <select id="country" name="country">
          <option value="apositive">A+</option>
          <option value="anegative">A-</option>
          <option value="bpositive">B+</option>
          <option value="bnegative">B-</option>
          <option value="abpositive">AB+</option>
          <option value="abnegative">AB-</option>
          <option value="opositive">O</option>
          <option value="onegative">O-</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <label for="subject">Problem</label>
        <textarea id="subject" name="problem" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Request">
    </div>
  </form>
  <a href="javascript:history.back()">Go Back</a>
</div>

</body>
</html>
