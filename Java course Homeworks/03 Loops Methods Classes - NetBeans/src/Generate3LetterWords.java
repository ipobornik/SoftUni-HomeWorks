
import java.util.Scanner;

public class Generate3LetterWords {

    public static void main(String[] args) {
        Scanner reader = new Scanner(System.in);
        String scanner = reader.nextLine();
        char[] letters = scanner.toCharArray();

        for (int i = 0; i < scanner.length(); i++) {
            for (int j = 0; j < scanner.length(); j++) {
                for (int k = 0; k < scanner.length(); k++) {
                    System.out.printf("%s%s%s ", letters[i], letters[j], letters[k]);
                }
            }
        }
    }
}
