<?php

  // PT: criar um nó de resultado
  // EN: creates a result node
  $l_result = WebApp::$app->createResult();

  // PT: criar um nó para guardar os utilizadores e adicioná-lo ao resultado
  // EN: create a node to hold the users and add it to the result
  $l_result->appendChild($l_result->createElement("privacy"));

  // PT: escolher o template para esta função
  // EN: select the template for this function
  WebApp::$app->set_template("privacy");

  $result = $l_result;

?>
