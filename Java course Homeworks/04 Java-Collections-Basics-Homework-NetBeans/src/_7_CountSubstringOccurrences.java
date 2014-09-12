
import java.util.Scanner;

public class _7_CountSubstringOccurrences {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Insert Text: ");

        String text = scanner.nextLine().toLowerCase();
        System.out.println("Insert Substring to check: ");

        String target = scanner.nextLine().toLowerCase();

        int countOfOccurences = 0;

        for (int i = 0; i <= text.length() - target.length(); i++) {
            if (text.substring(i, i + target.length()).equals(target)) {
                countOfOccurences++;
            }
        }

        System.out.println("Count: " + countOfOccurences);

    }
}
