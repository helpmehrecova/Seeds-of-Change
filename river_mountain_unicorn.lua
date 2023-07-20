-- Main file

-- Seeds of Change
-- Initialise the Story

-- Setting up Variables
local choiceMade = false
local choice
local storyText

-- Creating the 'array' for our Story
local story = {
	{"Once upon a time, there was a small village.",
		{
			{"The village had a rich history and a strong community.",
				{
					{"The village was a peaceful place, but a storm was coming.",
						{
							{"This storm would bring change.",
								{
									{"The villagers had to make a tough choice: stay and fight for their homes or flee and start new lives in an unknown land.",
										{
											{"The villagers were scared but they knew they had to make a decision. What will they choose?",
												{
													{"Choose and see where the story takes you:"},
													{"Stay in the village", "Flee to an unknown land"}
												}
										}
								}
							}
						}
					}
				}
			}
		}
	}

-- Main loop
while true do
	
	-- Check if a choice has been made
	if choiceMade == false then
		-- Show the Story
		storyText = story[1][1]
		
		-- Get user input for the choice
		io.write(storyText)
		for i = 1, #story[1][2][1] do
			io.write(story[1][2][1][i])
		end
		
		choice = io.read()
		choiceMade = true
	else
	
		-- Show the story
		storyText = story[1][2][2][1]
		
		if choice == "Stay in the village" then
			for i = 1, #story[1][2][2][2][1] do
				io.write(story[1][2][2][2][1][i])
			end
		elseif choice == "Flee to an unknown land" then
			for i = 1, #story[1][2][2][2][2] do
				io.write(story[1][2][2][2][2][i])
			end
		else
			io.write("Please select a valid option.")
		end
	
		choiceMade = false
	end
	
	io.write("\n")
end