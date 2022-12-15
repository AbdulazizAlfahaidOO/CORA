package LoopCEx;
import java.util.Scanner;
public class LowestMarksLoop {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Enter number of students : ");
        int numStd = input.nextInt();
        int i =0;
        int lMarks =0, nMarks =0;
        String lName = null, nName = null;
        System.out.print("Enter student name and Marks ");
        lName = input.next();
        lMarks = input.nextInt();
        while(i < (numStd-1)){
            System.out.println("Enter student name and Marks");
            nName = input.next();
            nMarks = input.nextInt();
            if(nMarks < lMarks){
                lMarks = nMarks;
                lName = nName;
            }
            i++;
        }
        System.out.println("The student "+lName+ "has lowest Marks "+lMarks);
    }
}
