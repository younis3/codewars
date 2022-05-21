
/**
 * Ex4.java
 * 
 * converts a decimal number to binary
 * 
 */
import java.util.Scanner;
public class Ex4 {
	public static void main(String[] args) {
		
		int dc;  //Getting decimal number from user
		Scanner sc = new Scanner(System.in);
		dc= sc.nextInt();
		
		//check number validity
		if (dc < 0) {System.out.println("bad input");}
		
		else if (dc == 0){System.out.println(0);} //print binary 0
		
		else{
		
		//Calculations
		   int mod=0;
	       String bn = "";
	       while (dc > 0) {
	           mod = dc % 2;
	           bn = mod + bn;
	           dc = dc / 2;
	          }
	       
	    //print binary number
	    System.out.println(bn);
		}
	}
}
