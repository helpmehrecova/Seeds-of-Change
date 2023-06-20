# Project - Seeds of Change
# Author - Your_Name_Here

# Imports
import os
import sys
import random
import string
from datetime import datetime

# Constants
MIN_NAME_LENGTH = 3
MAX_NAME_LENGTH = 12
SEED_CHAR_MAP = {
    'a': '@',
    'A': '4',
    's': '5',
    'S': '$',
    'q': '9',
    'l': '1'
    }

# Functions
def validate_name(name_str):
    '''Validates a given name input by user, to ensure it meets certain criteria

    Args:
        name_str: A string provided by the user, containing a name

    Returns:
        True/False - based on if name_str is valid or not
    '''
    # Check if name_str is of valid length
    if len(name_str) < MIN_NAME_LENGTH or len(name_str) > MAX_NAME_LENGTH:
        return False

    # Check if name_str contains only alphanumeric characters
    if not name_str.isalnum():
        return False

    return True

def seed_string(input_str):
    '''Generates a seed string from an input string.

    Args:
        input_str: A string to be used as an input.

    Returns:
        A string (output_str), containing a seed generated from input_str.
    '''
    output_str = ''
    for char in input_str:
        if char in SEED_CHAR_MAP.keys():
            output_str += SEED_CHAR_MAP[char]
        else:
            output_str += char
    return output_str

def save_solution(solution_name, solution):
    '''Save a solution.

    Args:
        solution_name: The name of the solution to be saved.
        solution: The solution to be saved.

    Returns:
        None.
    '''
    # Create and open solution file
    solution_file = open(solution_name + '.txt', 'w')

    # Write solution to file
    solution_file.write(solution)

    # Close the file
    solution_file.close()

def generate_solution(name):
    '''Generates a solution from a given name.

    Args:
        name: A string to be used as an input

    Returns:
        A string (solution) containing a generated solution from name
    '''
    # Initialize an empty solution string
    solution = ''

    # Generate a random seed
    random_seed = ''.join(random.choices(string.ascii_letters + string.digits, k=10))

    # Generate a seed string from the name
    name_seed = seed_string(name)

    # Append the random seed and name seed to solution
    solution += random_seed + name_seed

    # Append current timestamp to the solution
    solution += str(datetime.now())

    return solution

# Main
def main():
    # Get name input from user
    name_str = input('Please enter your name: ')

    # Validate name
    if validate_name(name_str):
        # Generate a solution
        solution = generate_solution(name_str)

        # Save the solution
        save_solution(name_str, solution)

        # Print success message
        print(f'Solution for {name_str} saved!')
    else:
        # Print error message
        print('Invalid name! Please enter a valid name!')

# Execution
if __name__ == '__main__':
    main()