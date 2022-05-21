/**
 * Ex6.java
 * 
 * the program draws a pyramid of "*" and " " which its made
 * from n rows
 * 
 */
import java.util.Scanner;

public class Ex6 {
	public static void main(String[] args) {
		int n; // Getting number from user
		Scanner sc = new Scanner(System.in);
		n = sc.nextInt();

		// print pyramids
		if (n > 0) { // check number validity
			for (int i = 0; i < 2 * n; i = i + 2) {
				for (int j = 0; j < (n - i / 2); j++) {
					System.out.print(" ");
				}
				for (int c = 0; c <= i; c++) {
					System.out.print("*");
				}
				System.out.println();
			}
		} else {
			System.out.println("bad input");
		}
	}
}
