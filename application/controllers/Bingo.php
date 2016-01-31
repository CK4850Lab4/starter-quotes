<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        $record = $this->quotes->get("5"); // reference the first method inside quotes.php model
        $this->data = array_merge($this->data, $record); // merges the second parameter into the first parameter, and returns the result
        $this->render();
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */
