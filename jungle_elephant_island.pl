#!/usr/bin/perl 

use strict;
use warnings;

#read in the data file to analyze 
my $INFILE = 'SeedsOfChange.txt'; 
open (my $fh, '<', $INFILE) or die "Could not open $INFILE: $!"; 

#hash to store the frequencies of words 
my %frequencies; 
 
#loop through each line in the data file 
while (my $line = <$fh>) { 
    chomp $line; 
    
    #remove punctuation from each line
    $line =~ s/[ \.,;:!?]/ /g;
    
    #split the line into an array of individual words
    my @words = split(' ', $line);
    
    #loop through each word in the line
    foreach my $word (@words) { 
        
        #increment word frequency by one
        if (exists $frequencies{$word}) { 
            $frequencies{$word}++; 
        } 
        else { 
            $frequencies{$word} = 1; 
        } 
    } 
} 

#sort the words and frequencies in descending order by frequency
my @sorted_words = sort { 
    $frequencies{$b} <=> $frequencies{$a} 
} keys %frequencies; 

#print out the top 30 most frequent words
for (my $i=0; $i<30; $i++) {
    my $word = $sorted_words[$i]; 
    my $frequency = $frequencies{$word};
    print "$word: $frequency\n"; 
}

#close file handle
close $fh;