fun main(args: Array<String>) {

    //Variables

    var message = "Seeds of Change"
    var choice = 0

    //Introduction

    println("Welcome to $message!\n")
    println("Please select an option:\n")
    println("1. Plant the seed\n2. Water the seed\n3. Watch it grow\n4. Quit\n")

    do {
        println("Enter your choice:")
        choice = readLine()!!.toInt()

        when (choice) {
            1 -> println("You have planted the seed, congratulations!\n")
            2 -> println("You have watered the seed, watch it grow!\n")
            3 -> println("You have watched the seed grow into a beautiful plant, congratulations!\n")
            4 -> println("Thank you for playing Seeds of Change!\n")
            else -> println("Not a valid choice.\n")
        }
    } while (choice != 4)

    //Ending

    println("Thank you for playing $message!")

}