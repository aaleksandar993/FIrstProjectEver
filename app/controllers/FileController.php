<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\Contact;
use app\models\User;
use app\models\File;
use app\controllers\UploadController;
use Rakit\Validation\Validator;
class FileController extends Controller {
	
	public function index(){
	$this->view->render('file/list');
	}

	public function list(){
		$this->view->render('file/list');
	}

	public function store() {

		if (isset($_POST['candidate_id'])) {

			$candidateStorage = ROOT.'public'.DS.'storage'.DS.'candidates'.DS;

			if (!is_dir($candidateStorage.$_POST['candidate_id'].DS.'other')) {
				mkdir($candidateStorage.$_POST['candidate_id'].DS);
				mkdir($candidateStorage.$_POST['candidate_id'].DS.'other'.DS);
			}

			$filename = $candidateStorage.$_POST['candidate_id'].DS.'other'.DS.basename($_FILES['file']['name']);

				move_uploaded_file($_FILES["file"]["tmp_name"], $filename);
				header('Location: ' . $_SERVER['HTTP_REFERER']);

		} elseif (isset($_POST['company_id'])) {

			$companyStorage = ROOT.'public'.DS.'storage'.DS.'companies'.DS;
			if (!is_dir($companyStorage.$_POST['company_id'].DS.'other')) {
				mkdir($companyStorage.$_POST['company_id'].DS);
				mkdir($companyStorage.$_POST['company_id'].DS.'other'.DS);
			}

			$filename = $companyStorage.$_POST['company_id'].DS.'other'.DS.basename($_FILES['file']['name']);
				move_uploaded_file($_FILES["file"]["tmp_name"], $filename);
				header('Location: ' . $_SERVER['HTTP_REFERER']);
		} elseif(isset($_POST['job_id'])){

			$jobStorage = ROOT.'public'.DS.'storage'.DS.'jobs'.DS;
			if (!is_dir($jobStorage.$_POST['job_id'].DS.'other')) {
				mkdir($jobStorage.$_POST['job_id'].DS);
				mkdir($jobStorage.$_POST['job_id'].DS.'other'.DS);
			}

			$filename = $jobStorage.$_POST['job_id'].DS.'other'.DS.basename($_FILES['file']['name']);
				move_uploaded_file($_FILES["file"]["tmp_name"], $filename);
				header('Location: ' . $_SERVER['HTTP_REFERER']);
		} elseif(isset($_POST['contact_id'])){

			$contactStorage = ROOT.'public'.DS.'storage'.DS.'contacts'.DS;
			if (!is_dir($contactStorage.$_POST['contact_id'].DS.'other')) {
				mkdir($contactStorage.$_POST['contact_id'].DS);
				mkdir($contactStorage.$_POST['contact_id'].DS.'other'.DS);
			}

			$filename = $contactStorage.$_POST['contact_id'].DS.'other'.DS.basename($_FILES['file']['name']);
				if (move_uploaded_file($_FILES["file"]["tmp_name"], $filename)) {
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				}
				header('Location: ' . $_SERVER['HTTP_REFERER']);
		} else{

			$storage = ROOT.'public'.DS.'storage'.DS.'files'.DS;
			if (!is_dir($storage)) {
				mkdir($storage);
			}

			$filename = $storage.basename($_FILES['file']['name']);
				if (move_uploaded_file($_FILES["file"]["tmp_name"], $filename)) {
				$file = new File;
				$file->name = basename($_FILES['file']['name']);
				$file->user_id = $_SESSION['uid'];
				$file->save();
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				}
				header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}

	public function delete($name){
		if (isset($_POST['job_id'])) {
		
		unlink('public'.DS.'storage'.DS.'jobs'.DS.$_POST['job_id'].DS.'other'.DS.$name);
			
		}elseif (isset($_POST['company_id'])) {
		
		unlink('public'.DS.'storage'.DS.'companies'.DS.$_POST['company_id'].DS.'other'.DS.$name);
		}elseif (isset($_POST['candidate_id'])) {
		
		unlink('public'.DS.'storage'.DS.'candidates'.DS.$_POST['candidate_id'].DS.'other'.DS.$name);
		}
		
		$file = new File;
		$file->where('name','=',$name)->first()->delete();
		unlink('public'.DS.'storage'.DS.'files'.DS.$name);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}