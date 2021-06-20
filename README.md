# CSRF-token
[![GitHub license](https://img.shields.io/github/license/jcavenue/csrf-token?style=plastic)](https://github.com/jcavenue/csrf-token/blob/main/LICENSE)
[![GitHub release](https://img.shields.io/github/release/jcavenue/csrf-token.svg)](https://github.com/jcvenue/csrf-token/releases/)
[![GitHub commits](https://img.shields.io/github/commits-since/jcavenue/csrf-token/v1.0.0.svg)](https://GitHub.com/jcavenue/csrf-token/commit/)
[![made-with-PHP](https://img.shields.io/badge/Made%20with-PHP-1f425f.svg)](https://GitHub.com/jcavenue/csrf-token/)



This CSRF-TOKEN is written in PHP and very simple to use. It generates random token in every refresh of the browser page.

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
+ You can check if the Session token is valid using Token::generate();
