package ZigZagConversion;

import java.util.ArrayList;
import java.util.List;

public class Solution {

    public String conversion(String string, int rowsCount){

        List<StringBuilder> rows = new ArrayList<StringBuilder>();

        for(int row = 0; row < Math.max(rowsCount, string.length()); row++)
            rows.add(new StringBuilder());

        int currentRow = 0;
        boolean goingDown = false;
        for(char element: string.toCharArray()) {

            rows.get(currentRow).append(element);
            if(currentRow == 0 || currentRow == rowsCount -1) goingDown = !goingDown;
            currentRow += goingDown ? 1 : -1;
        }

        StringBuilder result = new StringBuilder();

        for (StringBuilder row: rows) result.append(row);

        return result.toString();
    }

}
