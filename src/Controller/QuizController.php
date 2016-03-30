<?php
namespace App\Controller;

use App\Controller\AppController;

class QuizController extends AppController{
    
    public function index($subjectSlug=null,$chapterSlug=null,$subChapterSlug=null){
        $sbTbl = \Cake\ORM\TableRegistry::get('Subjects');
        $chTbl = \Cake\ORM\TableRegistry::get('Chapters');
        $sbChTbl = \Cake\ORM\TableRegistry::get('Subchapters');
        $subject = null;
        $subChapter = null;
        $chapter = null;
        if($subChapterSlug != NULL){
            $subChapter = $sbChTbl->findBySlug($subChapterSlug)->first();
            //Render QuiZe
        }
        if($chapterSlug != NULL){
            $chapter = $chTbl->findBySlug($chapterSlug)->contain(['Subchapters'])->first();
            //list subchapters
        }
        if($subjectSlug != NULL){
            $subject = $sbTbl->findBySlug($subjectSlug)->contain(['Chapters'])->first();
            //list Chapters
        }
        $this->set('subChapter',$subChapter);
        $this->set('chapter',$chapter);
        $this->set('subject',$subject);
        
        if($subChapter != NULL){
            $queTbl = \Cake\ORM\TableRegistry::get('QueSubch');
            $questions = $queTbl->findBySubchapterId($subChapter->id)->contain(['Ques']);
            $this->set("questions",$questions);
            return $this->render('quiz');
        }
        if($chapter != NULL){
            return $this->render('listsubch');
        }
        if($subjectSlug != NULL){
            return $this->render('listsubjects');
        }
        
        
        $this->set('_serialize', ['subChapter','chapter','subject']);        
    }
}