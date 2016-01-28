<?php

/**
 * Feature 1: first page
 * author: Jimmi Lin
 * Sate: Jan 28, 2016
 * ------------------------------------------------------------------------
 */
class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// build the list of authors, to pass on to our view
		$source = $this->quotes->first();
                $this->data = array_merge($this->data, $source);
                
//		$authors = array();
//		foreach ($source as $record)
//		{
//			$authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
//		}
//		$this->data['authors'] = $authors;
//
		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */