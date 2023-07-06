<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="background-image"></div>
  <div class="container">
    <h2>Registration Form</h2>
    <form action="process.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender" value="male" required> Male
        <input type="radio" name="gender" id="gender" value="female" required> Female
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" name="city" id="city" required>
      </div>
      <div class="form-group">
  <div class="phone-group">
    <label class="phone-label" for="country-code">Phone:</label>
    <div class="phone-inputs">
      <select name="country_code" id="country-code">
        <option value="+91">+91</option>
        <option value="+1">+1</option>
        <!-- Add more country codes if needed -->
      </select>
      <input type="text" name="phone" id="phone" required>
    </div>
  </div>
</div>

      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>
