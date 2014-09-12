import java.util.Scanner;

public class TheSmallestOf3Numbers {

	public static void main(String[] args) {
		System.out.print("a: ");
		Scanner scanner = new Scanner(System.in);
		double a = scanner.nextDouble();
		System.out.print("b: ");
		double b = scanner.nextDouble();
		System.out.print("c: ");
		double c = scanner.nextDouble();
		System.out.println();
		System.out.println("The smallest number is: " + Math.min(a, Math.min(b, c)));
	}
}