
import java.util.Scanner;

public class _6_CountSpecifiedWord {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Insert Text: ");
        String text = scanner.nextLine();
        System.out.println("Insert Word to check: ");
        String word = scanner.nextLine();
        int countOfRepeats = 0;

        String[] words = text.split("\\W+");

        for (String item : words) {
            if (item.toLowerCase().equals(word.toLowerCase())) {
                countOfRepeats++;
            }
        }
        System.out.println(countOfRepeats);
    }
}
