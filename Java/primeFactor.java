/**
 * Ex3.java
 * 
 * this program takes an integer number as an input and print the smallest prime factors of that number 
 * 
 */

import java.util.Scanner;

public class Ex3 {

	public static void main(String[] args) {
		
		@SuppressWarnings("resource")
		Scanner in = new Scanner(System.in);
		int input = in.nextInt();
		if (input>0){  //checking if user entered valid number = natural number (assuming 0 is NOT a natural number) otherwise it prints "bad input"
			
		   int x = 2;
		   while (true) {

		  	   if (input % x == 0)
				   break;
			   else {
				   while (true) {
					   x++;
					   boolean isprime = true;
					   int to = (int) Math.sqrt(x) + 1;
					   for (int j = 2; j <= to; j++) {
						   if (x % j == 0) {
							   isprime = false;
							   break; 
						   }
					   }
					    if (isprime)
						break;
				   }
			   }
		   }
		   System.out.println(x);
		}
		else {System.out.println("bad input");}
  }
}
