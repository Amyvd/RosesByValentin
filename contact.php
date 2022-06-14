<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- styling links-->
    <link rel="stylesheet" href="css/contactpage.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/menuoverlay.css">

    <!-- javascript files -->
    <script src="javascript files/mobilenav.js"></script>
</head>
<body>
    
<form action="" method="">
    <div class="form-field">
      <label for="fullname">Fullname</label>
      <input type="text" class="fullname" name="fullname" placeholder="Fullname" required autofoucus>
    </div>
    <div class="form-field">
      <label for="email">Email</label>
      <input type="email" class="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-field">
      <label for="message">Message</label>
      <textarea type="message" class="message" name="message" placeholder="Message here..." required rows="4"></textarea>
    </div>
    <div class="form-field btn">
      <input type="submit" name="submit" class="submit" value="Send">
    </div>
  </form>

</body>
</html>