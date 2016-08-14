<?php
namespace backend\controllers;

use app\Models\News;
use app\Models\User;
use app\Models\Qa;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\db\Query;
use yii\helpers\Html;
use yii\helpers\BaseUrl;
use yii\helpers\Url;

/**
 * Site controller
 */
class SiteController extends Controller
{
	 public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                  'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
					[
                        'actions' => ['about'],
                        'allow' => true,
                    ],
					[
                        'actions' => ['thongbao'],
                        'allow' => true,
                    ],
					[
                        'actions' => ['account'],
                        'allow' => true,
                    ],
					[
                        'actions' => ['contact'],
                        'allow' => true,
                    ],
					[
                        'actions' => ['detail'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $Query = new Query;
		$Query->select('id,tieuDe,anhBia')->from('news')->limit(3);
		$command = $Query->createCommand();
		$limit = $command->queryAll();	
		
        return $this->render('index',['other'=>$limit]);
    }
	
	//trang about
	 public function actionAbout()
    {
		$Query = new Query;
		$Query->select('id,tieuDe')->from('news')->limit(3);
		 $command = $Query->createCommand();
		 $limit = $command->queryAll();
        return $this->render('about',['other'=>$limit]	);
    }
	
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
	
	public function actionThongbao(){
		
		$sql='SELECT `news`.anhBia, `news`.id, `news`.tieuDe, `loaithongbao`.ChuDe FROM `news`, `loaithongbao` where `news`.loaiThongBaoID=`loaithongbao`.id';
		$rows = Yii::$app->db->createCommand($sql)->queryAll();
		
		return $this->render('thongbao', [ 'thongbao' => $rows ]);
	}
	public function actionDetail($id){
		//$rows = News::find()->where(['id' => $id])->one();
		$sql='SELECT `news`.noiDung, `news`.tieuDe, `news`.noiDung, `news`.ngayDang, `staff`.UserName, `loaithongbao`.ChuDe FROM `news`, `loaithongbao`, `staff` where `news`.loaiThongBaoID=`loaithongbao`.id and `news`.nguoiDangID=`staff`.id and `news`.id='.$id.'';
		$rows = Yii::$app->db->createCommand($sql)->queryAll();
		$Query = new Query;
		$Query->select('id,tieuDe')->from('news')->limit(3);
		 $command = $Query->createCommand();
		 $limit = $command->queryAll();
		return $this->render('detail', ['other'=>$limit, 'news' => $rows ]);
	}
	
	public function actionContact(){
		$model = new Qa();
		$model->khanhHangID=Yii::$app->user->identity->id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(Url::home());
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
		
	}
	
	public function actionAccount(){
		$rows = User::find()->where(['id' => Yii::$app->user->identity->id])->one();
		// $sql='SELECT `user`.id, `user`.username, `user`.phone, `user`.address, `user`.SoKhau, `chisothang`.ngayChot, `chisothang`.chiSoChot, `chisothang`.thangChot  FROM `news`, `loaithongbao`, `staff` where `news`.loaiThongBaoID=`loaithongbao`.id and `news`.nguoiDangID=`staff`.id and `news`.id='.$id.'';
		// $rows = Yii::$app->db->createCommand($sql)->queryAll();
		$chiSo = new Query;
		$chiSo->select('ngayChot,chiSoChot,thangChot,namChot,trangThaiNop')->from('chisothang')->where(['MaKhachHang'=>Yii::$app->user->identity->id])->limit(3)->groupBy('namChot')
		->orderBy(['thangChot' => SORT_DESC]);
		 $command1 = $chiSo->createCommand();
		 $tienNuoc = $command1->queryAll();
		 
		$Query = new Query;
		$Query->select('id,tieuDe')->from('news')->limit(3);
		 $command = $Query->createCommand();
		 $limit = $command->queryAll();
		return $this->render('account',['thongbao'=>$limit,'user'=>$rows,'chiSo'=>$tienNuoc]);
	}
}
