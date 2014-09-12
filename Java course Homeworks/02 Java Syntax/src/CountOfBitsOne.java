import java.util.Scanner;

public class CountOfBitsOne {

	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int n = input.nextInt();
		int countBits = Integer.bitCount(n);
		System.out.println("the count of bits " + countBits);
	}

}