import java.util.Scanner;

public class RectangleArea {

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);

		System.out.print("Enter a: ");
		int a = scanner.nextInt();

		System.out.print("Enter b: ");
		int b = scanner.nextInt();

		int result = a * b;

		System.out.print("Rectangle Area: " + result);
	}
}