<?php
namespace App\Controller;

use App\Controller\AppController;

class BatchController extends AppController{
    public function index(){
        echo 6;
        exit;
    }
    
    
    static $cnt = 0;
    static $slg = '';
    private function slun($tbl,$slug){
        $chptTable = \Cake\ORM\TableRegistry::get($tbl);
        $x = $chptTable->findBySlug($slug)->all();
        if(count($x->toArray()) > 0){
            self::$cnt++;
            $slug = self::$slg . "-" . self::$cnt;
            return $this->slun($tbl, $slug);
        }else{
            return $slug;
        }
    }
    
    public function slg1(){
        ini_set('max_execution_time', '-1');
        $tblName = 'Chapters';
        $chptTable = \Cake\ORM\TableRegistry::get($tblName);
        $records = $chptTable->find()->all();
        foreach($records as $rec){
            $slug = strtolower(\Cake\Utility\Inflector::slug($rec->title));
            self::$cnt = 0;
            self::$slg = $slug;
            $slug = $this->slun($tblName, $slug);
            $rec->slug = $slug;
            $chptTable->save($rec);
        }
        exit;
        
    }
    public function slg2(){
        ini_set('max_execution_time', '-1');
        $tblName = 'Klasses';
        $chptTable = \Cake\ORM\TableRegistry::get($tblName);
        $records = $chptTable->find()->all();
        foreach($records as $rec){
            $slug = strtolower(\Cake\Utility\Inflector::slug($rec->title));
            self::$cnt = 0;
            self::$slg = $slug;
            $slug = $this->slun($tblName, $slug);
            $rec->slug = $slug;
            $chptTable->save($rec);
        }
        exit;
    }
    

    public function slg3(){
        ini_set('max_execution_time', '-1');
        $tblName = 'Subchapters';
        $chptTable = \Cake\ORM\TableRegistry::get($tblName);
        $records = $chptTable->find()->all();
        foreach($records as $rec){
            $slug = strtolower(\Cake\Utility\Inflector::slug($rec->title));
            self::$cnt = 0;
            self::$slg = $slug;
            $slug = $this->slun($tblName, $slug);
            $rec->slug = $slug;
            $chptTable->save($rec);
        }
        exit;
    }
    public function slg4(){
        ini_set('max_execution_time', '-1');
        $tblName = 'Subjects';
        $chptTable = \Cake\ORM\TableRegistry::get($tblName);
        $records = $chptTable->find()->all();
        foreach($records as $rec){
            $slug = strtolower(\Cake\Utility\Inflector::slug($rec->title));
            self::$cnt = 0;
            self::$slg = $slug;
            $slug = $this->slun($tblName, $slug);
            $rec->slug = $slug;
            $chptTable->save($rec);
        }
        exit;
    }
}