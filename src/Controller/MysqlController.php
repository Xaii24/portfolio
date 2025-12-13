<?php
namespace App\Controller;
use App\Controller\AppController;

class MysqlController extends AppController
{
    public function index($id = null)
    {
        //
        // Simple text to pass to the view
        $text =
            'This is a sample sentence to be displayed on the MYSQL index page.';

        // Pass the text to the view
        $this->set(compact('text'));
        // Pass data to the view
    }

    public function view($id = null)
    {
        $this->set(compact('index'));
    }
}

?>
