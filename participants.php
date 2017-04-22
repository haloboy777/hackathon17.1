<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Participants page</title>
  </head>
  <body>
    <!--TODO

    !!Product Entry Page!!

  * types of products
  * Incubators
  * Functionality required
  * Set of public (Tag matching) [Target public]
  * Business model
  * Upload Prospectus images
  * Upload Information-->

  <h1>You can now enter a product for upload</h1>
<form action="process-participants.php" method="post" enctype="multipart/form-data">
  <input type="text" name="owner" required> Owner
  <br>
  <input type="text" name="name" required> Name of the product
  <br>
  <select name="type">
    <option selected disabled hidden style='display: none' value=''></option>
    <option value="tech">technology</option>
    <option value="travel">travel</option>
    <option value="social">social</option>
    <option value="education">education</option>
    <option value="art">art</option>
    <option value="game">game</option>
  </select> type of product
  <br>
  <br>
  <select name="target-consumer" required>
    <option selected disabled hidden style='display: none' value=''></option>
    <option value="all">Everyone</option>
    <option value="tech">Techno enthusiast</option>
    <option value="travel">traveler</option>
    <option value="social">ngo</option>
    <option value="education">student or teacher</option>
    <option value="art">art lover</option>
    <option value="game">gamers</option>
  </select> target consumer
  <br>
  <br>
  <input type="checkbox" name="funding" value="yes"> NO!! funding required
  <br>
  <textarea name="model" rows="8" cols="80">business model</textarea>
  <br>
  <textarea name="info" rows="8" cols="80">information</textarea>
  <br>
  <br>
  <h3>upload 4 imgs</h3>
  <input type="file" name="img1">
  <input type="file" name="img2">
  <input type="file" name="img3">
  <input type="file" name="img4">
  <br>
  <br><input type="submit">
</form>
  </body>
</html>
