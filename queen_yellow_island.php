<?php

// Declare seeds of change constants 
define('SEED_1', 1); 
define('SEED_2', 2); 
define('SEED_3', 3);

// Utility functions 
function seed1(){ 
   echo SEED_1; 
} 
function seed2(){ 
   echo SEED_2; 
} 
function seed3(){ 
   echo SEED_3; 
} 

// Main functions 
function start_change(){ 
  echo "Starting seeds of change...<br>"; 
  seed1(); 
  seed2(); 
  seed3(); 
  echo "<br><br>Seeds of change is underway!";  
} 

// Function to send seeds of change out into the world 
function spread_change(){ 
  echo "Seeds of change are spreading!<br>"; 
  seed1(); 
  seed2(); 
  seed3(); 
  echo "<br><br>The world will be changed!"; 
} 

// Function to bring the seeds of change to a conclusion
function finish_change(){ 
  echo "Finishing the seeds of change...<br>"; 
  seed1(); 
  seed2(); 
  seed3(); 
  echo "<br><br>The world has been changed!";  
}

start_change(); 
spread_change();
finish_change();