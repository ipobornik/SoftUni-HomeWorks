
import java.util.Scanner;

public class _2_SequencesOfEqualStrings {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String[] words = scanner.nextLine().split(" ");

        for (int i = 0; i < words.length - 1; i++) {
            System.out.print(words[i] + " ");
            if (!words[i].equals(words[i + 1])) {
                System.out.println();
            }   
        }
        System.out.print(words[words.length - 1]);
    }
}
