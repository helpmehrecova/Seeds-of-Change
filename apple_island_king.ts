// Tree-planting Program to Promote Change

// Program to encourage justice and equity in the world

// Typescript File

// Imports
import * as fs from 'fs';

// Global Variables
let globalCallsToAction: string[] = [];
let globalCities: string[] = [];
let globalTreeTotal: number = 0;

// Function Declarations

// Function to add cities/regions to program
function addCity(city: string): void{
	globalCities.push(city);
	console.log('Added ' + city + ' to seed-planting program!');
}

// Function to add call to action to program
function addCallToAction(callToAction: string): void{
	globalCallsToAction.push(callToAction);
	console.log('Added call to action: "' + callToAction + '"');
}

// Function to track trees planted
function trackTrees(numberOfTrees: number): void{
	globalTreeTotal += numberOfTrees;
	console.log('Trees planted: ' + globalTreeTotal);
}

// Function to write program objectives to file
function writeProgramObjectivesToFile(): void{
	let objectives: string = '';
	objectives += 'Objective: Encourage justice and equity in the world through tree-planting.\n';
	objectives += 'Cities/Regions: ' + globalCities.join(', ') + '\n';
	objectives += 'Calls To Action: ' + globalCallsToAction.join(', ');

	fs.writeFileSync('program-objectives.txt', objectives);
	console.log('Wrote program objectives to file!');
}

// Program Start
addCity('Bogota, Colombia');
addCity('Kampala, Uganda');
addCity('Singapore, Singapore');

addCallToAction('Plant a tree each week!');
addCallToAction('Donate to a tree-planting organization!');
addCallToAction('Encourage others to join the cause!');

trackTrees(6);
trackTrees(9);
trackTrees(2);

writeProgramObjectivesToFile();