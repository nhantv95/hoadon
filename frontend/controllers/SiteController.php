<?php
namespace frontend\controllers;

use Yii;
use app\Models\News;
use app\Models\User;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\helpers\Html;
use yii\helpers\BaseUrl;
use yii\helpers\Url;
use yii\db\Query;
use yii\db\QueryTrait;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
		 
		if(!Yii::$app->user->isGuest){
         //  return $this->redirect('/HoaDon_ad/backend/web/index.php');
		}
		$sql='SELECT `news`.anhBia, `news`.id, `news`.tieuDe, `loaithongbao`.ChuDe FROM `news`, `loaithongbao` where `news`.loaiThongBaoID=`loaithongbao`.id order by ngayDang desc limit 3' ;
		$limit = Yii::$app->db->createCommand($sql)->queryAll();
		
		// $Query = new Query;
		// $Query->select('id,tieuDe,anhBia')->from('news')->limit(3);
		// $command = $Query->createCommand();
		// $limit = $command->queryAll();	
		
        return $this->render('index',['other'=>$limit]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
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
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
		$Query = new Query;
		$Query->select('id,tieuDe')->from('news')->orderBy('ngayDang desc')->limit(3);
		 $command = $Query->createCommand();
		 $limit = $command->queryAll();
        return $this->render('about',['other'=>$limit]	);
    }

	
	
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
	
	public function actionThongbao($i){
		$pagin = $i*9;
		$sql='SELECT `news`.anhBia, `news`.id, `news`.tieuDe, `loaithongbao`.ChuDe FROM `news`, `loaithongbao` where `news`.loaiThongBaoID=`loaithongbao`.id order by ngayDang desc limit 9 offset '.$pagin.'';
		$rows = Yii::$app->db->createCommand($sql)->queryAll();
		if( News::find()->count()%9==0)
			$num=News::find()->count()/9;
		else
			$num=News::find()->count()/9+1;
		settype($num, "integer");
		return $this->render('thongbao', [ 'thongbao' => $rows,'i'=>$i,'count'=>$num ]);
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
	
	
}
