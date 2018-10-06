<?php

#======================ARRAY PRINTING============================================

function print_arr($arr) {
    echo '<pre>' . print_r($arr, true). '</pre>';
}

#================================================================================

#======================GETTING A LIST OF TESTS===================================

function get_tests() {
    global $db;
    $query = "SELECT * FROM test";
    $res = mysqli_query($db, $query);
      if(!$res)  return false;
    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }
    return $data;
}
#================================================================================

#====================DATA ACQUISITION TEST=======================================
function get_test_data($test_id) {
        if (!$test_id) return;
        global $db;
        $query = "SELECT q.question, q.parent_test, a.id, a.answers, a.parent_questions
        FROM question q 
        LEFT JOIN answers a
          ON q.id = a.parent_questions
            WHERE q.parrent_test = $test_id";

        $res = mysqli_query($db, $query);
        $data = null;
            while ($row = mysqli_fetch_assoc($res)) {
                $data[$row['parent_questions']] [0] = $row['question'];
                $data[$row['parent_questions']] [$row['id']] = $row['answers'];

            }
        return $data;
}
#================================================================================