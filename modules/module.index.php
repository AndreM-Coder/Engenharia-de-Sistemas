<?php

  // PT: query que lê todos os utilizadores da base de dados
  // EN: this query reads all users from the database
  $l_query = "SELECT * FROM users;";

  // PT: criar um nó de resultado
  // EN: creates a result node
  $l_result = WebApp::$app->createResult();

  // PT: criar um nó para guardar os utilizadores e adicioná-lo ao resultado
  // EN: create a node to hold the users and add it to the result
  $l_users_node = $l_result->createElement("users");
  $l_result->appendChild($l_users_node);

  // PT: preparar a query
  // EN: prepares the query
  $l_statement = WebApp::$app->get_db()->prepare("$l_query");

  // PT: se o statement falhar, lançar excepção
  // EN: if the statement fails, throw an exception
  if(false === $l_statement->Execute()) throw(new Exception("Query failed"));

  // PT: percorrer todos os utilizadores obtidos
  // EN: traverse all the users returned
  while($l_user = $l_statement->fetch())
  {
    if(false === $l_user) break;

    // PT: criar um novo nó para representar um utilizador e adicioná-lo ao nó de utilizadores
    // EN: create a new node to represent a user and add it to the users node
    $l_node = $l_result->createElement("user");
    $l_users_node->appendChild($l_node);

    // PT: definir atributos do utilizador
    // EN: define user attributes
    $l_node->setAttribute("user_id", $l_user["user_id"]);
    $l_node->setAttribute("username", $l_user["username"]);
    $l_node->setAttribute("name", $l_user["name"]);
  }

  // PT: escolher o template para esta função
  // EN: select the template for this function
  WebApp::$app->set_template("index");

  $result = $l_result;

?>