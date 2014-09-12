
import java.util.Scanner;

public class _5_CountAllWords {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Enter text: ");
        String text = scanner.nextLine();
        String[] words = text.split("\\W+");
        System.out.println();
        System.out.println(words.length);
    }
}
