<?

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class ClientesController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}
