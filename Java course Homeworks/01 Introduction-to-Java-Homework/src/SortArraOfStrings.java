//PROBLEM 8:Write a program that enters from the console number n and n strings, then sorts them alphabetically and prints them. 
//Note: you might need to learn how to use loops and arrays in Java (search in Internet). 

import java.util.Arrays;
import java.util.Scanner;

public class SortArraOfStrings {

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		int n = Integer.parseInt(scanner.nextLine());
		String[] strigsArr = new String[n];

		for (int i = 0; i < n; i++) {
			strigsArr[i] = scanner.nextLine();
		}
		Arrays.sort(strigsArr);
		for (int i = 0; i < n; i++) {
			System.out.println(strigsArr[i]);
		}
	}
}