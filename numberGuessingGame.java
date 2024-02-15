import java.util.Scanner;

public class NumberGuessingGame {
	public static void numberGuessingGame()
	{
		Scanner sc = new Scanner(System.in);

		// the randomized number
		int num = 1 + (int)(10* Math.random());

		// no. tries
		int T = 3;

		// score
		int score = 100;

		int i, guess;

		System.out.println(
			"Let's play a game! I'm thinking of a number between 1 to 100."
			+ "\nGUESS THE NUMBER! (within 3 trails.)");

		// Iterate over T Trials
		for (i = T; i > 0; i--) {

			System.out.println("\nGuess the number:");

			// take user's guess
			guess = sc.nextInt();
			// the guess is correct
			if (num == guess) {
				System.out.println("Congratulations! YOU GUESSED RIGHT"+"\n SCORE: "+score);
				break;
			}// the guess is too low
			else if (num > guess && i-1 != 0) {
			    score= score- (10*T);
				System.out.println(
					"The number is greater than " + guess+"\nYou have " + (i-1) + " tries left.");  
			}// the guess is too high
			else if (num < guess && i-1 != 0) {
			    score= score- (10*T);
				System.out.println(
					"The number is less than " + guess+"\nYou have " + (i-1) + " tries left.");
			}
		}

		if (i == 0) {
			System.out.println(
				"YOU LOST:("+"\nThe number I was thinking of is " + num+"\nSCORE:0 ");
		}
	}

	// Driver Code
	public static void
	main(String arg[])
	{
		numberGuessingGame();
	}
}
