import java.util.Arrays;

public class MinMaxSum {
    static int countTotal(int[] arr) {
        int total = 0;
        for (int num : arr) {
            total += num;
        }
        return total;
    }

    static int findMin(int[] arr) {
        int min = Integer.MAX_VALUE;
        for (int num : arr) {
            if (num < min) {
                min = num;
            }
        }
        return min;
    }

    static int findMax(int[] arr) {
        int max = Integer.MIN_VALUE;
        for (int num : arr) {
            if (num > max) {
                max = num;
            }
        }
        return max;
    }

    static int[] findEvenElements(int[] arr) {
        return Arrays.stream(arr)
                .filter(num -> num % 2 == 0)
                .toArray();
    }

    static int[] findOddElements(int[] arr) {
        return Arrays.stream(arr)
                .filter(num -> num % 2 != 0)
                .toArray();
    }

    public static void main(String[] args) {
        int[] arr = {1, 2, 3, 4, 5};
        int max = countTotal(arr)-findMin(arr);
        int min =countTotal(arr)-findMax(arr);
        System.out.println( min +" "+max );
//        System.out.println("Total: " + countTotal(arr));
//        System.out.println("Even elements: " + Arrays.toString(findEvenElements(arr)));
//        System.out.println("Odd elements: " + Arrays.toString(findOddElements(arr)));
    }
}