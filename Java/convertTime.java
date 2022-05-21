/**
 * Ex2.java
 * 
 * This program takes a number which represents a units of time in ms
 *  ... and it prints to the screen the time by days hours minutes and seconds 
 * 
 */
import java.util.Scanner;
public class Ex2 {
	public static void main(String[] args) {
		
		int ms;  //Getting number from user
		Scanner sc = new Scanner(System.in);
		ms= sc.nextInt();
		
		//Calculations
		int d, h, m, s;
		d= (ms/(1000*60*60*24));
		h= ((ms/(1000*60*60)) % 24);
		m= ((ms/(1000*60)) % 60);
		s= (ms/1000) % 60;
		
		//Print results
		System.out.println(d + " days " + h + ":" + m + ":" + s + " hours");
		
	}
}
