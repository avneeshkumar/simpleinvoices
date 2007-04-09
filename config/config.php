<?php
//stop the direct browsing to this file - let index.php handle which files get displayed

//checkLogin();

/*Enter your database information */
$db_host = "localhost";
$db_name = "simple_invoices";
$db_user = "test";
$db_password = "test";
$tb_prefix = "si_";

/*mysql version. basically if your using a version less than mysql 5 some features will be disabled*/
#$mysql = 4;
$mysql = 5;

/*Select language for Simple Invoices to use*/
#$language = "castellano_spanish";
#$language = "catala_catalan";
//$language = "deutsch_german";
$language = "english_UK";
#$language = "galego_galician";
#$language = "portugues_portuguese";
#$language = "romana_romanian";
#$language = "suomi_finnish";
#$language = "francais_french";

/*To change the theme, enter the name of the theme folder - default is google*/
$theme = "google";

$version = "20070425 unstable";

$config['date_format']  = 'Y-m-d'; #International format just the date
#$config['date_format']  = 'Y-m-d h:m'; #Internalional format date and time 
#$config['date_format']  = 'm-d-Y'; #US format just date 
#$config['date_format']  = 'm-d-Y h:m'; #US format with date and time
#$config['date_format']  = 'd-m-Y'; #UK format just date 
#$config['date_format']  = 'd-m-Y h:m'; #UK format with date and time
#$config['date_format']  = 'j.n.Y'; #CZ format

#Export to excel/word/openoffice etc. config
$spreadsheet = "xls"; #MS Excel format
#$spreadsheet = "ods"; #Open Document Format spreadsheet
$word_processor = "doc"; #MS Word format
#$word_processor = "odt"; #Open Document Format text


#PDF configs
#installation path relative to document root of webserver 
$install_path = "/simpleinvoices";

#size in pixels (640,800,1024)
$pdf_screen_size = 800;
#paper size (Letter,Legal,Executive,A0Oversize,A0,A1,A2,A3,A4,A5,B5,Folio,A6,A7,A8,A9,A10)
$pdf_paper_size = "A4";
#left margin of the pdf
$pdf_left_margin = 15;
#right margin of the pdf
$pdf_right_margin = 15;
#top margin of the pdf
$pdf_top_margin = 15;
#bottom margin of the pdf
$pdf_bottom_margin = 15;

#Error reporting
#error_reporting(E_ALL);
#error_reporting(E_WARNING);
#error_reporting(E_ERROR);
#error_reporting(E_ALL & ~E_NOTICE);
#error_reporting(0);
?>
