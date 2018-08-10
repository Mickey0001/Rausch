<?php

/*

@package rausch

*/

if (! is_active_sidebar('clients_bar') ) 

{
  return;
}

?>      
              

      <div class="column">
        <div class="c-card widget-area">
          <a href=""> 
          <?php dynamic_sidebar('clients_bar'); ?>
          </a>
        </div> <!-- c-card -->
      </div> <!-- column -->        
    
          