<?php
  //let's load jquery libs from google


  //load file for this view to work on 'autocomplete' field
  $this->Html->script('View/Brands/index', array('inline' => false));

  //form with autocomplete class field
  echo $this->Form->create();
  echo $this->Form->input('name', array('class' => 'ui-autocomplete',
               'id' => 'autocomplete'));
  echo $this->Form->end();
  
  
  
  
  