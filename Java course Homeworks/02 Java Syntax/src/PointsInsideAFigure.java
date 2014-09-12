import java.util.Scanner;

public class PointsInsideAFigure {

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		double x = scanner.nextDouble();
		double y = scanner.nextDouble();
		//default value 
		String position = "Outside";
		if (x >= 12.5 && x <= 22.5 && y >= 6 && y <= 8.5) {
			position = "Inside";
		} else if (x >= 12.5 && x <= 17.5 && y >= 8.5 && y <= 13.5) {
			position = "Inside";
		} else if (x >= 20 && x <= 22.5 && y >= 8.5 && y <= 13.5) {
			position = "Inside";
		}
		System.out.println(position);
	}
}