
/**
 * Ex1.java
 * 
 * This program prints the sum of all positive integers smaller than 1000, that
 * are divided by either 3 or 5.
 * 
 */

public class Ex1 {
	public static void main(String[] args) {
		
		int x=1,sum=0;
		while(x!=1000){
			if(x%5==0 || x%3==0)
				sum=sum + x;
			x++;
		}
		System.out.println(sum);
		
	}
}
