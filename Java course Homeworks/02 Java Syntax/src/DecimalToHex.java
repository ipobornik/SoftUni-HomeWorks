import java.util.Scanner;

public class DecimalToHex {

	public static void main(String[] args) {
		System.out.print("Input Decimal number: ");
		Scanner scanner = new Scanner(System.in);
		int decNumber = scanner.nextInt();
		String hexNumberString = Integer.toHexString(decNumber);
		System.out.println();
		System.out.println("Converted in hexadecimal form: " + hexNumberString.toUpperCase());

	}
}