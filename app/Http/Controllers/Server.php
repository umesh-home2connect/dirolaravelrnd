<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Excel;
use ZipArchive;
//include(app_path() . '/Http/Controllers/helpers.php');
use PHPExcel; 
use PHPExcel_IOFactory;
use Datatables;
use Carbon\Carbon;
class Server extends Controller
{
    public function deploy(){
           $test = "hello";
           $test1 = "hello world";
           p($test1,true);
//           p($test);
           
           
           
//$inputFileType = 'Excel5';
//$inputFileName = '/var/www/html/dirolaravelrnd/storage/exports/phonebookexcel.xls';
//$objReader = PHPExcel_IOFactory::createReader($inputFileType);
//$objPHPExcel = $objReader->load($inputFileName);
//$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
////p($sheetData,true);
//if(isset($sheetData) && $sheetData != null){
//    foreach($sheetData as $val){
//        p($val,true);
//    }
//}


           
           
           
                            // code not is use
//  ---------------------------------------------------------------------------
           
/** By Using PHPExcel_IOFactory  load excelsheet */
//$inputFileType = 'Excel5';
//$inputFileName = '/var/www/html/dirolaravelrnd/storage/exports/finalsheet.xls';
///**  Create a new Reader of the type defined in $inputFileType  **/
//$objReader = PHPExcel_IOFactory::createReader($inputFileType);
///**  Load $inputFileName to a PHPExcel Object  **/
//$objPHPExcel = $objReader->load($inputFileName);
////p($objPHPExcel,true);
//echo '<hr />';
///**  Read the document's creator property  **/
//$creator = $objPHPExcel->getProperties()->getCreator();
//echo '<b>Document Creator: </b>',$creator,'<br />';
///**  Read the Date when the workbook was created (as a PHP timestamp value)  **/
//$creationDatestamp = $objPHPExcel->getProperties()->getCreated();
///**  Format the date and time using the standard PHP date() function  **/
//$creationDate = date('l, d<\s\up>S</\s\up> F Y',$creationDatestamp);
//$creationTime = date('g:i A',$creationDatestamp);
//echo '<b>Created On: </b>',$creationDate,' at ',$creationTime,'<br />';
///**  Read the name of the last person to modify this workbook  **/
//$modifiedBy = $objPHPExcel->getProperties()->getLastModifiedBy();
//echo '<b>Last Modified By: </b>',$modifiedBy,'<br />';
///**  Read the Date when the workbook was last modified (as a PHP timestamp value)  **/
//$modifiedDatestamp = $objPHPExcel->getProperties()->getModified();
///**  Format the date and time using the standard PHP date() function  **/
//$modifiedDate = date('l, d<\s\up>S</\s\up> F Y',$modifiedDatestamp);
//$modifiedTime = date('g:i A',$modifiedDatestamp);
//echo '<b>Last Modified On: </b>',$modifiedDate,' at ',$modifiedTime,'<br />';
///**  Read the workbook title property  **/
//$workbookTitle = $objPHPExcel->getProperties()->getTitle();
//echo '<b>Title: </b>',$workbookTitle,'<br />';
///**  Read the workbook description property  **/
//$description = $objPHPExcel->getProperties()->getDescription();
//echo '<b>Description: </b>',$description,'<br />';
///**  Read the workbook subject property  **/
//$subject = $objPHPExcel->getProperties()->getSubject();
//echo '<b>Subject: </b>',$subject,'<br />';
///**  Read the workbook keywords property  **/
//$keywords = $objPHPExcel->getProperties()->getKeywords();
//echo '<b>Keywords: </b>',$keywords,'<br />';
///**  Read the workbook category property  **/
//$category = $objPHPExcel->getProperties()->getCategory();
//echo '<b>Category: </b>',$category,'<br />';
///**  Read the workbook company property  **/
//$company = $objPHPExcel->getProperties()->getCompany();
//echo '<b>Company: </b>',$company,'<br />';
///**  Read the workbook manager property  **/
//$manager = $objPHPExcel->getProperties()->getManager();
//echo '<b>Manager: </b>',$manager,'<br />';
//
//echo '<hr />';
//$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
//
////p($sheetData,true);
//$formatedsheetData = array();
//$i = 0;
//foreach($sheetData as $val){
//  
//    $contact_obj = new \stdClass();
//    
//   if($i == 2)
//   {
////        p($val['A'],true); 
//        $contact_obj->phonebook_name = $val['A'];
//        array_push($formatedsheetData,$contact_obj);
//   }
//   if($i==1){
//       $contact_obj->phonebook_fields = $val;
//        array_push($formatedsheetData,$contact_obj);
//   }
//   if($i==3){
//       $contact_obj->phonebook_contacts = $val;
//        array_push($formatedsheetData,$contact_obj);
//        continue;
//   }
//    $i++;
////array_push($formatedsheetData,$contact_obj);
//
//}
//
////p($formatedsheetData,true);
//        
////foreach($sheetData as $val){
////     if($i==1){
////       $formatedsheetData['phonebook_fields'] = $val['A'];
//////        array_push($formatedsheetData,$contact_obj);
////   }
////   $i++;
////}
//p($formatedsheetData);
//           
           
          
        
//       $git_dir     =  exec('cd ~/var/www/html/dirolaravelrnd');
//       $git_add     =  exec('git add .');
//       $git_com     =  shell_exec('git commit -m "Commit By Umesh');
//       $git_push    =  shell_exec('git push origin master');
//       $git_log     =  shell_exec('git log');
//       $git_status  =  exec('git status');
//       $git_pull    =  shell_exec('git pull origin master');
//       $git_pull    =  shell_exec(`sudo git pull git@github.com:umeshcalipus/dirolaravelrnd.git`);
//        
//        echo '<pre>'; print_r($git_dir); echo '</pre>';
//        echo '<pre>'; print_r($git_add); echo '</pre>';
//        echo '<pre>'; print_r($git_com); echo '</pre>';
//        echo '<pre>'; print_r($git_push); echo '</pre>';
//        echo '<pre>'; print_r($git_log); echo '</pre>';
//        echo '<pre>'; print_r($git_status); echo '</pre>';
//        echo '<pre>'; print_r($git_pull); echo '</pre>';
     
//        SSH::into('production')->run(array(
//	    'cd ~/public_html/mywebsite',
//	    'git pull origin master'
//	), function($line){
//	
//	    echo $line.PHP_EOL; // outputs server feedback
//	});
//	
//        Excel::create('Document', function($excel) {
//        $excel->sheet('Sheet', function($sheet) {
//        $sheet->cell('A2', function($cell) {
//            $cell->setValue('this is the cell value.');
//        });
//        });
//        })->export('xls');
        
        
//     Excel::create('Filename', function($excel) {
//
//    // Set the title
//    $excel->setTitle('Our new awesome title');
//
//    // Chain the setters
//    $excel->setCreator('Maatwebsite')
//          ->setCompany('Maatwebsite');
//
//    // Call them separately
//    $excel->setDescription('A demonstration to change the file properties');
//
//    })->store('xls')->export('xls');
    
    
//    Excel::create('Filename', function($excel) {
//
//    $excel->sheet('Sheetname', function($sheet) {
//
//        $sheet->fromArray(array(
//            array('data1', 'data2'),
//            array('data3', 'data4')
//        ));
//
//    });

//})->store('xls')->export('xls');



//   $value = is_readable('public/diro_syn.xlsm');
//   p($value);
//
//$objTpl = PHPExcel_IOFactory::load('storage/exports/diro_syn.xlsm');
//
//        $objTpl->setActiveSheetIndex(0);
//
//        $objTpl->getActiveSheet()->setCellValue('A2', 'PHPExcel');
//
//     //   $filename=mt_rand(1,100000).'.xlsx';
//
//        $objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');
//
//        if(is_readable('template1.xlsm'))
//
//        {
//
//            $objWriter->save('template1.xlsm');
//
//        } 
//        
    //code working for xls file       
//Excel::load('storage/exports/Filename.xls', function($excel)
//{
//    $excel->getActiveSheet()->setCellValue('A1', 'cell value here');
//}) -> download('xls');
         
           
           
           
           
           
           
//  Excel::load('storage/exports/diro_sync.xlsm', function($excel)
//{
////    $d = $excel->getActiveSheet()->setCellValue('A1', 'cell value here');
//    $d = $excel->getActiveSheet();
//      p($d);
//      
//});
//   end code not in use
// -----------------------------------------------------------------------------------          
    //Code for fetching data from excel-sheet and make a object for further processing
   Excel::selectSheets('Sheet1')->load('storage/exports/phonebookexcel.xls', function($reader) {
    $results = $reader->get();
//    p($results);
    $contact_array = array();
    foreach($results as $key => $value){
        foreach($value as $val){
            $cont_obj = new \stdClass(); 

            $cont_obj->sno              = isset($val['sno']) ? $val['sno'] : '' ;
            $cont_obj->prefix_name      = isset($val['prefix_name']) ? $val['prefix_name'] : '' ;
            $cont_obj->first_name       = isset($val['first_name'])? $val['first_name']: '';
            $cont_obj->middle_name      = isset($val['middle_name']) ? $val['middle_name'] : '' ;
            $cont_obj->last_name        = isset($val['last_name']) ? $val['last_name']: '' ;
            $cont_obj->suffix_name      = isset($val['suffix_name ']) ? $val['suffix_name'] : '' ;
            $cont_obj->nick_name        = isset($val['nick_name']) ? $val['nick_name'] : '' ;
            $cont_obj->image_url        = isset($val['image_url']) ? $val['image_url'] : '' ;
            $cont_obj->phone_numberhome = isset($val['phone_numberhome']) ? $val['phone_numberhome'] : '' ;
            $cont_obj->phone_numberwork = isset($val['phone_numberwork']) ? $val['phone_numberwork'] : '' ;
            $cont_obj->email            = isset($val['email']) ? $val['email']: '';
            $cont_obj->addressstreet    = isset($val['addressstreet']) ? $val['addressstreet'] : '' ;
            $cont_obj->city             = isset($val['city']) ? $val['city'] : '' ;
            $cont_obj->state            = isset($val['state'])?$val['state'] : '';
            $cont_obj->zip              = isset($val['zip']) ? $val['zip'] : '' ;
            $cont_obj->country          = isset($val['country']) ? $val['country'] : '' ;
            $cont_obj->company          = isset($val['company']) ? $val['company'] : '' ;
            $cont_obj->position         = isset($val['position']) ? $val['position'] : '';
            $cont_obj->department       = isset($val['department']) ? $val['department'] : '';
            $cont_obj->notes            = isset($val['notes']) ? $val['notes'] : '' ;
            $cont_obj->website          = isset($val['website']) ? $val['website'] : '' ;
            array_push($contact_array, $cont_obj);
        }
    }
    p($contact_array);

});

//For diro_sync.xlsm file read
//Excel::load('storage/exports/diro_sync.xlsm',function($reader){
////    $reader->dump();
//    $reader->noHeading();
//    $results = $reader->all();
////    $results = $reader->toObject();
//    p($results);
//    
//   
//});           
    }
    
    public function dataview() {
        
        $data = array(
                    1 => array('id' => '1',
                                'name'=> 'umesh',
                                'email' => 'umesh@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                                ),
                    2 => array('id' => '2',
                                'name'=> 'umesh',
                                'email' => 'umesh@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    3 => array('id' => '3',
                                'name'=> 'umesh',
                                'email' => 'umesh@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    4 => array('id' => '4',
                                'name'=> 'umesh',
                                'email' => 'umesh@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    5 => array('id' => '5',
                                'name'=> 'umesh',
                                'email' => 'umesh@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    6 => array('id' => '6',
                                'name'=> 'umesh',
                                'email' => 'umesh@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    7 => array('id' => '7',
                                'name'=> 'ramendra',
                                'email' => 'ramendra@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    8 => array('id' => '8',
                                'name'=> 'umesh',
                                'email' => 'umesh@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    9 => array('id' => '9',
                                'name'=> 'arj',
                                'email' => 'arj@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    10 => array('id' => '10',
                                'name'=> 'ram',
                                'email' => 'ram@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    11 => array('id' => '11',
                                'name'=> 'pusp',
                                'email' => 'pusp@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
                    12 => array('id' => '12',
                                'name'=> 'Rohit',
                                'email' => 'Rohit@gmail.com',
                                'created_at' => \Faker\Provider\DateTime::date(),
                                'updated_at' => \Faker\Provider\DateTime::date(),
                        ),
            );
         return view('dataview',array('data'=> $data));
        
    }
   
}
