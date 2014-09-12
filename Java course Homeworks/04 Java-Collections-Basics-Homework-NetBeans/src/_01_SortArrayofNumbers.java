
import java.util.Arrays;
import java.util.Scanner;

public class _01_SortArrayofNumbers {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int n = scanner.nextInt();
        int[] nums = new int[n];
        scanner.nextLine();

        for (int i = 0; i < nums.length; i++) {
            nums[i] = scanner.nextInt();
        }
        
        Arrays.sort(nums);
        System.out.println();
        for (int k : nums) {
            System.out.printf("%d ", k);
        }
    }
}
