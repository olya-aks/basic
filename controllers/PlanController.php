<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
//use app\models\Plans\Plan;
use app\models\Plans\P0061_PGR_;
use app\models\Plans\P0142_POGO2_;
use app\models\Plans\P0143_POGO3_;
use app\models\Plans\P0191_MESTRN_;
use app\models\Plans\P0203_RPGRU_;
use app\models\Plans\P0301_PRIEM_;
use app\models\Plans\P0302_SDACHA_;
use app\models\Plans\P0320_VIGROB_;
use app\models\Plans\P2112_ISPLOK_;
use app\models\Plans\P4751_TKMN_;
use app\models\Plans\P0181_SORTST;
use app\models\Plans\P0090_TNRM_NOD;
use app\models\Plans\P0200_MESRPS;
use app\models\Plans\P0303_PRMEST;
use app\models\Plans\P0327_STAT;
use app\models\Plans\P0336_NORM_KF;
use app\models\Plans\P0443_RABOMF;
use app\models\Plans\P1195_PRISDA;

use app\models\Plans\P0144_POGO3_KR;
use app\models\Plans\P0145_POGO3_PLAT;
use app\models\Plans\P0146_POGO3_POLU;
use app\models\Plans\P0147_POGO3_CIS;
use app\models\Plans\P0148_POGO3_ZERN;
use app\models\Plans\P0149_POGO3_REFR;
use app\models\Plans\P0150_POGO3_PR;
use app\models\Plans\P0151_POGO3_CEM;

use app\models\Plans\P0350_LOKOM;
use app\models\Plans\P0404_BUDZ;
use app\models\Plans\P3130_NEFT_PG;
use app\models\Plans\P4688_LOKOM;


use app\models\Plans\Maket;

class PlanController extends Controller{

  public function actionLists($id) {
    echo "<option value=''>-- Выберите регион --</option>";
    $name=Maket::find()->where(['id_maket'=>$id])->one();
    if ($name){
      $m = (new \yii\db\Query())
       ->select('nod')
       ->from($name->maket)
       ->groupBy('nod')
       ->all();
       // echo '<pre>'; print_r($id); die;
      foreach ($m as $row){
        echo "<option value='".$row['nod']."'>".$row['nod']."</option>";
      }
    }
  }
  public function actionShow_tables()  {
    $post = $request = Yii::$app->request;
    $modal_window = new Maket();
    if ($modal_window->load($post->post(),'')){
    // ...и проверяем эти данные
      if ( ! $modal_window->validate()) {
        // данные не прошли валидацию, отмечаем этот факт
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$modal_window->getErrors());

        return $this->renderAjax('errors',[
          'model'=> $modal_window,
        ]);
      } else {
        //Yii::$app->session->setFlash('validate', true);
        //$name=Maket::find()->where(['id_maket'=>$post->post('maket')])->one();
        $modal_window->maket = $post->post('maket');
        $modal_window->GetData($post->post('nod'),$post->post('date'));
        return $this->renderAjax($modal_window->maket,[
          'model'=> $modal_window,
        ]);

      }
    }
  }

  public function actionSend_p0061_pgr_() {
    $post = $request = Yii::$app->request;
    $plan = new P0061_PGR_();
    // если пришли post-данные, загружаем их в модель...
    if ($plan->load($post->post(),'')){
    // ...и проверяем эти данные
      if ( ! $plan->validate()) {
        // данные не прошли валидацию, отмечаем этот факт
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        // данные прошли валидацию, отмечаем этот факт
        Yii::$app->session->setFlash('validate', true);
        $plan->ESR = $post->post('ESR');
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->PLNVAG = $post->post('PLNVAG');
        $plan->PLNTON = $post->post('PLNTON');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0061_PGR_';
    $modal_window->GetData('','');

    return $this->renderAjax('P0061_PGR_', ['model' => $modal_window]);
  }

  public function actionSend_p0142_pogo2_(){
    $post = $request = Yii::$app->request;
    $plan = new P0142_POGO2_();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {

        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
         $plan->NOD= $post->post('NOD');
         //$plan->DATE = $post->post('DATE');
         date_default_timezone_set('Europe/Moscow');
         $plan->DATE = date('Y-m-d H:i:s', time());
         $plan->VVS= $post->post('VVS');
         $plan->TVS= $post->post('TVS');
         $plan->VUGOL= $post->post('VUGOL');
         $plan->TUGOL= $post->post('TUGOL');
         $plan->VUGLP= $post->post('VUGLP');
         $plan->TUGLP= $post->post('TUGLP');
         $plan->VKOKS= $post->post('VKOKS');
         $plan->TKOKS= $post->post('TKOKS');
         $plan->VNEFT= $post->post('VNEFT');
         $plan->TNEFT= $post->post('TNEFT');
         $plan->VKNEF= $post->post('VKNEF');
         $plan->TKNEF= $post->post('TKNEF');
         $plan->VTORF= $post->post('VTORF');
         $plan->TTORF= $post->post('TTORF');
         $plan->VFLUS= $post->post('VFLUS');
         $plan->TFLUS= $post->post('TFLUS');
         $plan->VRUDG= $post->post('VRUDG');
         $plan->TRUDG= $post->post('TRUDG');
         $plan->VRUDC= $post->post('VRUDC');
         $plan->TRUDC= $post->post('TRUDC');
         $plan->VCHMT= $post->post('VCHMT');
         $plan->TCHMT= $post->post('TCHMT');
         $plan->VMAOB= $post->post('VMAOB');
         $plan->TMAOB= $post->post('TMAOB');
         $plan->VMETK= $post->post('VMETK');
         $plan->TMETK= $post->post('TMETK');
         $plan->VMETZ= $post->post('VMETZ');
         $plan->TMETZ= $post->post('TMETZ');
         $plan->VMETL= $post->post('VMETL');
         $plan->TMETL= $post->post('TMETL');
         $plan->VCHMA= $post->post('VCHMA');
         $plan->TCHMA= $post->post('TCHMA');
         $plan->VAVTO= $post->post('VAVTO');
         $plan->TAVTO= $post->post('TAVTO');
         $plan->VCVMT= $post->post('VCVMT');
         $plan->TCVMT= $post->post('TCVMT');
         $plan->VUDOB= $post->post('VUDOB');
         $plan->TUDOB= $post->post('TUDOB');
         $plan->VHIMK= $post->post('VHIMK');
         $plan->THIMK= $post->post('THIMK');
         $plan->VSTRG= $post->post('VSTRG');
         $plan->TSTRG= $post->post('TSTRG');
         $plan->VPRMS= $post->post('VPRMS');
         $plan->TPRMS= $post->post('TPRMS');
         $plan->VGRSH= $post->post('VGRSH');
         $plan->TGRSH= $post->post('TGRSH');
         $plan->VOGNE= $post->post('VOGNE');
         $plan->TOGNE= $post->post('TOGNE');
         $plan->VCEMN= $post->post('VCEMN');
         $plan->TCEMN= $post->post('TCEMN');
         $plan->VLESG= $post->post('VLESG');
         $plan->TLESG= $post->post('TLESG');
         $plan->VGLES= $post->post('VGLES');
         $plan->TGLES= $post->post('TGLES');
         $plan->VSAHR= $post->post('VSAHR');
         $plan->TSAHR= $post->post('TSAHR');
         $plan->VMISO= $post->post('VMISO');
         $plan->TMISO= $post->post('TMISO');
         $plan->VRIBA= $post->post('VRIBA');
         $plan->TRIBA= $post->post('TRIBA');
         $plan->VOVOC= $post->post('VOVOC');
         $plan->TOVOC= $post->post('TOVOC');
         $plan->VKART= $post->post('VKART');
         $plan->TKART= $post->post('TKART');
         $plan->VSOL= $post->post('VSOL');
         $plan->TSOL= $post->post('TSOL');
         $plan->VPROD= $post->post('VPROD');
         $plan->TPROD= $post->post('TPROD');
         $plan->VPROM= $post->post('VPROM');
         $plan->TPROM= $post->post('TPROM');
         $plan->VHLOP= $post->post('VHLOP');
         $plan->THLOP= $post->post('THLOP');
         $plan->VSVEK= $post->post('VSVEK');
         $plan->TSVEK= $post->post('TSVEK');
         $plan->VZERN= $post->post('VZERN');
         $plan->TZERN= $post->post('TZERN');
         $plan->VMUKA= $post->post('VMUKA');
         $plan->TMUKA= $post->post('TMUKA');
         $plan->VKOMB= $post->post('VKOMB');
         $plan->TKOMB= $post->post('TKOMB');
         $plan->VGIVN= $post->post('VGIVN');
         $plan->TGIVN= $post->post('TGIVN');
         $plan->VGMIH= $post->post('VGMIH');
         $plan->TGMIH= $post->post('TGMIH');
         $plan->VBUMG= $post->post('VBUMG');
         $plan->TBUMG= $post->post('TBUMG');
         $plan->VPRVV= $post->post('VPRVV');
         $plan->TPRVV= $post->post('TPRVV');
         $plan->VPVUG= $post->post('VPVUG');
         $plan->TPVUG= $post->post('TPVUG');
         $plan->VPVLS= $post->post('VPVLS');
         $plan->TPVLS= $post->post('TPVLS');
         $plan->VPVIM= $post->post('VPVIM');
         $plan->TPVIM= $post->post('TPVIM');
         $plan->VKONT= $post->post('VKONT');
         $plan->TKONT= $post->post('TKONT');
         $plan->VOSGR= $post->post('VOSGR');
         $plan->TOSGR= $post->post('TOSGR');
         $plan->VUDBR= $post->post('VUDBR');
         $plan->TUDBR= $post->post('TUDBR');
         $plan->VMOSK= $post->post('VMOSK');
         $plan->TMOSK= $post->post('TMOSK');
         $plan->VMOBL= $post->post('VMOBL');
         $plan->TMOBL= $post->post('TMOBL');
         $plan->VIZUD= $post->post('VIZUD');
         $plan->TIZUD= $post->post('TIZUD');
         $plan->VMLBP= $post->post('VMLBP');
         $plan->TMLBP= $post->post('TMLBP');
         $plan->VSPRT= $post->post('VSPRT');
         $plan->TSPRT= $post->post('TSPRT');
         $plan->VMPSP= $post->post('VMPSP');
         $plan->TMPSP= $post->post('TMPSP');
         $plan->VSPVS= $post->post('VSPVS');
         $plan->TSPVS= $post->post('TSPVS');
         $plan->save();//сохранениея в БД
       }
     }
     $modal_window = new Maket();
     $modal_window->maket = 'P0142_POGO2_';
     $modal_window->GetData('','');
     return $this->renderAjax('P0142_POGO2_', ['model' => $modal_window]);
   }
  public function actionSend_p0143_pogo3_(){
    $post = $request = Yii::$app->request;
    $plan = new P0143_POGO3_();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0143_POGO3_';
    $modal_window->GetData('','');
    return $this->renderAjax('P0143_POGO3_', ['model' => $modal_window]);
  }

  public function actionSend_p0144_pogo3_kr(){
    $post = $request = Yii::$app->request;
    $plan = new P0144_POGO3_KR();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0144_POGO3_KR';
    $modal_window->GetData('','');
    return $this->renderAjax('P0144_POGO3_KR', ['model' => $modal_window]);
  }
  public function actionSend_p0145_pogo3_plat(){
    $post = $request = Yii::$app->request;
    $plan = new P0145_POGO3_PLAT();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0145_POGO3_PLAT';
    $modal_window->GetData('','');
    return $this->renderAjax('P0145_POGO3_PLAT', ['model' => $modal_window]);
  }
  public function actionSend_p0146_pogo3_polu(){
    $post = $request = Yii::$app->request;
    $plan = new P0146_POGO3_POLU();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0146_POGO3_POLU';
    $modal_window->GetData('','');
    return $this->renderAjax('P0146_POGO3_POLU', ['model' => $modal_window]);
  }
  public function actionSend_p0147_pogo3_cis(){
    $post = $request = Yii::$app->request;
    $plan = new P0147_POGO3_CIS();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0147_POGO3_CIS';
    $modal_window->GetData('','');
    return $this->renderAjax('P0147_POGO3_CIS', ['model' => $modal_window]);
  }
  public function actionSend_p0148_pogo3_zern(){
    $post = $request = Yii::$app->request;
    $plan = new P0148_POGO3_ZERN();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0148_POGO3_ZERN';
    $modal_window->GetData('','');
    return $this->renderAjax('P0148_POGO3_ZERN', ['model' => $modal_window]);
  }
  public function actionSend_p0149_pogo3_refr(){
    $post = $request = Yii::$app->request;
    $plan = new P0149_POGO3_REFR();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0149_POGO3_REFR';
    $modal_window->GetData('','');
    return $this->renderAjax('P0149_POGO3_REFR', ['model' => $modal_window]);
  }
  public function actionSend_p0150_pogo3_pr(){
    $post = $request = Yii::$app->request;
    $plan = new P0150_POGO3_PR();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0150_POGO3_PR';
    $modal_window->GetData('','');
    return $this->renderAjax('P0150_POGO3_PR', ['model' => $modal_window]);
  }

  public function actionSend_p0151_pogo3_cem(){
    $post = $request = Yii::$app->request;
    $plan = new P0151_POGO3_CEM();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0151_POGO3_CEM';
    $modal_window->GetData('','');
    return $this->renderAjax('P0151_POGO3_CEM', ['model' => $modal_window]);
  }

  public function actionSend_p0191_mestrn_(){
    $post = $request = Yii::$app->request;
    $plan = new P0191_MESTRN_();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->KVKR = $post->post('KVKR');
        $plan->KVPL = $post->post('KVPL');
        $plan->KVPV = $post->post('KVPV');
        $plan->PARKV = $post->post('PARKV');
        $plan->PARKGR = $post->post('PARKGR');
        $plan->PARKPR = $post->post('PARKPR');
        $plan->PORKR = $post->post('PORKR');
        $plan->PORPL = $post->post('PORPL');
        $plan->PORPV = $post->post('PORPV');
        $plan->PORCS = $post->post('PORCS');
        $plan->PORZR = $post->post('PORZR');
        $plan->PORRF = $post->post('PORRF');
        $plan->PORPR = $post->post('PORPR');
        $plan->PORCM = $post->post('PORCM');
        $plan->NAL01 = $post->post('NAL01');
        $plan->NAL02 = $post->post('NAL02');
        $plan->NAL06 = $post->post('NAL06');
        $plan->NAL07 = $post->post('NAL07');
        $plan->NAL08 = $post->post('NAL08');
        $plan->NAL13 = $post->post('NAL13');
        $plan->NAL15 = $post->post('NAL15');
        $plan->NALVS = $post->post('NALVS');
        $plan->TRALKS = $post->post('TRALKS');
        $plan->TRBELK = $post->post('TRBELK');
        $plan->TRPETU = $post->post('TRPETU');
        $plan->TRCHER = $post->post('TRCHER');
        $plan->TRKUST = $post->post('TRKUST');
        $plan->TRKLIM = $post->post('TRKLIM');
        $plan->TRRJS2 = $post->post('TRRJS2');
        $plan->TRRJS1 = $post->post('TRRJS1');
        $plan->TRPAVL = $post->post('TRPAVL');
        $plan->TRVOLV = $post->post('TRVOLV');
        $plan->TREFRM = $post->post('TREFRM');
        $plan->TRELEC = $post->post('TRELEC');
        $plan->TRKAST = $post->post('TRKAST');
        $plan->TRKURS = $post->post('TRKURS');
        $plan->TRGOTN = $post->post('TRGOTN');
        $plan->TRVOLF = $post->post('TRVOLF');
        $plan->TRZERN = $post->post('TRZERN');
        $plan->TRVITM = $post->post('TRVITM');
        $plan->TRZAKP = $post->post('TRZAKP');
        $plan->TRSURG = $post->post('TRSURG');
        $plan->TRSHES = $post->post('TRSHES');
        $plan->TRKRAS = $post->post('TRKRAS');
        $plan->TRZAOL = $post->post('TRZAOL');
        $plan->TROSUG = $post->post('TROSUG');
        $plan->TRSHAH = $post->post('TRSHAH');
        $plan->TRPOVR = $post->post('TRPOVR');
        $plan->TRHOVR = $post->post('TRHOVR');
        $plan->TRSAVL = $post->post('TRSAVL');
        $plan->TRVSEG = $post->post('TRVSEG');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0191_MESTRN_';
    $modal_window->GetData('','');
    return $this->renderAjax('P0191_MESTRN_', ['model' => $modal_window]);
  }
  public function actionSend_p0203_rpgru_(){
    $post = $request = Yii::$app->request;
    $plan = new P0203_RPGRU_();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->KVVS = $post->post('KVVS');
        $plan->KVKR = $post->post('KVKR');
        $plan->KVPL = $post->post('KVPL');
        $plan->KVPV = $post->post('KVPV');
        $plan->KVCS = $post->post('KVCS');
        $plan->KVZR = $post->post('KVZR');
        $plan->KVRF = $post->post('KVRF');
        $plan->KVCG = $post->post('KVCG');
        $plan->KVPR = $post->post('KVPR');
        $plan->KVCM = $post->post('KVCM');
        $plan->KVMV = $post->post('KVMV');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0203_RPGRU_';
    $modal_window->GetData('','');
    return $this->renderAjax('P0203_RPGRU_', ['model' => $modal_window]);
  }

  public function actionSend_p0301_priem_(){
    $post = $request = Yii::$app->request;
    $plan = new P0301_PRIEM_();
    if ($plan->load($post->post(),'')){
    // ...и проверяем эти данные
      if ( ! $plan->validate()) {
        // данные не прошли валидацию, отмечаем этот факт
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        // данные прошли валидацию, отмечаем этот факт
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->VS = $post->post('VS');
        $plan->GRU = $post->post('GRU');
        $plan->GRUKR = $post->post('GRUKR');
        $plan->GRUPL = $post->post('GRUPL');
        $plan->GRUPV = $post->post('GRUPV');
        $plan->GRUZR = $post->post('GRUZR');
        $plan->GRURF = $post->post('GRURF');
        $plan->GRUPR = $post->post('GRUPR');
        $plan->GRUCM = $post->post('GRUCM');
        $plan->GRUCS = $post->post('GRUCS');
        $plan->POR = $post->post('POR');
        $plan->PORKR = $post->post('PORKR');
        $plan->PORPL = $post->post('PORPL');
        $plan->PORPV = $post->post('PORPV');
        $plan->PORZR = $post->post('PORZR');
        $plan->PORRF = $post->post('PORRF');
        $plan->PORPR = $post->post('PORPR');
        $plan->PORCM = $post->post('PORCM');
        $plan->PORCS = $post->post('PORCS');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0301_PRIEM_';
    $modal_window->GetData('','');
    return $this->renderAjax('P0301_PRIEM_', ['model' => $modal_window]);
  }

  public function actionSend_p0302_sdacha_(){
    $post = $request = Yii::$app->request;
    $plan = new P0302_SDACHA_();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->SDVS = $post->post('SDVS');
        $plan->SDGRU = $post->post('SDGRU');
        $plan->SDGRKR = $post->post('SDGRKR');
        $plan->SDGRPL = $post->post('SDGRPL');
        $plan->SDGRPV = $post->post('SDGRPV');
        $plan->SDGRZR = $post->post('SDGRZR');
        $plan->SDGRPF = $post->post('SDGRPF');
        $plan->SDGRPR = $post->post('SDGRPR');
        $plan->SDGRCM = $post->post('SDGRCM');
        $plan->SDGRCS = $post->post('SDGRCS');
        $plan->SDPOR = $post->post('SDPOR');
        $plan->SDPRKR = $post->post('SDPRKR');
        $plan->SDPRPL = $post->post('SDPRPL');
        $plan->SDPRPV = $post->post('SDPRPV');
        $plan->SDPRZR = $post->post('SDPRZR');
        $plan->SDPRRF = $post->post('SDPRRF');
        $plan->SDPRPR = $post->post('SDPRPR');
        $plan->SDPRCM = $post->post('SDPRCM');
        $plan->SDPRCS = $post->post('SDPRCS');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0302_SDACHA_';
    $modal_window->GetData('','');
    return $this->renderAjax('P0302_SDACHA_', ['model' => $modal_window]);
  }
  public function actionSend_p0320_vigrob_(){
    $post = $request = Yii::$app->request;
    $plan = new P0320_VIGROB_();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->VIGVS = $post->post('VIGVS');
        $plan->VIGKR = $post->post('VIGKR');
        $plan->VIGPL = $post->post('VIGPL');
        $plan->VIGPV = $post->post('VIGPV');
        $plan->VIGZR = $post->post('VIGZR');
        $plan->VIGRF = $post->post('VIGRF');
        $plan->VIGPR = $post->post('VIGPR');
        $plan->VIGCM = $post->post('VIGCM');
        $plan->VIGCS = $post->post('VIGCS');
        $plan->OBVS = $post->post('OBVS');
        $plan->OBMVS = $post->post('OBMVS');
        $plan->OBKR = $post->post('OBKR');
        $plan->OBMKR = $post->post('OBMKR');
        $plan->OBPL = $post->post('OBPL');
        $plan->OBMPL = $post->post('OBMPL');
        $plan->OBPV = $post->post('OBPV');
        $plan->OBMPV = $post->post('OBMPV');
        $plan->OBZR = $post->post('OBZR');
        $plan->OBMZR = $post->post('OBMZR');
        $plan->OBRF = $post->post('OBRF');
        $plan->OBMRF = $post->post('OBMRF');
        $plan->OBPR = $post->post('OBPR');
        $plan->OBMPR = $post->post('OBMPR');
        $plan->OBCM = $post->post('OBCM');
        $plan->OBMCM = $post->post('OBMCM');
        $plan->OBCS = $post->post('OBCS');
        $plan->OBMCS = $post->post('OBMCS');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0320_VIGROB_';
    $modal_window->GetData('','');
    return $this->renderAjax('P0320_VIGROB_', ['model' => $modal_window]);
  }

  public function actionSend_p2112_isplok_(){
    $post = $request = Yii::$app->request;
    $plan = new P2112_ISPLOK_();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD = $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->VESE = $post->post('VESE');
        $plan->PRZE = $post->post('PRZE');
        $plan->PRBE = $post->post('PRBE');
        $plan->VEST = $post->post('VEST');
        $plan->PRZT = $post->post('PRZT');
        $plan->PRBT = $post->post('PRBT');
        $plan->VESL = $post->post('VESL');
        $plan->PRZL = $post->post('PRZL');
        $plan->PRBL = $post->post('PRBL');
        $plan->USKOR = $post->post('USKOR');
        $plan->TSKOR = $post->post('TSKOR');
        $plan->PRZEL = $post->post('PRZEL');
        $plan->REZRV1 = $post->post('REZRV1');
        $plan->REZRV2 = $post->post('REZRV2');
        $plan->REZRV3 = $post->post('REZRV3');
        $plan->NORMA = $post->post('NORMA');
        $plan->DLINAL = $post->post('DLINAL');
        $plan->DLINAE = $post->post('DLINAE');
        $plan->DLINAT = $post->post('DLINAT');
        $plan->RPPIV = $post->post('RPPIV');
        $plan->RPPZD = $post->post('RPPZD');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P2112_ISPLOK_';
    $modal_window->GetData('','');
    return $this->renderAjax('P2112_ISPLOK_', ['model' => $modal_window]);
  }
  public function actionSend_p4751_tkmn_(){
    $post = $request = Yii::$app->request;
    $plan = new P4751_TKMN_();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->REG = $post->post('REG');
        $plan->TKMN = $post->post('TKMN');
        $plan->GRUZOOBM = $post->post('GRUZOOBM');
        $plan->TARIFM = $post->post('TARIFM');
        $plan->GRSBPM = $post->post('GRSBPM');
        $plan->GRUZOOBK = $post->post('GRUZOOBK');
        $plan->TARIFK = $post->post('TARIFK');
        $plan->GRSBPK = $post->post('GRSBPK');
        $plan->GRUZOOBG = $post->post('GRUZOOBG');
        $plan->TARIFG = $post->post('TARIFG');
        $plan->GRSBPG = $post->post('GRSBPG');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P4751_TKMN_';
    $modal_window->GetData('','');
    return $this->renderAjax('P4751_TKMN_', ['model' => $modal_window]);
  }

  public function actionSend_p0090_tnrm_nod() {
    $post = $request = Yii::$app->request;
    $plan = new P0090_TNRM_NOD();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->ESR= $post->post('ESR');
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->PRKRAB= $post->post('PRKRAB');
        $plan->PRKPOR= $post->post('PRKPOR');
        $plan->PRST1= $post->post('PRST1');
        $plan->VIGR= $post->post('VIGR');
        $plan->PRSTBEZ= $post->post('PRSTBEZ');
        $plan->PRSTPER= $post->post('PRSTPER');
        $plan->PRSTOB= $post->post('PRSTOB');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0090_TNRM_NOD';
    $modal_window->GetData('','');
    return $this->renderAjax('P0090_TNRM_NOD', ['model' => $modal_window]);
  }

  public function actionSend_p0181_sortst() {
    $post = $request = Yii::$app->request;
    $plan = new P0181_SORTST();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->ESR= $post->post('ESR');
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->PROSPER= $post->post('PROSPER');
        $plan->PROSBPR= $post->post('PROSBPR');
        $plan->PARK= $post->post('PARK');
        $plan->PERGOR= $post->post('PERGOR');
        $plan->VAGPRPG= $post->post('VAGPRPG');
        $plan->VAGBPPG= $post->post('VAGBPPG');
        $plan->PRSPRPG= $post->post('PRSPRPG');
        $plan->PRSBPPG= $post->post('PRSBPPG');
        $plan->PARKPG= $post->post('PARKPG');
        $plan->PERGOPG= $post->post('PERGOPG');
        $plan->DLINAPG= $post->post('DLINAPG');
        $plan->NEISP= $post->post('NEISP');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0181_SORTST';
    $modal_window->GetData('','');
    return $this->renderAjax('P0181_SORTST', ['model' => $modal_window]);
  }

  public function actionSend_p0200_mesrps() {
    $post = $request = Yii::$app->request;
    $plan = new P0200_MESRPS();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->KVKR= $post->post('KVKR');
        $plan->KVPL= $post->post('KVPL');
        $plan->KVPV= $post->post('KVPV');
        $plan->KVCS= $post->post('KVCS');
        $plan->KVZR= $post->post('KVZR');
        $plan->KVRF= $post->post('KVRF');
        $plan->KVCM= $post->post('KVCM');
        $plan->KVPR= $post->post('KVPR');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0200_MESRPS';
    $modal_window->GetData('','');
    return $this->renderAjax('P0200_MESRPS', ['model' => $modal_window]);
  }

  public function actionSend_p0303_prmest() {
    $post = $request = Yii::$app->request;
    $plan = new P0303_PRMEST();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->PRIVS= $post->post('PRIVS');
        $plan->POGVS= $post->post('POGVS');
        $plan->PRIKR= $post->post('PRIKR');
        $plan->POGKR= $post->post('POGKR');
        $plan->PRIPL= $post->post('PRIPL');
        $plan->POGPL= $post->post('POGPL');
        $plan->PRIPV= $post->post('PRIPV');
        $plan->POGPV= $post->post('POGPV');
        $plan->PRIZR= $post->post('PRIZR');
        $plan->POGZR= $post->post('POGZR');
        $plan->PRIRF= $post->post('PRIRF');
        $plan->POGRF= $post->post('POGRF');
        $plan->PRIPR= $post->post('PRIPR');
        $plan->POGPR= $post->post('POGPR');
        $plan->PRICM= $post->post('PRICM');
        $plan->POGCM= $post->post('POGCM');
        $plan->PRICS= $post->post('PRICS');
        $plan->POGCS= $post->post('POGCS');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0303_PRMEST';
    $modal_window->GetData('','');
    return $this->renderAjax('P0303_PRMEST', ['model' => $modal_window]);
  }

  public function actionSend_p0327_stat() {
    $post = $request = Yii::$app->request;
    $plan = new P0327_STAT();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->STATNAGR= $post->post('STATNAGR');
        $plan->OSTSORT= $post->post('OSTSORT');
        $plan->OBORTRZ= $post->post('OBORTRZ');
        $plan->SD499= $post->post('SD499');
        $plan->SD470= $post->post('SD470');
        $plan->SD420= $post->post('SD420');
        $plan->SD440= $post->post('SD440');
        $plan->SD460= $post->post('SD460');
        $plan->SD490= $post->post('SD490');
        $plan->SD493= $post->post('SD493');
        $plan->SD495= $post->post('SD495');
        $plan->REZERV1= $post->post('REZERV1');
        $plan->REZERV2= $post->post('REZERV2');
        $plan->REZERV3= $post->post('REZERV3');
        $plan->OBOR99= $post->post('OBOR99');
        $plan->OBOR20= $post->post('OBOR20');
        $plan->OBOR40= $post->post('OBOR40');
        $plan->OBOR60= $post->post('OBOR60');
        $plan->OBOR70= $post->post('OBOR70');
        $plan->OBOR90= $post->post('OBOR90');
        $plan->OBOR93= $post->post('OBOR93');
        $plan->OBOR95= $post->post('OBOR95');
        $plan->REZERV4= $post->post('REZERV4');
        $plan->REZERV5= $post->post('REZERV5');
        $plan->REZERV6= $post->post('REZERV6');
        $plan->SORT20= $post->post('SORT20');
        $plan->SORT40= $post->post('SORT40');
        $plan->SORT60= $post->post('SORT60');
        $plan->SORT70= $post->post('SORT70');
        $plan->SORT87= $post->post('SORT87');
        $plan->SORT93= $post->post('SORT93');
        $plan->SORT95= $post->post('SORT95');
        $plan->SORT96= $post->post('SORT96');
        $plan->SORT94= $post->post('SORT94');
        $plan->SORT92= $post->post('SORT92');
        $plan->SORT90= $post->post('SORT90');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0327_STAT';
    $modal_window->GetData('','');
    return $this->renderAjax('P0327_STAT', ['model' => $modal_window]);
  }

  public function actionSend_p0336_norm_kf() {
    $post = $request = Yii::$app->request;
    $plan = new P0336_NORM_KF();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->NEISPR= $post->post('NEISPR');
        $plan->KSDVS= $post->post('KSDVS');
        $plan->ZAN20= $post->post('ZAN20');
        $plan->ZAN40= $post->post('ZAN40');
        $plan->ZAN60= $post->post('ZAN60');
        $plan->ZAN90= $post->post('ZAN90');
        $plan->OSV20= $post->post('OSV20');
        $plan->OSV40= $post->post('OSV40');
        $plan->OSV60= $post->post('OSV60');
        $plan->OSV90= $post->post('OSV90');
        $plan->NSP60= $post->post('NSP60');
        $plan->NSP70= $post->post('NSP70');
        $plan->M70VS= $post->post('M70VS');
        $plan->M7001= $post->post('M7001');
        $plan->M7002= $post->post('M7002');
        $plan->M7006= $post->post('M7006');
        $plan->M7007= $post->post('M7007');
        $plan->M7008= $post->post('M7008');
        $plan->M7013= $post->post('M7013');
        $plan->M7015= $post->post('M7015');
        $plan->M87VS= $post->post('M87VS');
        $plan->M8701= $post->post('M8701');
        $plan->M8702= $post->post('M8702');
        $plan->M8706= $post->post('M8706');
        $plan->M8707= $post->post('M8707');
        $plan->M8708= $post->post('M8708');
        $plan->M8713= $post->post('M8713');
        $plan->M8715= $post->post('M8715');
        $plan->M90VS= $post->post('M90VS');
        $plan->M9001= $post->post('M9001');
        $plan->M9002= $post->post('M9002');
        $plan->M9006= $post->post('M9006');
        $plan->M9007= $post->post('M9007');
        $plan->M9008= $post->post('M9008');
        $plan->M9013= $post->post('M9013');
        $plan->M9015= $post->post('M9015');
        $plan->M93VS= $post->post('M93VS');
        $plan->M9301= $post->post('M9301');
        $plan->M9302= $post->post('M9302');
        $plan->M9306= $post->post('M9306');
        $plan->M9307= $post->post('M9307');
        $plan->M9308= $post->post('M9308');
        $plan->M9313= $post->post('M9313');
        $plan->M9315= $post->post('M9315');
        $plan->M95VS= $post->post('M95VS');
        $plan->M9501= $post->post('M9501');
        $plan->M9502= $post->post('M9502');
        $plan->M9506= $post->post('M9506');
        $plan->M9507= $post->post('M9507');
        $plan->M9508= $post->post('M9508');
        $plan->M9513= $post->post('M9513');
        $plan->M9515= $post->post('M9515');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0336_NORM_KF';
    $modal_window->GetData('','');
    return $this->renderAjax('P0336_NORM_KF', ['model' => $modal_window]);
  }

  public function actionSend_p0443_rabomf() {
    $post = $request = Yii::$app->request;
    $plan = new P0443_RABOMF();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->POGRO= $post->post('POGRO');
        $plan->VIGRO= $post->post('VIGRO');
        $plan->REGLO= $post->post('REGLO');
        $plan->PRIO= $post->post('PRIO');
        $plan->PRGRO= $post->post('PRGRO');
        $plan->PRPRO= $post->post('PRPRO');
        $plan->SDAO= $post->post('SDAO');
        $plan->SDGRO= $post->post('SDGRO');
        $plan->SDPRO= $post->post('SDPRO');
        $plan->PARKO= $post->post('PARKO');
        $plan->PPORO= $post->post('PPORO');
        $plan->TRANO= $post->post('TRANO');
        $plan->MESGRO= $post->post('MESGRO');
        $plan->MESSBO= $post->post('MESSBO');
        $plan->OBORTO= $post->post('OBORTO');
        $plan->OBRMESO= $post->post('OBRMESO');
        $plan->POGRM= $post->post('POGRM');
        $plan->VIGRM= $post->post('VIGRM');
        $plan->REGLM= $post->post('REGLM');
        $plan->PRIM= $post->post('PRIM');
        $plan->PRGRM= $post->post('PRGRM');
        $plan->PRPRM= $post->post('PRPRM');
        $plan->SDAM= $post->post('SDAM');
        $plan->SDGRM= $post->post('SDGRM');
        $plan->SDPRM= $post->post('SDPRM');
        $plan->PARKM= $post->post('PARKM');
        $plan->PPORM= $post->post('PPORM');
        $plan->TRANM= $post->post('TRANM');
        $plan->MESGRM= $post->post('MESGRM');
        $plan->MESSBM= $post->post('MESSBM');
        $plan->OBORTM= $post->post('OBORTM');
        $plan->OBRMESM= $post->post('OBRMESM');
        $plan->POGRF= $post->post('POGRF');
        $plan->VIGRF= $post->post('VIGRF');
        $plan->REGLF= $post->post('REGLF');
        $plan->PRIF= $post->post('PRIF');
        $plan->PRGRF= $post->post('PRGRF');
        $plan->PRPRF= $post->post('PRPRF');
        $plan->SDAF= $post->post('SDAF');
        $plan->SDGRF= $post->post('SDGRF');
        $plan->SDPRF= $post->post('SDPRF');
        $plan->PARKF= $post->post('PARKF');
        $plan->PPORF= $post->post('PPORF');
        $plan->TRANF= $post->post('TRANF');
        $plan->MESGRF= $post->post('MESGRF');
        $plan->MESSBF= $post->post('MESSBF');
        $plan->OBORTF= $post->post('OBORTF');
        $plan->OBRMESF= $post->post('OBRMESF');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0443_RABOMF';
    $modal_window->GetData('','');
    return $this->renderAjax('P0443_RABOMF', ['model' => $modal_window]);
  }

  public function actionSend_p1195_prisda() {
    $post = $request = Yii::$app->request;
    $plan = new P1195_PRISDA();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->ESR= $post->post('ESR');
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->PRKR= $post->post('PRKR');
        $plan->PRPL= $post->post('PRPL');
        $plan->PRPV= $post->post('PRPV');
        $plan->PRCS= $post->post('PRCS');
        $plan->PRRF= $post->post('PRRF');
        $plan->PRZR= $post->post('PRZR');
        $plan->SDKR= $post->post('SDKR');
        $plan->SDPL= $post->post('SDPL');
        $plan->SDPV= $post->post('SDPV');
        $plan->SDCS= $post->post('SDCS');
        $plan->SDRF= $post->post('SDRF');
        $plan->SDZR= $post->post('SDZR');
        $plan->PRVS= $post->post('PRVS');
        $plan->SDVS= $post->post('SDVS');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P1195_PRISDA';
    $modal_window->GetData('','');
    return $this->renderAjax('P1195_PRISDA', ['model' => $modal_window]);
  }

  public function actionSend_p0350_lokom() {
    $post = $request = Yii::$app->request;
    $plan = new P0350_LOKOM();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->VESPE= $post->post('VESPE');
        $plan->PROIE= $post->post('PROIE');
        $plan->PROBE= $post->post('PROBE');
        $plan->VESPT= $post->post('VESPT');
        $plan->PROIT= $post->post('PROIT');
        $plan->PROBT= $post->post('PROBT');
        $plan->VESPV= $post->post('VESPV');
        $plan->PROIV= $post->post('PROIV');
        $plan->PROBV= $post->post('PROBV');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0350_LOKOM';
    $modal_window->GetData('','');

    return $this->renderAjax('P0350_LOKOM', ['model' => $modal_window]);
  }

  public function actionSend_p0404_budz() {
    $post = $request = Yii::$app->request;
    $plan = new P0404_BUDZ();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->SKORU= $post->post('SKORU');
        $plan->SKORT= $post->post('SKORT');
        $plan->VESSR= $post->post('VESSR');
        $plan->PROIZV= $post->post('PROIZV');
        $plan->PROIZVEKS= $post->post('PROIZVEKS');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P0404_BUDZ';
    $modal_window->GetData('','');

    return $this->renderAjax('P0404_BUDZ', ['model' => $modal_window]);
  }

  public function actionSend_p3130_neft_pg() {
    $post = $request = Yii::$app->request;
    $plan = new P3130_NEFT_PG();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->ESR= $post->post('ESR');
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->GRUZ= $post->post('GRUZ');
        $plan->PLAN= $post->post('PLAN');
        $plan->TEHNORM= $post->post('TEHNORM');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P3130_NEFT_PG';
    $modal_window->GetData('','');

    return $this->renderAjax('P3130_NEFT_PG', ['model' => $modal_window]);
  }


  public function actionSend_p4688_lokom() {
    $post = $request = Yii::$app->request;
    $plan = new P4688_LOKOM();
    if ($plan->load($post->post(),'')){
      if ( ! $plan->validate()) {
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        Yii::$app->session->setFlash('validate', true);
        $plan->ESR= $post->post('ESR');
        $plan->NOD= $post->post('NOD');
        //$plan->DATE = $post->post('DATE');
        date_default_timezone_set('Europe/Moscow');
        $plan->DATE = date('Y-m-d H:i:s', time());
        $plan->PARKGRE= $post->post('PARKGRE');
        $plan->OTVLPSE= $post->post('OTVLPSE');
        $plan->OTVLHZE= $post->post('OTVLHZE');
        $plan->PARKGRT= $post->post('PARKGRT');
        $plan->OTVLPST= $post->post('OTVLPST');
        $plan->OTVLHZT= $post->post('OTVLHZT');
        $plan->MANGRPG= $post->post('MANGRPG');
        $plan->TNKMPG= $post->post('TNKMPG');
        $plan->PARKGPG= $post->post('PARKGPG');
        $plan->TNKMPL= $post->post('TNKMPL');
        $plan->save();//сохранение в БД
      }
    }
    $modal_window = new Maket();
    $modal_window->maket = 'P4688_LOKOM';
    $modal_window->GetData('','');

    return $this->renderAjax('P4688_LOKOM', ['model' => $modal_window]);
  }

}
