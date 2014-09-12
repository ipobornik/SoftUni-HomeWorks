//PROBLEM 6: Write a program SumTwoNumbers.java that enters two integers from the console, 
//calculates and prints their sum. Search in Internet to 
//learn how to read numbers from the console.

import java.util.Scanner;

public class SumTwoNumbers {

	public static void main(String[] args) {

		 Scanner scanner = new Scanner(System.in);
         System.out.println("Insert two numbers:");
         int first = scanner.nextInt();
         int second = scanner.nextInt();
         
         int sum = first + second;

         System.out.println("The sum is = " + sum);
         
	}
}
