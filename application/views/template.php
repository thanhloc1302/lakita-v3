<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="vi"> 
    <head>
        <?php $this->load->view('common/head') ?>
    </head>
    <body style="overflow-x: hidden;">
        <?php
        $this->load->view('common/extra');

        $this->load->view('common/popup_banner');
        //$this->load->view('home/event'); 
        //$this->load->view('home/event2'); 
        if (isset($content)) {
            $this->load->view($content);
        }

        $this->load->view('common/foot');
        
         /* chứa file js*/
        $this->load->view('common/footer');
        ?>
    </body>
</html>