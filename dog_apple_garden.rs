// Create a new file called `seeds_of_change.rs`

// Imports
use std::collections::HashMap;

// Basic functions
fn present_seeds_of_change() {
    println!("These are the seeds of change, that we must each plant in the garden of our lives.");
}

fn record_seeds_of_change(all_seeds: &mut HashMap<String, Vec<String>>) {
    println!("Please share the seed you wish to plant today.");

    let mut seed_name = String::new();
    let mut seed_description = String::new();

    println!("Name of the seed:");
    std::io::stdin()
        .read_line(&mut seed_name)
        .expect("Failed to read line");
    let seed_name = seed_name.trim();

    println!("Describe the seed:");
    std::io::stdin()
        .read_line(&mut seed_description)
        .expect("Failed to read line");
    let seed_description = seed_description.trim();

    let seed_details = vec![seed_name, seed_description];
    all_seeds.insert(seed_name.to_string(), seed_details);

    println!("Seed Planted!");
}

fn summarize_seeds_of_change(all_seeds: &HashMap<String, Vec<String>>) {
    println!("These are the seeds that have been planted today:");
    for (key, value) in all_seeds.iter() {
        println!("{}: {}", key, value[1]);
    }
}

fn main() {
    println!("Welcome to Seeds of Change!");
    present_seeds_of_change();
    
    let mut all_seeds: HashMap<String, Vec<String>> = HashMap::new();
    for _ in 0..2000 {
        record_seeds_of_change(&mut all_seeds);
    }

    summarize_seeds_of_change(&all_seeds);
}