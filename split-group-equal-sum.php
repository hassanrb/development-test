<?php

// Split N number of groups into equal sum subarrays
class SplitGroupsIntoSum {
    private $no_of_groups = 3;
    private $groups = [];

    public function __construct( $input_array, $no_of_groups = 0 ) {
        if ( ! is_array( $input_array ) ) {
            return false;
        }

        // Make sure that group value equals to integer
        if ( intval( $no_of_groups ) ) {
            $this->no_of_groups = $no_of_groups;
        }

        echo "<strong>Input Value : </strong>\n" . implode(", ", $input_array ) . "\n\n";

        // Sort and reverse the array
        $sorted_array = array_reverse(
            $this->quick_sort( $input_array )
        );

        $results = $this->split_array( $sorted_array );

        echo "<strong>Results : </strong>\n";
        foreach ( $results as $result ) {
            echo "(" . implode(" + ", $result['values']) . ") " . $result['current_sum'] . "\n";
        }
    }

    private function split_array( $sorted_array ) {
        // Initialize groups
        for ( $i = 0; $i < $this->no_of_groups; ++$i ) {
            $this->groups[ $i ] = [
                'current_sum' => 0,
                'values'     => []
            ];
        }

        // Add values to groups
        foreach( $sorted_array as $index => $value ) {
            $lowest_sum = null;
            $current_lowest_group = null;
            $current_group_index = null;

            // Iterate each group and select a group to add value
            foreach( $this->groups as $group_index => $group ) {
                if ( $lowest_sum === null || $group['current_sum'] < $lowest_sum ) {
                    $lowest_sum = $group['current_sum'];
                    $current_lowest_group = $this->groups[ $group_index ];
                    $current_group_index = $group_index;
                }
            }

            $current_lowest_group['current_sum'] = $current_lowest_group['current_sum'] + $value;
            $current_lowest_group['values'][] = $value;

            $this->groups[ $current_group_index ] = $current_lowest_group;
        }

        return $this->groups;
    }

    /**
     * Sort the array by using quick sort algorithm
     *
     * @param input_array array
     * @return array
     */
    private function quick_sort( $input_array ) {
        if ( ! count( $input_array ) ) {
            return [];
        }

        $pivot_element = $input_array[0];
        $left_element = $right_element = [];

        for ( $i = 1; $i < count( $input_array ); $i++ ) {
            if ( $input_array[ $i ] < $pivot_element ) {
                $left_element[] = $input_array[ $i ];
            } else {
                $right_element[] = $input_array[ $i ];
            }
        }

        return array_merge(
            $this->quick_sort( $left_element ),
            array( $pivot_element ),
            $this->quick_sort( $right_element )
        );
    }
}

echo '<pre>';
new SplitGroupsIntoSum([1, 2, 4, 7, 1, 6, 2, 8]);
