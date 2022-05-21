
import java.util.Scanner;

public class Ex7 {

	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		int n = in.nextInt();
		int b = n - 1, count = 1;
	/*	if (n % 2 == 0)
			count = 0;
		else
			count = -1;
*/
		for (int i = 0; i < n; i++) {
			for (int j = 0; j < i; j++)
				System.out.print(" ");
			System.out.print("*");
			if (i != n) {
				for (int j = 1; j <= 2 * n + 1 - i * 2; j += 1) {
					System.out.print(" ");
				}
				System.out.println("*");
			}
		}
		for (int i = 0; i <= n; i++)
			System.out.print(" ");
		System.out.println("*");
		for (int i = n; i > 0; i--) {
			for (int j = 1; j < i; j++)
				System.out.print(" ");
			System.out.print("*");
			if (i != 0) {
				for (int j = 0; j < n - 1 + count; j += 1) {
					System.out.print(" ");
				}
				System.out.println("*");
			}
			count += 2;

		}

	}

}
