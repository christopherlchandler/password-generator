<?php
$passresult = '';
if (isset($_POST['passgen']))
{
    $password = '';
    $manychar = $_POST['manychar'];
    $special = $_POST['special'];
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTWXYZ';
    $schars = '~`!@#$%^&*()_-+={[}]|\:;<,>.?/';
    if ($special == 'yes')
    {
        $chars = $chars . $schars;
    }
    while (0 < $manchar)
    {
        $passresult .= $chars[random_int(0, strlen($chars) - 1) ];
    } 
    while ($manchar <= 0) {
      $passresult ='';
    }
}
$message = "Password Generator App!";
?> <html>
  <head>
    <title><?php echo $message; ?></title>
  </head>
  <body>
    <h1> <?php

echo $message;

?> <?php echo $passresult; ?></h1><?php echo $passresult; ?>
    <div class="form-grid">
      <form class="passgen" name="passgen" action="" method="post">
        <div id="pwresult">
          <input type="text" id="passresult" name="passresult" value="<?php echo $passresult; ?>">
        </div>
        <div id="manycharacters">
          <label for="password">How many characters?</label>
          <br>
          <select name="manychar" id="many">
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">10</option>
            <option value="18">11</option>
            <option value="19">12</option>
            <option value="20">20</option>
          </select>
        </div>
        <div id="specialcharacters">
          <p>Special characters? <br>
            <label for="spec-y">Yes</label>
            <input type="radio" id="spec-y" name="special" value="yes">
            <label for="spec-n">No</label>
            <input type="radio" id="spec-n" name="special" value="no">
          </p>
          <input type="submit" name="generatepass" value="generatepass">
        </div>
      </form>
    </div>
