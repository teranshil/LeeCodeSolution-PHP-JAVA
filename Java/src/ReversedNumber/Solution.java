package ReversedNumber;

public class Solution {

    public int reverse(int number) {

        int reverted = 0, length = ((int) Math.log10(Math.abs(number))) + 1, count = 1;
        while(number != 0) {

            int pop  = number % 10;
            number /= 10;

            if(Integer.MAX_VALUE / (10 * length - count) > pop) return 0;

            if(reverted > Integer.MAX_VALUE / 10 ||  (reverted == Integer.MAX_VALUE / 10 && pop < 7)) return 0;
            if(reverted < Integer.MIN_VALUE / 10 || (reverted == Integer.MIN_VALUE / 10 && pop > -8)) return 0;

            reverted = reverted * 10 + pop;
            count += 1;
        }

        // nice way to find the length of integer
        // System.out.println(((int) Math.log10(10)) + 1);

        return reverted;
    }
}
