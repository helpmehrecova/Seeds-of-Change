// Variable Declaration
let seedType = "";
let seedName = "";
let seedAmount = 0;

// Functionality
function getSeedType() {
  seedType = prompt("Please enter the type of seed you are planting (eg. vegetable, flower, tree, etc.");
}

function getSeedName() {
  seedName = prompt("Please enter the name of the seed you are planting:");
}

function getSeedAmount() {
  seedAmount = prompt("Please enter the number of seeds you would like to plant:");
}

function plantSeeds(seedType, seedName, seedAmount) {
  console.log(`You are about to plant ${seedAmount} ${seedName} ${seedType} seeds.`);
}

// Main
getSeedType();
getSeedName();
getSeedAmount();
plantSeeds(seedType, seedName, seedAmount);