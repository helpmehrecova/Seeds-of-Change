// Seeds of Change: Typescript Code

class Seed {
  constructor(name, age, type) {
    this.name = name;
    this.age = age;
    this.type = type;
  }

  grow() {
    console.log(`${this.name} is growing!`);
  } 

  changeAge(newAge) {
    this.age = newAge;
    console.log(`${this.name} is now ${this.age} days old.`);
  }
}

const marigold = new Seed("Marigold", 10, "annual");

// Grow the marigold seed
marigold.grow();

// Change the age of the marigold seed
marigold.changeAge(20);

class Plant {
  constructor(name, type) {
    this.name = name;
    this.type = type;
    this.seeds = [];
  }

  addSeed(seed) {
    this.seeds.push(seed);
    console.log(`A ${seed.name} seed has been added to the ${this.name} plant.`);
  }

  water() {
    console.log(`The ${this.name} plant has been watered!`);
  }

  sun() {
    console.log(`The ${this.name} plant has been exposed to sunlight!`);
  }
}

const daisy = new Plant("Daisy", "perennial");

// Add a Marigold seed to the daisy plant
daisy.addSeed(marigold);

// Water and sun the daisy plant
daisy.water();
daisy.sun();

class Garden {
  constructor(name) {
    this.name = name;
    this.plants = [];
  }

  addPlant(plant) {
    this.plants.push(plant);
    console.log(`A ${plant.name} plant has been added to the ${this.name} garden.`);
  }

  water() {
    console.log(`The ${this.name} garden has been watered!`);
    this.plants.forEach((plant) => {
      plant.water();
    });
  }

  sun() {
    console.log(`The ${this.name} garden has been exposed to sunlight!`);
    this.plants.forEach((plant) => {
      plant.sun();
    });
  }
}

const backyard = new Garden("Backyard");

// Add a daisy plant to the backyard garden
backyard.addPlant(daisy);

// Water and sun the backyard garden
backyard.water();
backyard.sun();

class Plot {
  constructor(name, size) {
    this.name = name;
    this.size = size;
    this.gardens = [];
  }

  addGarden(garden) {
    this.gardens.push(garden);
    console.log(`A ${garden.name} garden has been added to the ${this.name} plot.`);
  }

  water() {
    console.log(`The ${this.name} plot has been watered!`);
    this.gardens.forEach((garden) => {
      garden.water();
    });
  }

  sun() {
    console.log(`The ${this.name} plot has been exposed to sunlight!`);
    this.gardens.forEach((garden) => {
      garden.sun();
    });
  }
}

const frontYard = new Plot("Front Yard", 500);

// Add the backyard garden to the front yard
frontYard.addGarden(backyard);

// Water and sun the front yard plot
frontYard.water();
frontYard.sun();

class Farm {
  constructor(name, size) {
    this.name = name;
    this.size = size;
    this.plots = [];
  }

  addPlot(plot) {
    this.plots.push(plot);
    console.log(`A ${plot.name} plot has been added to the ${this.name} farm.`);
  }

  water() {
    console.log(`The ${this.name} farm has been watered!`);
    this.plots.forEach((plot) => {
      plot.water();
    });
  }

  sun() {
    console.log(`The ${this.name} farm has been exposed to sunlight!`);
    this.plots.forEach((plot) => {
      plot.sun();
    });
  }
}

const dreamFarm = new Farm("Dream Farm", 1000);

// Add the front yard plot to the dream farm
dreamFarm.addPlot(frontYard);

// Water and sun the dream farm
dreamFarm.water();
dreamFarm.sun();