# CSRF-token
This CSRF-TOKEN is written in PHP and very simple to use. It generate random token in every refresh of the browser page.

## Generate token
```
<?php
  <form action="index.php" method="post">
    <input type="hidden" name="token" value="Token::generate()>"/>
    <input type="text" name="action" placeholder="Enter an action."/>
    <input type="submit" value="Submit" name="sub"/>
  </form>
?>
```
+ Place this static function on a hidden input field value.

## Check Token
```
<?php
  if(Token::check() == True ){
     // Token Validated  
  } else {
    // Do something to restrict
  }
?>
```
+ You can check if the token is valid using Token::generate();
