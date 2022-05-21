/**
 * Ex5.java
 * 
 * converts a binary number to decimal
 * 
 */
import java.util.Scanner;

public class Ex5 {
	public static void main(String[] args) {
		@SuppressWarnings("resource")
		Scanner in = new Scanner(System.in);
		int bin = in.nextInt();
		
		int dec = 0, i = 0, count = 0;
		while (bin != 0) {
				i = bin % 2;
				dec = (int) (dec + i * (Math.pow(2, count)));
				count++;
				bin = bin / 10;
		}
		System.out.println(dec);
		
	}
}
